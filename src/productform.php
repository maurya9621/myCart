<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">
<body>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- <form class="form-horizontal"> -->
<form class="form-horizontal" action="database.php" method="POST">
<fieldset>


<!-- Form Name -->
<legend >PRODUCTS</legend>


<!-- product name-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>  
  <div class="col-md-4">
  <input  name="name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">
    
  </div>
</div>


<!-- code -->
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">PRODUCT CODE</label>
  <div class="col-md-4">
    <input name="code" class="form-control input-md" type="number">
  </div>
</div>



<!-- Price-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_weight">PRODUCT PRICE</label>  
  <div class="col-md-4">
  <input name="price" placeholder="PRODUCT PRICE" class="form-control input-md" required="" type="number">
    
  </div>
</div>

  
<!-- File Button(image) --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">PRODUCT IMAGE</label>
  <div class="col-md-4">
    <input name="image" class="input-file" type="file">
  </div>
</div>


<!--add Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button id="ADD" name="ADD" class="button ">ADD PRODUCT</button>
  </div>
  </div>

  </fieldset>
</form>




</body>

    <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

</html>