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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/2.2.3/jquery.elevatezoom.min.js" integrity="sha512-UH428GPLVbCa8xDVooDWXytY8WASfzVv3kxCvTAFkxD2vPjouf1I3+RJ2QcSckESsb7sI+gv3yhsgw9ZhM7sDw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


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


 #Product_name{
    box-shadow: 1px 1px 1px 1px  black;
    width:500px;
	height:55px;
  }

   #Price_pd{
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

</style>
</head>
<body>
    @section('admin_content')

    <div class="container mt-3">
    <div class="card" style="width: 800px;" id="brand_cart">
         <div class="card-header">
            <h3 style="text-align: center;">Voucher Cord Add</h3>
            <div class="card-body">


                        <div class="form-group">
                          <label for="formGroupExampleInput">Vourchare Cord:</label>
                          <input type="text" class="form-control"
                          autocomplete="off" id="Vourchare_cord" placeholder="Vourchare Cord">
                        </div>

                          <div class="form-group">
                            <label for="formGroupExampleInput">Discount:</label>
                            <input type="text" class="form-control"
                            autocomplete="off" id="discount" placeholder="Discount">
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
<input  type="text" id="serarch_voucher_code" placeholder=" Live Search for Voucher Code, Date."  style="width: 500px; padding: 10px;"/>
  </div>
<br>

<div id="loadData">
   <table id="example" class="table table-bordered table-striped">
        <thead class="table-dark">
           <tr>
               <th scope="col">Id</th>
               <th scope="col">Vourcher Cord</th>
               <th scope="col">Discount</th>
               <th scope="col">Upload Date</th>
               <th scope="col">Status</th>
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
<div class="modal fade" id="voucher_Update_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    <label for="formGroupExampleInput2">New Voucher Code:</label>
 <input type="text" class="form-control" id="vourcher_codUpdate" autocomplete="off"  placeholder="New Voucher Code" style="width: 400px;">
 </div>

 <div class="form-group">
    <label for="formGroupExampleInput2">New Voucher Code Discount:</label>
 <input type="text" class="form-control" id="update_discount" autocomplete="off"  placeholder="Discount" style="width: 400px;">
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

//get All data show

ShowAllData();

function ShowAllData(){
   $.ajax({
      url:"{{ route('vourcherCord_show') }}",
      type:"GET",
       dataType:"json",
       success:function(respones){
         var data="";
         console.log(respones);

       $.each(respones,function(key,value){
          data= data + "<tr>";
            data= data + "<th>"+value.id+"</th>"
            data= data + "<th>"+value.Vouecher_cord+"</th>"
            data= data + "<th>"+value.Discount+"</th>"
            data= data + "<th>"+value.Current_date+"</th>"
            if(value.status > 0){
            data= data + "<th>"
          data= data + "<button id='active-btn'  data-id="+value.id+" class='btn btn-danger'>Activate</button>"
           data= data + "</th>"
        }else{

     data= data +"<th>"
     data= data +"<button id='unActiv-btn'data-deactivate="+value.id+" class='btn btn-primary'>Deactivate</button>"
      data= data + "</th>"
        }

          data= data + "<th>"
            data= data + "<button id='update-btn' data-target='#voucher_Update_model' data-toggle='modal' data-id="+value.id+" data-vouecher_cord="+value.Vouecher_cord+" data-discount="+value.Discount+" class='btn btn-warning'>Edit</button>"
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

 //pd_Img
 product_Name();

function product_Name(){

  $.ajax({
      url:"{{ route('vourcher_productName_show') }}",
      type:"GET",
       dataType:"json",
        success:function(respones){
      $.each(respones,function(key,value){
            $('#Product_name').append("<option>"+value.product_name+"</option>");
          });
        }
   });
}


// get product Name for price
$(document).on('change','#Product_name',function(){
    var Name=$(this).val();

    $('#Price_pd').html("<option>Select--Price--</option>");

    $.ajax({
        url:"{{ route('voucher_getPrice')}}",
        type:"GET",
         dataType:"json",
         data:{
          Name:Name
         },
          success:function(respones){

            $.each(respones,function(key,value){

            //  $('#Price_pd').append("<option>"+value.sell_price+"</option>");
              //
            });

          }
     });

  });



// get product Name , price for image show
$(document).on('change','#Price_pd',function(){
    var price=$(this).val();
    var Name=$('#Product_name').val();

    $.ajax({
        url:"{{ route('voucher_getimage')}}",
        type:"GET",
         dataType:"json",
         data:{
          Name:Name,
          price:price
         },
          success:function(respones){
         var sell_price=0;
         var pd_discount=0;

         console.log(respones);
            $.each(respones,function(key,value){

           //   $("#pd_Img").attr("src",value.image);
           //   $('#pd_Img').elevateZoom();

              var dec =(value.sell_discount / 100).toFixed(2);
              pd_discount = price * dec;

               // $('#Sell_Discount').val(pd_discount);
            });

          }
     });

  });


 //insert form
      $(document).on('click','#btn-save',function(e){
        e.preventDefault();

        toastr.options = {
            "closeButton": true,
            "newestOnTop": true,
            "positionClass": "toast-top-right"
          };

          var vourcher_cord=$('#Vourchare_cord').val();
          var upload_date=$('#add_date').val();
          var discount=$('#discount').val();
          var status_cord=0;

    if(document.getElementById("Vourchare_cord").value==""){
           alert("Vourchare cord is Empty");

     }else if(document.getElementById("discount").value==""){
        alert("Disount is Empty");
   }
    else if(document.getElementById("add_date").value==""){
          alert("Upload Date is Empty");

     }else{

          $.ajax({
        url:"{{ route('vourcher_cod_store') }}",
           type: "POST",
          data:{
            vourcher_cord:vourcher_cord,
            upload_date:upload_date,
            discount:discount,
            status_cord:status_cord
          },
            success:function(data){

       swal(data, "Voucher Code", "success");
           $('#add_date').val('');
          $('#Vourchare_cord').val('');
          $('#discount').val('');
          ShowAllData();

            }
          });

         }

      });


      $(document).on("click","#active-btn",function(event){
        event.preventDefault();

        toastr.options = {
            "closeButton": true,
            "newestOnTop": true,
            "positionClass": "toast-top-right"
          };

        var status_code=0;
        var serial_id=$(this).data("id");

       $.ajax({
        url:"{{ route('vourcher_deactivate') }}",
           type:"GET",
           data:{
            serial_id:serial_id,
            status_code:status_code
           },
           success:function(data){
            swal(data, "Voucher Code", "success");
           ShowAllData();
           }
          });
       });


       //Activate
       $(document).on("click","#unActiv-btn",function(event){
        event.preventDefault();

        toastr.options = {
            "closeButton": true,
            "newestOnTop": true,
            "positionClass": "toast-top-right"
          };

        var serial_id=$(this).data("deactivate");
        var status_code=1;

       $.ajax({
        url:"{{ route('vourcher_Activate') }}",
           type:"GET",
           data:{
            serial_id:serial_id,
            status_code:status_code
           },
           success:function(data){
            swal(data, "Voucher Code", "success");
            ShowAllData();
         }
          });
       });



         ///update getData
         $(document).on('click','#update-btn',function(e){
           e.preventDefault();

         var update_id= $(this).data('id');
         var Vouecher_cord= $(this).data('vouecher_cord');
         var Discount= $(this).data('discount');

           $('#update_serial_id').val(update_id);
           $('#update_discount').val(Discount);
           $('#vourcher_codUpdate').val(Vouecher_cord);

         });


  //final button click update
  $(document).on('click','#update_button',function(e){
    e.preventDefault();

    toastr.options = {
        "closeButton": true,
        "newestOnTop": true,
        "positionClass": "toast-top-right"
      };

   var update_id= $('#update_serial_id').val();
  var discount= $('#update_discount').val();
  var voucher_code= $('#vourcher_codUpdate').val();

  $.ajax({
    url:"{{ route('voucher_codUpdate') }}",
    type:"GET",
    data:{
        update_id:update_id,
        discount:discount,
        voucher_code:voucher_code
    },
    success:function(data){
        swal(data, "Voucher Code", "success");
      $('#voucher_Update_model').modal().hide();
      window.location.reload();

    }
});

  });


       //Delete Data
   $(document).on('click','#delete-btn',function(e){
   e.preventDefault();


    toastr.options = {
        "closeButton": true,
        "newestOnTop": true,
        "positionClass": "toast-top-right"
      };

     var elemant=this;
          var delete_id=$(this).data('id');
             $.ajax({
                url:"{{ route('voucher_codDelete') }}",
                data:{
                  delete_id:delete_id
                },
                success:function(data){
                    swal(data, "Voucher Code", "success");
                  $(elemant).closest('tr').fadeOut();
                  ShowAllData();
                }
             });
        });


 $('#serarch_voucher_code').keyup(function(){
    var search_data= $(this).val();

     if (search_data !="") {
      $.ajax({
          url:"{{ route('serarch_voucher_code') }}",
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
              data= data + "<th>"+value.Vouecher_cord+"</th>"
              data= data + "<th>"+value.Discount+"</th>"
              data= data + "<th>"+value.Current_date+"</th>"
              if(value.status > 0){
              data= data + "<th>"
            data= data + "<button id='active-btn'  data-id="+value.id+" class='btn btn-danger'>Activate</button>"
             data= data + "</th>"
          }else{

       data= data +"<th>"
       data= data +"<button id='unActiv-btn'data-deactivate="+value.id+" class='btn btn-primary'>Deactivate</button>"
        data= data + "</th>"
          }

            data= data + "<th>"
              data= data + "<button id='update-btn' data-target='#voucher_Update_model' data-toggle='modal' data-id="+value.id+" data-vouecher_cord="+value.Vouecher_cord+" data-discount="+value.Discount+" class='btn btn-warning'>Edit</button>"
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
