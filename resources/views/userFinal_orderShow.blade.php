@include('header')
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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
</script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

<script>
      $(function () {
                $("#add_date").datepicker();
            });
</script>

<style>
   input[type=text]{
 height:50px;
 font-size:18px;
 width:400px;

 }


select{
    width: 400px;
    height: 50px;
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


</style>

</head>
<body>


  <div class="container mt-5">
    @php
    $user_gmail="";
  if(!empty(Session()->get('gmail'))){
   $user_gmail= Session()->get('gmail');
  }

  $date = date('Y-m-d');

    @endphp

    <input type="hidden" id="current_date" value="<?php echo  $date;?>" />

   <input type="hidden" id="session_gmail" value="<?php echo  $user_gmail;?>" />

    <div class="dropdown" style="width: 50px;">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tracking Number
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

        </div>
      </div>



<div id="loadData">
   <table id="example" class="table">
        <thead>
           <tr>
               <th scope="col">Product Name</th>
               <th scope="col">Brand Name</th>
               <th scope="col">price</th>
               <th scope="col">Quatity</th>
               <th scope="col">Image</th>
               <th scope="col">Cancle</th>
             </tr>
        </thead>


        <tbody>

        </tbody>

    </table>


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

//get All data show
ShowAllData();

function ShowAllData(){
    var user_Gmail= $('#session_gmail').val();

   $.ajax({
      url:"{{ route('userFinal_orderShow') }}",
      type:"GET",
       dataType:"json",
       data:{
        user_Gmail:user_Gmail
       },
       success:function(respones){
         var data="";
       $.each(respones,function(key,value){

            data= data + "<tr>";
            data= data + "<th>"+value.productName+"</th>"
            data= data + "<th>"+value.Brand_name+"</th>"
            data= data + "<th>"+value.product_price+"</th>"
            data= data + "<th>"+value.sell_quntity+"</th>"
            data= data + "<th><img src="+value.Image+" width='200px' height='150px'></th>"
           data= data + "<th>"
          data= data + "<button id='cancle-btn' data-toggle='modal' data-id="+value.id+" class='btn btn-danger'>Cancle</button>"
          data= data + "</th>"
            data= data + "</tr>";
         });
        $('tbody').html(data);
        getTracking_number();

       }

   });
 }

 function getTracking_number(){
     var user_Gmail= $('#session_gmail').val();

     $.ajax({
        url:"{{ route('getTracking_number') }}",
           type: "GET",
          data:{
            user_Gmail:user_Gmail
          },
        success:function(respones){
         var tracking_number="";

    $.each(respones,function(key,value){
      tracking_number=tracking_number+"<a class='dropdown-item'>"+value.Tracking_number+"</a>"
        $('.dropdown-menu').html(tracking_number);

               });

            }
          });
 }

    //cancle-btn
     $(document).on('click','#cancle-btn',function(e){
        e.preventDefault();

        toastr.options = {
            "closeButton": true,
            "newestOnTop": true,
            "positionClass": "toast-top-right"
          };

         var elemant=this;
        var get_id= $(this).data('id');
        var date= $('#current_date').val();

            $.ajax({
             url:"{{ route('user_OrderCancle') }}",
             type:"GET",
             data:{
                get_id:get_id,
                date:date
             },
             success:function(data){

               if(data.match("Your Order Cancle SuccessFull..")){
               $(elemant).closest('tr').fadeOut();
               toastr.success(data);
               }else{
                toastr.warning(data);
               }

             }
         });

      });

 $('#search_stockProduct').keyup(function(){
    var search_data= $(this).val();

     if (search_data !="") {
      $.ajax({
          url:"{{ route('serarch_stock_Porduct') }}",
           type:"GET",
           dataType:"json",
          data:{
           search_data:search_data
          },
          success:function(respones){
            var data="";
         //console.log(respones);
       $.each(respones,function(key,value){
            data= data + "<tr>";
            data= data + "<th>"+value.id+"</th>"
            data= data + "<th>"+value.Category+"</th>"
            data= data + "<th>"+value.brand_name+"</th>"
            data= data + "<th>"+value.product_name+"</th>"
            data= data + "<th>"+value.product_size+"</th>"
            data= data + "<th>"+value.purchase_price+"</th>"
            data= data + "<th>"+value.sell_price+"</th>"
            data= data + "<th>"+value.pur_unit+"</th>"
            data= data + "<th>"+value.sell_quit+"</th>"
            data= data + "<th>"+value.sell_discount+"</th>"
            data= data + "<th>"+value.profit+"</th>"
            data= data + "<th><img src="+value.image+" width='200px' height='150px'></th>"
           data= data + "<th>"
          data= data + "<button id='cancle-btn' data-target='#viewProduct_Modal' data-toggle='modal' data-sub_category="+value.sub_Category+" data-bill_number="+value.bill_number+" class='btn btn-warning'>View</button>"
          data= data + "</th>"
            data= data + "</tr>";
         });
        $('tbody').html(data);

          }
      });

     }else{
        ShowAllData();
     }
  });

    });


 </script>
</html>
