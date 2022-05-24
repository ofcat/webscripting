$(function() {
    $("#btn_register").on("click", function() {

        
			
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
        
        if(fname == ''){ // check username not empty
            alert('please enter first name!'); 
        }
        else if(!/^[a-z A-Z]+$/.test(fname)){ // check username allowed capital and small letters 
            alert('username only capital and small letters are allowed !!'); 
        }
        else if(email == ''){ //check email not empty
            alert('please enter email address !!'); 
        }
        else if(atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length){ //check valid email format
            alert('please enter valid email address !!'); 
        }
        else if(password == ''){ //check password not empty
            alert('please enter password !!'); 
        }
        else if(password.length < 6){ //check password value length six 
            alert('password must be at least 6 characters!!');
        } 
        else{			

            var datas = JSON.stringify({
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
              // console.log(datas)
            $.ajax({
                url: '/webscripting/backend/logic/userCreate.php',
                type: 'post',
                data: datas,
                success: function(response){
                    $('#message').html(response);
                },
                error: function(e) {
                    $('#message').append('<p style="color:red; text-align: center;"> there was an error </p>');
                }
            });
            
           // $('#registraionForm')[0].reset();
        }
   
    
});
});

