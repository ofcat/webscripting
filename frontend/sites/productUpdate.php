<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="res/style.css" rel="stylesheet">
    

    <title>Product Management</title>
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
</style>
<body>
<?php include 'includes/header.php' ?>

    <div class="container">
        <div class="row m-5">
            <div class="col">
                <h1>Products list</h1>
                <p>
                   All LunchBreak products:
                </p>                
            </div>
        </div>


        <div class="row m-5">
            <div class="col-12 text-end">
                <button id="btnAllProducts" type="button" class="btn btn-primary">Update table</button>
            </div>
            <div class="col-12">
                <table id="tblUsers" class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Image Path</th>
                            <th>Rating</th>
                        
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
                       <h4 class="modal-title">Product Details</h4>  
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
                       <h4 class="modal-title">Update Product Info</h4>  
                  </div>  
                  <div class="modal-body">  
                       <form method="post" id="insert_form">  
                            <label>Enter New Info</label>  
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" id="name" placeholder="Name" name="input1">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" id="description" placeholder="Description" name="input2">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" id="price" placeholder="Price" name="input3">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" id="img_path" placeholder="Image Path" name="input4">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" id="rating" placeholder="Rating">
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
 <script src="../js/productList.js"></script>
   
</body>
</html>