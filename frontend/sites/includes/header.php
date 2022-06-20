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
        #cart_count{
            text-align: center;
            padding: 0 0.9rem 0.1rem 0.9rem;
            border-radius: 3rem;
        }

        .shopping-cart{
            padding: 3% 0;
        }

        .navbar-nav{
            float: right;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            font-size: 17px;
        }
    </style>

    <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="products.php">Products</a>
        

        <?php if (!isset($_SESSION["email"])) { ?>
            <a href="loginPage.php">Login</a>
            <a href="registration.php">Registration</a>
        <?php } ?>

        <?php if (isset($_SESSION["email"]) && $_SESSION["email"] !== 'admin') { ?>
            <a href="logout.php">Logout</a>
            <a href="profileManagement.php">Update Profile</a>
            <a href="#">Orders</a>
        <?php } ?>

        <?php if (isset($_SESSION["email"]) && $_SESSION["email"] !== 'admin') { ?>
            
                    <div class="navbar-nav">
                        <a href="cart.php" class="nav-item nav-link active">
                            <h5 class="px-5 cart">
                                    <i class="fas fa-shopping-cart"></i> Cart
                                <?php

                                    if (isset($_SESSION['cart'])){
                                        $count = count($_SESSION['cart']);
                                        echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                                    }else{
                                        echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                                    }

                                ?>
                            </h5>
                        </a>
                        
                    </div>

        
            
        <?php } ?>

        <?php if (isset($_SESSION["email"]) && $_SESSION["email"] == 'admin') { ?>
            <a href="logout.php">Logout</a>
            <a href="userList.php">User Management</a>
            <a href="productUpdate.php">Product Management</a>
        <?php } ?>
    </div>