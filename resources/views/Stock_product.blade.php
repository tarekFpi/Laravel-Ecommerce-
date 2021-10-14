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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
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

.container{
    margin-top: 20px;
    width: 80%;
    border-radius: 4px;
    background: #fff;
    box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
      transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
  cursor: pointer;
  width: 100%;
}
</style>
</head>
<body>
    @section('admin_content')

  <div class="container">


  <div class="search_student_data">
    <label>Stock Live Search</label>
<input  type="text" id="search_stockProduct" placeholder=" Live Search for Bill,Category Name ,Brand,product Name ..."  style="width: 500px; padding: 10px;"/>
  </div>
<br>

<div id="loadData">
   <table id="example" class="table table-bordered table-striped">
        <thead class="table-dark">
           <tr>
               <th scope="col">Serial Id</th>
               <th scope="col">Category Name</th>
               <th scope="col">Brand Name</th>
               <th scope="col">Product Name</th>
               <th scope="col">Purchase price</th>
               <th scope="col">Sell price</th>
               <th scope="col">Purchase Unit</th>
               <th scope="col">Sell Unit</th>
               <th scope="col">Stock</th>
               <th scope="col">Image</th>
               <th scope="col">View</th>
             </tr>
        </thead>

        <tbody>

        </tbody>

    </table>


</div>
</div>
<!-- Add Model-->
<div class="container">

    <div class="modal fade" id="viewProduct_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

           <form id="book_update_form">
            @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">Bill Number:</label>
                <input type="text" class="form-control"
                autocomplete="off" id="billNumber">
              </div>

              <div class="form-group">
                <label for="formGroupExampleInput">SubCategory Name:</label>
                <input type="text" class="form-control"
                autocomplete="off" id="subCatgoryName">
              </div>

              <div class="form-group">
                <label for="formGroupExampleInput">Product Size:</label>
                <input type="text" class="form-control"
                autocomplete="off" id="productSize">
              </div>

          </form>

          </div>

        </div>
      </div>
    </div>
      </div>
      <!-- Add Model End-->

  <!-- Add Model End-->

@endsection
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
   $.ajax({
      url:"{{ route('stockProduct') }}",
      type:"GET",
       dataType:"json",
       success:function(respones){
         var data="";
    
   var pur_quan=0;
   var sell_quan=0;
   var stock=0;
       $.each(respones,function(key,value){

        pur_quan=value.pur_unit;
        if(value.sell_quit>0){
            sell_quan= value.sell_quit;
        }
       stock=pur_quan-sell_quan;

            data= data + "<tr>";
            data= data + "<th>"+value.id+"</th>"
            data= data + "<th>"+value.Category+"</th>"
            data= data + "<th>"+value.brand_name+"</th>"
            data= data + "<th>"+value.product_name+"</th>"
            data= data + "<th>"+value.purchase_price+"</th>"
            data= data + "<th>"+value.sell_price+"</th>"
            data= data + "<th>"+value.pur_unit+"</th>"
            data= data + "<th>"+sell_quan+"</th>"
            data= data + "<th>"+stock+"</th>"
            data= data + "<th><img src="+value.image+" width='200px' height='150px'></th>"
           data= data + "<th>"
          data= data + "<button id='view_product'  data-target='#viewProduct_Modal' data-toggle='modal' data-bill_number="+value.bill_number+" data-sub_Category="+value.sub_Category+" data-product_size="+value.product_size+" class='btn btn-warning'>View</button>"
          data= data + "</th>"
            data= data + "</tr>";
         });
        $('tbody').html(data);

       }

   });
 }

 $("#subCatgoryName").mouseover(function(){
    $("#subCatgoryName").prop('disabled', true);
     });

     $("#billNumber").mouseover(function(){
        $("#billNumber").prop('disabled', true);
         });

         $("#productSize").mouseover(function(){
            $("#productSize").prop('disabled', true);
             });

 $(document).on('click','#view_product',function(e){
    e.preventDefault();

 var subCateogry=$(this).data('sub_category');
 var billNumber =$(this).data('bill_number');
 var product_size =$(this).data('product_size');

  $('#subCatgoryName').val(subCateogry);
  $('#billNumber').val(billNumber);
  $('#productSize').val(product_size);
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
