$('.add_cart').click(function(event) {
    event.preventDefault();
    var href = $(this).attr('href');
    var id = $(this).attr('data-id');

    $.ajax({
        url: href,
        type: 'GET',
        data: {},
        beforeSend: function() {
            $.LoadingOverlay("show");
        },
        success: function(res) {
            if (res) {

                $("#list_cart").load("http://localhost/HnacouQ-pro/ #list_cart");
                $.LoadingOverlay("hide");
                // command: toastr["success"]('sản phẩm đã được thêm vào giỏ hàng!!');
                // alert('bạn đã thêm thành công vào giỏ hàng!');
                // toastr.success('bạn đã đưa sản phẩm này vào giỏ hàng!!!');
                swal({
                    title: "Cảm ơn bạn!",
                    text: "Sản phẩm này đã được thêm vào giỏ hàng!!!",
                    icon: "success",
                    button: "Aww yiss!",
                });
            } else {
                alert('Lỗi...')
            }
        }

    });

    // alert(href);

});

$('.quantity').change(function(e) {
    e.preventDefault();
    var quantity = Math.ceil($(this).val());
    var id = $(this).attr('data-id');
    var price = $(this).attr('data-price');

    if (quantity <= 0) {
        quantity = 1;
    } else if (quantity >= 50) {
        quantity = 50;
    }
    var now_price = quantity * price;
    // $('.price_currency_'+id).html(now_price);
    now_price = now_price.toLocaleString('vi', { style: 'currency', currency: 'VND' });
    // console.log(now_price);
    // console.log(now_price);
    // console.log(quantity);
    var arr = [];
    arr.push(now_price);
    console.log(arr);
    $.ajax({
        url: 'cart/update/' + id + '?quantity=' + quantity,
        method: 'GET',
        data: {
            // 'id':id,'quantity':quantity
        },
        beforeSend: function() {
            $.LoadingOverlay("show");
        },
        success: function(data) {

            $.LoadingOverlay("hide");
            Command: toastr[data.title](data.message);
            $("#list_cart").load("cart #list_cart");
            // $( ".sub_total" ).load( "cart .sub_total" );
            $('.qtt_cart' + id).val(quantity);
            //    var total = $('.total_price'+id);
            $('.total_price' + id).html(now_price);
            // var total = data.total_price + parseInt(price);
            // var sub_total = total.toLocaleString('vi', {style : 'currency', currency : 'VND'});
            // $('.sub_total').html(sub_total);
            // console.log(typeof parseInt(price));
            // console.log(data.total_price);

        }
    });




});


$('.update_status_order').change(function(e) {

    var id = $(this).attr('data-id');
    var status = $(this).find(":selected").val();

    $.ajax({
        url: 'update_order',
        method: 'GET',
        data: {
            'id': id,
            'status': status
        },
        beforeSend: function() {
            $.LoadingOverlay("show");
        },
        success: function(data) {
            $.LoadingOverlay("hide");
            Command: toastr[data.title](data.message);
        }
    });




});


$('.view_order_detail').click(function(e) {
    e.preventDefault();
    var id_order = $(this).attr('data-id');
    $.ajax({

        url: 'home_order_detail',
        method: 'GET',
        data: {
            'id_order': id_order,
        },
        beforeSend: function() {
            $.LoadingOverlay("show");
        },
        success: function(response) {
            $.LoadingOverlay("hide");
            console.log(response);
            // $('#name_order').text(response.data.name);
        }
    });

});


$('.update_profile').click(function() {
    let id = $(this).attr('data-id');
    let name = $('#name').val();
    let email = $('#email').val();
    let phone = $('#phone').val();
    let address = $('#address').val();

    // $(this).attr('data-dismiss', 'modal');
    $.ajax({
        url: 'update-profile',
        method: 'PUT',
        data: {
            name: name,
            email: email,
            phone: phone,
            address: address,

        },
        success: function(res) {
            $(this).attr('data-dismiss', 'modal');
            location.reload();
        },
    });

});