$(document).ready(function () {
    loadOrders();
})


function loadOrders() {
        
    $("#tblUsers tbody").empty();

    $.ajax({
        type: "GET",
        dataType: "json",
        url: "/webscripting/backend/logic/orderListAdminShort.php",
        success: function (response) {
            console.log(response); // debug print

        

            // only do this if you trust your source (possible Cross-Site Scripting)!!
            let content = [];
            response.items.forEach(e => {
                content.push("<tr><td>" + e.id + "</td>"      
                    + "<td>" + e.date + "</td>"
                    + "<td>" + e.userId + "</td>"
                    + "<td><button type='button' id=" + e.id + " class='btnShowDetails>ShowDetails</button></td></tr>"
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
/*
function loadOrders() {
    let jTblBody = $("#tblOrders tbody").empty();

    $.ajax({
        type: "GET",
        dataType: "json",
        url: "/webscripting/backend/logic/orderListAdmin.php",
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
                    + "<td>" + e.userId + "</td></tr>"
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
*/