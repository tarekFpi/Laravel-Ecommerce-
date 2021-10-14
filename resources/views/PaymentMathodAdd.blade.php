
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/2.2.3/jquery.elevatezoom.min.js" integrity="sha512-UH428GPLVbCa8xDVooDWXytY8WASfzVv3kxCvTAFkxD2vPjouf1I3+RJ2QcSckESsb7sI+gv3yhsgw9ZhM7sDw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
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

#fileToUpload{
    width: 400px;
}

input[type=number]{
    height:50px;
    font-size:18px;
    width:500px;
    box-shadow: 1px 1px 1px 1px  black;
    }
</style>
</head>
<body>

    @section('admin_content')
    <div class="container mt-3">
    <div class="card" style="width: 800px;" id="brand_cart">
         <div class="card-header">
            <h3 style="text-align: center;">Payment Mathod Add</h3>
            <div class="card-body ">

                        <div class="form-group">
                          <label for="formGroupExampleInput">Mathod Name:</label>
                          <input type="text" class="form-control"
                          autocomplete="off" id="mathod_name" placeholder="Product Name">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Phone Number:</label>
                            <input type="number" class="form-control"
                            autocomplete="off" id="phone_number" placeholder="Phne Number">
                          </div>

                          <div class="form-group">
                            <label for="formGroupExampleInput2">Date:</label>
                          <input type="text" class="form-control" id="add_date" autocomplete="off"  placeholder="Upload Date">
                           </div>

                          <div class="form-group">
                            <label for="formGroupExampleInput2">Upload Image:</label>
                             <input type="file" class="form-control" id="fileToUpload"/>
                             <span id="file_error"></span>
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
    <label>Live Search</label>
<input  type="text" id="search_mathodName" placeholder=" Live Search for PaymentName,phone Number ..."  style="width: 400px; padding: 10px;"/>
  </div>
<br>

<div id="loadData">
   <table id="example" class="table table-bordered table-striped">
        <thead class="table-dark">
           <tr>
               <th scope="col">Serial Id</th>
               <th scope="col">Mathod Name</th>
               <th scope="col">Phone</th>
               <th scope="col">Date</th>
               <th scope="col">Image</th>
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


      <!-- Add Model End-->
      <div class="container">

        <div class="modal fade" id="UpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">

                <div class="form-group">
                    <label for="formGroupExampleInput">Phone Number:</label>
                    <input type="text" class="form-control"
                    autocomplete="off" id="Upphone_number" placeholder="Phne Number" style="width: 400px;">
                  </div>

                  <input type="hidden" name="update_serial_id" id="update_serial_id"/>
                  <input type="submit" id="update-button" class="btn btn-success" value="Update" style="width:150px;"/>
              </div>

            </div>
          </div>
        </div>
          </div>
          <!-- Add Model-->
          @endsection
</body>


<script>
    $(document).ready(function(){


  $.ajaxSetup({
headers: {
 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});


ShowAllData();

function ShowAllData(){
   $.ajax({
      url:"{{route('paymentmathod_Show') }}",
      type:"GET",
       dataType:"json",
       success:function(respones){
         var data="";
         console.log(respones);

       $.each(respones,function(key,value){
          data= data + "<tr>";
            data= data + "<th>"+value.id+"</th>"
            data= data + "<th>"+value.Mathod_Name+"</th>"
            data= data + "<th>"+value.phone+"</th>"
            data= data + "<th>"+value.Date+"</th>"
            data= data + "<th><img src="+value.image+" width='200' height='200px'></th>"
              data= data + "<th>"
          data= data + "<button id='update_id'  data-target='#UpdateModal' data-toggle='modal' data-id="+value.id+" data-phone="+value.phone+" class='btn btn-warning'>Edit</button>"
          data= data + "</th>"
          data= data + "<th>"
      data= data + "<button id='delete-btn'  data-id="+value.id+" class='btn btn-danger'>Delete</button>"
              data= data + "</th>"
            data= data + "</tr>";
         });
         $('tbody').html(data);

       }

   });
 }

 var form_data = new FormData();
 $(document).on('change','#fileToUpload',function(){
    var file_image = $("input[type=file]").get(0).files[0];
   form_data.append('fileToUpload', file_image);
    });

     //insert form
      $(document).on('click','#btn-save',function(e){
        e.preventDefault();

          var mathod_name=$('#mathod_name').val();
          var phoneNumber=$('#phone_number').val();
          var upload_date=$('#add_date').val();

    if(document.getElementById("mathod_name").value==""){
           alert("product Name is Empty");
           $('#mathod_name').show();
           $('#mathod_name').focus();

     }else if(document.getElementById("phone_number").value==""){
          alert("Phoen Number is Empty");
           $('#phone_number').show();
           $('#phone_number').focus();
     }else if(document.getElementById("add_date").value==""){
        alert("Upload Date is Empty");
         $('#add_date').show();
         $('#add_date').focus();
   }
     else{

      $("#file_error").fadeOut();

  form_data.append('mathod_name', mathod_name);
  form_data.append('phoneNumber', phoneNumber);
  form_data.append('upload_date', upload_date);

          $.ajax({
          url:"{{ route('paymentmathod_insert') }}",
           type: "POST",
           data: form_data,
           cache:false,
           contentType: false,
           processData: false,
            success:function(data){
         swal(data, "Payment Mathod", "success");
            ShowAllData();
           $('#add_date').val('');
           $('#phone_number').val('');
           $('#mathod_name').val('');
            }
          });

         }

      });



       ///update getData
       $(document).on('click','#update_id',function(e){
         e.preventDefault();

          var update_id= $(this).data('id');
         var phone= $(this).data('phone');

           $('#update_serial_id').val(update_id);
             $('#Upphone_number').val(phone);

       });



       ///update Button
       $(document).on('click','#update-button',function(e){
        e.preventDefault();

      var id= $('#update_serial_id').val();
      var phone_number= $('#Upphone_number').val();

      if(document.getElementById("Upphone_number").value==""){
        alert("Phone Number  is Empty");

    }else{
        $.ajax({
            url:"{{ route('update_paymentMathod') }}",
            data:{
                id:id,
                phone_number:phone_number
            },
            success:function(data){
                swal(data, "Payment Mathod", "success");
             $('#UpdateModal').modal().hide();
              window.location.reload();
            }
         });
     }

      });

       //Delete Data
        $(document).on('click','#delete-btn',function(e){
          e.preventDefault();
             var elemant=this;

                var delete_id=$(this).data('id');
             $.ajax({
                url:"{{ route('delete_paymentMathod') }}",
                data:{
                  delete_id:delete_id
                },
                success:function(data){
                    swal(data, "Payment Mathod", "success");
                  $(elemant).closest('tr').fadeOut();
                }
             });
        });



 //Live Serarch Book
 $('#search_mathodName').keyup(function(){
    var search_data= $(this).val();

     if (search_data !="") {
      $.ajax({
          url:"{{ route('search_paymentMathod') }}",
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
            data= data + "<th>"+value.Mathod_Name+"</th>"
            data= data + "<th>"+value.phone+"</th>"
            data= data + "<th>"+value.Date+"</th>"
            data= data + "<th><img src="+value.image+" width='200' height='200px'></th>"
              data= data + "<th>"
          data= data + "<button id='update_id'  data-target='#UpdateModal' data-toggle='modal' data-id="+value.id+" data-phone="+value.phone+" class='btn btn-warning'>Edit</button>"
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
