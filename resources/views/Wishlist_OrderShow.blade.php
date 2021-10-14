
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
  margin-left: 20px;
}

.Mycontainer{
    margin-top: 20px;
    margin-left: 50px;
     width: 55%;
    border-radius: 4px;
    background: #fff;
    box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
      transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
  cursor: pointer;

}
</style>
</head>
<body>

@include('header')
  <div class="Mycontainer">
<br>

<?php
$user_gmail="";
if(!empty(Session()->get('gmail'))){
$user_gmail= Session()->get('gmail');
   }
 ?>

<input type="hidden" id="session_gmail" value="<?php echo  $user_gmail;?>" />

<div id="loadData">
   <table id="example" class="table table-striped">
        <thead>
           <tr>
               <th scope="col">Product Name</th>
               <th scope="col">Size</th>
               <th scope="col">price</th>
               <th scope="col">Sell Quantity</th>
               <th scope="col">Discount</th>
               <th scope="col">Image</th>
               <th scope="col">Select Order</th>
               <th scope="col">Delete</th>
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

toastr.options = {
    "closeButton": true,
    "newestOnTop": true,
    "positionClass": "toast-top-right"
  };


//get All data show
ShowAllData();

function ShowAllData(){
   $.ajax({
      url:"{{ route('user_orderWishlist') }}",
      type:"GET",
       dataType:"json",
       success:function(respones){
         var data="";
         console.log(respones);

   $.each(respones,function(key,value){
    data= data + "<tr>";
    data= data + "<th>"+value.product_name+"</th>"
    data= data + "<th>"+value.product_size+"</th>"
    data= data + "<th>"+value.product_price+"</th>"
    data= data + "<th>"+value.sell_quantity+"</th>"
    data= data + "<th>"+value.sell_discount+"</th>"
    data= data + "<th><img src="+value.image+" width='200px' height='150px'></th>"
    data= data + "<th>"
   data= data + "<img  data-id="+value.serial_id+" id='add_to_cart' src='/webImage/add_tocart.png' width='50px' height='50px'>"
  data= data + "</th>"
   data= data + "<th>"
  data= data + "<img src='/webImage/delete_d.png' id='delete-btn' data-delete_id="+value.id+" width='50px' height='50px'>"
  data= data + "</th>"
    data= data + "</tr>";
 });
$('tbody').html(data);


       }

   });
 }



//delete
 $(document).on('click','#delete-btn',function(e){
    e.preventDefault();
    var pd_id=$(this).data("delete_id");

    var isDelete  = confirm("Do You Really want to Delete Records ?");

        if (isDelete == true) {
           $.ajax({

                url:"{{ route('wishlist_Order_delete') }}",
                   type:"get",
                   data:{
                    pd_id:pd_id
                   },
                   success:function(data){
                     toastr.success(data);
                    ShowAllData();
                   }
               });
            }
   });

      $(document).on('click','#add_to_cart',function(e){
        e.preventDefault();
        var pd_id=$(this).data("id");

           var sendOrder = confirm("Do you Add To Cart Order !!");

            if (sendOrder == true) {

               $.ajax({
                    url:"{{ route('wishlist_to_AddCart') }}",
                       type:"POST",
                       data:{
                        pd_id:pd_id
                       },
                       success:function(data){
                         toastr.success(data);
                        user_AddresssCheck();
                       }
                   });
                }
       });


   ///user infromation Add Check
   function user_AddresssCheck(){
    var user_Gmail=$('#session_gmail').val();

       $.ajax({
           url:"{{ route('check_userAddress') }}",
           type:"GET",
           data:{
               user_Gmail:user_Gmail
           },
           success:function(data){
             console.log(data);

             if(data.match("User_Infromation_Alrady_Add")){

               window.location.href = "{{ route('userCart_From') }}";
             }else{
            window.location.href = "{{ route('UserInformation_Add') }}";
           }
         }

       });
     }

    });


 </script>
</html>
