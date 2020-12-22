<?php
include("db.php");


$sql="select * from user_info ";
$result=$conn->query($sql);


?>
<button onclick="document.location='userinfo.php'">Add User Info</button>
<table border="1" cellspacing="3px" cellpadding="5px">
	<tr>
		<th> ID</th>
		<th> name</th>
		<th> Email</th>
		<th> Date Of Birth </th>
		<th>Mobile</th>
		<th>Designation</th>
		<th> Gender</th>
		<th> Hobby</th>
		
	</tr>
	<?php
	if ($result->num_rows > 0) {

	while($res= $result->fetch_array())
	{
    ?>
	<tr>
		<td><?php echo $res["id"]; ?></td>
		<td><?php echo $res["name"]; ?></td>
		<td><?php echo $res["email"]; ?></td>
		<td><?php echo $res["d_o_b"]; ?></td>
		<td><?php echo $res["mob"]; ?></td>
		<td><?php echo $res["desgnation"]; ?></td>
		<td><?php echo $res["gen"]; ?></td>
		<td><?php echo $res["hobby"]; ?></td>
		
		
	</tr>
<?php
}
}
else
{

	echo "<tr><td  colspan='8'><center>No record</center></td></tr>";
}
?>
</table>

