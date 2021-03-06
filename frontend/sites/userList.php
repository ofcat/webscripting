<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="res/style.css" rel="stylesheet">
    

    <title>AJAX Fill Table</title>
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
<?php include 'includes/header.php' ?>

    <div class="container">
        <div class="row m-5">
            <div class="col">
                <h1>User list</h1>
                <p>
                   All LunchBreak users:
                </p>                
            </div>
        </div>


        <div class="row m-5">
            <div class="col-12 text-end">
                <button id="btnAllUsers" type="button" class="btn btn-primary">Update table</button>
            </div>
            <div class="col-12">
                <table id="tblUsers" class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Address</th>
                            <th>Note</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Zipcode</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Phone Number</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td colspan='12' class="text-center">&lt;No data loaded&gt;</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="dataModal" class="modal fade">  
        <div class="modal-dialog">  
             <div class="modal-content">  
                  <div class="modal-header">  
                       <button type="button" class="close" data-dismiss="modal">&times;</button>  
                       <h4 class="modal-title">User Details</h4>  
                  </div>  
                  <div class="modal-body" id="employee_detail">  
                  </div>  
                  <div class="modal-footer">  
                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                  </div>  
             </div>  
        </div>  
   </div>  
   <div id="add_data_Modal" class="modal fade">  
        <div class="modal-dialog">  
             <div class="modal-content">  
                  <div class="modal-header">  
                       <button type="button" class="close" data-bs-dismiss="modal">&times;</button>  
                       <h4 class="modal-title">Update User Info</h4>  
                  </div>  
                  <div class="modal-body">  
                       <form method="post" id="insert_form">  
                            <label>Enter New Info</label>  
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
        


                            <input type="hidden" name="employee_id" id="employee_id" />  
                            <input type="button" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                       </form>  
                  </div>  
                  <div class="modal-footer">  
                       <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>  
                  </div>  
             </div>  
        </div>  
   </div>  
    
 <!-- Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <!-- jQuery -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
 <!-- custom Javascript -->
 <script src="../js/userList.js"></script>
   
</body>
</html>