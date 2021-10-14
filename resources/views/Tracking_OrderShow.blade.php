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

<style>
   input[type=text]{
 height:50px;
 font-size:18px;
 width:400px;

 }


.card{
    border-radius: 4px;
    background: #fff;
    box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
      transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
  cursor: pointer;

}
</style>
</head>
<body>




  <div class="container mt-5">

    @foreach($getData as  $value)
   <input type="hidden" id="user_tracking" value="{{ $value->Tracking_number}}"/>
   <input type="hidden" id="user_gmail" value="{{ $value->UserGmail}}"/>
    @endforeach

<div id="loadData">
   <table id="example" class="table table-striped">
        <thead>
           <tr>
               <th scope="col">Brand Name</th>
               <th scope="col">Product Name</th>
               <th scope="col">Size</th>
               <th scope="col">Sell price</th>
               <th scope="col">Discount</th>
               <th scope="col">Quantity</th>
               <th scope="col">Date</th>
               <th scope="col">Status</th>
               <th scope="col">Image</th>
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

    var tracking_number=$('#user_tracking').val();
    var user_gmail=$('#user_gmail').val();

    $.ajax({
       url:"{{ route('show_Final_Order') }}",
       type:"GET",
        dataType:"json",
        data:{
            tracking_number:tracking_number,
            user_gmail:user_gmail
        },
        success:function(respones){
            console.log(respones);
            var data="";
            var  path  = window.location.origin;

        $.each(respones,function(key,value){
             data= data + "<tr>";
             data= data + "<th>"+value.Brand_name+"</th>"
             data= data + "<th>"+value.productName+"</th>"
             data= data + "<th>"+value.product_size+"</th>"
             data= data + "<th>"+value.product_price+"</th>"
             data= data + "<th>"+value.sell_discount+"</th>"
             data= data + "<th>"+value.sell_quntity+"</th>"
             data= data + "<th>"+value.OrderDate+"</th>"
             data= data + "<th>"+value.Order_status+"</th>"
             data= data + "<th><img src="+path+"/"+value.Image+" width='200px' height='150px'></th>"
             data= data + "</tr>";
          });
         $('tbody').html(data);

        }

    });
  }




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
          data= data + "<button id='view_product' data-target='#viewProduct_Modal' data-toggle='modal' data-sub_category="+value.sub_Category+" data-bill_number="+value.bill_number+" class='btn btn-warning'>View</button>"
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
