

<?php
include("connectiom.php");
error_reporting(0);
 $_GET['id'];
 $_GET['fn'];
 $_GET['ln'];
 $_GET['em'];
 $_GET['no'];
 $_GET['rt'];
?>
<html>
	<head>
<title>Update form</title>
	</head>
<body>
 <form action="" method="GET">

	ID  <input type="text" name="id" value="<?php echo $_GET['id'];?>"/></br></br>
	First Name  <input type="text" name="first_name" value="<?php echo $_GET['fn']; ?>"/></br></br>
	Last Name  <input type="text" name="last_name" value="<?php echo $_GET['ln']; ?>"/></br></br>
	Email ID  <input type="email" name="email" value="<?php echo $_GET['em']; ?>"/></br></br>
    Phone Number   <input type="text" name="psw" value="<?php echo $_GET['no']; ?>"/></br></br>
	Role Type  <input type="text" name="role_type" value="<?php echo $_GET['rt']; ?>"/></br></br>
		<input type="submit" name="submit" value="Update"/></br></br>

	</form>
<?php

if($_GET['submit'])
{
	$id1= $_GET['id'];
	$f_name1 = $_GET['first_name'];
	$l_name1 = $_GET['last_name'];
	$email1 = $_GET['email'];
	$phone1 = $_GET['psw'];
	$role1 = $_GET['role_type'];
	$query = "Update user set first_name='$f_name1 ',last_name='$l_name1',email='$email1',psw='$phone1',role_type='$role1' where id='$id1'";
	$data2 = mysqli_query($conn, $query);
	if($data2)
	{
		echo "Record Updated Succesfully.<a href='display.php'> check Update List Here</a>";
	}
	else
	{
		echo "<font color='REd'>Record Not Updated .";
	}
}

else
{
	echo "<font color='blue'> Click on update button";
}

?>

</body>
</html>


