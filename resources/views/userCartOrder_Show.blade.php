
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
{{--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  --}}

  <script id = "myScript" src="https://scripts.sandbox.bka.sh/versions/1.2.0-beta/checkout/bKash-checkout-sandbox.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<style>
   input[type=text]{
 height:55px;
 font-size:18px;
 width:400px;
 box-shadow: 1px 1px 1px 1px  black;
 }

 #payment_option {
    height:55px;
    font-size:18px;
    width:400px;
    box-shadow: 1px 1px 1px 1px  black;
 }

 #Voucher_payment_option{
    height:55px;
    font-size:18px;
    width:400px;
    box-shadow: 1px 1px 1px 1px  black;
 }

.card{
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

  .Mycontiner{
      width: 100%;
      position: relative;
      display: flex;
  }

  .userAllOrder{
    width: 60%;
    position: relative;
}

.uesrAddress{
    width: 30%;
   float: left;

}

</style>
</head>
<body>

   @include('header')

    @php
    $user_gmail="";
  if(!empty(Session()->get('gmail'))){
   $user_gmail= Session()->get('gmail');
  }
  @endphp

   <input type="hidden" id="session_gmail" value="<?php echo  $user_gmail;?>" />

    <input type="hidden" id="total_count"/>



   <div class="Mycontiner">

   <div class="userAllOrder">

    <div class="container mt-3">
    <div class="card">
      <div class="card-header">
      <h3 style="text-align: center;">Cart Order</h3>
      <h4 style="text-align: center; color: red;">
      @php
      $date = date('Y-m-d');
      echo "Date:".$date;
      @endphp
   </h4>


   <input type="hidden" id="current_date" value="<?php echo  $date;?>" />

 <div class="card-body ">
 <div class="row">

    <div class="col-lg-12  col-md-6 col-sm-12">
     <table class="table table-striped" id="mydata">
  <thead>
    <label> <input type="checkbox" name="sample" class="selectall"/> Select all</label>
    <tr>
      <th>Name</th>
      <th>price</th>
      <th>Quanitiy</th>
      <th>Discount</th>
      <th class="pd_size">Size</th>
      <th>Image</th>
      <th>Order</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody id="recordsTable">


  </tbody>
</table>

    </div>

    </div>

   </div>
    </div>
  </div>
    </div>

   </div>



   <div class="uesrAddress">

    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
            <h3 style="text-align: center;">User Information</h3>

    <table class="table">

  <tbody class="User_details">

  </tbody>
</table>
        </div>
    </div>

    </div>

   </div>

   </div>


  {{--    start model  proccesss model --}}
  <div class="modal fade" id="checkOut_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Check Out</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

             <div class="form-group">
                <label for="formGroupExampleInput">Select Payment Mathod:</label>
                <select  class="form-control" id="payment_option">
                <option>Please Choose Your City</option>
                 </select>
                </div>


               <div class="form-group">
                <label for="formGroupExampleInput2">Bkash Number:</label>
                 <input type="text" class="form-control" id="admin_bkash" placeholder="Bkash Payment Number" autocomplete="off">
                 </div>

                 <div class="form-group">
                    <label for="formGroupExampleInput2">User Bkash Number:</label>
                     <input type="text" class="form-control" id="user_bkash_phone" autocomplete="off"  placeholder="User Phone Number">
                     </div>

              <div class="form-group">
                <label for="formGroupExampleInput2">Transaction  ID:</label>
                 <input type="text" class="form-control" id="transaction_id" autocomplete="off"  placeholder="Transaction ID">
                 </div>

      <button type="button" class="btn btn-primary" id="Check-btn" style="width: 150px;">Check out</button>
           </div>
        </div>

      </div>
    </div>
  {{--    end model  --}}




  {{--    start model voucher code  --}}
  <div class="modal fade" id="checkOut_Voucher_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Check Out</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

             <div class="form-group">
                <label for="formGroupExampleInput">Select Payment Mathod:</label>
                <select  class="form-control" id="Voucher_payment_option">
                <option>Please Choose Your City</option>
                 </select>
                </div>


               <div class="form-group">
                <label for="formGroupExampleInput2">Bkash Number:</label>
                 <input type="text" class="form-control" id="Voucher_admin_bkash" placeholder="Bkash Payment Number" autocomplete="off">
                 </div>

                 <div class="form-group">
                    <label for="formGroupExampleInput2">User Bkash Number:</label>
                     <input type="text" class="form-control" id="Voucher_user_bkash_phone" autocomplete="off"  placeholder="User Phone Number">
                     </div>

              <div class="form-group">
                <label for="formGroupExampleInput2">Transaction  ID:</label>
                 <input type="text" class="form-control" id="Voucher_transaction_id" autocomplete="off"  placeholder="Transaction ID">
                 </div>

      <button type="button" class="btn btn-primary" id="Check_voucher_btn" style="width: 150px;">Check out</button>
           </div>
        </div>

      </div>
    </div>
 {{--    start model voucher code  --}}



{{--   model start  --}}

<div class="modal fade" id="UpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="form-group">
                <label for="formGroupExampleInput">Phone:</label>
                <input type="text" class="form-control"
                autocomplete="off" id="phone_update" placeholder="phone Number" style="width: 400px;">
              </div>


  <input type="hidden"   id="update_serial_id"/>
  <input type="submit" id="update-btnfinal" class="btn btn-success" value="Update" style="width:150px;"/>
           </div>
        </div>

      </div>
    </div>



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
      url:"{{route('userCartShow') }}",
      type:"GET",
       dataType:"json",
       data:{
        user_gmail:user_gmail
       },
       success:function(respones){
         var data="";
        // console.log(respones);
        var total_price=0;
        var psell=0;

       $.each(respones,function(key,value){
//
            data= data + "<tr>"
            data= data + "<th>"+value.product_name+"</th>"
            data= data + "<th>"+value.product_price+"</th>"
            data= data + "<th class='col-lg-2'><button id='decrement-btn' data-id="+value.id+" style='width:30px; margin-right:5px;'>-</button><input type='text' name='quantity' disabled style='width:30px; text-align: center; height: 30px;' id='quantity' value="+value.sell_quantity+"><button id='increment-btn' data-pid="+value.id+" style='width:30px; margin-left:10px;'>+</button></th>"
            data= data + "<th>"+value.sell_discount+"</th>"
            data= data + "<th id='p_size'>"+value.product_size+"</th>"
            data= data + "<th><img src="+value.image+" width='200px' height='150px'></th>"
           data= data + "<th>"
          data= data + "<div class='form-check form-check-inline'><input class='form-check-input' type='checkbox' value="+value.id+" id='inlineCheckbox1'><label class='form-check-label' for='inlineCheckbox1'></label></div>"
          data= data + "</th>"
          data= data + "<th>"
          data= data + "<button id='delete-btn'  data-id="+value.id+" class='btn btn-danger'><i class='far fa-trash-alt'></i></button>"
         data= data + "</th>"
         data= data + "</tr>";

            psell += parseInt(value.sell_quantity);
         total_price= (psell * value.product_price);
         $('#total_count').val(total_price);

         if(value.product_size.match("No")){
            // $('.pd_size').hide();
            // $('#p_size').$(this).attr("name");
         }
         });
         $('#mydata tbody').html(data);
         ShowUserAddress();
       }

   });

 }


 $("#quantity").mouseover(function(){
    $("#quantity").prop('disabled', true);

     });


 $(document).on('click','#increment-btn',function(e){
    e.preventDefault();

 var count_quantity=0;
 //var quantity = parseInt($('#quantity').val());

 var pid=$(this).data('pid');

 var currentRow=$(this).closest("tr");
 var quantity = parseInt(currentRow.find("th:eq(2) input[type='text']").val());
 if(quantity>0){

    toastr.options = {
        "closeButton": true,
        "newestOnTop": true,
        "positionClass": "toast-top-right"
      };

  count_quantity=quantity + 1;
 currentRow.find("th:eq(2) input[type='text']").val(count_quantity);
 currentRow.find("th:eq(2) #decrement-btn").prop('disabled', false);

 $.ajax({
    url:"{{ route('Cart_quantity_increment') }}",
      type: "GET",
     data:{
        count_quantity:count_quantity,
        pid:pid
     },
       success:function(data){
     //  alert(data);
       toastr.success(data);
       ShowAllOrder();
       }
     });
}
});


$(document).on('click','#decrement-btn',function(e){
    e.preventDefault();

    var pid=$(this).data('id');

    var count_quantity=0;
    var currentRow=$(this).closest("tr");
    var quantity = parseInt(currentRow.find("th:eq(2) input[type='text']").val());

    toastr.options = {
        "closeButton": true,
        "newestOnTop": true,
        "positionClass": "toast-top-right"
      };

  if(quantity==1){
    currentRow.find("th:eq(2) #decrement-btn").prop('disabled', true);
  //  $("#decrement-btn").prop('disabled', true);
  }else{
    count_quantity=quantity - 1;
 currentRow.find("th:eq(2) input[type='text']").val(count_quantity);

 $.ajax({
    url:"{{ route('Cart_quantity_decrement') }}",
      type: "GET",
     data:{
        count_quantity:count_quantity,
        pid:pid
     },
       success:function(data){
       toastr.success(data);
       ShowAllOrder();

       }
     });

  }


});



 function ShowUserAddress(){

    var user_gmail=$('#session_gmail').val();
    var amount= $('#total_count').val();

   $.ajax({
      url:"{{ route('showUserAdddress') }}",
      type:"GET",
       dataType:"json",
       data:{
        user_gmail:user_gmail
       },
       success:function(respones){
         var data="";
       $.each(respones,function(key,value){


           data= data + "<tr>"
            data= data + "<th>UserName:\t \t"+value.UserName+"</th>"
            data= data + "</tr>";

            data= data + "<tr>"
            data= data + "<th>Phone:\t \t"+value.phoneNumber+"</th>"
            data= data + "</tr>";

            data= data + "<tr>"
            data= data + "<th>RegionName:\t\t"+value.RegionName+"</th>"
            data= data + "</tr>";

            data= data + "<tr>"
            data= data + "<th>CityName:\t\t"+value.CityName+"</th>"
            data= data + "</tr>";

            data= data + "<tr>"
            data= data + "<th>AreaName:\t\t"+value.AreaName+"</th>"
            data= data + "</tr>";

            data= data + "<tr>"
            data= data + "<th>Address:\t\t"+value.Address+"</th>"
            data= data + "</tr>";

            data= data + "<tr>"
            data= data + "<th>OrderOption:\t\t"+value.Order_option+"</th>"
            data= data + "</tr>";

            data= data + "<tr>"
            data= data + "<th>Delivary Fee:\t\t"+value.Delivary_free+"</th>"
            data= data + "</tr>";


                data= data + "<tr>"
                 data= data + "<th>"
                data= data + "<input type='text' id='voucher_cord' style='width:300px; border-color: red' placeholder='Voucher Cord'/>"
                data= data + "</th>"

                  data= data + "<th>"
                    data= data + "<button id='apply-btn' style='width:150px; height:40px;'class='btn btn-primary'>Apply</button>"
                    data= data + "</th>"
                data= data + "</tr>";

               data= data + "<tr>"
                data= data + "<th>"
                data= data + "<label>Total:"+amount+"</label>"
               data= data + "</th>"

              data= data + "<tr>"
               data= data + "<th>"
                data= data + "<button id='update-btn' style='width:150px; height:40px; margin-top:20px;'  data-target='#UpdateModal' data-toggle='modal'  data-id="+value.id+" data-phone="+value.phoneNumber+" class='btn btn-danger'>Update</button>"
               data= data + "</th>"

       data= data + "<th>"
      data= data + "<button id='Process_to_Pay' style='width:150px; height:40px; margin-top:20px;'  class='btn btn-success'>Process to Pay</button>"
      data= data + "</th>"
       data= data + "</tr>";

         });

         $('.User_details').html(data);

       }

   });

 }


      $('.selectall').change(function(){
     $('input[type="checkbox"]').prop("checked",$(".selectall").is(":checked"));
     });


     //check out
     $(document).on('click','#Check-btn',function(e){
        e.preventDefault();

        toastr.options = {
            "closeButton": true,
            "newestOnTop": true,
            "positionClass": "toast-top-right"
          };

        var selected_process =[];

    //    var userPhoe= $('#user_bkash_phone').val();

        var order_date=$('#current_date').val();
        var payment_mathod=$('#payment_option').val();
        var admin_bkash=$('#admin_bkash').val();
        var user_bkashPhone=$('#user_bkash_phone').val();
        var transaction_id=$('#transaction_id').val();
        var tracking_number = 5+ Math.floor(Math.random() * 10000);

       // var quantity = parseInt($('#quantity').val());
        if(document.getElementById("payment_option").value==""){
            alert("Payment Mathod is Empty");
      } else if(document.getElementById("user_bkash_phone").value==""){
        alert("User Bkash Number is Empty");
      }else if(document.getElementById("transaction_id").value==""){
      alert("Transaction ID is Empty");

      }else if(user_bkashPhone.length < 11){
        alert("Your phon Number Invlide");
        }else if(transaction_id.length <10){
            alert("Your Transaction ID Invlide");
         }else{


      //  var voucher_cord= $('#user_bkash_phone').val();
     var  voucher_cord="0";
     var  voucher_discount=0;
       $('#recordsTable input[type=checkbox]').each(function(){
          if (jQuery(this).is(":checked")) {
         var id =$(this).val();
         selected_process.push(id);

            }

        });

        if(selected_process.length > 0){
            var sendOrder = confirm("Do you Really want to send Order?");
                if (sendOrder == true) {

               $.ajax({

                    url:"{{ route('selltable_CartAdd') }}",
                       type:"POST",
                       data:{
                         selected_process:selected_process,
                          order_date:order_date,
                          voucher_cord:voucher_cord,
                          voucher_discount:voucher_discount,
                          payment_mathod:payment_mathod,
                          admin_bkash:admin_bkash,
                          user_bkashPhone:user_bkashPhone,
                          transaction_id:transaction_id,
                          tracking_number:tracking_number
                       },
                       success:function(data){
                        toastr.success("Order Process SuccessFull..");
                         $('#checkOut_Modal').modal().hide();
                         window.location.reload();
                         window.location.href = "{{ route('userFinal_orderForm') }}";
                       }
                   });

                 }
               }else{
                toastr.warning("Please Your Order Select Order");

               }
        }

      });

///Process_to_Pay button
      $(document).on('click','#Process_to_Pay',function(e){
        e.preventDefault();
        $('#payment_option').html('');
        $.ajax({

            url:"{{ route('show_paymentMathod') }}",
            type:"GET",
            dataType:"json",
               success:function(respones){
                $.each(respones,function(key,value){

            $('#payment_option').append("<option>"+value.Mathod_Name+"</option>");
                });
                process_buttonCheck_stock();
            }
       });

    });

       //process to button  click order stock product  check
       function process_buttonCheck_stock(){
        var selected_process =[];

        $('#recordsTable input[type=checkbox]').each(function(){
            if (jQuery(this).is(":checked")) {
           var id =$(this).val();
           selected_process.push(id);
              }

          });

        if(selected_process <1){
            toastr.warning("Please Your Order Select Order");
        }else{

            $.ajax({
                url:"{{ route('Check_outStock_check')}}",
                type:"GET",
                 data:{
                    selected_process:selected_process
                 },
                  success:function(data){

                    if(data.match("Quantity Over")){
                       //   toastr.warning(data);
                       alert(data);
                    }else{
                        $('#checkOut_Modal').modal().show();
                    }

                  }
             });


        }
            }



 // payment mathod change for get admin phone number
$(document).on('change','#payment_option',function(){


    var number=$(this).val();
    $.ajax({
        url:"{{ route('get_AdminPhone')}}",
        type:"GET",
         dataType:"json",
         data:{
            number:number
         },
          success:function(respones){
            $.each(respones,function(key,value){

              $('#admin_bkash').val(value);
            });

          }
     });

  });


  $("#admin_bkash").mouseover(function(){
    $("#admin_bkash").prop('disabled', true);
     });


     $("#Voucher_admin_bkash").mouseover(function(){
        $("#Voucher_admin_bkash").prop('disabled', true);
         });


   $(document).on('click','#apply-btn',function(){

    toastr.options = {
        "closeButton": true,
        "newestOnTop": true,
        "positionClass": "toast-top-right"
      };

   var voucher_cod=$('#voucher_cord').val();

   if(document.getElementById("voucher_cord").value==""){

    toastr.warning("Voucher Code is Empty..");
}else{
      $.ajax({
    url:"{{ route('voucherCode_match')}}",
    type:"GET",
     data:{
        voucher_cod:voucher_cod
     },
      success:function(data){

    if(data.match("Voucher Cord is Worong")){
        toastr.warning(data);
    }else if(data.match("Voucher Cord Deactivate")){
        toastr.warning(data);
    }else{

        var selected_process =[];

        $('#recordsTable input[type=checkbox]').each(function(){
            if (jQuery(this).is(":checked")) {
           var id =$(this).val();
           selected_process.push(id);
              }

          });

        if(selected_process <1){
            toastr.warning("Please Your Order Select Order");
        }else{

            $.ajax({
                url:"{{ route('Check_outStock_check')}}",
                type:"GET",
                 data:{
                    selected_process:selected_process
                 },
                  success:function(data){

                    if(data.match("Quantity Over")){
                       //   toastr.warning(data);
                       alert(data);
                    }else{
                        getPaymentShow_voucherModel();
                    }

                  }
             });


        }


    }

      }
 });
}

     });


     //Apply button  click  check out model show
     function getPaymentShow_voucherModel(){
        $('#Voucher_payment_option').html('');

             $.ajax({
                 url:"{{ route('show_paymentMathod') }}",
                 type:"GET",
                 dataType:"json",
                    success:function(respones){

                     $.each(respones,function(key,value){
                 $('#Voucher_payment_option').append("<option>"+value.Mathod_Name+"</option>");

                     });

                     $('#checkOut_Voucher_Modal').modal().show();

                    }
                });
          }

  // payment mathod change for get admin phone number voucher code
$(document).on('change','#Voucher_payment_option',function(){

    var number=$(this).val();

    $.ajax({
        url:"{{ route('get_AdminPhone')}}",
        type:"GET",
         dataType:"json",
         data:{
            number:number
         },
          success:function(respones){

            $.each(respones,function(key,value){

              $('#Voucher_admin_bkash').val(value);
            });
          }
     });

  });





     //Applay voucher code button //check out
     $(document).on('click','#Check_voucher_btn',function(e){
        e.preventDefault();

        toastr.options = {
            "closeButton": true,
            "newestOnTop": true,
            "positionClass": "toast-top-right"
          };

        var selected_process =[];

        var order_date=$('#current_date').val();
        var payment_mathod=$('#Voucher_payment_option').val();
        var admin_bkash=$('#Voucher_admin_bkash').val();
        var user_bkashPhone=$('#Voucher_user_bkash_phone').val();
        var transaction_id=$('#Voucher_transaction_id').val();
        var tracking_number = 5+ Math.floor(Math.random() * 10000);
        var voucher_cod=$('#voucher_cord').val();


       // var quantity = parseInt($('#quantity').val());
        if(document.getElementById("Voucher_payment_option").value==""){
            alert("Payment Mathod is Empty");
      } else if(document.getElementById("Voucher_user_bkash_phone").value==""){
        alert("User Bkash Number is Empty");
      }else if(document.getElementById("Voucher_transaction_id").value==""){
      alert("Transaction ID is Empty");

      }else if(user_bkashPhone.length < 11){
        alert("Your phon Number Invlide");
        }else if(transaction_id.length <10){
            alert("Your Transaction ID Invlide");
         }else{


       $('#recordsTable input[type=checkbox]').each(function(){
          if (jQuery(this).is(":checked")) {
         var id =$(this).val();
         selected_process.push(id);
       //  console.log(selected_process);
            }

        });

        //if(selected_process.length > 0){
            var sendOrder = confirm("Do you Really want to send Order?");
                if (sendOrder == true) {

               $.ajax({

                    url:"{{ route('Voucher_selltableOrder') }}",
                       type:"POST",
                       data:{
                         selected_process:selected_process,
                          order_date:order_date,
                          payment_mathod:payment_mathod,
                          admin_bkash:admin_bkash,
                          user_bkashPhone:user_bkashPhone,
                          transaction_id:transaction_id,
                          tracking_number:tracking_number,
                          voucher_cod:voucher_cod
                       },
                       success:function(data){
                        toastr.success("Order Process SuccessFull..");

                       $('#checkOut_Voucher_Modal').modal().hide();
                         window.location.reload();
                         window.location.href = "{{ route('userFinal_orderForm') }}";
                       }
                   });

                 }
             //else{

                // toastr.warning("Please Your Order Select Order");
              /// }
        }

      });


     $(document).on('click','#delete-btn',function(e){
         e.preventDefault();

         toastr.options = {
            "closeButton": true,
            "newestOnTop": true,
            "positionClass": "toast-top-right"
          };
         var elemant=this;
        var update_id= $(this).data('id');
        $.ajax({
            url:"{{ route('Cart_Order_delete')}}",
            type:"GET",
             data:{
                update_id:update_id
             },
              success:function(data){
                toastr.success(data);
                $(elemant).closest('tr').fadeOut();
                ShowAllOrder();
              }
         });

    });


   $(document).on('click','#update-btn',function(e){
       e.preventDefault();

    var update_id= $(this).data('id');
    var phone= $(this).data('phone');
    $('#update_serial_id').val(update_id);

    $('#phone_update').val(phone);
   });



       //update button
       $(document).on('click','#update-btnfinal',function(e){
        e.preventDefault();

        toastr.options = {
            "closeButton": true,
            "newestOnTop": true,
            "positionClass": "toast-top-right"
          };

      var update_id=$('#update_serial_id').val();
      var update_phone= $('#phone_update').val();

       if(document.getElementById("phone_update").value==""){
         alert("phone Number is Empty");
           }else{

           $.ajax({
            url:"{{ route('userInfromation_update') }}",
            type:"GET",
              data:{
                update_id:update_id,
                update_phone:update_phone
              },
              success:function(data){
                toastr.success(data);
               $('#UpdateModal').modal().hide();
              window.location.reload();
              }
           });
        }
      });


    });


 </script>
</html>
