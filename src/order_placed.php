<?php
session_start();
$name= $_POST["Name"];
$cardnumber= $_POST["number"];
$product_name=$_POST["pname"];
$price= $_POST["price"];
$total= $_POST["total"];
// print_r($cardnumber);die;

// print_r($cardnumber);
?>
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
// In For each loop use Sessions to enter data in database 
$sql = "INSERT INTO orders (product_name, price, total_price, cname, cnumber ) VALUES ('$product_name','$price','$total', '$name','$cardnumber')";


if ($conn->query($sql) === TRUE) {
    echo "product added succesfully";
    echo "<script>window.location='index.php';</script>";
    }
  
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo'<script> window.location="cart.php"; </script> ';
  }
  
  $conn->close();
  ?>