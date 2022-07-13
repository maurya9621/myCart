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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
	#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
<body>
<table id="customers">
        <tr>
            <th>id</th>
            <th>username</th>
            <th>password</th>
            <th>created at</th>
        </tr>
        <tr>
<?php
$result = mysqli_query($conn,"SELECT  * FROM `users` LIMIT 5");
while($row = mysqli_fetch_assoc($result)){
		echo "<div class='product_wrapper'> 
       <div class='id'> <td>".$row['id']."</td></div>
			  <div class='username'> <td>".$row['username']."</td></div>
		   	  <div class='password'><td>$".$row['password']."</td></div>
                 <div class='created_at'><td>".$row['created_at']."</td></div>
		   	  </div>";
        }

echo "";
mysqli_close($conn);
?>
</tr>
</table>
</body>
</html>


