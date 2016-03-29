<html>
<head>
<title>Checking the records</title>
</head>

<body>

<a href = 'admin.php'>Admin panel</a>
<a href = 'logout.php'>Logout</a>

<center><font color='red' size='5'>
	<?php echo @$_GET['deleted']; ?>
	<?php echo @$_GET['updated']; ?> 
	<?php echo @$_GET['logg']; ?> 
</font></center>


<table width='1000' align='center' border='3'>
	<tr>
		<td colspan='10' align='center' bgcolor='blue'>
		<h2>All The Records</h2>
		</td>
	</tr>
	<tr align = 'center'>

		
		<th>Student's Name</th>
		<th>Father's Name</th>
		<th>Roll No.</th>
		<th>Delete</th>
		<th>Edit</th>
		

	</tr>
	
	<tr>
<?php	
	$conn = mysql_connect("localhost","root","");
	$db = mysql_select_db('students',$conn);
	
	$que = "select * from registration order by 1 desc";
	$run = mysql_query($que);
	
	while ($row = mysql_fetch_array($run))
	{
		$u_id = $row['id'];
		$u_name = $row['name'];
		$u_fname = $row['fname'];
		$u_roll = $row['roll'];
			
	
?>	
	
	<td><?php echo $u_name; ?></td>
	<td><?php echo $u_fname; ?></td>
    <td><?php echo $u_roll; ?></td>
	
	<td><a href='delete.php?del=<?php echo $u_id; ?>'>Delete</a></td>
	<td><a href='edit.php?edit=<?php echo $u_id; ?>'>Edit</a></td>
	
	
	</tr>
	
	<?php } ?>
	
</table>
</body>

</html>