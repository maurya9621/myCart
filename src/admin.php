<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif}
* {box-sizing: border-box;}

.bg-img {
  /* The image used */
  background-image: url("93.jpg");

  min-height: 600px;
  

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
  /* Needed to position the navbar */
  position: relative;
}

/* Position the navbar container inside the image */
.container {
  /* position: absolute; */
  margin: 25px;
  width: auto;
  float: right;

}

/* The navbar */
.topnav {
  overflow: hidden;
  background-color: #8f2600;
  
}

/* Navbar links */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.image{
    border-radius: 5rem;
    margin: 15px;
}
p{
    text-align: center;
}
.yt{
    margin-left: 2rem;
    border-radius:30px;
}
</style>
</head>
<body>


<div class="bg-img">
    <img class="image" src="baahubali.png" alt="bahu.img" height=110, width=110; >
  <div class="container">
    <div class="topnav">
      <a href="5products.php">Products details </a>
      <a href="productform.php">Add New Products</a>
      <a href="5users.php">User details</a>
      <a href="5orders.php">Order details</a>
      <a href="logout.php">Logout</a>
    </div>
  </div> <br><br><br><br><br><br>

  <iframe class="yt" width="420" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>
</div>



</body>
</html>