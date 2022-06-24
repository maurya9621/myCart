<?php

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

?>

<?php

$result = mysqli_query($conn,"SELECT  * FROM `products` LIMIT 5");
while($row = mysqli_fetch_assoc($result)){
		echo "<div class='product_wrapper'>
			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['code']." />
			  <div class='image'><img src='".$row['image']."'width=90 height=90 /></div>
			  <div class='name'>".$row['name']."</div>
		   	  <div class='price'>$".$row['price']."</div>
			  <button type='submit' class='buy'>Buy Now</button>
			  </form>
		   	  </div>";
        }

echo ""




mysqli_close($conn);
?>