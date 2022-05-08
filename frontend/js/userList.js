// Use strict mode
// see: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Strict_mode
//"use strict";


// on ready function (called when DOM is loaded)
$(function() { 


    $("#btnAllUsers").on("click", function() {

        let jTblBody = $("#tblUsers tbody").empty();

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/webscripting/backend/logic/userRead.php",
            success: function(response) {                                
                console.log(response); // debug print

                // only do this if you trust your source (possible Cross-Site Scripting)!!
                let content = [];
                response.users.forEach(e => {
                    content.push("<tr><td>" + e.id + "</td>"
                                    + "<td>" + e.fname + "</td>"
                                    + "<td>" + e.lname + "</td>"
                                    + "<td>" + e.address + "</td>"
                                    + "<td>" + e.notes + "</td>"
                                    + "<td>" + e.country + "</td>"
                                    + "<td>" + e.city + "</td>"
                                    + "<td>" + e.zipcode + "</td>"
                                    + "<td>" + e.email + "</td>"
                                    + "<td>" + e.password + "</td>"
                                    + "<td>" + e.pnumber + "</td>"
                                    + "<td><button type='submit' class='btn1' id='btn_update'>Update</button></td>"
                                    + "<td><button type='submit' class='btn1' id='btn_delete'>Delete</button></td></tr>"
                                    
                                    
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
    });

});


// $.each(response.items, function(i, p) {
           
//     if(i % 2 == 0)
//      $('#products').append('<p class="greyline"onclick="selectItem(this)" ><strong>' 
//      + p['name'] +'</strong>'
//      + ' for $ ' 
//      + p['price'] 
//      + '<br></p>');
//      else
//      $('#products').append('<p onclick="selectItem(this)"><strong>' 
//      + p['name'] 
//      +'</strong>'
//      + ' for $ ' 
//      + p['price'] 
//      + '<br> </p>');
//  });