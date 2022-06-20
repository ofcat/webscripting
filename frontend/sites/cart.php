<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Shopping Cart</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <script src="../js/cart.js" async></script>

        <style>
            body{
                margin-top:20px;
                background:#eee;
                background-image: url("../img/lunch.jpg");
                background-size: cover;
            }
            .ui-w-40 {
                width: 40px !important;
                height: auto;
            }

            .card{
                box-shadow: 0 1px 15px 1px rgba(52,40,104,.08);
                background-color: white;
                padding: 20px;  
                border-radius: 30px;  
            }

            .ui-product-color {
                display: inline-block;
                overflow: hidden;
                margin: .144em;
                width: .875rem;
                height: .875rem;
                border-radius: 10rem;
                -webkit-box-shadow: 0 0 0 1px rgba(0,0,0,0.15) inset;
                box-shadow: 0 0 0 1px rgba(0,0,0,0.15) inset;
                vertical-align: middle;
            }
            .btn1{
                background-color: #8dbc8a;
            }
        </style>

    </head>
<body>
<?php include 'includes/header.php' ?>
    <div class="container px-3 my-5 clearfix">
        <!-- Shopping cart table -->
        <div class="card">
            <div class="card-header">
                <h2>Shopping Cart</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered m-0">
                    <thead>
                      <tr>
                        <!-- Set columns width -->
                        <th class="text-center py-3 px-4" style="min-width: 400px;">Product Name &amp; Details</th>
                        <th class="text-right py-3 px-4" style="width: 100px;">Price</th>
                        <th class="text-center py-3 px-4" style="width: 120px;">Quantity</th>
                        <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
                      </tr>
                    </thead>
                    <tbody class="cart-item">
            
                      <tr class="cart-row">
                        <td class="p-4">
                          <div class="media align-items-center">
                            <img src="../img/Meat.JPG" class="d-block ui-w-40 ui-bordered mr-4" alt="">
                            <div class="media-body">
                              <a href="#" class="d-block text-dark">Chicken Lunch Box</a>
                              <small>
                                <span class="text-muted">Category: </span> Meat &nbsp;
                                <span class="text-muted">Description: </span> Grilled chicken breast with avocado and cucumber salad.
                              </small>
                            </div>
                          </div>
                        </td>
                        <td class="text-right font-weight-semibold align-middle p-4 cart-price">€16.99</td>
                        <td class="align-middle p-4"><input type="text" class="cart-quantity form-control text-center" value="1"></td>
                        <td class="text-center align-middle px-0"><a href="#" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">×</a></td>
                      </tr>
            
                      <tr class="cart-row">
                        <td class="p-4">
                          <div class="media align-items-center">
                            <img src="../img/Vegan.JPG" class="d-block ui-w-40 ui-bordered mr-4" alt="">
                            <div class="media-body">
                              <a href="#" class="d-block text-dark">Grilled Vegetables</a>
                              <small>
                                <span class="text-muted">Category: </span> Vegan &nbsp;
                                <span class="text-muted">Description: </span> Grilled sweet potato, asparagus, avocado. Fresh berries.
                              </small>
                            </div>
                          </div>
                        </td>
                        <td class="text-right font-weight-semibold align-middle p-4 cart-price">€11.99</td>
                        <td class="align-middle p-4"><input type="text" class="cart-quantity form-control text-center" value="1"></td>
                        <td class="text-center align-middle px-0"><a href="#" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">×</a></td>
                      </tr>
            
                      <tr class="cart-row">
                        <td class="p-4">
                          <div class="media align-items-center">
                            <img src="../img/Fish.JPG" class="d-block ui-w-40 ui-bordered mr-4" alt="">
                            <div class="media-body">
                              <a href="#" class="d-block text-dark">Fish Lunch Box</a>
                              <small>
                                <span class="text-muted">Category: </span> Pescetarian &nbsp;
                                <span class="text-muted">Description: </span> Grilled salmon with rice and steamed borkkolinis.
                              </small>
                            </div>
                          </div>
                        </td>
                        <td class="text-right font-weight-semibold align-middle p-4 cart-price" >€18.99</td>
                        <td class="align-middle p-4"><input type="text" class="cart-quantity form-control text-center" value="1"></td>
                        <td class="text-center align-middle px-0"><a href="#" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">×</a></td>
                      </tr>
            
                    </tbody>
                  </table>
                </div>
                <!-- / Shopping cart table -->
            
                <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
                  <div class="mt-4">
                    <label class="text-muted font-weight-normal">Promocode</label>
                    <input type="text" placeholder="Enter your Promocode" class="form-control">
                  </div>
                  <div class="d-flex">
                    <div class="text-right mt-4 mr-5">
                      <label class="text-muted font-weight-normal m-0">Discount</label>
                      <div class="text-large"><strong>€0</strong></div>
                    </div>
                    <div class="text-right mt-4">
                      <label class="text-muted font-weight-normal m-0">Total price</label>
                      <div class="text-large cart-total-price"><strong>€47.97</strong></div>
                    </div>
                  </div>
                </div>
            
                <div class="float-right">
                  <a href="products.html" class="btn btn-lg btn-default md-btn-flat mt-2">Back to shopping</a>
                  <a href="#" class="btn1 btn-lg btn-default md-btn-flat mt-2">Checkout</a>
                </div>
                
            
              </div>
          </div>
      </div>

</body>
</html>