
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



<style>
   input[type=text]{
 height:50px;
 font-size:18px;
 width:500px;
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

#region_name{
    box-shadow: 1px 1px 1px 1px  black;
    width:500px;
	height:55px;

  }

  #cityName{
    box-shadow: 1px 1px 1px 1px  black;
    width:500px;
	height:55px;

  }

  #areaName{
    box-shadow: 1px 1px 1px 1px  black;
    width:500px;
	height:55px;

  }

  #order_option{
    box-shadow: 1px 1px 1px 1px  black;
    width:500px;
	height:55px;

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

    <div class="container mt-3">
    <div class="card" style="width: 800px;" id="brand_cart">
      <div class="card-header">
      <h3 style="text-align: center;">User Infromation</h3>
       <div class="card-body ">

   <div class="form-group">
     <label for="formGroupExampleInput">User Name:</label>
      <input type="text" class="form-control"
     autocomplete="off" id="user_Name" placeholder="User Name">
   </div>


   <div class="form-group">
    <label for="formGroupExampleInput">Phone:</label>
     <input type="text" class="form-control"
    autocomplete="off" id="User_phone" placeholder="Phone">
  </div>


  <div class="form-group">
  <label for="formGroupExampleInput">Region Name:</label>
  <select  class="form-control" id="region_name" class="select_option">
   <option>Region Name</option>
  </select>
  </div>


  <div class="form-group">
  <label for="formGroupExampleInput">City Name:</label>
  <select  class="form-control" id="cityName">
  <option>Please Choose Your City</option>
   </select>
  </div>

  <div class="form-group">
  <label for="formGroupExampleInput">Area Name:</label>
  <select  class="form-control" id="areaName">
  <option>Please Choose Your Area</option>
   </select>
  </div>



  <div class="form-group">
     <label for="formGroupExampleInput">Address:</label>
      <input type="text" class="form-control"
     autocomplete="off" id="addresss"  placeholder="House#123, Building No,Road No"/>
   </div>



  <div class="form-group">
  <label for="formGroupExampleInput">Select a Label For Effective Delivery:</label>
  <select  class="form-control" id="order_option">
  <option>Please Choose Option</option>
  <option>OFFICE</option>
 <option>HOME</option>
   </select>
  </div>


   <div class="form-group mt-4">
    <button type="button" id="btn-save" class="btn btn-primary" style="width:200px;">Save</button>
  </div>

  <input type="hidden" id="shipping_rate">
   </div>
    </div>
  </div>

    </div>



</body>


<script >
    $(document).ready(function(){

   $.ajaxSetup({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
})

getRegion_Name();
//get Category Name
function getRegion_Name(){

   $.ajax({
      url:"{{ route('get_RegionName') }}",
      type:"GET",
       dataType:"json",
        success:function(respones){
          console.log(respones);
         $.each(respones,function(key,value){

         $('#region_name').append("<option>"+value.Region_name+"</option>");
            });
        }
   });
}

$(document).on('change','#region_name',function(){
  var region_Name=$(this).val();

 $.ajax({
   url:"{{ route('get_CityName') }}",
   type:"GET",
    dataType:"json",
    data:{
      region_Name:region_Name
    },
     success:function(respones){
      $.each(respones,function(key,value){

      $('#cityName').append("<option>"+value.City_name+"</option>");
         });
     }
});
});



 //get area name
 $(document).on('change','#cityName',function(){

var city_name=$(this).val();
var region_name=$('#region_name').val();
$('#areaName').val('');

$.ajax({
   url:"{{ route('get_AreaName') }}",
   type:"GET",
    dataType:"json",
    data:{
   region_name:region_name,
city_name:city_name
    },
     success:function(respones){

      $.each(respones,function(key,value){

      $('#areaName').append("<option>"+value.Area_name+"</option>");

         });
     }
});
});


//get shippng rate
$(document).on('change','#areaName',function(){

var areaName=$(this).val();
var region_Name=$('#region_name').val();
var cityName=$('#cityName').val();
//$('#shipping_rate').val('');

$.ajax({
   url:"{{ route('get_Shipping') }}",
   type:"GET",
    dataType:"json",
    data:{
   region_Name:region_Name,
   cityName:cityName,
   areaName:areaName
    },
     success:function(respones){
     console.log(respones);
  $('#shipping_rate').val(respones);

     }
});
});



     //insert form
  $(document).on('click','#btn-save',function(e){
  e.preventDefault();

          var userName=$('#user_Name').val();
          var phone=$('#User_phone').val();

          var Address=$('#addresss').val();
          var Order_Option=$('#order_option').val();
          var region_Name=$('#region_name').val();
          var city_name=$('#cityName').val();
          var areaName=$('#areaName').val();
          var user_gmail=$('#session_gmail').val();
          var shipping= $('#shipping_rate').val();

     if(document.getElementById("user_Name").value==""){
       alert("User Name is Empty");

     }
     else  if(document.getElementById("User_phone").value==""){
      alert("Phone Number is Empty");

     }else if(document.getElementById("region_name").value=="Region Name"){
      alert("Region Name is Empty");

     } else if(document.getElementById("cityName").value==""){
          alert("City Name is Empty");
     }
    else if(document.getElementById("areaName").value==""){
          alert("Area Name is Empty");
     }else if(document.getElementById("addresss").value==""){
          alert("Address  is Empty");

     }else{


  $.ajax({
         url:"{{ url('UserInformation_Insert') }}",
           type:"POST",
          data:{
            userName:userName,
            phone:phone,
            Address:Address,
            Order_Option:Order_Option,
            region_Name:region_Name,
            city_name:city_name,
            areaName:areaName,
            user_gmail:user_gmail,
            shipping:shipping
          },
            success:function(data){
            console.log(data);
            alert(data);
            window.location.href = "{{ route('userCart_From') }}";
          $('#user_Name').val('');
           $('#User_phone').val('');

           $('#addresss').val('');
           $('#order_option').val();
           $('#region_name').val();
          $('#cityName').val();
           $('#areaName').val();
           $('#shipping_rate').val('');
         //  window.location.reload();

            }
          });

         }

      });



    });


 </script>
</html>
