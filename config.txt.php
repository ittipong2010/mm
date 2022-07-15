<?php
$con=mysqli_connect("localhost","webbot","u25v!7Ns0","webbot");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit;
}

echo "Initial character set is: " . mysqli_character_set_name($con);

// Change character set to utf8
mysqli_set_charset($con,"utf8");

echo "Current character set is: " . mysqli_character_set_name($con);

mysqli_close($con);
?>
