<?php
define('DB_SERVER', 'mysql-server');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'secret');
define('DB_NAME', 'allphptricks');
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>