<?php

session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; 
    }
}
  	
}
?>
<html>
<head>
<title>Demo Shopping Cart </title>

</head>
<style>
	*{
		margin: 0;
		padding: 0;
	}
	.table td {
	border-bottom: #F0F0F0 1px solid;
	padding: 10px;
	}
.cart_div {
	float:right;
	font-weight:bold;
	position:relative;
	}
.cart_div a {
	color:#000;
	}	
.cart_div span {
	font-size: 12px;
    line-height: 14px;
    background: #F68B1E;
    padding: 2px;
    border: 2px solid #fff;
    border-radius: 50%;
    position: absolute;
    top: -1px;
    left: 13px;
    color: #fff;
    width: 14px;
    height: 13px;
    text-align: center;
	}
.cart .remove {
    background: none;
    border: none;
    color: #0067ab;
    cursor: pointer;
    padding: 0px;
	}
.cart .remove:hover {
	text-decoration:underline;
	}

	.payment-container {
	margin: auto;
	padding: 25px;
	height: 400px;
	width: 700px;
	background: #f7f7f7;
	border-radius: 15px;
	box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
}

/* NAV BAR */

.top-nav {
	margin: 0 auto;
	height: 25px;
	display: flex;
	justify-content: center;
}

.top-nav ul {
	display: flex;
}

.top-nav ul li {
	width: 100px;
	padding-bottom: 5px;
	text-align: center;
	cursor: pointer;
}

.normal {
	color: gray;
	border-bottom: 1px solid gray;
}

.highlighted {
	font-weight: 700;
	color: #4f7cac;
	border-bottom: 2px solid #4f7cac;
}

/* MAIN PAYMENT SECTION */

.main {
	height: 325px;
	/* display: flex; */
	align-items: center;
	justify-content: space-around;
	font-size: 14px;
}

.right-payment-info {
	margin-top: 25px;
	width: 200px;
	height: 300px;
	display: flex;
	flex-direction: column;
	justify-content: space-between;
}

.payment-method h2 {
	margin-bottom: 10px;
	font-size: 16px;
	font-weight: 700;
}

.radio-container {
	display: flex;
	gap: 5px;
}

.radio-container label:not(:last-child) {
	margin-right: 20px;
}

.card-info-container {
	width: 200px;
	display: flex;
	flex-direction: column;
	gap: 15px;
}

.card-info {
	display: flex;
	flex-direction: column;
	gap: 10px;
	width: 200px;
}

.card-info label {
	text-transform: uppercase;
	letter-spacing: 0.025em;
	font-size: 13px;
}

.card-info input {
	margin-top: 5px;
	border: 1px solid #333333;
	border-radius: 5px;
	letter-spacing: 0.025em;
	height: 25px;
}

.full-width {
	width: 200px;
	padding-left: 5px;
}

.expire-ccv {
	display: flex;
	justify-content: space-between;
}

.expire-ccv input {
	text-align: center;
}

.expire-ccv label {
	display: flex;
	flex-direction: column;
}

.expire-date {
	border: 1px solid #333333;
	border-radius: 5px;
	margin-top: 5px;
}

.expire-date input {
	margin: 0;
	border: none;
}

.expire-date span {
	font-size: 14px;
	font-weight: 700;
}

.save-card-info {
	display: flex;
	align-items: center;
	font-size: 13px;
	gap: 5px;
	margin-top: 15px;
	letter-spacing: 0.025em;
}

input {
	background-color: #f7f7f7;
}

input:focus {
	outline: none;
}

.button {
	width: 200px;
	height: 30px;
	text-transform: uppercase;
	font-weight: 700;
	font-size: 16px;
	font-family: "Roboto", sans-serif;
	letter-spacing: 0.05em;
	color: #f7f7f7;
	background-color: #4f7cac;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	transition: all 0.2s ease;
}

button:hover {
	background-color: #2a94f4;
}


	/* checkout php */

</style>
<body>
<div style="width:700px; margin:50 auto;">

<h2> Cart</h2>   

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php">
<img src="cart-icon.png" /> Cart
<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	
<table class="table">
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
</tr>	
<?php		
// echo $_SESSION["shopping_cart"];
foreach ($_SESSION["shopping_cart"] as $product){
	// print_r($product);

	

	$servername = "mysql-server";
	$username = "root";
	$password = "secret";
	$dbname= "allphptricks";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// print_r($conn);die;
	
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$name=$product["name"];
	$code=$product["code"];
	$price=$product["price"];
	$quantity=$product["quantity"];
	$image=$product["image"];
	$total += $price * $quantity;
	

	$sql = "INSERT INTO `orders` (`image`, `product_name`, `quantity`, `price`, `total_price`)
	 VALUES ('$image', '$name', '$quantity', '$price', '$total');";


if ($conn->query($sql) === TRUE) {
    // echo "product added succesfully";
    // echo "<script>window.location='index.php';</script>";
	// echo'<script> alert("product added succesfully"); </script> ';
    }
  
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo'<script> window.location="cart.php"; </script> ';
  }
  
  $conn->close();

?>
<tr>
<td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
<td><?php echo $product["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>
</td>
<td><?php echo "$".$product["price"]; ?></td>
<td><?php echo "$".$product["price"]*$product["quantity"]; ?></td>
</tr>
<?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "$".$total_price; ?></strong>


</td>
</tr>
<tr>
	<td> <a href="index.php"><button >  < continue Shopping </button></a></td>
	 <td></td> <td><td></td></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


	 
</tr>
</tbody>
</table>

  <?php
}else{
	echo "<h3>Your cart is empty!</h3>";
	}
?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>


<br /><br />

</div>

</body>
</html>