
@extends('admin_muster')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 	<!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
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

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </script>
<style>
   input[type=text]{
 height:50px;
 font-size:18px;
 width:400px;
 box-shadow: 1px 1px 1px 1px  black;
 }


 .container{
    margin-top: 20px;
    width: 80%;
    border-radius: 4px;
    background: #fff;
 //   box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
      transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
  cursor: pointer;
  width: 100%;
}

.search_student_data{
  text-align: center;
  width: 100%;
  justify-content: center;
}

label{
  font-size: 18px;
}

#select_tracking_status{
    box-shadow: 1px 1px 1px 1px  black;
    width:400px;
	height:55px;

  }

  .userAllOrder{
  width: 70%;
  margin-left: 0%;
}

</style>
</head>
<body>

  @section('admin_content')
 <div class="container">

    <h4 style="text-align: center; color: red;">
    @php
    $date = date('Y-m-d');
    @endphp
 </h4>


 <input type="hidden" id="current_date" value="<?php echo  $date;?>" />

    <h3 style="text-align: center;">Approv Order Show</h3>
     <table class="table table-striped" id="mydata">
  <thead>

    <tr>
      <th>pid</th>
      <th>Category</th>
      <th>Brand</th>
      <th>Name</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Discount</th>
      <th>Fee</th>
      <th>Payment</th>
      <th>Transction</th>
      <th>Status</th>
      <th>phone</th>
      <th>Accept Date</th>
      <th>Image</th>
      <th>View</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>


  </tbody>
</table>

<div class="total_sell" style="float: right;width: 50%; position: relative;display: flex;">
    <h3 style="margin-top: 6px;">Total :</h3> <input type="text" id="total_textSell" style="border-style: none;text-align: center; margin-left: 10px;"/>
     <input type="hidden" id="sell_total" />
 </div>



         {{-- sell product View  --}}
         <div class="modal fade" id="viewOrder_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">User Order </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

           <div class="form-group">
             <label for="formGroupExampleInput2">Bill No:</label>
          <input type="text" class="form-control" id="view_pd_bill" autocomplete="off"  placeholder="Bill">
          </div>

          <div class="form-group">
            <label for="formGroupExampleInput2">Product Size:</label>
         <input type="text" class="form-control" id="view_size" autocomplete="off">
         </div>

          <div class="form-group">
            <label for="formGroupExampleInput2">product Details:</label>

           <textarea class="form-control" id="view_pdDetails" placeholder="Product Details" rows="4" style="width: 400px;"></textarea>
         </div>

         <div class="form-group">
            <label for="formGroupExampleInput2">Odrder Date:</label>
            <input type="text" class="form-control" id="view_acceptDate" autocomplete="off">
         </div>

          <div class="form-group">
              <label for="formGroupExampleInput2">UserGmail:</label>
           <input type="text" class="form-control" id="view_gmail" autocomplete="off"  placeholder="User Gmail">
           </div>

         <div class="form-group">
            <label for="formGroupExampleInput2">RegionName:</label>
         <input type="text" class="form-control" id="view_region" autocomplete="off"  placeholder="RegionName">
         </div>

         <div class="form-group">
            <label for="formGroupExampleInput2">CityName:</label>
         <input type="text" class="form-control" id="view_city" autocomplete="off"  placeholder="CityName">
         </div>

         <div class="form-group">
            <label for="formGroupExampleInput2">AreaName:</label>
         <input type="text" class="form-control" id="view_area" autocomplete="off"  placeholder="AreaName">
         </div>

         <div class="form-group">
            <label for="formGroupExampleInput2">Address:</label>
         <input type="text" class="form-control" id="view_userAddress" autocomplete="off"  placeholder="Address">
         </div>

         <div class="form-group">
            <label for="formGroupExampleInput2">Phone:</label>
         <input type="text" class="form-control" id="view_userphne" autocomplete="off"  placeholder="Phone Number">
         </div>



         <div class="form-group">
            <label for="formGroupExampleInput2">Tracking Number:</label>
         <input type="text" class="form-control" id="view_trackingNumber" autocomplete="off"  placeholder="Tracking Number">
         </div>

         <div class="form-group">
            <label for="formGroupExampleInput2">Voucher Cord:</label>
         <input type="text" class="form-control" id="view_voucher_cord" autocomplete="off"  placeholder="Voucher Cord">
         </div>

         <div class="form-group">
            <label for="formGroupExampleInput2">Voucher Discound:</label>
         <input type="text" class="form-control" id="view_voucher_discount" autocomplete="off"  placeholder="Voucher Discound">
         </div>


             </div>

              </div>
            </div>
          </div>

     {{--  View end user order --}}

   </div>

@endsection
</body>



<script>
    $(document).ready(function(){

   $.ajaxSetup({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});


ShowAllOrder();
function ShowAllOrder(){

   $.ajax({
      url:"{{ route('Approv_OrderShow') }}",
      type:"GET",
       dataType:"json",
       success:function(respones){
         var data="";
  console.log(respones);
        var total_price=0;
        var psell=0;

       $.each(respones,function(key,value){

            data= data + "<tr>"
            data= data + "<th>"+value.id+"</th>"
            data= data + "<th>"+value.CategoryName+"</th>"
            data= data + "<th>"+value.Brand_name+"</th>"
            data= data + "<th>"+value.productName+"</th>"
            data= data + "<th>"+value.product_price+"</th>"
            data= data + "<th>"+value.sell_quntity+"</th>"
            data= data + "<th>"+value.sell_discount+"</th>"
           data= data + "<th>"+value.Delivary_free+"</th>"
            data= data + "<th>"+value.Payment_mathod+"</th>"
            data= data + "<th>"+value.transaction_id+"</th>"
            data= data + "<th>"+value.Order_status+"</th>"
            data= data + "<th>"+value.userBkash_phone+"</th>"
            data= data + "<th>"+value.Accept_Date+"</th>"
            data= data + "<th><img src="+value.Image+" width='200px' height='150px'></th>"
            data= data + "<th>"
             data= data + "<button id='view-btn' data-target='#viewOrder_model' data-toggle='modal' data-id="+value.id+"  class='btn btn-primary'>View</button>"
           data= data + "</th>"
          data= data + "<th>"
          data= data + "<button id='delete-btn'  data-id="+value.id+" class='btn btn-danger'>Delete</button>"
         data= data + "</th>"
         data= data + "</tr>";

         });
         $('#mydata tbody').html(data);

       }
   });

 }

 Approv_orderCount_date();
//total sell count OrderDate
function Approv_orderCount_date(){

    var date= $('#current_date').val();
    $.ajax({
       url:"{{ route('Approv_total_count') }}",
       type:"GET",
        dataType:"json",
        data:{
            date:date
        },
        success:function(respones){
          var data="";
         var total_price=0;
         var sell_qu=0;
        $.each(respones,function(key,value){

            sell_qu += parseInt(value.sell_quntity);
            total_price= (sell_qu * value.product_price);
           $('#sell_total').val(total_price);

          });

         var amount= $('#sell_total').val();
       $('#total_textSell').val(amount);

        }
    });

  }
//view order show
$(document).on('click','#view-btn',function(e){
    e.preventDefault();

    var getId=$(this).data('id');
    $.ajax({
        url:"{{ route('Approv_order_view') }}",
        type:"GET",
        data:{
            getId:getId
        },
       success:function(respones){

        $.each(respones,function(key,value){
               $('#view_pd_bill').val(value.Bill_no);
               $('#view_pdDetails').val(value.product_details);
               $('#view_gmail').val(value.UserGmail);
               $('#view_region').val(value.RegionName);
               $('#view_city').val(value.CityName);
               $('#view_area').val(value.AreaName);
               $('#view_userAddress').val(value.Address);
               $('#view_trackingNumber').val(value.Tracking_number);
               $('#view_voucher_cord').val(value.Voucher_Cord);
               $('#view_voucher_discount').val(value.Voucher_discound);
               $('#view_userphne').val(value.phoneNumber);
               $('#view_size').val(value.product_size);
               $('#view_acceptDate').val(value.Accept_Date);
               //
         });
            }
        });

      });

      $("#view_acceptDate").mouseover(function(){
        $("#view_acceptDate").prop('disabled', true);

           });

      $("#view_size").mouseover(function(){
        $("#view_size").prop('disabled', true);

           });

 $("#view_pd_bill").mouseover(function(){
  $("#view_pd_bill").prop('disabled', true);

     });

     $("#view_pdDetails").mouseover(function(){
   $("#view_pdDetails").prop('disabled', true);

     });

     //

     $("#view_userphne").mouseover(function(){
        $("#view_userphne").prop('disabled', true);

          });

  $("#view_gmail").mouseover(function(){
     $("#view_gmail").prop('disabled', true);
   });


  $("#view_region").mouseover(function(){
       $("#view_region").prop('disabled', true);
   });


  $("#view_city").mouseover(function(){
    $("#view_city").prop('disabled', true);
});

$("#view_area").mouseover(function(){
    $("#view_area").prop('disabled', true);
});

$("#view_userAddress").mouseover(function(){
    $("#view_userAddress").prop('disabled', true);
});

$("#view_trackingNumber").mouseover(function(){
    $("#view_trackingNumber").prop('disabled', true);
});

$("#view_voucher_cord").mouseover(function(){
    $("#view_voucher_cord").prop('disabled', true);
});

$("#view_voucher_discount").mouseover(function(){
    $("#view_voucher_discount").prop('disabled', true);
});


//delete button
$(document).on('click','#delete-btn',function(e){
    e.preventDefault();
    var elemant=this;

    var getId=$(this).data('id');
    $.ajax({
        url:"{{ route('approv_order_delete') }}",
        type:"GET",
        data:{
            getId:getId

        },
       success:function(data){
        swal(data, "Approve Order", "success");
         $(elemant).closest('tr').fadeOut();
            }
        });

      });



    });


 </script>
</html>

