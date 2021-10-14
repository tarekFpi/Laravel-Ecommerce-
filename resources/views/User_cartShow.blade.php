@include('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="s{{ asset('Cart_fontend/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Cart_fontend/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Cart_fontend/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Cart_fontend/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Cart_fontend/css/flexslider.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Cart_fontend/css/chosen.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Cart_fontend/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Cart_fontend/css/color-01.css') }}">
<style>
    .number_button{
        margin-top: 30px;
        width: 180px;
       margin-bottom: 20px;
    }

    #quantity{
    width: 120px;
    }


/* order Add to cart page*/
.detail_page{
    margin-top: 8%;
    margin-left: 8%;
    width: 90%;
    display: flex;
}

 .order_image{
     width: 25%;
     height: 400px;
}

.order_image,.card{
    width: 400px;
    height: 400px;
}

.order_image,.card img{
    width: 400px;
    height: 400px;
    border: 1px;
}

.order_product{
    margin-left: 20px;
    width: 25%;
}

.product-rating i {
  color: #f5deb3;

}

.product-rating h2{
    font-size: 16px;
}

.sitebar{
    margin-left: 15%;
}

.widget-content ul li{
    text-decoration: none;
    list-style: none;
}

#product_details{
    width: 600px;
}

#product-combox-size{
    width: 400px;
    height: 50px;
}



#btn_wishlist_user:hover{
 background-color: aqua;
}
    </style>

</head>
<body>

    <?php
   $user_gmail="";
 if(!empty(Session()->get('gmail'))){
  $user_gmail= Session()->get('gmail');
      }
    ?>

 <input type="hidden" id="session_gmail" value="<?php echo  $user_gmail;?>" />

    <div class="detail_page">
     <div class="order_image">
        <div class="card">
            <img class="card-img-top" id="product_Img" src="/{{ $Data->image }}" alt="Card image cap">
          </div>
     </div>

     <div class="order_product">

        <div class="wishlist-btn" style="float: right;">

         <img src="/webImage/raiting.png" id="btn_wishlist_user" width="50px" height="50px"/>

            <div class="dicount_info mt-2" style="margin-left: 50px;">
                <span id="sell_discount" style="color: red;font-size: 18px;"></span>
                <span id="sell_price" style="color: red; margin-left: 20px; font-size: 18px;"></span>
            </div>

        </div>

        <div class="product-rating mt-2">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <a href="#" class="count-review">(05 review)</a>
        </div>

        <h2 class="category_name mt-4">Category:{{ $Data->Category }}</h2>
        <h2 class="product-name">Name:{{ $Data->product_name }}  </h2>
       <h3 class="product-price">Price:{{ $Data->sell_price }}</h3>
        <h5 class="product-discount">Discount:{{ $Data->sell_discount }}%</h5>

    <button  id="increment-btn" style="width: 50px; height: 30px;">+</button>
    <input id="quantity" type=text min="1" value="1" style="height: 30px; text-align: center;">
    <button id="decrement-btn" style="width: 50px; height: 30px;">-</button>

     <br><br>
      <div class="stock-info in-stock">
        <p class="availability" id="in_stock">Availability: <b class="text-success">In Stock</b></p>
        <p class="availability" id="stock_not" style="display: none;">Availability: <b class="text-danger">Stock not available</b></p>
        </div>


        <div class="form-group">
            <label for="formGroupExampleInput"></label>
            <select  class="form-control" id="product-combox-size">
                <option>Select----size</option>

                @foreach(explode(',', $Data->product_size) as $size)
                <option>{{ $size }}</option>
              @endforeach
              </select>

              <input type="hidden" id="pd_size" value="{{ $Data->product_size }}"/>
              <input type="hidden" id="pd_category" value="{{ $Data->Category }}"/>
              <input type="hidden" id="pd_name" value="{{ $Data->product_name }}"/>
              <input type="hidden" id="pd_sellPrice" value="{{ $Data->sell_price }}"/>
              <input type="hidden" id="pd_image" value="{{ $Data->image }}"/>
              <input type="hidden" id="pd_details" value="{{ $Data->product_details }}"/>
              <input type="hidden" id="pd_discount" value="{{ $Data->sell_discount }}"/>
              <input type="hidden" id="pd_bill" value="{{ $Data->bill_number }}"/>
              <input type="hidden" id="brand_name" value="{{ $Data->brand_name }}"/>
              <input type="hidden" id="Serial_id" value="{{ $Data->id }}"/>
             </div>

        <div class="wrap-butons mt-5">
            <button  type="button" class="btn btn-success" id="Add_to_cart" style="width: 200px; height: 50px;" >Add to Cart</button>
            <button type="button" class="btn btn-primary ml-3" id="buy-btn" style="width: 200px; height: 50px;">Buy Now</button>
        </div>

     </div>

<!-- Add Model-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="form-group">
                <label for="formGroupExampleInput2">Gmail:</label>
                 <input type="text" class="form-control" id="gmail" autocomplete="off"  placeholder="Gmail">
                 </div>

                 <div class="form-group">
                    <label for="formGroupExampleInput2">Password:</label>
                     <input type="text" class="form-control" id="us_password" autocomplete="off"  placeholder="Password">
                     </div>

          <button type="button" class="btn btn-primary" id="login-btn" style="width: 150px;">Login</button>
           </div>
        </div>

      </div>
    </div>

 <!-- Add Model End-->


{{--   Buy Now user Add To Cart Model --}}

<!-- Add Model-->
<div class="modal fade" id="userBuyNow_loginMOdel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="form-group">
                <label for="formGroupExampleInput2">Gmail:</label>
                 <input type="text" class="form-control" id="gmail_userbuy" autocomplete="off"  placeholder="Gmail">
                 </div>

                 <div class="form-group">
                    <label for="formGroupExampleInput2">Password:</label>
                     <input type="text" class="form-control" id="byus_password" autocomplete="off"  placeholder="Password">
                     </div>
          <button type="button" class="btn btn-primary" id="login-btn_by" style="width: 150px;">Login</button>
           </div>
        </div>

      </div>
    </div>

{{--   Buy Now user Add To Cart End --}}



{{--  Wishlits user Add To Cart Model --}}

<!-- Add Model-->
<div class="modal fade" id="userWishlist_loginMOdel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="form-group">
                <label for="formGroupExampleInput2">Gmail:</label>
                 <input type="text" class="form-control" id="gmail_userWishlist" autocomplete="off"  placeholder="Gmail">
                 </div>

                 <div class="form-group">
                    <label for="formGroupExampleInput2">Password:</label>
                     <input type="text" class="form-control" id="password_wislist" autocomplete="off"  placeholder="Password">
                     </div>

          <button type="button" class="btn btn-primary" id="login_btn_wishlist" style="width: 150px;">Login</button>
           </div>
        </div>

      </div>
    </div>

{{-- Wishlits user Add To Cart End --}}
 <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
    <div class="widget widget-our-services ">
        <div class="widget-content">
            <ul class="our-services">

                <li class="service">
                    <a class="link-to-service" href="#">
                        <i class="fa fa-truck fa-2x" aria-hidden="true"></i>
                        <div class="right-content">
                            <b class="title">Free Shipping</b>
                            <span class="subtitle">On Oder Over $99</span>
                            <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                        </div>
                    </a>
                </li>

                <li class="service">
                    <a class="link-to-service" href="#">
                        <i class="fa fa-gift fa-2x" aria-hidden="true"></i>
                        <div class="right-content">
                            <b class="title">Special Offer</b>
                            <span class="subtitle">Get a gift!</span>
                            <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                        </div>
                    </a>
                </li>

                <li class="service">
                    <a class="link-to-service" href="#">
                        <i class="fa fa-reply fa-2x" aria-hidden="true"></i>
                        <div class="right-content">
                            <b class="title">Order Return</b>
                            <span class="subtitle">Return within 7 days</span>
                            <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
 </div>
    </div>

    <div class="container mt-2" style="font-size: 18px; border: 1px; margin-top: 30px;">
    <div class="form-group">
        <label for="exampleFormControlTextarea1"></label>
         <p style="width: 300px;">{{ $Data->product_details }}</p>
      </div>


    </div>



    <script>
 $(document).ready(function(){

  $.ajaxSetup({
headers: {
 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});

toastr.options = {
    "closeButton": true,
    "newestOnTop": true,
    "positionClass": "toast-top-right"
  };

   var pd_size=$('#pd_size').val();
     if(pd_size.match("No")){
        $('#product-combox-size').hide();
     }else{
        pd_size=$('#product-combox-size').val();
     }

    $('#product_Img').elevateZoom();

     $("#quantity").mouseover(function(){
     $("#quantity").prop('disabled', true);
      });


$(document).on('click','#increment-btn',function(e){
    e.preventDefault();


  var quantity = parseInt($('#quantity').val());

  var pdName =$('#pd_name').val();
  //
    $('#quantity').val(quantity + 1);
 	 $("#decrement-btn").prop('disabled', false);


});


$(document).on('click','#decrement-btn',function(e){
    e.preventDefault();
     var quan_tity = parseInt($('#quantity').val());

         if(quan_tity==1){
         $("#decrement-btn").prop('disabled', true);
          }else if(quan_tity>0){
           $('#quantity').val(quan_tity -1);

         }

});


 //Login with Add to cart addTo_Cart button
    var UserGmail=$('#session_gmail').val();
    //var pd_size="";
     $('.dicount_info').hide();

       $(document).on('click','#Add_to_cart',function(e){
         e.preventDefault();


         if(document.getElementById('session_gmail').value==""){
            $('#exampleModal').modal().show();
         }else if(!pd_size.match("No")){

            if(document.getElementById("product-combox-size").value=="Select----size"){
                toastr.warning("Select--product--Size");
              }

           }else{

            var pdName=$('#pd_name').val();
            var quantity = parseInt($('#quantity').val());

            $.ajax({
                url:"{{ route('Add_toCart_increment_stock') }}",
                type: "GET",
                data:{
                    pdName:pdName
                },
               success:function(data){
                   var quan= Number(quantity);
                    if( quan>= data){
                        toastr.warning("Your Quantity Over Stock not available");
                        $('#stock_not').show();
                        $('#in_stock').hide();
                    }else{

  $('#in_stock').show();
  $('#stock_not').hide();

   var pd_discount=0;
   var discount = parseInt($('#pd_discount').val());
   var sell_price=parseInt($('#pd_sellPrice').val());
   var quan_tity = parseInt($('#quantity').val());

   if(discount>0){
   var dec =(discount / 100).toFixed(2);
      pd_discount = sell_price * dec;
      sell_price = sell_price - pd_discount;

      $('.dicount_info').show();
      $('#sell_discount').html("Discount:"+pd_discount);
      $('#sell_price').html("Sell price:"+sell_price);
   }


   var pd_discount=0;
            var discount = parseInt($('#pd_discount').val());
            var sell_price=parseInt($('#pd_sellPrice').val());
            var quan_tity = parseInt($('#quantity').val());

            if(discount>0){
            var dec =(discount / 100).toFixed(2);
               pd_discount = sell_price * dec;
               sell_price = sell_price - pd_discount;

               $('.dicount_info').show();
               $('#sell_discount').html("Discount:"+pd_discount);
               $('#sell_price').html("Sell price:"+sell_price);
            }
                var category_Name=$('#pd_category').val();

                var pdName=$('#pd_name').val();

                var image=$('#pd_image').val();
                var product_details=$('#pd_details').val();
                 var brand_name=$('#brand_name').val();
                var pd_bill=$('#pd_bill').val();
                var Serial_id=$('#Serial_id').val();

          $.ajax({
                url:"{{ route('login_Add_toCart') }}",
                type: "POST",
                data:{
                    UserGmail:UserGmail,
                    category_Name:category_Name,
                    pd_size:pd_size,
                    pdName:pdName,
                    sell_price:sell_price,
                    image:image,
                    product_details:product_details,
                    pd_discount:pd_discount,
                    pd_bill:pd_bill,
                    quan_tity:quan_tity,
                    brand_name:brand_name,
                    Serial_id:Serial_id
                },
               success:function(data){
             //  console.log(data);
               alert(data);
             $('.dicount_info').hide();
                    }
                });
     }
     }

  });

     }

    });


          // Add to cart button click login with cart Add
           $(document).on('click','#login-btn',function(e){
            e.preventDefault();
            var pd_size="";
               var category_Name=$('#pd_category').val();
               var brand_name=$('#brand_name').val();
                var getuserGmail=$('#gmail').val();
                var user_pass=$('#us_password').val();


                if(!$('#pd_size').val().match("No")){

                    if(document.getElementById("product-combox-size").value=="Select----size"){
                        toastr.warning("Select--product--Size");
                        }else{
                            pd_size=$('#product-combox-size').val();
                        }

                    }else{
                        pd_size=$('#pd_size').val();
                    }

                    var pdName=$('#pd_name').val();
                    var quantity = parseInt($('#quantity').val());
                    pd_size=$('#product-combox-size').val();

                    $.ajax({
                        url:"{{ route('Add_toCart_increment_stock') }}",
                        type: "GET",
                        data:{
                            pdName:pdName
                        },
                       success:function(data){
                           var quan= Number(quantity);
                            if( quan>= data){
                                toastr.warning("Your Quantity Over Stock not available");
                                $('#stock_not').show();
                                $('#in_stock').hide();
                            }else{

                                $('#in_stock').show();
                                $('#stock_not').hide();
                                var image=$('#pd_image').val();
                                var product_details=$('#pd_details').val();

                                var pd_bill=$('#pd_bill').val();
                                var Serial_id=$('#Serial_id').val();
                                var pd_discount=0;
                                var discount = parseInt($('#pd_discount').val());
                                var sell_price=parseInt($('#pd_sellPrice').val());
                                var quan_tity = parseInt($('#quantity').val());

                                if(discount>0){
                                    var dec =(discount / 100).toFixed(2);
                                       pd_discount = sell_price * dec;
                                       sell_price = sell_price - pd_discount;

                                       $('.dicount_info').show();
                                       $('#sell_discount').html("Discount:"+pd_discount);
                                       $('#sell_price').html("Sell price:"+sell_price);
                                    }

                             $.ajax({
                                url:"{{ route('AddToCart') }}",
                                type:"POST",
                                data:{
                                    getuserGmail:getuserGmail,
                                    user_pass:user_pass,
                                    category_Name:category_Name,
                                    pd_size:pd_size,
                                    pdName:pdName,
                                    sell_price:sell_price,
                                    image:image,
                                    product_details:product_details,
                                    pd_discount:pd_discount,
                                    pd_bill:pd_bill,
                                    quan_tity:quan_tity,
                                    brand_name:brand_name,
                                    Serial_id:Serial_id
                                },
                               success:function(data){
                               toastr.success(data);
                               $('#exampleModal').modal().hide();
                               window.location.reload();
                               $('.dicount_info').hide();
                                    }
                                });

                                }
                             }
                         });


                     });



           ///Buy No  button click Add To cart
           $(document).on('click','#buy-btn',function(e){
            e.preventDefault();

            var pd_size="";
            if(document.getElementById('session_gmail').value==""){
               $('#userBuyNow_loginMOdel').modal().show();
            }else{


            if(!$('#pd_size').val().match("No")){

                if(document.getElementById("product-combox-size").value=="Select----size"){
                    toastr.warning("Select--product--Size");
                    }else{
                        pd_size=$('#product-combox-size').val();
                    }

                }else{
                    pd_size=$('#pd_size').val();
                }

                var pdName=$('#pd_name').val();
                var quantity = parseInt($('#quantity').val());
                $.ajax({
                    url:"{{ route('Add_toCart_increment_stock') }}",
                    type: "GET",
                    data:{
                        pdName:pdName
                    },
                   success:function(data){
                       var quan= Number(quantity);
                        if( quan>= data){
                            toastr.warning("Your Quantity Over Stock not available");
                            $('#stock_not').show();
                            $('#in_stock').hide();
                        }else{

                            $('#in_stock').show();
                            $('#stock_not').hide();
                            var pd_discount=0;
                            var discount = parseInt($('#pd_discount').val());
                            var sell_price=parseInt($('#pd_sellPrice').val());
                            var quan_tity = parseInt($('#quantity').val());

                            if(discount>0){
                              var dec =(discount / 100).toFixed(2);
                               pd_discount = sell_price * dec;
                               sell_price = sell_price - pd_discount;

                               $('.dicount_info').show();
                               $('#sell_discount').html("Discount:"+pd_discount);
                               $('#sell_price').html("Sell price:"+sell_price);
                            }

                                var category_Name=$('#pd_category').val();
                                pd_size=$('#product-combox-size').val();

                              var pdName=$('#pd_name').val();
                                var image=$('#pd_image').val();
                                var product_details=$('#pd_details').val();
                                 var brand_name=$('#brand_name').val();
                                var pd_bill=$('#pd_bill').val();
                                var Serial_id=$('#Serial_id').val();

                          $.ajax({
                                url:"{{ route('login_Bynow_Add_toCart') }}",
                                type: "POST",
                                data:{
                                    UserGmail:UserGmail,
                                    category_Name:category_Name,
                                    pd_size:pd_size,
                                    pdName:pdName,
                                    sell_price:sell_price,
                                    image:image,
                                    product_details:product_details,
                                    pd_discount:pd_discount,
                                    pd_bill:pd_bill,
                                    quan_tity:quan_tity,
                                    brand_name:brand_name,
                                    Serial_id:Serial_id
                                },
                               success:function(data){
                                 toastr.success(data);
                             $('.dicount_info').hide();
                             user_AddresssCheck();
                               }
                                });

                      }
                    }
                 });

                 }
              });


              ///Buy now Login  with Add To cart
              $(document).on('click','#login-btn_by',function(e){
                e.preventDefault();

                var check="";
                var pd_size="";
                   var category_Name=$('#pd_category').val();
                   var brand_name=$('#brand_name').val();
                    var userGmail=$('#gmail_userbuy').val();
                    var user_pass=$('#byus_password').val();

                    if(!$('#pd_size').val().match("No")){

                        if(document.getElementById("product-combox-size").value=="Select----size"){
                            toastr.warning("Select--product--Size");
                            }else{
                                pd_size=$('#product-combox-size').val();
                            }

                        }else{
                            pd_size=$('#pd_size').val();
                        }


                      var pdName=$('#pd_name').val();
                      var quantity = parseInt($('#quantity').val());

                      $.ajax({
                        url:"{{ route('Add_toCart_increment_stock') }}",
                        type: "GET",
                        data:{
                            pdName:pdName
                        },
                       success:function(data){
                           var quan= Number(quantity);
                            if( quan>= data){
                                toastr.warning("Your Quantity Over Stock not available");
                                $('#stock_not').show();
                                $('#in_stock').hide();
                            }else{
                            $('#in_stock').show();
                            $('#stock_not').hide();

                                var image=$('#pd_image').val();
                                var product_details=$('#pd_details').val();

                                var pd_bill=$('#pd_bill').val();
                                var Serial_id=$('#Serial_id').val();
                                var pd_discount=0;
                                var discount = parseInt($('#pd_discount').val());
                                var sell_price=parseInt($('#pd_sellPrice').val());
                                var quan_tity = parseInt($('#quantity').val());

                                if(discount>0){
                                    var dec =(discount / 100).toFixed(2);
                                       pd_discount = sell_price * dec;
                                       sell_price = sell_price - pd_discount;

                                       $('.dicount_info').show();
                                       $('#sell_discount').html("Discount:"+pd_discount);
                                       $('#sell_price').html("Sell price:"+sell_price);
                                    }

                             $.ajax({
                                url:"{{ route('Buynow_loginAdd_toCart') }}",
                                type:"POST",
                                data:{
                                    userGmail:userGmail,
                                    user_pass:user_pass,
                                    category_Name:category_Name,
                                    pd_size:pd_size,
                                    pdName:pdName,
                                    sell_price:sell_price,
                                    image:image,
                                    product_details:product_details,
                                    pd_discount:pd_discount,
                                    pd_bill:pd_bill,
                                    quan_tity:quan_tity,
                                    brand_name:brand_name,
                                    Serial_id:Serial_id
                                },
                               success:function(data){
                               if("Login SuccessFull..".match(data)){
                               toastr.success("Login SuccessFull..");
                               $('#userBuyNow_loginMOdel').modal().hide();
                               user_AddresssCheck(userGmail);
                               window.location.reload();
                               $('.dicount_info').hide();
                               }else{

                                   toastr.warning(data);
                               }

                              }
                                });

                                }
                                }

                            });


                        });




               ///user infromation Add Check
               function user_AddresssCheck(user_Gmail){
             //var user_Gmail=$('#session_gmail').val();

                $.ajax({
                    url:"{{ route('check_userAddress') }}",
                    type:"GET",
                    data:{
                        user_Gmail:user_Gmail
                    },
                    success:function(data){

                      if(data.match("User_Infromation_Alrady_Add")){

                        window.location.href = "{{ route('userCart_From') }}";
                      }else{
                     window.location.href = "{{ route('UserInformation_Add') }}";
                    }
                  }

                });
              }




   ///Wishlist
   $(document).on('click','#btn_wishlist_user',function(e){
    e.preventDefault();

    if(document.getElementById('session_gmail').value==""){
      $('#userWishlist_loginMOdel').modal().show();
   }else{


    if(!$('#pd_size').val().match("No")){

        if(document.getElementById("product-combox-size").value=="Select----size"){
            toastr.warning("Select--product--Size");
            }else{
                pd_size=$('#product-combox-size').val();
            }

        }else{
            pd_size=$('#pd_size').val();
        }


    var pdName=$('#pd_name').val();
    var quantity = parseInt($('#quantity').val());

    $.ajax({
        url:"{{ route('Add_toCart_increment_stock') }}",
        type: "GET",
        data:{
            pdName:pdName
        },
       success:function(data){
           var quan= Number(quantity);
            if( quan>= data){
                toastr.warning("Your Quantity Over Stock not available");
                $('#stock_not').show();
                $('#in_stock').hide();
            }else{

                $('#in_stock').show();
                $('#stock_not').hide();

                var pd_discount=0;
                var discount = parseInt($('#pd_discount').val());
                var sell_price=parseInt($('#pd_sellPrice').val());
                var quan_tity = parseInt($('#quantity').val());
                var user_gmail=$('#session_gmail').val();

                if(discount>0){
                var dec =(discount / 100).toFixed(2);
                 pd_discount = sell_price * dec;
                 sell_price = sell_price - pd_discount;

                 $('.dicount_info').show();
                 $('#sell_discount').html("Discount:"+pd_discount);
                 $('#sell_price').html("Sell price:"+sell_price);
                }
                  var category_Name=$('#pd_category').val();
                  var pdName=$('#pd_name').val();
                  var image=$('#pd_image').val();
                  var product_details=$('#pd_details').val();
                   var brand_name=$('#brand_name').val();
                  var pd_bill=$('#pd_bill').val();
                  var Serial_id=$('#Serial_id').val();

                $.ajax({
                  url:"{{ route('wishlist_Add_toCart') }}",
                  type: "POST",
                  data:{
                    user_gmail:user_gmail,
                      category_Name:category_Name,
                      pd_size:pd_size,
                      pdName:pdName,
                      sell_price:sell_price,
                      image:image,
                      product_details:product_details,
                      pd_discount:pd_discount,
                      pd_bill:pd_bill,
                      quan_tity:quan_tity,
                      brand_name:brand_name,
                      Serial_id:Serial_id
                  },success:function(data){
                    toastr.success(data);
                $('.dicount_info').hide();
                    }
            });

        }
   }
});
   }
});



//wishlist login with Add
   $(document).on('click','#login_btn_wishlist',function(e){
    e.preventDefault();

    var userGmail=$('#gmail_userWishlist').val();
    var user_password=$('#password_wislist').val();

    $.ajax({
        url:"{{ route('Wishlist_login') }}",
        type:"GET",
        data:{
            userGmail:userGmail,
            user_password:user_password,
        },
       success:function(data){
       console.log(data);
       if("Login SuccessFull..".match(data)){
       toastr.success("Login SuccessFull..");
       $('#userWishlist_loginMOdel').modal().hide();
       window.location.reload();
       $('.dicount_info').hide();

       }else{
        toastr.warning(data);
       }

      }
        });
   });


      });
        </script>

</body>
</html>
