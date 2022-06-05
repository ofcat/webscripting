$("#loginBtn").on("click", function() {

    

    var email = $('#email').val();
    var password = $('#password').val();
    //add stay logged in variable!

   

    $.ajax({
        url: "/webscripting/backend/logic/userLogin.php",
        type: "POST",
        dataType:"text",  
        data:{
            email:email,
            password:password
           },
        success: function(res) {                                
           // console.log(res); // debug print


            window.location.href="/webscripting/frontend/sites/welcome.php";
            
            
        },
        error: function(e) {
            alert("error");
          
           // $('.modal-content').append('<p style="color:red; text-align: center;"> there was an error </p>');
        } 
    });
});