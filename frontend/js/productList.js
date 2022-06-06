
$(document).ready(function () {
    loadProducts();
})



function loadProducts() {




    $.ajax({
        type: "GET",
        url: "/webscripting/backend/logic/read.php",
        cache: false,
        dataType: "json",
        success: function (response) {
            console.log(response)

            $('#productList').empty();
            $('#productList').hide();


            $.each(response.items, function (i, p) {

                $('#productList').append('<div class="col-xs-12 col-md-6 bootstrap snippets bootdeys">\
      <div class="product-content product-wrap clearfix">\
            <div class="row">\
                    <div class="col-md-5 col-sm-12 col-xs-12">\
                        <div class="product-image"> \
                            <img src="'+ p['img_path'] + '" alt="194x228" class="img-responsive">\
                        </div>\
                    </div>\
                    <div class="col-md-7 col-sm-12 col-xs-12">\
                    <div class="product-deatil">\
                            <h5 class="name">\
                                    '+ p['name'] + ' \
                            </h5>\
                            <p class="price-container">\
                                <span>'+ p['price'] + '</span>\
                            </p>\
                            <span class="tag1"></span> \
                    </div>\
                    <div class="description">\
                    '+ p['description'] + '\
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
        error: function (e) {
            $('#productList').append('<p style="color:red; text-align: center;"> there was an error </p>');
        }

    })


}


$("#btnAllProducts").on("click", function () {

    let jTblBody = $("#tblUsers tbody").empty();

    $.ajax({
        type: "GET",
        dataType: "json",
        url: "/webscripting/backend/logic/read.php",
        success: function (response) {
            console.log(response); // debug print

            // only do this if you trust your source (possible Cross-Site Scripting)!!
            let content = [];
            response.items.forEach(e => {
                content.push("<tr><td>" + e.id + "</td>"
                    + "<td>" + e.name + "</td>"
                    + "<td>" + e.description + "</td>"
                    + "<td>" + e.price + "</td>"
                    + "<td>" + e.img_path + "</td>"
                    + "<td>" + e.rating + "</td>"
                    + "<td><input type='button' name='edit' value='Edit' id=" + e.id + " class='btn btn-info edit_data'/></td>"
                    + "<td><button type='button' class='btn btn-danger btn_delete' id=" + e.id + ">Delete</button></td></tr>"


                );
            });

            jTblBody.html(content.join());
        },
        error: function (xhr, ajaxOptions, thrownError) {
            jTblBody.html("<tr><td colspan='4'>Error: <pre>"
                + JSON.stringify(xhr, undefined, 2)
                + "</pre></td></tr>");
        }
    });
});


$(document).on('click', '.edit_data', function () {

    var id = $(this).attr("id");
    console.log(id);
    $.ajax({
        url: "/webscripting/backend/logic/read.php",
        method: "POST",
        data: { id: id },
        dataType: "json",
        success: function (data) {
            console.log(data.items);
            $.each(data.items, function (i, p) {

                $('#name').val(p['name']);
                $('#description').val(p['description']);
                $('#price').val(p['price']);
                $('#img_path').val(p['imp_path']);
                $('#rating').val(p['rating']);
                $('#employee_id').val(p['id']);


            })
            $('#insert').val("Update");
            $('#add_data_Modal').modal('show');
        },

        error: function (e) {
            alert("hi");
            // $('.modal-content').append('<p style="color:red; text-align: center;"> there was an error </p>');
        }
    });
});



$('#insert').on("click", function () {
    console.log("here")

    var url = "/webscripting/backend/logic/productUpdate.php";
    var id = $('#employee_id').val();
    if (id == null) {
        url = "/webscripting/backend/logic/create.php";
    }
    var name = $('#name').val();
    var description = $('#description').val();
    var price = $('#price').val();
    var img_path = $('#img_path').val();
    var rating = $('#rating').val();

    //console.log(fname)

    var datas = JSON.stringify({
        id: id,
        name: name,
        description: description,
        price: price,
        img_path: img_path,
        rating: rating,

    });
    $.ajax({
        url: url,
        method: "PUT",
        data: datas,
        //   beforeSend:function(){  
        //        $('#insert').val("Inserting");  
        //   },  
        success: function (data) {
            $('#insert_form')[0].reset();
            $('#add_data_Modal').modal('hide');
            //$('#tblUsers').html(data);  
            $("#tblUsers tbody").empty();
            $("#tblUsers tbody").append(" <tr><td colspan='12' class='text-center'>&lt;Please update the table!&gt;</td></tr>");
        }
    });
    // }  
});




$('#add').on("click", function () {
    console.log('hiiiiiii')
    $('#insert').val("Insert");
    $('#insert_form')[0].reset();
    $('#add_data_Modal').modal('show');
});




$(document).on('click', '.btn_delete', function () {

    var id = $(this).attr("id");


    console.log("delete");
    console.log(id);

    var datas = JSON.stringify({
        id: id,

    });

    $.ajax({
        url: '/webscripting/backend/logic/productDelete.php',
        type: 'DELETE',
        dataType: "json",
        data: datas,
        success: function (result) {
            // Do something with the result
            $("#tblUsers tbody").empty();
            $("#tblUsers tbody").append(" <tr><td colspan='12' class='text-center'>&lt;Please update the table!&gt;</td></tr>");
        }
    });

});