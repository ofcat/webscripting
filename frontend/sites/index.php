<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>

        
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <style>
             * {
            padding: 5px;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #8dbc8a;
        }

            h1 {
                padding-left: 10px;
            }
            
            h4 {
                padding-left: 15px;
            }
            .row{
                margin: auto;
                margin-top: 20px;
                background-color: white;
                border-radius: 30px;
                width: 75%;

            }
            img{
                max-width:100%;
                max-height:100%;
                border-top-left-radius: 30px;
                border-bottom-left-radius: 30px;
                padding: 10px;
                padding: 15px 15px;
            }
            #btn1{
                border: none;
                outline: none;
                height: 50px;
                width: 100%;
                background-color: #8dbc8a;
                color: white;
                border-radius: 4px;
                font-weight: bold;
            }

            .navbar-brand{
                font-size: 20px;
            }            
            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: black;
                color: white;
                text-align: center;
                background-image: none;
            }
            .footer-list{
                display: inline;
            }
            .footer-list a {
                color: gray;
                padding: 10px;

            }
            .footer-list a:hover {
                color:white;
                text-decoration: none;
            }
        </style>

    
    </head>

    <body>

    <?php include 'includes/header.php' ?>


        <section class="Form my-4 mx-5">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-5">
                        <img src="../img/lunch.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-7 px-5 pt-5">
                        <h1 class="font-weight-bold py-3">LunchBreak</h1>
                        <h4>Eat lunchBreak</h4>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <p id="box">LunchBreak is a web service that provides customers with the opportunity to purchase organic lunch boxes. There are three categories of lunches: meat, vegetarian and vegan. </p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="button" id="btn1">Shop now!</button>
                                <script type="text/javascript">
                                    document.getElementById("btn1").onclick = function () {
                                        location.href = "products.php"
                                    }
                                </script>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- <div class="footer">
            <ul>
                <li class="footer-list"><a href="Impressum.html">Impressum</a></li>
                <li class="footer-list"><a href="help.html">Help</a></li>
                <li class="footer-list"><a href="contact.html">Contact</a></li>
            </ul>
        </div> -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        

        
        
    </body>


</html>