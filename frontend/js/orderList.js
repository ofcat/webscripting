$(document).ready(function () {
    loadOrders();
})


function loadOrders() {
    let jTblBody = $("#tblOrders tbody").empty();

    $.ajax({
        type: "GET",
        dataType: "json",
        url: "/webscripting/backend/logic/orderList.php",
        success: function (response) {
            console.log(response); // debug print

            // only do this if you trust your source (possible Cross-Site Scripting)!!
            let content = [];
            response.items.forEach(e => {
                content.push("<tr><td>" + e.id + "</td>"
                    + "<td>" + e.product + "</td>"
                    + "<td>" + e.price + "</td>"
                    + "<td>" + e.amount + "</td>"
                    + "<td>" + e.total + "</td>"
                    + "<td>" + e.date + "</td>"
                );
            });

            

            jTblBody.html(content.join());
        },
        error: function (xhr, ajaxOptions, thrownError) {
            jTblBody.html("<tr><td colspan='4'>Error: <pre>"
                + JSON.stringify(xhr, undefined, 2)
                + "</pre></td></tr>");
        }
    });
}