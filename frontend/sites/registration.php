<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Registration</title>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
       
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Style -->
    <style>
        *{
            padding: 5px;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #8dbc8a;
        }
        .row{
            background-color: white;
            border-radius: 30px;
        }
        img{
            max-width:100%;
            max-height:100%;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }
        .btn1{
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: #8dbc8a;
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }
       
    </style>

   
  </head>
  
    <body>

    <?php include 'includes/header.php' ?>
       <section class="Form my-4 mx-5">
            <div class="container">
                <div class="row no-gutters" id = "registrationForm">
                    <div class="col-lg-5">
                        <img src="../img/lunch.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-7 px-5 pt-5">
                        <h1 class="font-weight-bold py-3">Sign up</h1>
                        <h4>Create an account</h4>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" class="form-control" id="fname" placeholder="First Name" name="input1">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" class="form-control" id="lname" placeholder="Last Name" name="input2">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" class="form-control" id="address" placeholder="Address" name="input3">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" class="form-control" id="notes" placeholder="Addtional information to address" name="input4">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" class="form-control" id="country" placeholder="Austria" value= "Austria"readonly name="input5">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" class="form-control" id="city" placeholder="Vienna" value="Vienna"readonly name="input6">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" class="form-control" id="zipcode" placeholder="Zip Code" name="input7">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" class="form-control" id="email" placeholder="E-mail Address" name="input8">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" class="form-control" id="password" placeholder="Password" name="input9">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" class="form-control" id="pnumber" placeholder="Phone number" name="input10">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="button" class="btn1" id="btn_register">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <p id="message"></p>
            </div>
       </section>
        
   
       <script src="../js/userRegistration.js"></script>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    </body>
</html>