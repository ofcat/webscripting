<?php
session_start();
if(isset($_POST['logout']))
{
 unset($_SESSION['email']);
}
?>

<html>
<body>
 <h2>Hi, Demo</h2>
 <p>Hey, <?php 
 if(isset($_SESSION['email'])){
    echo $_SESSION['email'];
 }
  ?>!</p>
 <form method='post'>
  <input type='submit' name='logout' value='Logout'>
 </form>
</body>
</html>


