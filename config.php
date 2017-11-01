<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set("Asia/Bangkok"); 



$conn = mysqli_connect("localhost","root","","lucky_db");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$conn->set_charset("utf8");

?>
