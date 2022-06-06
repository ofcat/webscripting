<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;


        }

        .topnav a {
            float: left;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
            border-radius: 30px;
        }

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
            border-radius: 30px;
        }
    </style>

    <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="products.php">Products</a>
        

        <?php if (!isset($_SESSION["email"])) { ?>
            <a href="loginPage.php">Login</a>
            <a href="registration.php">Registration</a>
        <?php } ?>

        <?php if (isset($_SESSION["email"])) { ?>
            <a href="logout.php">Logout</a>
            <a href="profileManagement.php">Update Profile</a>
        <?php } ?>

        <?php if (isset($_SESSION["email"]) && $_SESSION["email"] == 'admin') { ?>
            <a href="userList.php">User Management</a>
            <a href="productUpdate.php">Product Management</a>
        <?php } ?>
    </div>