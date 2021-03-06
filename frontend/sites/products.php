<?php
session_start();
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

        <div id="productList">








            <script src="../js/productList.js"></script>

            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>

</html>