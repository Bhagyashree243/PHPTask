<style>
td
{
	padding:10px;
}
</style>
<?php
include("connectiom.php");
error_reporting(0);
$query = "Select * from user  ";
$data = mysqli_query($conn,$query); 

$total=mysqli_num_rows($data);
if($total != 0)
{
?>

<table>
<tr>
	<th> ID </th>
	<th> First Name </th>
	<th> Last Name </th>
	<th> Email ID </th>
	<th> Phone No</th>
	<th> Role Type </th>
	<th colspan="2"> Operations </th>
	
</tr>

<?php


	while($result=mysqli_fetch_assoc($data))
 {
	 echo" <tr>
	<td>".$result['id']."</td>
	<td>".$result['first_name']."</td>
	<td>".$result['last_name']."</td>
	<td>".$result['email']."</td>
	<td>".$result['psw']."</td>
	<td>".$result['role_type']."</td>
	<td><a href='update.php?id=$result[id]&fn=$result[first_name] &ln=$result[last_name] &em=$result[email] &no=$result[psw] &rt=$result[role_type]'>Edit</a></td>
	
	
	<td><a href='delete.php?id=$result[id]&fn=$result[first_name] &ln=$result[last_name] &em=$result[email] &no=$result[psw] &rt=$result[role_type]' onclick='return checkdelete()'>Delete</a></td>
</tr>";
 }
}
 else
	 {
	 echo "No records into table";

	 }
?>
</table>
<script>
function checkdelete()
{
	return confirm('Are you sure you want to delete this data ???');
}
</script>