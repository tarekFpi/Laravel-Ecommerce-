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
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/2.2.3/jquery.elevatezoom.min.js" integrity="sha512-UH428GPLVbCa8xDVooDWXytY8WASfzVv3kxCvTAFkxD2vPjouf1I3+RJ2QcSckESsb7sI+gv3yhsgw9ZhM7sDw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<style>
   input[type=text]{
 height:50px;
 font-size:18px;
 width:400px;
 box-shadow: 1px 1px 1px 1px  black;

 }


.Mycontent{
    border-radius: 4px;
    background: #fff;
    box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
      transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
  cursor: pointer;

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
@section('admin_content')
<body>

    @php
    $user_gmail="";
  if(!empty(Session()->get('gmail'))){
   $user_gmail= Session()->get('gmail');
  }
     @endphp

   <input type="hidden" id="session_gmail" value="<?php echo  $user_gmail;?>" />


   <div class="userAllOrder">

 <h3 style="text-align: center;">Cancle Order Show</h3>


 <div class="container">

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
      <th>Bkash</th>
      <th>Date</th>
      <th>Image</th>
      <th>View</th>
      <th>Delete</th>

    </tr>
  </thead>
  <tbody>

  </tbody>

</table>


         {{--  Add Model user order update --}}
          <div class="modal fade" id="Update_order_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">User Order Update</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

             <div class="form-group">
               <label for="formGroupExampleInput2">Quantity:</label>
            <input type="text" class="form-control" id="update_quanitiy" autocomplete="off"  placeholder="Update Quantity">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Phone Number:</label>
             <input type="text" class="form-control" id="update_phone" autocomplete="off"  placeholder="Phone Number">
             </div>

     <button type="button" class="btn btn-primary" id="update-btn" style="width: 150px;">Update</button>
  <input type="hidden"  id="serial_id"/>



                </div>
              </div>
            </div>
        </div>


      {{--  Add Model user order update End--}}
          <!-- Add Model-->
          <div class="modal fade" id="Update_tracking_status" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tracking Status Update</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                        <div class="form-group">
                              <label for="formGroupExampleInput">Status:</label>
                             <select class="form-control" id="select_tracking_status">
                                <option>Select option</option>
                                <option>Pending</option>
                                <option>Packed</option>
                                <option>Delivary</option>
                                    </select>
                                   </div>

     <button type="button" class="btn btn-primary" id="tracking_btn" style="width: 150px;">Update</button>
  <input type="hidden"  id="update_serial_id"/>
               </div>

                </div>
              </div>
            </div>

             {{--  Add Model End---}}



         {{-- sell product View  --}}
         <div class="modal fade" id="viewOrder_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">User Order Update</h5>
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
            <label for="formGroupExampleInput2">product Size:</label>
         <input type="text" class="form-control" id="view_pd_size" autocomplete="off"  placeholder="Size">
         </div>

          <div class="form-group">
            <label for="formGroupExampleInput2">product Details:</label>

           <textarea class="form-control" id="view_pdDetails" placeholder="Product Details" rows="4" style="width: 400px;"></textarea>
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

    var user_gmail=$('#session_gmail').val();

   $.ajax({
      url:"{{ route('Soft_order_Show') }}",
      type:"GET",
       dataType:"json",
       data:{
        user_gmail:user_gmail
       },
       success:function(respones){
         var data="";


       $.each(respones,function(key,value){

            data= data + "<tr>"
            data= data + "<th>"+value.serial_id+"</th>"
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
            data= data + "<th>"+value.OrderDate+"</th>"
            data= data + "<th><img src="+value.Image+" width='200px' height='150px'></th>"
            data= data + "<th>"
                data= data + "<button id='view-btn' data-target='#viewOrder_model' data-toggle='modal' data-id="+value.id+"  class='btn btn-primary'>View</button>"
              data= data + "</th>"

          data= data + "<th>"
          data= data + "<button id='delete-btn'  data-id="+value.id+" class='btn btn-danger'>permantly Delete</button>"
         data= data + "</th>"

         data= data + "</tr>";

         });
         $('#mydata tbody').html(data);
       }


   });

 }


//view order show
$(document).on('click','#view-btn',function(e){
    e.preventDefault();

    var getId=$(this).data('id');
    $.ajax({
        url:"{{ route('sell_orde_view') }}",
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
               $('#view_pd_size').val(value.product_size);
               //
         });
            }
        });

      });

 $(document).on('click','#update_button',function(e){
    e.preventDefault();

    var getId=$(this).data('id');
    var pd_quantity=$(this).data('quanitiy');
    var user_phone=$(this).data('phone');

   $('#update_quanitiy').val(pd_quantity);
   $('#serial_id').val(getId);
   $('#update_phone').val(user_phone);

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


//delete button  permantly softDelete
$(document).on('click','#delete-btn',function(e){
    e.preventDefault();

    var elemant=this;

    var Id=$(this).data('id');
    $.ajax({
        url:"{{ route('permantlySoft_delete') }}",
        type:"GET",
        data:{
            Id:Id
        },
       success:function(data){

        swal(data, "Cancle Order", "success");
         $(elemant).closest('tr').fadeOut();
            }
        });

      });


    });


 </script>
</html>
