<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webphp";


$conn = mysqli_connect($servername,$username,$password,$dbname);


if($conn)
{
	echo "  ";
}
else
{
	/*echo"connection failed"; */
	die(" connection failed.becouse".mysqli_connect_error);
		
}




?>