<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form {
    margin-bottom: 15px;
    background: white;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
    border-radius: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn1{
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: #8dbc8a;
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }
body{
    background-image: url("../img/lunch.jpg");
    background-size: cover;
}
</style>
</head>
<body>
    <ul>
        <li><a href="products.php">Products</a></li>
        <li><a href="registration.php">Registration</a></li>
        <li><a href="userList.php">User Management</a></li>
        <li><a href="productUpdate.php">Product Management</a></li>
        <li><a href="loginPage.php">Login</a></li>
      </ul>
<div class="login-form">
     <form  method="post" id="login-form" > <!-- action="userLogin.php" -->
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="E-Mail"  id = "email" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" id = "password" required="required">
        </div>
        <div class="form-group">
            <button type="button" id = "loginBtn" class="btn1">Login</button>
        </div>   
        <div>
            <input type="hidden" name="safeit" value="0" />
            <input type="checkbox" name="safeit" value="1">
            <label for="safeit">Stay logged in!</label>
        </div>    
    </form>
    <p class="text-center" style="padding-top: 20px;"><a href="registration.html">No account? Sign up here!</a></p>
</div>
</body>
<script src="../js/login.js"></script>
</html>