$(document).ready(function () {
    loadOrders();
})


function loadOrders(){
    let jTblBody = $("#tblOrders tbody").empty();
    let orderID = 0; 
    let hasBeenCounted = false; 

    $.ajax({
        type: "GET",
        dataType: "json",
        url: "/webscripting/backend/logic/orderListAdminShort.php",
        success: function (response) {
            console.log(response); // debug print

            // only do this if you trust your source (possible Cross-Site Scripting)!!
            let content = [];
            response.items.forEach(e => {
                if(e.id === orderID) {
                    hasBeenCounted = true; 
                } else {
                    hasBeenCounted = false; 
                }
                orderID = e.id; 
                if(hasBeenCounted) {
                    content.push(
                        "<tr><td>" + e.id + "</td>"      
                        + "<td>" + e.date + "</td>"
                        + "<td><input type='button' name='showDetails' value='Show Deatils' id="+ e.id +" class='btn btn-info show_data'/></td></tr>"
                    );
                }
            });
            jTblBody.html(content.join());
        },
        error: function (xhr, ajaxOptions, thrownError) {
            jTblBody.html("<tr><td colspan='4'>Error: <pre>"
                + JSON.stringify(xhr, undefined, 2)
                + "</pre></td></tr>");
        }
    });


    $(document).on('click', '.show_data', function () {
        let totalAmount = 0; 
        let totelPrice = 0; 
        let jTblBodyDetail = $("#tblOrdersDetail tbody").empty();
        var id = $(this).attr("id"); 
        console.log(id);
        $.ajax({
            url: "/webscripting/backend/logic/orderListAdmin.php",
            method: "POST", 
            data: {id: id}, 
            dataType: "json", 
            success: function (response) {
                console.log(response); 
                let content = [];
                response.items.forEach(e => {
                    totalAmount += e.amount;
                    totelPrice += e.total;
                    content.push(
                        "<tr><td>" + e.id + "</td>"      
                        + "<td>" + e.product + "</td>"
                        + "<td>" + e.price + "</td>"
                        + "<td>" + e.amount + "</td>"
                        + "<td>" + e.total + "</td>"
                        + "<td>" + e.date + "</td>"
                    );
                }
                );
                content.push(
                        "<tr><td></td>"      
                        + "<td></td>"
                        + "<td></td>"
                        + "<td>" + totalAmount + "</td>"
                        + "<td>" + totelPrice + "</td>"
                        + "<td></td></tr>"
                )
                jTblBodyDetail.html(content.join());
                $('#add_data_Modal').modal('show'); 
            },
            error: function (xhr, ajaxOptions, thrownError) {
                jTblBody.html("<tr><td colspan='4'>Error: <pre>"
                    + JSON.stringify(xhr, undefined, 2)
                    + "</pre></td></tr>");
            }
        });
    })
}



               
    
    /*
                
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "/webscripting/backend/logic/orderListAdmin.php",
        success: function (response) {
            console.log(response); // debug print
            
            // only do this if you trust your source (possible Cross-Site Scripting)!!
            let content = [];
            response.items.forEach(e => {
                if(e.id === idNumber) {
                content.push("<tr><td>" + e.id + "</td>"
                    + "<td>" + e.product + "</td>"
                    + "<td>" + e.price + "</td>"
                    + "<td>" + e.amount + "</td>"
                    + "<td>" + e.total + "</td>"
                    + "<td>" + e.date + "</td>"
                    + "<td>" + e.userId + "</td></tr>"
                );}
            });
            content.push("<tr><button id='backToOrders'>Back to orders</button></tr>");

            

            jTblBody.html(content.join());
        },
        error: function (xhr, ajaxOptions, thrownError) {
            jTblBody.html("<tr><td colspan='4'>Error: <pre>"
                + JSON.stringify(xhr, undefined, 2)
                + "</pre></td></tr>");
        }
        
    });
    */
    