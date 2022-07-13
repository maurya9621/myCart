
<!DOCTYPE html>
<html>
    <style>
    .table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.table td, .table th {
  border: 1px solid #ddd;
  padding: 8px;
}

.table tr:nth-child(even){background-color: #f2f2f2;}

.table tr:hover {background-color: #ddd;}

.table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
    </style>
<body>

<?php
$servername = "mysql-server";
$username = "root";
$password = "secret";
$dbname= "allphptricks";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// $sql = "SELECT name, number FROM orders";
$result = mysqli_query($conn, "SELECT  * FROM `orders`");
echo "<table class='table'>
<tr>
<th> Product name </th>
<th> Quantity </th>
<th>Product Price</th> 
<th>Total price</th>
</tr>
<tr>
";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        // print_r(); die; 
        echo "
     
      <td> ".$row['product_name']."</td> 
      <td>".$row['quantity']."</td>
      <td>".$row['price']."</td>
      <td>".$row['total_price']."</td></tr>";  
    }
    echo "";
           
?>
</tr>
           </table>
<?php

    // }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>


</body>
</html>