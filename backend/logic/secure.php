<?php
session_start();
if(empty($_SESSION['id'])){
   header('location: userLogin.php');    
} else {
   echo 'Secure page!.';
   echo '<a href="/logout.php">logout';
}