$('.add_cart').click(function(event){
	event.preventDefault();
	var href = $(this).attr('href');
	var id = $(this).attr('data-id');
	
	$.ajax({
		url: href,
		type:'GET',
		data:{},
		beforeSend: function(){
        $.LoadingOverlay("show");
      	},
		success:function(res){
			if(res){

				 $( "#list_cart" ).load( "http://localhost/HnacouQ-pro/ #list_cart" );
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
			}else{
				alert('Lỗi...')
			}
		}

	});

	// alert(href);

});

// $('.tieptuc').click(function(e){
// 	e.preventDefault();
// 	alert('dmm')

// });

// $('.quantity').change(function(){
//     var quantity= $(this).val();
//     var id=$(this).attr('data-id');
//     var price=$(this).attr('data-price');
//    if(quantity <= 0){
//    		quantity = 1;
//    }else if(quantity >= 50){
//    	quantity = 50;
//    }

   

//    console.log('quantity->'+quantity);
//     var now_price=quantity*price;
//     // $('.price_currency_'+id).html(now_price);
//     now_price = now_price.toLocaleString('vi', {style : 'currency', currency : 'VND'});
// 	// console.log(now_price);
//     // console.log(now_price);

//     $.ajax({
//        url: 'cart/update/'+id+'?quantity='+quantity,
//        method: 'GET',
//        data: {
//         // 'id':id,'quantity':quantity
 
//        },
//         beforeSend: function(){
//           $.LoadingOverlay("show");
//           },
//         success:function(data){
//           $.LoadingOverlay("hide");
//           // console.log(data)
//           Command: toastr["success"]('Bạn đã cập nhật số lượng thành công');
//             $( "#list_cart" ).load( "http://localhost/project_news/public/cart #list_cart" );
//              // $( ".quantity" ).load( "http://localhost/project_news/public/cart .quantity" );
//            	$('input').attr('value',quantity);



//             $('#total_price').html( now_price );
//        }
//     });


    

//  });

// $('.dele-cart').click(function(event){
// 	event.preventDefault();
// 	var href = $(this).attr('href');

// 	$.ajax({
// 		url: href,
// 		type:'GET',
// 		data:{},
// 		success:function(res){
// 			if(res=='ok'){
// 				alert('bạn đã xóa sản phẩm khỏi giỏ hàng thành công!!!')
// 			}else{
// 				alert('Lỗi...')
// 			}
// 		}

// 	});



// });




// console.log(new Intl.NumberFormat('vi ', {
// 	  style: 'currency',
// 	  currency: 'GBP'
// 	// }).format(123));


