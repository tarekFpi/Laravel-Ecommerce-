
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

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


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


    <div class="container mt-3">

    <div class="card" style="width: 800px;" id="brand_cart">
      <div class="card-header">
      <h3 style="text-align: center;">User Area Add</h3>
       <div class="card-body ">

   <div class="form-group">
     <label for="formGroupExampleInput">Region Name:</label>
      <input type="text" class="form-control"
     autocomplete="off" id="region_name" placeholder="Region Name">
   </div>


   <div class="form-group">
    <label for="formGroupExampleInput">City Name:</label>
     <input type="text" class="form-control"
    autocomplete="off" id="city_name" placeholder="City Name">
  </div>


  <div class="form-group">
    <label for="formGroupExampleInput">Area Name:</label>
     <input type="text" class="form-control"
    autocomplete="off" id="areaName" placeholder="Area Name">
  </div>



  <div class="form-group">
    <label for="formGroupExampleInput">shipping Cost:</label>
     <input type="text" class="form-control"
    autocomplete="off" id="shipping_sarch" placeholder="shipping Sarch">
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
<input  type="text" id="search_user_Area" placeholder="Live Search for Region,City .."  style="width: 400px; padding: 10px;"/>
  </div>
<br>

<div id="loadData">
   <table  class="table table-bordered table-striped">
        <thead class="table-dark">
           <tr>
               <th scope="col">Serial Id</th>
               <th scope="col">Region Name</th>
               <th scope="col">City Name</th>
               <th scope="col">Area Name</th>
               <th scope="col">shipping</th>
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

{{--   model start  --}}
<div class="container">

    <div class="modal fade" id="UpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <div class="form-group">
                <label for="formGroupExampleInput">shipping Cost:</label>
                <input type="text" class="form-control"
                autocomplete="off" id="shipping_cost" placeholder="Product Name" style="width: 400px;">
              </div>


  <input type="hidden"   id="update_serial_id"/>
  <input type="submit" id="update-btn" class="btn btn-success" value="Update" style="width:150px;"/>

          </div>

        </div>
      </div>
    </div>
      </div>
      <!-- Add Model End-->

</body>


<script >
    $(document).ready(function(){

   $.ajaxSetup({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
})


//get All data show
  ShowAllData();

function ShowAllData(){
   $.ajax({
      url:"{{ route('UserAreaShowAll') }}",
      type:"GET",
       dataType:"json",
       success:function(respones){
         var data="";
         console.log(respones);

       $.each(respones,function(key,value){
          data= data + "<tr>";
            data= data + "<th>"+value.id+"</th>"
            data= data + "<th>"+value.Region_name+"</th>"
            data= data + "<th>"+value.City_name+"</th>"
            data= data + "<th>"+value.Area_name+"</th>"
            data= data + "<th>"+value.shipping+"</th>"
              data= data + "<th>"
          data= data + "<button id='update_id'  data-target='#UpdateModal' data-toggle='modal' data-id="+value.id+" data-shipping="+value.shipping+" class='btn btn-warning'>Edit</button>"
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

          var region_name=$('#region_name').val();
          var city_name=$('#city_name').val();
          var areaName=$('#areaName').val();
          var shipping=$('#shipping_sarch').val();

    if(document.getElementById("region_name").value==""){
           alert("Region Name is Empty");
/*            $('#category_name').show();
           $('#category_name').focus(); */

     }else if(document.getElementById("city_name").value==""){
          alert("City Name is Empty");
     }else if(document.getElementById("areaName").value==""){
          alert("Area Name is Empty");
     }else if(document.getElementById("shipping_sarch").value==""){
          alert("shipping Search is Empty");

     }else{

          $.ajax({
         url:"{{ route('UserArea_Insert') }}",
           type: "POST",
          data:{
            region_name:region_name,
            city_name:city_name,
            areaName:areaName,
            shipping:shipping
          },
            success:function(data){
            console.log(data);
            swal(data, "User Area", "success");
         $('#region_name').val('');
          $('#city_name').val('');
          $('#areaName').val('');
          $('#shipping_sarch').val('');
         //  window.location.reload();
          ShowAllData();
            }
          });

         }

      });



       ///update getData
       $(document).on('click','#update_id',function(e){
         e.preventDefault();

    var update_id= $(this).data('id');
    var shipping= $(this).data('shipping');

    $('#update_serial_id').val(update_id);
      $('#shipping_cost').val(shipping);

       });


       //update button
       $(document).on('click','#update-btn',function(e){
        e.preventDefault();

              var delete_id=$('#update_serial_id').val();
              var shipping=  $('#shipping_cost').val();

       if(document.getElementById("shipping_cost").value==""){
         alert("Shipping Cost  is Empty");
           }else{

           $.ajax({
            url:"{{ route('update_Area') }}",
            type:"GET",
              data:{
                delete_id:delete_id,
                shipping:shipping
              },
              success:function(data){
                swal(data, "User Area", "success");
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
                url:"{{ route('Delete_Area') }}",
                type:"GET",
                data:{
                  delete_id:delete_id
                },
                success:function(data){
                    swal(data, "User Area", "success");
                  $(elemant).closest('tr').fadeOut();
                }
             });
        });



 //Live Serarch product Name
 $('#search_user_Area').keyup(function(){

    var search_data= $(this).val();


    if (search_data !="") {
      $.ajax({
          url:"{{ route('search_userArea') }}",
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
            data= data + "<th>"+value.Region_name+"</th>"
            data= data + "<th>"+value.City_name+"</th>"
            data= data + "<th>"+value.Area_name+"</th>"
            data= data + "<th>"+value.shipping+"</th>"
              data= data + "<th>"
          data= data + "<button id='update_id'  data-target='#UpdateModal' data-toggle='modal' data-id="+value.id+" data-shipping="+value.shipping+" class='btn btn-warning'>Edit</button>"
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
