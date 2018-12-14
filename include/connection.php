<?php


$name = "";
$pass = "";
$user = "";
$role = "";

$usernameErr = "";
$passwordErr = "";


$conn = mysqli_connect('localhost', 'root', 'sdi_digix', 'wp_simedarby');

 	if (mysqli_connect_errno())	
    {
    	echo "<div>";
      	echo "Failed to connect to MySQL: ". mysqli_connect_errno();
      	echo "</div>";
    }

?>