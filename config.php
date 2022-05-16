<?php
session_start();
ob_start();
error_reporting(0);



$hostname_conn = "localhost";
$username_conn = "root";
$password_conn = "";
$database_conn = "dimensionxi";

$conn = mysqli_connect($hostname_conn, $username_conn, $password_conn, $database_conn);
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL:" . mysqli_connect_error();
}
// Change database to "test"
mysqli_select_db($conn, $database_conn);
  
  // ...some PHP code for database "test"...

  //mysqli_close($con);
