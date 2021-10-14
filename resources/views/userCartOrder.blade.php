<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/2.2.3/jquery.elevatezoom.min.js" integrity="sha512-UH428GPLVbCa8xDVooDWXytY8WASfzVv3kxCvTAFkxD2vPjouf1I3+RJ2QcSckESsb7sI+gv3yhsgw9ZhM7sDw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
</head>
<body>
    
    <script>

 function ShowAllData(){
   $.ajax({
      url:"userCartOrder_show",
      type:"GET",
       dataType:"json",
       success:function(respones){
         var data="";
         console.log(respones);

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
          data= data + "<button id='update_id'  data-target='#UpdateModal' data-toggle='modal' data-id="+value.id+" data-up_name="+value.bill_number+" class='btn btn-warning'>View</button>"
          data= data + "</th>"

            data= data + "<th>"
          data= data + "<button id='update_id'  data-target='#UpdateModal' data-toggle='modal' data-id="+value.id+" data-up_name="+value.bill_number+" class='btn btn-warning'>Edit</button>"
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
     
    </script>
</body>
</html>