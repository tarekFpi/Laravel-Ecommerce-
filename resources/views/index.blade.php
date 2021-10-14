<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Untitled Document</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/brands.min.css" integrity="sha512-apX8rFN/KxJW8rniQbkvzrshQ3KvyEH+4szT3Sno5svdr6E/CP0QE862yEeLBMUnCqLko8QaugGkzvWS7uNfFQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="super_container">
    <!-- Header -->
  @include('header')

<!--image slider start -->
<div class="content_slider">
 {{--  	<div class="container">  --}}

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

<ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner">

    <div class="carousel-item active">
      <img id="slide_imag" class="d-block w-100" src="/webImage/pp.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img id="slid_imag" class="d-block w-100" src="/webImage/im2.jpg" alt="Second slide">

    </div>

    <div class="carousel-item">
        <img id="slid_imag" class="d-block w-100" src="/webImage/main-slider-1-1.jpg" alt="Third slide">

        <div class="slide-info slide-1">
            <h2 class="f-title">Kid Smart <b>Watches</b></h2>
            <span class="subtitle">Compra todos tus productos Smart por internet.</span>
            <p class="sale-info">Only price: <span class="price">$59.99</span></p>
            <a href="#" class="btn-link btn-danger">Shop Now</a>
        </div>
      </div>

    <div class="carousel-item">
      <img id="slid_imag" class="d-block w-100" src="/webImage/im1.jpg" alt="Fourth slide">
    </div>

    <div class="carousel-item">
      <img id="slid_imag" class="d-block w-100" src="/webImage/cam3.jpg" alt="Fouth slide">
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

 <!-- image slider end  -->

<div class="container" style="margin-top: 70px;">
    <!--BANNER-->
    <div class="wrap-banner style-twin-default">
        <div class="banner-item">
          {{--   <a href="#" class="link-banner banner-effect-1"> --}}
                <figure>
         <img src="/webImage/home-1-banner-1.jpg" alt="" width="580" height="190">
                </figure>

        </div>
        <div class="banner-item2">

                <figure>
                    <img src="/webImage/home-1-banner-2.jpg" alt="" width="580" height="190">
                </figure>

        </div>
    </div>
</div>

{{--   frist order show  --}}
<div class="container mt-5 first_orderShow_content" id="product_show_Content">
    <div class="card" id="card_orderContent">
    <div class="card-body">
        <h1 style="text-align: center; margin-top: 8px;">Our New Products</h1>
        <div class="row text-center fist_OrderAdd">

        </div>
    </div>
</div>
</div>

{{--   frist order show  end--}}


{{--  search firstOrder  --}}
<div class="container mt-5 first_orderSearchShow" id="product_show_Content">
    <div class="card" id="card_orderContent">
    <div class="card-body">
        <h1 style="text-align: center; margin-top: 8px;">Our New Products </h1>
        <h3 style="color: red;display: none;" id="frist_OrderEmpty">Data Not Fond</h3>
        <div class="row text-center first_searchOrder_add">

        </div>
    </div>
</div>
</div>
{{--  search end firstOrder  --}}

<!--Latest Products-->
<div class="container mt-3" id="latest_order">
    <h3 class="title-box text-dark d-lg-block;">Latest Products</h3>
        <div class="wrap-top-banner">

 <figure><img src="/webImage/digital-electronic-banner.jpg" width="1260px" height="240" alt=""></figure>

        </div>
    </div>

<!-- Latest Order show-->
    <div class="container mt-5" id="product_show_Content">
        <div class="card" id="card_orderContent">
        <div class="card-body" class="stretched-link">
            <h1 style="text-align: center; margin-top: 8px;">Latest Order</h1>
            <div class="row mt-3 Latest_orderAdd">
              {{--    @foreach ($latest as $item)

                <div class="col-lg-3  col-md-6 col-sm-12 mb-3">

                 <div class="card" id="myCart">
                     <div class="inner">
                  <img class="card-img-top" id="card_image" src="{{$item->image }}" height="220px" width="250px">
                </div>
                  <div class="card-body">
                    <h5 class="card-title">{{ "Name:".$item->product_name }}</h5>
                    <p class="card-text text-danger">{{ "Price:".$item->sell_price }}</p>

                    <div class="wrap-btn">
         <a href="#"  class="btn btn-success" >ADD TO CART</a>
                    </div>

                  </div>
                </div>

                </div>
                @endforeach
  --}}
            </div>
        </div>
    </div>
</div>



{{-- Woman --}}
<div class="container mt-5">
<h3 class="title-box" id="womain_product">Product Categories</h3>
<div class="wrap-top-banner">

   <figure><img src="/webImage/fashion-accesories-banner.jpg" width="1170" height="240" alt=""></figure>

</div>
</div>


<div class="title_content">
<!--     <img src="p3.jpg"/> -->

    <div class="add_imag1">
      <h4>Smooth, Rich & Loud Audio</h4>
      <h1>Branded Headphones</h1>
      <img src="/webImage/headpp.jpg"/>
    </div>

    <div class="add_imag2">
    <h4>A Bigger Phone</h4>
    <h1>Smart Phones 5</h1>
    <img src="/webImage/iphon.jpg"/>

    </div>
</div>

<!-- rack_Order -->
<div class="rack_Order mt-5">

<div class="Free_Shipping">
<i class="fas fa-cart-plus fa-4x"></i>
    <h3 style="margin-left: 8px;">Free Shipping</h3>
    <br>
 </div>



<div class="Fast_Delivery">
<i class="fas fa-truck fa-4x"></i>
  <h3>Fast Delivery</h3>
 <br>

  </div>



<div class="Big_Choice">
<i class="fas fa-thumbs-up fa-4x"></i>
<h3>Big Choice</h3>
<br>

</div>

</div>
 <br>
<!-- rack_Order end -->

<footer class="footer">
 <div class="footer_mainContent">

    <div class="dowanloa_app">
        <h2>Download</h2>

        <div class="google_image">
             <img src="/webImage/google.png" width="120px" height="70px" style="margin-top:10px; margin-left:20px;"/>
        </div>

       <div class="applestore">
             <img src="/webImage/applestore.png" width="120px" height="70px" style="margin-top:10px;"/>
       </div>

    </div>

    <div class="Menu_app">

     <h2>Menu</h2>
    <h6>Privacy Policy</h6>
    <h6>Cookie Policy</h6>
    <h6>Purchasing Policy</h6>
    <h6>Terms & Conditions</h6>
    <h6>Career</h6>
    </div>

    <div class="Contact_Us_footer">
        <h2>Contact Us</h2>
        <h6>House #8, Road # 14, </h6>
        <h6>Dhanmondi, Dhaka-1209.</h6>
        <h6>Email: support@evaly.com.bd</h6>
        <h6>Contact no: 09638111666</h6>

    </div>

    <div class="Get_in_touch">
   <h2>Get in Touch</h2>
   <img src="/webImage/youtube.png" width="64px" height="64px" style="margin-top:10px;"/>
   <img src="/webImage/facebook.png" width="64px" height="64px" style="margin-top:10px;" style="margin-right: 30px;"/>

    </div>
 </div>
</footer>


<!-- Add Model-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sing Up</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="form-group">
                <label for="formGroupExampleInput2">UesrName:</label>
                 <input type="text" class="form-control" id="userName" autocomplete="off"    placeholder="UesrName">
                 </div>

                 <div class="form-group">
                    <label for="formGroupExampleInput2">Gmail:</label>
                     <input type="text" class="form-control" id="Gmail" autocomplete="off"    placeholder="Gamil">
                     </div>

                     <div class="form-group">
                        <label for="formGroupExampleInput2">Password:</label>
                         <input type="text" class="form-control" id="userPassword" autocomplete="off"    placeholder="Password">
                         </div>

                         <div class="form-group">
                            <label for="formGroupExampleInput2">Confrom Password:</label>
                             <input type="text" class="form-control" id="Con_password" autocomplete="off"   placeholder="Confrom Password">
                             </div>


                             <div class="form-group">
                                <label for="formGroupExampleInput2">Phone Number:</label>
                                 <input type="text" class="form-control" id="phone" autocomplete="off"  placeholder="Phone Number">
                            </div>

                     <button type="button" class="btn btn-primary" id="signup-btn" style="width: 150px;">Sing Up</button>
                  </div>

      </div>
    </div>
  </div>
 <!-- Add Model End-->


<script>
  $(document).ready(function(){


 FristOrderShow();

function FristOrderShow(){
    $('.first_orderSearchShow').hide();

    $.ajax({
       url:"{{ route('FristOrder_show') }}",
       type:"GET",
        dataType:"json",
        success:function(respones){
          var data="";

        $.each(respones,function(key,value){

            data= data + "<div class='col-lg-3 col-md-6 col-sm-12 mb-3'>";
                data= data + "<div class='card' id='myCart1' data-id="+value.id+">";
                 data= data + "<div class='inner'> <img class='card-img-top' id='card_image' src="+value.image+" height='220px' width='250px'></div>"

                  data= data + "<div class='card-body'>";
                    data= data +"<h5 class='card-title'>Name:"+value.product_name+"</h5>"
                    data= data + "<p class='card-text text-danger'>price:"+value.sell_price+"</p>"
                    data= data + " <div class='wrap-btn'><a href='user_order_cart/"+value.id+"' class='btn btn-primary stretched-link' id='add_toCart'>VIEW</a> </div>"
                    data= data + "</div>"
                    data= data + "</div>"
                    data= data + "</div>";

          });
          $('.first_orderShow_content').show();
         $('.fist_OrderAdd').html(data);

        }

    });
  }

  //header_search_button
    $(document).on('click','.header_search_button',function(){

        var search_data= $('#header_search_input').val();
        if (!document.getElementById("header_search_input").value=="") {
        $.ajax({
            url:"{{ route('serarch_homepage_order') }}",
             type:"GET",
             dataType:"json",
            data:{
             search_data:search_data
            },
            success:function(respones){
                console.log(respones);

              var data="";
                $.each(respones,function(key,value){
                    data= data + "<div class='col-lg-3 col-md-6 col-sm-12 mb-3'>";
                      data= data + "<div class='card' id='myCart1' data-id="+value.id+">";
                       data= data + "<div class='inner'> <img class='card-img-top' id='card_image' src="+value.image+" height='220px' width='250px'></div>"

                        data= data + "<div class='card-body'>";
                          data= data +"<h5 class='card-title'>Name:"+value.product_name+"</h5>"
                          data= data + "<p class='card-text text-danger'>price:"+value.sell_price+"</p>"
                          data= data + " <div class='wrap-btn'><a href='user_order_cart/"+value.id+"' class='btn btn-primary stretched-link' id='add_toCart'>VIEW</a> </div>"
                          data= data + "</div>"
                          data= data + "</div>"
                          data= data + "</div>";
                                 });
                     $('.first_orderSearchShow').show();
                      $('.first_searchOrder_add').html(data);
                   $('.first_orderShow_content').hide();
            }
        });

    }else{

         alert("Search Name");
         FristOrderShow();
    }
    });


    Latest_OrderShow();
function Latest_OrderShow(){

    $.ajax({
       url:"{{ route('LatestOrder_show') }}",
       type:"GET",
        dataType:"json",
        success:function(respones){
          var data="";
        $.each(respones,function(key,value){

            data= data + "<div class='col-lg-3 col-md-6 col-sm-12 mb-3'>";
                data= data + "<div class='card' id='myCart1' data-id="+value.id+">";
                 data= data + "<div class='inner'> <img class='card-img-top' id='card_image' src="+value.image+" height='220px' width='250px'></div>"

                  data= data + "<div class='card-body'>";
                    data= data +"<h5 class='card-title'>Name:"+value.product_name+"</h5>"
                    data= data + "<p class='card-text text-danger'>Price:"+value.sell_price+"</p>"
                    data= data + " <div class='wrap-btn' style='text-align: center'><a href='user_order_cart/"+value.id+"' class='btn btn-primary stretched-link' id='add_toCart'>VIEW</a> </div>"
                    data= data + "</div>"
                    data= data + "</div>"
                    data= data + "</div>";

          });

         $('.Latest_orderAdd').html(data);

        }

    });
  }

//  data= data + "<div class='col-lg-3 col-md-6 col-sm-12 mb-3'><div class='card mt-3' id='myCart'><div class='inner'><img class='card-img-top' id='card_image' src="+value.image+" height='220px' width='250px'><div class='card-body'> <h5 class='card-title'>"+value.product_name+"</h5><p class='card-text text-danger'>"+value.sell_price+"</p> <div class='wrap-btn'><a href='#'class='btn btn-success stretched-link' id='add_toCart'>ADD TO CART</a> </div> </div></div> </div> </div>";

 //add_toCart
 $(document).on('click','#Register',function(e){
 e.preventDefault();

 $('#exampleModal').modal().toggle();
 });


//About page show
  $(document).on('click','#myCart1',function(e){
 e.preventDefault();

 var id= $(this).data('id');

 window.location.href = "user_order_cart/"+id;


 });

  });

</script>
</body>
</html>
