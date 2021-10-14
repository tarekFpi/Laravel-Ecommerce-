
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/2.2.3/jquery.elevatezoom.min.js" integrity="sha512-UH428GPLVbCa8xDVooDWXytY8WASfzVv3kxCvTAFkxD2vPjouf1I3+RJ2QcSckESsb7sI+gv3yhsgw9ZhM7sDw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 

      $(function () {
      $("#add_date").datepicker();
            });
</script>

<style>
   input[type=text]{
 height:60px;
 font-size:18px;
 width:500px;
 box-shadow: 1px 1px 1px 1px  black;
 }


 #product_name{
    box-shadow: 1px 1px 1px 1px  black;
    width:500px;
	height:55px;

  }

  #categroy_name{
    box-shadow: 1px 1px 1px 1px  black;
    width:500px;
	height:55px;

  }

  #sub_cateogory{
    box-shadow: 1px 1px 1px 1px  black;
    width:500px;
	height:55px;

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

#product_details{
    box-shadow: 1px 1px 1px 1px  black;
    width:500px;
 }

#brand_name{
  box-shadow: 1px 1px 1px 1px  black;
  width:500px;
	height:55px;
}

#fileToUpload{
  width: 400px;
}

input[type=number]{
    height:60px;
    font-size:18px;
    width:400px;
    box-shadow: 1px 1px 1px 1px  black;
    }

</style>
</head>
<body>
    @section('admin_content')

    <div class="container mt-3">
    <div class="card" style="width: 800px;" id="brand_cart">
         <div class="card-header">
            <h3 style="text-align: center;">Product Purchase </h3>
            <div class="card-body ">

                <div class="form-group">
                    <label for="formGroupExampleInput">Bill Number:</label>
                     <input type="text" class="form-control"
                   autocomplete="off" id="bill_number" placeholder="Bill Name">
                     </div>


           <div class="form-group">
            <label for="formGroupExampleInput">Category Name:</label>
            <select  class="form-control" id="categroy_name">
                <option>Category Name</option>
              </select>
             </div>


             <div class="form-group">
                <label for="formGroupExampleInput">Sub Category Name:</label>
                <select class="form-control" id="sub_cateogory">
                    <option>Sub Category</option>
                  </select>
                 </div>


                 <div class="form-group">
                    <label for="formGroupExampleInput">Brand Name:</label>
                    <select class="form-control" id="brand_name">
                        <option>Brand Name</option>
                      </select>
                     </div>

                 <div class="form-group">
                    <label for="formGroupExampleInput">product Name:</label>
                    <select  class="form-control" id="product_name">
                      <option>product Name</option>
                    </select>
                  </div>


                 <div class="form-group">
                    <label for="formGroupExampleInput">purchaese price:</label>
                     <input type="number" class="form-control"
                   autocomplete="off" id="purchase_price" placeholder="purchaese price" style="height:60; width: 500px;">
                     </div>


                     <div class="form-group">
                        <label for="formGroupExampleInput">Purchase Quantity:</label>
                         <input type="number" class="form-control"
                       autocomplete="off" id="purchase_quanitiy" placeholder="Purchase Quantity" style="height:60; width: 500px;">
                         </div>

                         <div class="form-group">
                            <label for="formGroupExampleInput2">Purchase Discount:</label>
             <input type="number" class="form-control" id="Purchase_discount" autocomplete="off"  placeholder="Purchase Discount" style="height:60; width: 500px;">
                             </div>


                        <div class="form-group">
                        <label for="formGroupExampleInput">Sell price:</label>
                    <input type="number" class="form-control"
                    autocomplete="off" id="sell_price" placeholder="Sell price" style="height:60; width: 500px;">
                    </div>


      <div class="form-group">
       <label for="formGroupExampleInput">Suppliers Name:</label>
       <input type="text" class="form-control"
     autocomplete="off" id="suppliers_name" placeholder="Suppliers Name">
        </div>

 <div class="form-group">
  <label for="formGroupExampleInput2">Sell Discount:</label>
   <input type="number" class="form-control" id="sell_discount" autocomplete="off" placeholder="Sell Discount" style="height:60; width: 500px;">
   </div>

   <div class="form-group">
    <label for="exampleFormControlTextarea1">Product Details</label>
    <textarea class="form-control" id="product_details" placeholder="Product Details" rows="4"></textarea>
  </div>

         <div class="form-group">
            <label for="formGroupExampleInput2">Product Size:</label>
             <input type="text" class="form-control" id="pd_size" autocomplete="off"  placeholder="product Size">
             </div>

             <div class="form-group">
                <label for="formGroupExampleInput2">Upload Date:</label>
                 <input type="text" class="form-control" id="add_date" autocomplete="off"  placeholder="Upload Date">
                 </div>

                 <div class="form-group">
                  <label for="formGroupExampleInput2">Upload Image:</label>
                   <input type="file" class="form-control" id="fileToUpload"/>
                   <span id="file_error"></span>
                   </div>

                   <div class="form-group">
                     <img id="pd_Img" class="form-control" style="width:300px; height: 300px; float:right; border: 1px solid black; margin-bottom: 20px;" src="" alt="image"/>
                     <br>
                     </div>

                  <div class="button_position" style="float: left; position: relative; display: flex;">
             <div class="form-group mt-4">
                <button type="button" id="btn-save" class="btn btn-primary" style="width:150px;">Save</button>
               </div>

               <div class="form-group mt-4 ml-4">
                <button type="button" id="btn-claer" class="btn btn-success" style="width:150px;">Clear</button>
               </div>
            </div>
            </div>
         </div>
        </div>
    </div>

  <br>

<div class="card ml-2">
 <div class="card-header">
 <div class="card-body">
    <div class="search_student_data">
        <label>Stock Live Search</label>
    <input  type="text" id="search_PurchProduct" placeholder=" Live Search for Bill,Category Name ,Brand,product Name ..."  style="width: 500px; padding: 10px;"/>
      </div>
    <br>
<br>

<div id="loadData">
   <table id="example" class="table table-striped">
        <thead class="table-dark">
           <tr>
               <th scope="col">Serial Id</th>
               <th scope="col">Bill Number</th>
               <th scope="col">Cateogry Name</th>
               <th scope="col">Sub Category Name</th>
               <th scope="col">Brand Name</th>
               <th scope="col">Product Name</th>
               <th scope="col">Purchase Price</th>
               <th scope="col">Purchase Quanitiy</th>
               <th scope="col">Sell price</th>
               <th scope="col">Suppliers</th>
               <th scope="col">Sell Discount</th>
               <th scope="col">Product Size</th>
               <th scope="col">Image</th>

               <th scope="col">View</th>
               <th scope="col">Edit</th>
               <th scope="col">Delete</th>

             </tr>
        </thead>
        <tbody>

        </tbody>

    </table>

</div>
</div>
</div>
</div>

<!-- Add Model-->
<div class="container">

    <div class="modal fade" id="UpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">


             <div class="form-group">
                <label for="formGroupExampleInput2">Purchase Price:</label>
                 <input type="number" class="form-control" id="update_purPrice" class="update_text" autocomplete="off"  placeholder="Purchase Price"  style="width: 400px;">
                 </div>

                 <div class="form-group">
                    <label for="formGroupExampleInput2">Purchase Quantity:</label>
                     <input type="number" class="form-control" id="update_pur_Quantity" autocomplete="off"  placeholder="pruchase Quantity"  style="width: 400px;">
                     </div>

                     <div class="form-group">
                        <label for="formGroupExampleInput2">Sell Price:</label>
                         <input type="number" class="form-control" id="update_sellPrice" autocomplete="off"  placeholder="Sell price"  style="width: 400px;">
                         </div>

                         <div class="form-group">
                            <label for="formGroupExampleInput2">Sell Disount:</label>
                             <input type="number" class="form-control" id="update_sellDiscount" autocomplete="off"  placeholder=" 2 % "  style="width: 400px;">
                             </div>


             <div class="form-group">
           <label for="formGroupExampleInput2">Product Size:</label>
          <input type="text" class="form-control" id="update_size" autocomplete="off"  placeholder="X,XLL,XM"  style="width: 400px;">
          </div>

  <input type="hidden" name="update_serial_id" id="update_serial_id"/>
  <input type="submit" id="update-final-btn" class="btn btn-success" value="Update" style="width:150px;"/>

          </div>

        </div>
      </div>
    </div>
      </div>
      <!-- Add Model End-->


{{--   View product Deatails --}}
<div class="container">

    <div class="modal fade" id="View_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">View product</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

             <div class="form-group">
           <label for="formGroupExampleInput2">Product Size:</label>
          <input type="text" class="form-control" id="purh_date" autocomplete="off"  placeholder="X,XLL,XM"  style="width: 400px;">
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">product Details</label>
            <textarea class="form-control" id="getView_details" rows="3" style="width: 400px;"></textarea>
          </div>

          </div>

        </div>
      </div>
    </div>
      </div>
   {{--   end view Add Model End --}}
   @endsection
</body>


<script >
    $(document).ready(function(){
     // $('#example').DataTable();

  $.ajaxSetup({
headers: {
 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});


//get All data show
 ShowAllData();
function ShowAllData(){
   $.ajax({
      url:"{{ route('show_all_purchase') }}",
      type:"GET",
       dataType:"json",
       success:function(respones){
         var data="";


       $.each(respones,function(key,value){
          data= data + "<tr>";
            data= data + "<th>"+value.id+"</th>"
            data= data + "<th>"+value.bill_number+"</th>"
            data= data + "<th>"+value.Category+"</th>"

            data= data + "<th>"+value.sub_Category+"</th>"
            data= data + "<th>"+value.brand_name+"</th>"
            data= data + "<th>"+value.product_name+"</th>"


            data= data + "<th>"+value.purchase_price+"</th>"
            data= data + "<th>"+value.purchase_quanitiy+"</th>"
            data= data + "<th>"+value.sell_price+"</th>"

            data= data + "<th>"+value.Suppliers_name+"</th>"
            data= data + "<th>"+value.sell_discount+"</th>"
            data= data + "<th>"+value.product_size+"</th>"
            data= data + "<th><img src="+value.image+" width='200px' height='150px'></th>"

            data= data + "<th>"
          data= data + "<button id='view-btn' data-target='#View_Modal' data-toggle='modal'  data-date="+value.upload_date+" data-pddetails="+value.product_details+" class='btn btn-success'>View</button>"
          data= data + "</th>"

            data= data + "<th>"
          data= data + "<button id='update_id'  data-target='#UpdateModal' data-toggle='modal' data-id="+value.id+"  class='btn btn-warning'>Edit</button>"
          data= data + "</th>"
          data= data + "<th>"
      data= data + "<button id='delete-btn'   data-id="+value.id+" class='btn btn-danger'>Delete</button>"
              data= data + "</th>"
            data= data + "</tr>";
         });
         $('tbody').html(data);

       }

   });
 }


 // view product
 $(document).on('click','#view-btn',function(e){
    e.preventDefault();

 var upload_date= $(this).data('date');

 var details= $(this).data('pddetails');

 $('#purh_date').val(upload_date);
   $('#getView_details').val(details);


  });

  $("#purh_date").mouseover(function(){
    $("#purh_date").prop('disabled', true);
  });

  $("#getView_details").mouseover(function(){
    $("#getView_details").prop('disabled', true);
  });

 ///update getData
 $(document).on('click','#update_id',function(e){
    e.preventDefault();

 var id= $(this).data('id');
 $('#update_serial_id').val(id);

        $.ajax({
          url:"{{ route('update_getData') }}",
          type:"GET",
           dataType:"json",
           data:{
               id:id
           },
            success:function(respones){

          $.each(respones,function(key,value){

            $('#update_purPrice').val(value.purchase_price);
            $('#update_pur_Quantity').val(value.purchase_quanitiy);
            $('#update_sellPrice').val(value.sell_price);
            $('#update_sellDiscount').val(value.sell_discount);
            $('#update_size').val(value.product_size);
              });
            }
       });
  });


// update-final-btn update
$(document).on('click','#update-final-btn',function(e){
    e.preventDefault();

 var id= $('#update_serial_id').val();
  var purchase_price=$('#update_purPrice').val();
  var purchase_quatity=$('#update_pur_Quantity').val();
  var sell_price=$('#update_sellPrice').val();
  var discount=$('#update_sellDiscount').val();
  var pdSize=$('#update_size').val();

  if(document.getElementById("update_purPrice").value==""){
    alert("purchase price is Empty");

}else if(document.getElementById("update_pur_Quantity").value==""){
   alert("purchase Quantity is Empty");

}else if(document.getElementById("update_sellPrice").value==""){
    alert("Sell price is Empty");

 }else if(document.getElementById("update_size").value==""){
    alert("product Size  is Empty");

 }else{

    $.ajax({
        url:"{{ route('update_purchase_product') }}",
        type:"GET",
         data:{
             id:id,
             purchase_price:purchase_price,
             purchase_quatity:purchase_quatity,
             sell_price:sell_price,
             discount:discount,
             pdSize:pdSize
         },
          success:function(data){

          swal(data, "Purchase Product", "success");
          $('#UpdateModal').modal().hide();
          window.location.reload();
          }
     });

 }
  });



//Delete button click delete
$(document).on('click','#delete-btn',function(e){
    e.preventDefault();

    var id= $(this).data('id');
    var elemant=this;
        $.ajax({
          url:"{{ route('Delete_purchase_product') }}",
          type:"GET",
           data:{
               id:id
           },
            success:function(data){
            swal(data, "Purchase Product", "success");
            $(elemant).closest('tr').fadeOut();
            }
       });
  });



function clear(){

      $('#bill_number').val('');
      //  $('#categroy_name').val('');
      //  $('#sub_cateogory').val('');

       //  $('#brand_name').val('');
       // $('#product_name').val('');

        $('#purchase_quanitiy').val('');
         $('#Purchase_discount').val('');
          $('#purchase_price').val('');

         $('#suppliers_name').val('');
        $('#sell_discount').val('');

        $('#product_details').val('');
       $('#pd_size').val('');

        $('#add_date').val('');
        $('#sell_price').val('');
    $('#fileToUpload').val('');

    $("#pd_Img").attr("src","");
}


$(document).on('click','#btn-claer',function(){
  //  window.location.reload();
  clear();
    });


 getCategoryName();
//get Category Name
function getCategoryName(){

   $.ajax({
      url:"{{ route('Category_name') }}",
      type:"GET",
       dataType:"json",
        success:function(respones){

          $.each(respones,function(key,value){

              $('#categroy_name').append("<option>"+value.Category_name+"</option>");
            });
        }
   });
}

// get Sub category Name
$(document).on('change','#categroy_name',function(){
  var Name=$(this).val();

  $('#sub_cateogory').html("<option>Sub Category</option>");

  $.ajax({
      url:"{{ route('sub_category')}}",
      type:"GET",
       dataType:"json",
       data:{
        Name:Name
       },
        success:function(respones){

          $.each(respones,function(key,value){

            $('#sub_cateogory').append("<option>"+value.Sub_category+"</option>");
          });

        }
   });

});

//get Brand Name

Brand_Name();
function Brand_Name(){

  $.ajax({
      url:"{{ route('get_brandName') }}",
      type:"GET",
       dataType:"json",
        success:function(respones){

      $.each(respones,function(key,value){
            $('#brand_name').append("<option>"+value.Brand_name+"</option>");
          });
        }
   });
}


//product Name
product_Name();

function product_Name(){

  $.ajax({
      url:"{{ route('get_productName') }}",
      type:"GET",
       dataType:"json",
        success:function(respones){
      $.each(respones,function(key,value){
            $('#product_name').append("<option>"+value.product_Name+"</option>");
          });
        }
   });
}


var form_data = new FormData();
$(document).on('change','#fileToUpload',function(){

var file_image = $("input[type=file]").get(0).files[0];
//var ext = $(this).val().split('.').pop().toLowerCase();
 form_data.append('fileToUpload', file_image);

    if(file_image){
       var reader = new FileReader();
       reader.onload = function(){
           $("#pd_Img").attr("src", reader.result);
           $('#pd_Img').elevateZoom();
       }
       reader.readAsDataURL(file_image);
   }
});


      //insert form
      $(document).on('click','#btn-save',function(e){
        e.preventDefault();

          var bill_number=$('#bill_number').val();
          var category_name=$('#categroy_name').val();
          var sub_category=$('#sub_cateogory').val();

          var brand_name=$('#brand_name').val();
          var product_name=$('#product_name').val();

          var purchase_quanitiy=$('#purchase_quanitiy').val();
          var purchase_discount=$('#Purchase_discount').val();
          var purchase_price=$('#purchase_price').val();

          var suppliers_name=$('#suppliers_name').val();
          var sell_discount=$('#sell_discount').val();

          var pd_details=$('#product_details').val();
          var pd_size=$('#pd_size').val();

          var date=$('#add_date').val();
          var sell_price=$('#sell_price').val();
          var upload_file=$('#fileToUpload').val();


    if(document.getElementById("bill_number").value==""){
           alert("Bill is Empty");
           $('#bill_number').show();
           $('#bill_number').focus();

     }else if(document.getElementById("categroy_name").value==""){
          alert("Category Name is Empty");
           $('#categroy_name').show();
           $('#categroy_name').focus();
     }else if(document.getElementById("sub_cateogory").value==""){
          alert("Sub Category is Empty");
           $('#sub_cateogory').show();
           $('#sub_cateogory').focus();
     }
     else if(document.getElementById("brand_name").value==""){
          alert("Brand Name is Empty");
           $('#brand_name').show();
           $('#brand_name').focus();
     }
     else if(document.getElementById("product_name").value==""){
          alert("product Name is Empty");
           $('#product_name').show();
           $('#product_name').focus();
     }
     else if(document.getElementById("purchase_quanitiy").value==""){
          alert("Purchase Quanitiy is Empty");
           $('#purchase_quanitiy').show();
           $('#purchase_quanitiy').focus();
     }
     else if(document.getElementById("Purchase_discount").value==""){
          alert("Purchase Discount is Empty");
           $('#Purchase_discount').show();
           $('#Purchase_discount').focus();
     }
     else if(document.getElementById("suppliers_name").value==""){
          alert("Suppliers is Empty");
           $('#suppliers_name').show();
           $('#suppliers_name').focus();
     }
     else if(document.getElementById("sell_discount").value==""){
          alert("Sell Discount Empty");
           $('#sell_discount').show();
           $('#sell_discount').focus();
     }
     else if(document.getElementById("product_details").value==""){
          alert("Upload Details Empty");
           $('#product_details').show();
           $('#product_details').focus();
     }
     else if(document.getElementById("pd_size").value==""){
          alert("product Size Empty");
           $('#pd_size').show();
           $('#pd_size').focus();
     }
     else if(document.getElementById("add_date").value==""){
          alert("Upload Date Empty");
           $('#add_date').show();
           $('#add_date').focus();
     }
     else if(document.getElementById("fileToUpload").value==""){
          alert("Upload is Empty");
           $('#fileToUpload').show();
           $('#fileToUpload').focus();
     }else{


    var file =$('#fileToUpload')[0].files[0].size;

       if (file>2097152) { //2mb
 $("#file_error").html("<p style='color:#FF0000'>Image too Big, please select a Image less than 2Mb</p>");
   document.getElementById("fileToUpload").style.borderColor="RED";
    }else{

      $("#file_error").fadeOut();
      form_data.append('bill_number', bill_number);
    form_data.append('category_name', category_name);
     form_data.append('sub_category', sub_category);
     form_data.append('brand_name', brand_name);
      form_data.append('product_name', product_name);
     form_data.append('purchase_quanitiy', purchase_quanitiy);
     form_data.append('purchase_discount', purchase_discount);
     form_data.append('purchase_price', purchase_price);
     form_data.append('date', date);
     form_data.append('sell_price', sell_price);
     form_data.append('pd_details', pd_details);
     form_data.append('pd_size', pd_size);
     form_data.append('suppliers_name', suppliers_name);
     form_data.append('sell_discount', sell_discount);

        $.ajax({
      url:"{{ route('purchase_insert') }}",
         type: "POST",
        data: form_data,
       cache:false,
       contentType: false,
       processData: false,
       success:function(data){
        swal(data, "Purchase Product", "success");
        clear();
      ShowAllData();

          }
        });
    }

  }
      });


 //Live Serarch Book
 $('#search_PurchProduct').keyup(function(){
    var search_data= $(this).val();

     if (search_data !="") {
      $.ajax({
          url:"{{ route('search_purchase_Porduct') }}",
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
            data= data + "<th>"+value.bill_number+"</th>"
            data= data + "<th>"+value.Category+"</th>"

            data= data + "<th>"+value.sub_Category+"</th>"
            data= data + "<th>"+value.brand_name+"</th>"
            data= data + "<th>"+value.product_name+"</th>"

            data= data + "<th>"+value.purchase_price+"</th>"
            data= data + "<th>"+value.purchase_quanitiy+"</th>"
            data= data + "<th>"+value.sell_price+"</th>"

            data= data + "<th>"+value.Suppliers_name+"</th>"
            data= data + "<th>"+value.sell_discount+"</th>"
            data= data + "<th>"+value.product_size+"</th>"
            data= data + "<th><img src="+value.image+" width='200px' height='150px'></th>"

            data= data + "<th>"
          data= data + "<button id='view-btn' data-target='#View_Modal' data-toggle='modal'  data-date="+value.upload_date+" data-pddetails="+value.product_details+" class='btn btn-success'>View</button>"
          data= data + "</th>"

            data= data + "<th>"
          data= data + "<button id='update_id'  data-target='#UpdateModal' data-toggle='modal' data-id="+value.id+"  class='btn btn-warning'>Edit</button>"
          data= data + "</th>"
          data= data + "<th>"
      data= data + "<button id='delete-btn'   data-id="+value.id+" class='btn btn-danger'>Delete</button>"
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
