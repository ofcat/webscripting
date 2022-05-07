
$(document).ready(function() {
    loadProducts();
})



function loadProducts() { 

    
    
    
    $.ajax({
        type: "GET",
        url: "/webscripting/backend/logic/read.php",
        cache: false,
        dataType: "json",
        success: function(response) {
        console.log(response)

        $('#productList').empty();
        $('#productList').hide();


        $.each(response.items, function(i, p) {

        $('#productList').append('<div class="col-xs-12 col-md-6 bootstrap snippets bootdeys">\
      <div class="product-content product-wrap clearfix">\
            <div class="row">\
                    <div class="col-md-5 col-sm-12 col-xs-12">\
                        <div class="product-image"> \
                            <img src="'+ p['img_path']+'" alt="194x228" class="img-responsive">\
                        </div>\
                    </div>\
                    <div class="col-md-7 col-sm-12 col-xs-12">\
                    <div class="product-deatil">\
                            <h5 class="name">\
                                    '+ p['name']+' \
                            </h5>\
                            <p class="price-container">\
                                <span>'+ p['price']+'</span>\
                            </p>\
                            <span class="tag1"></span> \
                    </div>\
                    <div class="description">\
                    '+ p['description']+'\
                    </div>\
                    <div class="product-info smart-form">\
                        <div class="row">\
                            <div class="col-md-6 col-sm-6 col-xs-6"> \
                                <a href="javascript:void(0);" class="btn btn-success">Add to cart</a>\
                            </div>\
                        </div>\
                    </div>\
                </div>\
            </div>\
        </div>\
    </div>');

           
        });
        $('#productList').slideDown(400);


        },
        error: function(e) {
            $('#productList').append('<p style="color:red; text-align: center;"> there was an error </p>');
        }

    })
    
    
}