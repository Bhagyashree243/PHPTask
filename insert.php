
<?php
include("connectiom.php");
error_reporting(0);
?>
<html>
	<head>
<title>Insert form</title>
	</head>
<body>
 <form action="" method="GET">

	ID  <input type="text" name="id" value=""/></br></br>
	First Name  <input type="text" name="first_name" value=""/></br></br>
	Last Name  <input type="text" name="last_name" value=""/></br></br>
	email Id  <input type="mail" name="email" value=""/></br></br>
    Phone Number   <input type="text" name="psw" value=""/></br></br>
	Role Type  <input type="text" name="role_type" value=""/></br></br>
		<input type="submit" name="submit" value="submit"/></br></br>

	</form>
	<?php
	
if($_GET['submit'])
{  
	$id = $_GET['id'];
	$fn = $_GET['first_name'];
	$ln = $_GET['last_name'];
	$em = $_GET['email'];
	$no = $_GET['psw'];
	$rt = $_GET['role_type'];
	    
   if($id!="" && $fn!="" && $ln!="" && $em!="" && $no!="" && $rt!="")
  {
	
       $query = "INSERT INTO user VALUES ('$id','$fn','$ln','$em','$no','$rt') ";
       $data1 = mysqli_query($conn,$query); 
	
     if($data1)
		
	  {
		echo "data inserted into database .<a href='display.php'> check Update List Here</a>";
	  }
   }
	
    else
	  {
		echo "All fields required";
	  }
}
  
?>
</body>
</html>
