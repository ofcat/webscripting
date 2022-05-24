$("#loginBtn").on("click", function() {

    //var data = $('#login-form').serialize();

    var email = $('#email').val();
    var password = $('#password').val();

    var datas = JSON.stringify({
        email:email,
        password:password
        
       });
    

    $.ajax({
        url: "/webscripting/backend/logic/userLogin.php",
        type: "POST",
        data:datas,
        success: function(res) {                                
            console.log(res); // debug print


            
            if (res['status']) // if login successful redirect user to secure.php page.
            {
                location.href = "secure.php"; // redirect user to secure.php location/page.
            } else {

                var errorMessage = '';
                // if there is any errors convert array of errors into html string, 
                //here we are wrapping errors into a paragraph tag.
                console.log(res.msg);
                $.each(res['msg'], function(index, message) {
                    errorMessage += '<div>' + message + '</div>';
                });
                // place the errors inside the div#error-msg.
                $("#error-msg").html(errorMessage);
                $("#error-msg").show(); // show it on the browser, default state, hide
                // remove disable attribute to the login button, 
                //to prevent multiple form submissions 
                //we have added this attribution on login from submit
                
            

            
            
            }
            
        },
        error: function(e) {
            alert("error");
           // $('.modal-content').append('<p style="color:red; text-align: center;"> there was an error </p>');
        } 
    });
});