<?php
session_start();
$_SESSION = array();

unset($_SESSION['email']);
// setcookie("userID", @$_POST["userID"], time() - 3600);
// setcookie("username", @$_POST["username"], time() - 3600);
// setcookie("password", @$_POST["password"], time() - 3600);
// setcookie("logincookie", @$_POST["logincookie"], time() - 3600);
session_destroy();
header('Refresh: 1; URL =products.php');
?>
<style>
   * {
      padding: 5px;
      margin: 0;
      box-sizing: border-box;
   }

   body {
      background-color: #8dbc8a;
   }

   
</style>


<div class="container">
   <h3 class="text-center">You will be logged out now!</h3>
</div>