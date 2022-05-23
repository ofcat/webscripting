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
                                    + "<td><input type='button' name='edit' value='Edit' id="+ e.id+ " class='btn btn-info btn-xs edit_data'/></td>"
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


    $(document).on('click', '.edit_data', function(){  
        
        var id = $(this).attr("id");  
        console.log(id);
        $.ajax({  
             url:"/webscripting/backend/logic/userFetchOne.php", 
             method:"POST",  
             data:{id:id},  
             dataType:"json",  
             success:function(data){  
                console.log(data.users);
                $.each(data.users, function(i, p) {
                    console.log(p['fname']);
                    $('#fname').val(p['fname']);  
                    $('#lname').val(p['lname']);  
                    $('#address').val(p['address']);  
                    $('#notes').val(p['notes']);  
                    $('#country').val(p['country']);  
                    $('#city').val(p['city']);  
                    $('#zipcode').val(p['zipcode']);  
                    $('#email').val(p['email']);  
                    $('#password').val(p['password']);  
                    $('#pnumber').val(p['pnumber']); 
                    $('#employee_id').val(p['id']); 
                    

                })
                  $('#insert').val("Update");  
                  $('#add_data_Modal').modal('show');  
             },
             
        error: function(e) {
            alert("hi");
           // $('.modal-content').append('<p style="color:red; text-align: center;"> there was an error </p>');
        }  
        });  
   });  


   $('#insert').on("click", function(){
       console.log("here")

        var id = $('#employee_id').val();
        var fname = $('#fname').val();
        var lname 	 = $('#lname').val();
        var address = $('#address').val();

        //console.log(fname)

        var notes = $('#notes').val();
        var country = $('#country').val();
        var city = $('#city').val();

        var zipcode = $('#zipcode').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var pnumber = $('#pnumber').val();
        
        var atpos  = email.indexOf('@');
        var dotpos = email.lastIndexOf('.com');
        
        // if(fname == ''){ // check username not empty
        //     alert('please enter first name!'); 
        // }
        // else if(!/^[a-z A-Z]+$/.test(fname)){ // check username allowed capital and small letters 
        //     alert('username only capital and small letters are allowed !!'); 
        // }
        // else if(email == ''){ //check email not empty
        //     alert('please enter email address !!'); 
        // }
        // else if(atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length){ //check valid email format
        //     alert('please enter valid email address !!'); 
        // }
        // else if(password == ''){ //check password not empty
        //     alert('please enter password !!'); 
        // }
        // else if(password.length < 6){ //check password value length six 
        //     alert('password must be at least 6 characters!!');
        // } 
        // else{			

            var datas = JSON.stringify({
                id:id,
                fname:fname,
                lname:lname, 
                address:address, 
                notes:notes, 
                country:country, 
                city:city, 
                zipcode:zipcode, 
                email:email, 
                password:password,
                pnumber:pnumber
               });
         $.ajax({  
              url:"/webscripting/backend/logic/userUpdate.php",  
              method:"PUT",  
              data:datas,  
            //   beforeSend:function(){  
            //        $('#insert').val("Inserting");  
            //   },  
              success:function(data){  
                   $('#insert_form')[0].reset();  
                   $('#add_data_Modal').modal('hide');  
                   //$('#tblUsers').html(data);  
                   $("#tblUsers tbody").empty();
                   $("#tblUsers tbody").append(" <tr><td colspan='12' class='text-center'>&lt;No data loaded&gt;</td></tr>");
              }  
         });  
   // }  
});  

});


