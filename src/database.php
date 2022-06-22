<?php
// $id= $_POST["id"];
// print_r($id);die;
$name= $_POST["name"];
$code= $_POST["code"];
$price= $_POST["price"];
$image= $_POST["image"];
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

$sql= "INSERT INTO products (id, name, code, price, image) VALUES (NULL, '$name', '$code', '$price', '$image')";

if ($conn->query($sql) === TRUE) {
    echo "product added succesfully";
    // echo "<script>window.location='index.php';</script>";
    }
  
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo'<script> window.location="productform.php"; </script> ';
  }
  
  $conn->close();
  ?>
