
<?php
include("connectiom.php");
error_reporting(0);
?>
<html>
	<head>
<title>Login form</title>
	</head>
<body>
 <form action="" method="GET">

	ID  <input type="text" name="id" value=""/></br></br>
	Email ID  <input type="m" name="u_name" value=""/></br></br>
    Password   <input type="text" name="phone_no" value=""/></br></br>
		<input type="submit" name="submit" value="submit"/></br></br>

	</form>
	<?php
	
	$id = $_GET['id'];
	$un = $_GET['u_name'];
	$pn = $_GET['phone_no'];
	 	
    $query = "Insert Into emp values ('$id','$un','$pn') ";
    $data = mysqli_query($conn,$query); 
	
    if($data)
	  {
		echo "  data inserted.<a href='display.php'> check Update List Here</a> ";
	  }
	
    else
	{
		echo " Data not inserted.<a href='insert.php'><font color='blue'> Registration</a>";	
	}

?>
</body>
</html>

