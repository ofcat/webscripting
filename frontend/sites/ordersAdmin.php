<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="res/style.css" rel="stylesheet">


    <title>Orders</title>
</head>

<style>
    /* .modal-body{
        padding: 5px;
        margin: 0;
        box-sizing: border-box;
    } */
    * {
        padding: 5px;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #8dbc8a;
    }

    .container {
        margin-top: 20px;
        background-color: white;
        border-radius: 30px;
    }
</style>

<body>
    <?php include 'includes/header.php'?>

    <div class="container">
        <div class="row m-5">
            <div class="col">
                <h1>Orders list</h1>
                <p>
                    Here are all the orders made
                
                </p>
            </div>
        </div>

        


        <div class="row m-5">
            
            <div class="col-12">
                <table id="tblOrders" class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>UserId</th>
                            <th>Show Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan='12' class="text-center">&lt;You have made no orders&gt;</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    
    </div>

    
    

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- custom Javascript -->
    <script src="../js/orderListAdmin.js"></script>

</body>

</html>