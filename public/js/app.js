$(document).ready(function(){
    // update cart
    $(".btn-update-item").one('click', function(e){
        
        e.preventDefault();
        var id = $(this).data('id');
        var slug = $(this).data('href');
        var quantity = $("#product_"+ id).val();
        url = '/cart/update/' + slug + "/" + quantity
        $(location).attr("pathname", url);
    });
});