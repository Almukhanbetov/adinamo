/*price range*/
function getCart(){

    $.ajax({
        url: '/cart/show',
        type: 'GET',
        success: function(res){
            if(!res) alert('ОШИБКА res');
            showCart(res);
        },
        error: function(){
            alert('ERROR')
        }
    });
    return false;

}

$('.sub-menu').dcAccordion({
    speed : 300
});

function showCart(cart){
    $('#cart .modal-body').html(cart);
    $('#cart').modal();
}



$('#cart .modal-body').on('click', '.del-item', function(){
    var id = $(this).data('id');
    $.ajax({
        url: '/cart/del-item',
        type: 'GET',
        data: {id: id},
        success: function(res){
            if(!res) alert('ОШИБКА res');
            showCart(res);
        },
        error: function(){
            alert('ERROR')
        }
    });
    return false;
});

function clearCart(){
    $.ajax({
        url: '/cart/clear',
        type: 'GET',
        success: function(res){
            if(!res)  alert('ОШИБКА res');
            showCart(res);
        },
        error: function(){
            alert('ERROR')
        }

    });
}



$('.add-to-cart').on('click',function(e){
    e.preventDefault();
    var id = $(this).data('id'),
        qty = $('#qty').val();
    $.ajax({
        url: '/cart/add',
        type: 'GET',
        data: {id: id,qty: qty},
        success: function(res){
            if(!res) alert('ОШИБКА re');

            showCart(res);
        },
        error: function(){
            alert('ERROR')
        }

    });
});



