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

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
      $(function () {
                $("#add_date").datepicker();
            });
</script>

<style>
   input[type=text]{
 height:50px;
 font-size:18px;
 width:500px;
 box-shadow: 1px 1px 1px 1px  black;
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

.modal .modal-dialog {
 //max-width: 80% !important;
  }
</style>
</head>
<body>

    @section('admin_content')

    <div class="container mt-3">
    <div class="card" style="width: 800px;" id="brand_cart">
         <div class="card-header">
            <h3 style="text-align: center;">product Name Add</h3>
            <div class="card-body ">

                        <div class="form-group">
                          <label for="formGroupExampleInput">Product Name:</label>
                          <input type="text" class="form-control"
                          autocomplete="off" id="product_name" placeholder="Product Name">
                        </div>

                <div class="form-group">
              <label for="formGroupExampleInput2">Date:</label>
            <input type="text" class="form-control" id="add_date" autocomplete="off"  placeholder="Upload Date">
             </div>

             <div class="form-group mt-4">
                <button type="button" id="btn-save" class="btn btn-primary" style="width:200px;">Save</button>
               </div>

            </div>
         </div>
        </div>
    </div>

  <br>
  <div class="container">
<div class="card ml-2">
 <div class="card-header">
 <div class="card-body">

  <div class="search_student_data">
    <label>Book Live Search</label>
<input  type="text" id="search_productName" placeholder=" Live Search for product Name ..."  style="width: 400px; padding: 10px;"/>
  </div>
<br>

<div id="loadData">
   <table id="example" class="table table-bordered table-striped">
        <thead class="table-dark">
           <tr>
               <th scope="col">Serial Id</th>
               <th scope="col">product Name</th>
               <th scope="col">Date</th>
               <th scope="col">Update</th>
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
                <label for="formGroupExampleInput">Product Name:</label>
                <input type="text" class="form-control"
                autocomplete="off" id="Upproduct_name" placeholder="Product Name" style="width: 400px;">
              </div>

  <input type="hidden" name="update_serial_id" id="update_serial_id"/>
  <input type="submit" id="update-btn" class="btn btn-success" value="Update" style="width:150px;"/>

          </div>

        </div>
      </div>
    </div>
      </div>
      <!-- Add Model End-->
      @endsection
</body>


<script >
    $(document).ready(function(){


  $.ajaxSetup({
headers: {
 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});



ShowAllData();

function ShowAllData(){
   $.ajax({
      url:"{{ route('show_all_product_Name') }}",
      type:"GET",
       dataType:"json",
       success:function(respones){
         var data="";

       $.each(respones,function(key,value){
          data= data + "<tr>";
            data= data + "<th>"+value.id+"</th>"
            data= data + "<th>"+value.product_Name+"</th>"
            data= data + "<th>"+value.Date+"</th>"
              data= data + "<th>"
          data= data + "<button id='update_id'  data-target='#UpdateModal' data-toggle='modal' data-id="+value.id+" data-up_name="+value.product_Name+" class='btn btn-warning'>Edit</button>"
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


      //insert form
      $(document).on('click','#btn-save',function(e){
        e.preventDefault();

          var product_name=$('#product_name').val();
          var upload_date=$('#add_date').val();

    if(document.getElementById("product_name").value==""){
           alert("product Name is Empty");
           $('#product_name').show();
           $('#product_name').focus();

     }else if(document.getElementById("add_date").value==""){
          alert("Upload is Empty");
           $('#add_date').show();
           $('#add_date').focus();
     }else{

          $.ajax({
        url:"{{ url('/productName_insert') }}",
           type: "POST",
          data:{
            product_name:product_name,
            upload_date:upload_date
          },
            success:function(data){
          swal(data, "Product Name", "success");
            ShowAllData();
           $('#add_date').val('');
          $('#product_name').val('');

            }
          });

         }

      });


      $(document).on('click','.btn-close',function(){
      window.location.reload();
      });

 ///update getData
 $(document).on('click','#update_id',function(e){
 e.preventDefault();

    var update_id= $(this).data('id');
    var upName= $(this).data('up_name');

    $('#update_serial_id').val(update_id);
    $('#Upproduct_name').val(upName);


       });


     ///update getData
     $(document).on('click','#update-btn',function(e){
       e.preventDefault();

    var update_id= $('#update_serial_id').val();
    var productName=$('#Upproduct_name').val();

           $.ajax({
            url:"{{ route('productName_Update') }}",
            type:"GET",
            data:{
                update_id:update_id,
                productName:productName
            },
            success:function(data){
             swal(data, "Product Name", "success");
              $('#UpdateModal').modal().hide();
              window.location.reload();

            }
        });

     });


       //Delete Data
        $(document).on('click','#delete-btn',function(e){
          e.preventDefault();
             var elemant=this;
           var delete_id=$(this).data('id');
             $.ajax({
                url:"{{ route('productName_Delete') }}",
                data:{
                  delete_id:delete_id
                },
                success:function(data){
              swal(data, "Product Name", "success");
                  $(elemant).closest('tr').fadeOut();
                }
             });
        });


 //Live Serarch product Name
 $('#search_productName').keyup(function(){
    var search_data= $(this).val();

    if (search_data !="") {
      $.ajax({
          url:"{{ route('search_productName') }}",
           type:"GET",
           dataType:"json",
          data:{
           search_data:search_data
          },
          success:function(respones){
            var data="";

       $.each(respones,function(key,value){
        data= data + "<tr>";
          data= data + "<th>"+value.id+"</th>"
          data= data + "<th>"+value.product_Name+"</th>"
          data= data + "<th>"+value.Date+"</th>"
         data= data + "<th>"
        data= data + "<button id='update_id'  data-target='#UpdateModal' data-toggle='modal' data-id="+value.id+" data-up_name="+value.product_Name+" class='btn btn-warning'>Edit</button>"
        data= data + "</th>"
        data= data + "<th>"
       data= data + "<button id='delete-btn'  data-id="+value.id+" class='btn btn-danger'>Delete</button>"
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
