<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style>

.center{
width: 150px;
  margin: 40px auto;
  
}
</style>
</head>
<body>
    
    <div class="container">
        <div class="row">
        
    
                            <div class="col-lg-2">
                                            <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                                              <span class="glyphicon glyphicon-minus"></span>
                                            </button>
                                             </span>

                                        <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10" min="1" max="100">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </button>
                                        </span>
                                    </div>
                            </div>
        </div>
    </div>
<script>
$(document).ready(function(){

var quantitiy=0;
   $('.quantity-right-plus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
            $('#quantity').val(quantity + 1);
    });

     $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
          
            // Increment
            if(quantity>0){
            $('#quantity').val(quantity -1);
            }if(quantity==2){
             $(".quantity-left-minus").prop('disabled', true);
            }
    });
    
    $("#quantity").mouseover(function(){
      $("#quantity").prop('disabled', true);
   });
});

</script>

</body>
</html>