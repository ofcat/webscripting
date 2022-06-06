<?php
session_start();
if (isset($_POST['logout'])) {
   unset($_SESSION['email']);
   header('Location: loginPage.php');
}
?>

<html>
<style>
   * {
      padding: 5px;
      margin: 0;
      box-sizing: border-box;
   }

   body {
      background-color: #8dbc8a;
   }

   #main {
      margin-top: 5em;
      margin-left: 5em;
      width: 30%;
      padding: 20px;
      background-color: white;
      border-radius: 30px;
   }

   #profile {
      margin-top: 1em;
      margin-left: 5em;
      width: 30%;
      padding: 20px;
      background-color: white;
      border-radius: 30px;
   }

   #shop {
      margin-top: 1em;
      margin-left: 5em;
      width: 30%;
      padding: 20px;
      background-color: white;
      border-radius: 30px;
   }

   #btn {
      padding-top: 25px;
   }

   img {
      width: 300px;
      height: 200px;
   }
</style>

<body>
   <?php include 'includes/header.php' ?>
   <div class='container'>
      <div class='row'>
         <div id='main' class='col-sm'>

            <h2>Hey, <?php
                     if (isset($_SESSION['email'])) {
                        echo $_SESSION['email'];
                     }
                     ?>!</h2>
                     <p>plz add a big picturre to the right of these boxes</p>
            <form method='post' id="btn">
               <input type='submit' name='logout' value='Logout'>
            </form>

         </div>

         <!-- <div class='col-sm'>
            <img src="../img/lunch.jpg" alt="">
         </div> -->

      </div>


      <div id='profile'>

         <h2><a href="profileManagement.php">Update profile details!</a></h2>

      </div>

      <div id='shop'>

         <h2> <a href="products.php">Explore our products page!</a></h2>

      </div>

   </div>




</body>

</html>