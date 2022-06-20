<?php
session_start();
require_once ('CreateDb.php');
require_once ('component.php');


$database = new CreateDB("webdb", "products");

if (isset($_POST["add"])){
    /// print_r($_POST['id']);
    if(isset($_SESSION["cart"])){

        $item_array_id = array_column($_SESSION["cart"], "id");

        if(in_array($_POST["id"], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'products.php'</script>";
        }else{

            $count = count($_SESSION["cart"]);
            $item_array = array(
                "id" => $_POST["id"]
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'id' => $_POST['id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>



    <title>Products</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <style>
        * {
            padding: 5px;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #8dbc8a;
        }

        .row {
            background-color: white;
            border-radius: 30px;
        }

        .btn {
            border: none;
            outline: none;
            width: 100%;
            background-color: #8dbc8a;
            color: white;
            border-radius: 4px;
        }

        h1 {
            color: white;
            text-align: center;

        }

        h4 {
            color: white;
            text-align: center;
        }
    </style>


</head>


<body>
    <?php include 'includes/header.php' ?>
    <div class="container">
        <h1>PRODUCTS</h1>
        <h4>Shop all lunch boxes!</h4>
        <div class="container">
        <div class="row text-center py-5">
            <?php
                $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['name'], $row['price'], $row['img_path'], $row['description'], $row['id']);
                }
            ?>
        </div>
        </div>





        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <div id="productList">








            <!-- <script src="../js/productList.js"></script> -->

            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>

</html>