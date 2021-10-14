
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


</style>
</head>
<body>
    @section('admin_content')

    <div class="container mt-3">
    <div class="card" style="width: 800px;" id="brand_cart">
         <div class="card-header">
            <h3 style="text-align: center;">Brand Name Add</h3>
            <div class="card-body ">

                        <div class="form-group">
                          <label for="formGroupExampleInput">Brand Name:</label>
                          <input type="text" class="form-control"
                          autocomplete="off" id="brand_name" placeholder="Brand Name">
                        </div>

                <div class="form-group">
              <label for="formGroupExampleInput2">Date:</label>
            <input type="text" class="form-control" id="add_date" autocomplete="off"                 placeholder="Upload Date">
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
<input  type="text" id="search_book_data" placeholder=" Live Search for Id,Name ,Publication,Department ..."  style="width: 400px; padding: 10px;"/>
  </div>
<br>

<div id="loadData">
   <table id="example" class="table table-bordered table-striped">
        <thead class="table-dark">
           <tr>
               <th scope="col">Serial Id</th>
               <th scope="col">Brand Name</th>
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


{{-- brand Name Update  --}}
<div class="modal fade" id="brandNameUpdate_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    <label for="formGroupExampleInput2">Brand Name:</label>
 <input type="text" class="form-control" id="brand_nameUpdate" autocomplete="off"  placeholder="Brand Naem" style="width: 400px;">
 </div>

 <button type="button" class="btn btn-primary" id="update_button" style="width: 150px;">Update</button>
 <input type="hidden"  id="update_serial_id"/>
    </div>

     </div>
   </div>
 </div>

{{--  Brand Name update End Model --}}

@endsection
</body>


<script >
    $(document).ready(function(){


  $.ajaxSetup({
headers: {
 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});

toastr.options = {

    "closeButton": true,
    "newestOnTop": true,
    "positionClass": "toast-top-right"
  };

//get All data show
ShowAllData();

function ShowAllData(){
   $.ajax({
      url:"{{ route('show_all_brandName') }}",
      type:"GET",
       dataType:"json",
       success:function(respones){
         var data="";
         console.log(respones);

       $.each(respones,function(key,value){
          data= data + "<tr>";
            data= data + "<th>"+value.id+"</th>"
            data= data + "<th>"+value.Brand_name+"</th>"
            data= data + "<th>"+value.Date+"</th>"
          data= data + "<th>"
          data= data + "<button id='update-btn' data-target='#brandNameUpdate_model' data-toggle='modal' data-id="+value.id+" data-brand_name="+value.Brand_name+" class='btn btn-warning'>Edit</button>"
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

          var brand_name=$('#brand_name').val();
          var upload_date=$('#add_date').val();

    if(document.getElementById("brand_name").value==""){
           alert("Brand is Empty");
           $('#brand_name').show();
           $('#brand_name').focus();

     }else if(document.getElementById("add_date").value==""){
          alert("Upload is Empty");
           $('#add_date').show();
           $('#add_date').focus();
     }else{

          $.ajax({
        url:"{{ url('/Brand_insert') }}",
           type: "POST",
          data:{
            brand_name:brand_name,
            upload_date:upload_date
          },
            success:function(data){
        swal(data, "Brand Name", "success");

           $('#add_date').val('');
          $('#brand_name').val('');
         ShowAllData();
            }
          });

         }

      });



      $(document).on('click','.btn-close',function(){
      window.location.reload();
      });


         ///update getData
         $(document).on('click','#update-btn',function(e){
           e.preventDefault();

          var update_id= $(this).data('id');
         var brand_name= $(this).data('brand_name');

             $('#update_serial_id').val(update_id);
               $('#brand_nameUpdate').val(brand_name);

         });

  //final button click update
  $(document).on('click','#update_button',function(e){
    e.preventDefault();

   var update_id= $('#update_serial_id').val();
  var brand_name= $('#brand_nameUpdate').val();

  $.ajax({
    url:"{{ route('Brand_NameUpdate') }}",
    type:"GET",
    data:{
        update_id:update_id,
        brand_name:brand_name
    },
    success:function(data){
        swal(data, "Brand Name", "success");
      $('#brandNameUpdate_model').modal().hide();
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
                url:"{{ route('BrandName_delete') }}",
                data:{
                  delete_id:delete_id
                },
                success:function(data){
                    swal(data, "Brand Name", "success");
                  $(elemant).closest('tr').fadeOut();
                }
             });
        });

        //Live Serarch Book
        $('#search_book_data').keyup(function(){
         var search_data= $(this).val();

          if (search_data !="") {
           $.ajax({
               url:"Book_search",
                type:"GET",
               data:{
                search_data:search_data
               },
               success:function(data){
                //  $('#loadData').html(data);
                $('tbody').html(data);

               }
           });
          }else{
            window.location.reload();
          }
       });

    });


 </script>
</html>
