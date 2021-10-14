<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/Css/style.css" rel="stylesheet" media="all" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/2.2.3/jquery.elevatezoom.min.js" integrity="sha512-UH428GPLVbCa8xDVooDWXytY8WASfzVv3kxCvTAFkxD2vPjouf1I3+RJ2QcSckESsb7sI+gv3yhsgw9ZhM7sDw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <style>

    </style>
</head>
<body>
   @php
   $user_gmail="";
 if(!empty(Session()->get('gmail'))){
  $user_gmail= Session()->get('gmail');
 }
    @endphp

  <input type="hidden" id="session_gmail" value="<?php echo  $user_gmail;?>" />

     <!-- Header -->
     <header class="header">
        <!-- Top Bar -->
        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row">
                        <div class="top_bar_contact_item">
                            <div class="top_bar_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918577/phone.png" alt=""></div>+91 9823 132 111
                        </div>

                        <div class="top_bar_contact_item" >
                            <div class="tracking_number" id="tracking_number"><a href="#">Tracking Number</a></div>
                        </div>


                        <div class="top_bar_content ml-auto">

                            <div class="top_bar_menu">
                                <ul class="standard_dropdown top_bar_dropdown">
                             {{--        <li> <a href="#">English<i class="fas fa-chevron-down"></i></a>
                                        <ul>
                                            <li><a href="#">Italian</a></li>
                                            <li><a href="#">Spanish</a></li>
                                            <li><a href="#">Japanese</a></li>
                                        </ul>
                                    </li> --}}

                                    @if(session()->has('gmail'))

                                    <li class="userLog_order"> <a href="#" class="userGmail">{{$user_gmail }}<i class="fas fa-chevron-down"></i></a>
                                        <ul>
                                            <li><a href="#" id="">Cart Order</a></li>
                                            <li><a href="#" id="my_order">MY Order</a></li>
                                        </ul>

                                    </li>
                                    @endif
                                </ul>
                            </div>
                            <div class="top_bar_user">
                                <div class="user_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918647/user.svg" alt=""></div>
                                <div class="register"><a href="#" id="Register">Register</a></div>
                                @if(session()->has('gmail'))
                                <div class="user_icon"><img src="/webImage/turn-off.png" alt=""></div>
                                <div class="logout"><a href="#" id="user_logout">LogOut</a></div>
                                @endif
                            {{--     <div><a href="#">Sign in</a></div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Header Main -->
        <div class="header_main">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="col-lg-2 col-sm-3 col-3 order-1">
                        <div class="logo_container">

              <!-- <div class="logo"><a href="#">
                  <img  src="logo2.png" alt="logo"></a></div>   -->

                        </div>
                    </div> <!-- Search -->
                    <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right ">
                        <div class="header_search">
                            <div class="header_search_content">
                                <div class="header_search_form_container">
                                    <form action="#" class="header_search_form clearfix">
                                    <input type="search" required="required" class="header_search_input" id="header_search_input" placeholder="Search for products..." />

                                        <div class="custom_dropdown" style="display: none;">
                                            <div class="custom_dropdown_list">
                                             <span class="custom_dropdown_placeholder clc">All Categories</span>

                                              <i class="fas fa-chevron-down"></i>
                                                <ul class="custom_list clc">
                                                    <li><a class="clc" href="#">All Categories</a></li>

                                                    <li><a class="clc" href="#">Computers</a></li>
                                                    <li><a class="clc" href="#">Laptops</a></li>
                                                    <li><a class="clc" href="#">Cameras</a></li>
                                                    <li><a class="clc" href="#">Hardware</a></li>
                                                    <li><a class="clc" href="#">Smartphones</a></li>

                                                </ul>
                                            </div>
                                        </div> <button type="button" class="header_search_button trans_300 btn-danger"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918770/search.png" alt=""></button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div> <!-- Wishlist -->
                    <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                        <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                            <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                                <div class="wishlist_icon" id="user_wishlist"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918681/heart.png" alt=""></div>
                                <div class="wishlist_content">
                                    <div class="wishlist_text text-white">Wishlist</div>

                                    <div class="wishlist_count" id="wishlist_count">1</div>
                                </div>
                            </div> <!-- Cart -->
                            <div class="cart">
                                <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                    <div class="cart_icon"><a href="#" id="user_cart"> <img  src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918704/cart.png" alt="">
                                     <div class="cart_count"><span style="color: white;" id="cart_count">0</span></a></div>
                                    </div>
                                    <div class="cart_content">
                            <div class="cart_text"><a href="#"> </a></div>
                        <div class="cart_price">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Main Navigation -->
        <nav class="main_nav">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="main_nav_content d-flex flex-row">
                            <!-- Categories Menu -->
                            <!-- Main Nav Menu -->
                            <div class="main_nav_menu m-auto">
                                <ul class="standard_dropdown main_nav_dropdown">
                                    <li><a href="#">Home<i class="fas fa-chevron-down"></i></a></li>
                                    <li class="hassubs"> <a href="#">All Cateogry<i class="fas fa-chevron-down"></i></a>
                                        <ul>
                                       {{--       @foreach ($categoryName as $item)
                                            {{ $item->Category }}  --}}
                                            <li> <a href="#">Laptop<i class="fas fa-chevron-down"></i></a>

                                                <ul>
                                               <li><a href="#">subCategory<i class="fas fa-chevron-down"></i></a></li>
                                                </ul>


                                            </li>
                                        </ul>
                                    </li>
                                    <li class="hassubs"> <a href="#">Featured Brands<i class="fas fa-chevron-down"></i></a>
                                        <ul>
                                            <li> <a href="#">APPLE<i class="fas fa-chevron-down"></i></a>
                                                <ul>
                                                    <li><a href="#">Laptop<i class="fas fa-chevron-down"></i></a></li>
                                                    <li><a href="#">Mobiles<i class="fas fa-chevron-down"></i></a></li>
                                                    <li><a href="#">Ipads<i class="fas fa-chevron-down"></i></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Samsung<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="#">Lenovo<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="#">DELL<i class="fas fa-chevron-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="hassubs"> <a href="#">Pages<i class="fas fa-chevron-down"></i></a>
                                        <ul>
                                            <li><a href="shop.html">Shop<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="product.html">Product<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="blog_single.html">Blog Post<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="regular.html">Regular Post<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="cart.html">Cart<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
                                </ul>
                            </div> <!-- Menu Trigger -->
                            <div class="menu_trigger_container ml-auto">
                                <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                    <div class="menu_burger">
                                        <div class="menu_trigger_text">menu</div>
                                        <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Menu -->
        <div class="page_menu">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="page_menu_content">
                            <div class="page_menu_search">
                                <form action="#"> <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products..."> </form>
                            </div>
                            <ul class="page_menu_nav">
                                <li class="page_menu_item has-children"> <a href="#">Language<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item has-children"> <a href="#">Currency<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item"> <a href="#">Home<i class="fa fa-angle-down"></i></a> </li>
                                <li class="page_menu_item has-children"> <a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
                                        <li class="page_menu_item has-children"> <a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                            <ul class="page_menu_selection">
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item has-children"> <a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item has-children"> <a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
                                <li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
                            </ul>
                            <div class="menu_contact">
                                <div class="menu_contact_item">
                                    <div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>+38 068 005 3570
                                </div>
                                <div class="menu_contact_item">
                                    <div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


<!--   Cart order Show login check   -->
<div class="modal fade" id="exampleModal_cartOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cart Show Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="form-group">
                <label for="formGroupExampleInput2">Gmail:</label>
                 <input type="text" class="form-control" id="gmail_cartShow" autocomplete="off"    placeholder="Gmail">
                 </div>

                 <div class="form-group">
                    <label for="formGroupExampleInput2">Password:</label>
                     <input type="text" class="form-control" id="password_cartShow" autocomplete="off"    placeholder="Password">
                     </div>


          <button type="button" class="btn btn-primary" id="login-btnCartCheck" style="width: 150px;">Login</button>
           </div>
        </div>

      </div>
    </div>

<!--   Cart order Show login check End- -->



<!--   Cart order Show login check   -->
<div class="modal fade" id="exampleModal_tracking" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tracking Number</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="form-group">
                <label for="formGroupExampleInput2">Gmail:</label>
                 <input type="text" class="form-control" id="gmail_tracking" autocomplete="off"  placeholder="Gmail">
                 </div>

                 <div class="form-group">
                    <label for="formGroupExampleInput2">Tracking Number:</label>
                     <input type="text" class="form-control" id="tracking_num" autocomplete="off"  placeholder="Tracking Number">
                     </div>


          <button type="button" class="btn btn-primary" id="tracking-btn" style="width: 150px;">Send</button>

           </div>
        </div>

      </div>
    </div>

<!--   Cart order Show login check End- -->




{{-- model  wishlist order show Loging--}}
<div class="modal fade" id="exampleModal_wishlist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Wishlist Show Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="form-group">
                <label for="formGroupExampleInput2">Gmail:</label>
                 <input type="text" class="form-control" id="gmail_wishlist" autocomplete="off"    placeholder="Gmail">
                 </div>

                 <div class="form-group">
                    <label for="formGroupExampleInput2">Password:</label>
                     <input type="text" class="form-control" id="password_wishlist" autocomplete="off"    placeholder="Password">
                     </div>


          <button type="button" class="btn btn-primary" id="login-btnWishlist" style="width: 150px;">Login</button>
           </div>
        </div>

      </div>
    </div>
{{--  wishlist order end --}}


    <script>
$(document).ready(function(){

$(document).on('click','#user_cart',function(e){
     e.preventDefault();

   if(document.getElementById('session_gmail').value==""){
    $('#exampleModal_cartOrder').modal().show();

    }else{
        var user_Gmail=$('#session_gmail').val();
        user_AddresssCheck(user_Gmail);
    }
 });



  $(document).on('click','#login-btnCartCheck',function(e){
    e.preventDefault();

    toastr.options = {
        "closeButton": true,
        "newestOnTop": true,
        "positionClass": "toast-top-right"
      };
               var userGmail=$('#gmail_cartShow').val();
                var password=$('#password_cartShow').val();

        $.ajax({
                url:"{{ url('Login_cartShow_order') }}",
                type:"GET",
                data:{
                  userGmail:userGmail,
                  password:password
                },
               success:function(data){

                   if(data.match("Login SuccessFull..")){
                   //alert("Login SuccessFull..");
                   toastr.success(data);
                   user_AddresssCheck(userGmail);
                $('#exampleModal_cartOrder').modal().hide();
                 window.location.reload();
                 }else{
                    toastr.warning(data);

                 }
             }
      });
        });


        function user_AddresssCheck(user_Gmail){

          //  var user_Gmail=$('#gmail_cartShow').val();
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


   $(document).on('click','#user_logout',function(e){
            e.preventDefault();

            toastr.options = {
                "closeButton": true,
                "newestOnTop": true,
                "positionClass": "toast-top-right"
              };

            if(!document.getElementById('session_gmail').value==""){
                $.ajax({
                    url:"{{ route('userLogout') }}",
                    type:"GET",
                   success:function(data){
                    //   alert();
                       toastr.success("Log Out..");
                     // window.location.reload();
                     window.location.href = "{{ route('index') }}";
                 }
         });

            }

   });


   $(document).on('click','#signup-btn',function(e){
    e.preventDefault();

    toastr.options = {
        "closeButton": true,
        "newestOnTop": true,
        "positionClass": "toast-top-right"
      };

         var user_Name=$('#userName').val();
           var user_gmail=$('#Gmail').val();
           var password=$('#password').val();

           var conf_pass=$('#Con_password').val();
           var phone=$('#phone').val();

      $.ajax({
           url:"singUp",
           type:"GET",
           data:{
               user_Name:user_Name,
               user_gmail:user_gmail,
               password:password,
               conf_pass:conf_pass,
               phone:phone
           },
          success:function(data){
          toastr.success(data);
            $('#userName').val('');
           $('#Gmail').val('');
           $('#password').val('');
          $('#Con_password').val('');
           $('#phone').val('');

               }
           });
      });



   $(document).on('click','#tracking_number',function(e){
    e.preventDefault();

    $('#exampleModal_tracking').modal().show();

      });

      //Tracking order show tracking-btn

      $(document).on('click','#tracking-btn',function(e){
        e.preventDefault();

        var userGmail=$('#gmail_tracking').val();
        var tracking_number=$('#tracking_num').val();

$.ajax({
        url:"{{ route('trackin_matchShow_Order') }}",
        type:"GET",
        data:{
            userGmail:userGmail,
            tracking_number:tracking_number
        },
       success:function(data){
           console.log(data);
           if(data.match("Your_Tracking_Code_validad..")){

 //  swal(data, "You clicked the button!", "success");
         //  $('#exampleModal_tracking').modal().hide();
         //  window.location.reload();

       window.location.href = "tracking_orderForm/"+userGmail +"/"+tracking_number;
          }else{
             toastr.warning(data);

          }
     }
});

   });



      $(document).on('click','#my_order',function(e){
        e.preventDefault();

        window.location.href = "{{ route('userFinal_orderForm') }}";

          });

///user user_wishlist
$(document).on('click','#user_wishlist',function(e){
    e.preventDefault();


    if(document.getElementById('session_gmail').value==""){
        $('#exampleModal_wishlist').modal().show();
    }else{

        window.location.href = "{{ route('wishlist_formShow') }}";
    }

      });

      count_wishlist();

    //wishlist count
    function count_wishlist(){
  if(!document.getElementById('session_gmail').value==""){
  //$('#exampleModal_wishlist').modal().show();

  var user_Gmail=$('#session_gmail').val();

  $.ajax({
    url:"{{ route('wishlist_orderCount') }}",
    type:"GET",
    data:{
        user_Gmail:user_Gmail,
    },
   success:function(data){
    //alert(data);
    $('#wishlist_count').html(data);
 }
});
   }
    }

    count_Cart();
 //cart count
 function count_Cart(){
  if(!document.getElementById('session_gmail').value==""){
  //  $('#exampleModal_cartOrder').modal().show();

  var user_Gmail=$('#session_gmail').val();

  $.ajax({
    url:"{{ route('cart_orderCount') }}",
    type:"GET",
    data:{
        user_Gmail:user_Gmail,
    },
   success:function(data){
    //alert(data);
    $('#cart_count').html(data);

 }
});
   }
    }

      $(document).on('click','#login-btnWishlist',function(e){
        e.preventDefault();

        toastr.options = {
            "closeButton": true,
            "newestOnTop": true,
            "positionClass": "toast-top-right"
          };

        var userGmail=$('#gmail_wishlist').val();
        var user_password=$('#password_wishlist').val();

$.ajax({
        url:"{{ route('wishlist_orderLogin') }}",
        type:"GET",
        data:{
            userGmail:userGmail,
            user_password:user_password
        },
       success:function(data){
        if(data.match("Login SuccessFull..")){

            toastr.success(data);
            window.location.href = "{{ route('wishlist_formShow') }}";
           $('#exampleModal_wishlist').modal().hide();
          window.location.reload();
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
