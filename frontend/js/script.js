

$(document).ready(function() {
   // loadProducts();
})

function loadProducts() { 
    
    
    $.ajax({
        type: "GET",
        url: "/webscripting/backend/logic/read.php",
        cache: false,
        dataType: "json",
        success: function(response) {
        console.log(response)

        $('#products').empty();
        $('#products').hide();

        
    
        // console.log(response.items[0]['name'])


        // for(var i = 0; i < response.items.length; i++){
        //     console.log(response.items[i])
        // }

        $.each(response.items, function(i, p) {
           
           if(i % 2 == 0)
            $('#products').append('<p class="greyline"onclick="selectItem(this)" ><strong>' 
            + p['name'] +'</strong>'
            + ' for $ ' 
            + p['price'] 
            + '<br></p>');
            else
            $('#products').append('<p onclick="selectItem(this)"><strong>' 
            + p['name'] 
            +'</strong>'
            + ' for $ ' 
            + p['price'] 
            + '<br> </p>');
        });
        $('#products').slideDown(250);


        },
        error: function(e) {
            $('#products').append('<p style="color:red; text-align: center;"> there was an error </p>');
        }

    })
    
    
}



function selectItem(index) {

console.log(index.innerHTML)
$('#selection').append('<p>' + index.innerHTML + '</p>');

$('#products').slideUp(300);

$('#selection').delay(300).fadeIn(120);

}