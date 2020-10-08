

<?php

include("connectiom.php");
error_reporting(0);
$id= $_GET['id'];
$query = "Delete From user where id='$id'";
	$data = mysqli_query($conn, $query);
	if($data)
	{
		echo "<font color='green'>Record  Deleted from table ";
	}

	else
	{
	    echo "<font color='red'> Sorry, Delete Process failed";
	}

?>


