<?php
session_start();
session_unset();
session_destroy();
echo '<script>alert("Logged Out!")</script>';
echo '<script>window.location="login.php"</script>';

?>
<?php
// Initialize the session
// session_start();
 
// // Unset all of the session variables
// $_SESSION = array();
 
// // Destroy the session.
// session_destroy();
 
// // Redirect to login page

// header("location: login.php");
// exit;
?>