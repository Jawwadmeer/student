<?php	
	$conn = mysql_connect("localhost","root","");
	$db = mysql_select_db('students',$conn);
	
	$edit_rec = $_GET['edit'];
	
	$que = "select * from registration where id = '$edit_rec'";
	$run = mysql_query($que);
	
	while ($row = mysql_fetch_array($run))
	{
		$u_id = $row['id'];
		$u_name = $row['name'];
		$u_fname = $row['fname'];
		$u_sname = $row['sname'];
		$u_roll = $row['roll'];
		$u_class = $row['class'];
			
	}
?>	







<html>
	<head>
	<title>Updating Records</title>
	</head>
	
	<body>
		<form method='post' action='edit.php?edit_form=<?php echo $u_id; ?>'>
			<table width='600' border='4' align='center'>
				<tr>
				<th bgcolor='green' colspan='5'>Updating Student's Record
				</th>
				</tr>
				<tr>
					<td align='right'>Student's Name:</td>
					<td><input type='text' name='std_name1' value='<?php echo $u_name; ?>'>
					
					</td>
				</tr>
				<tr>
					<td align='right'>Father's Name:</td>
					<td><input type='text' name='father_name1'  value='<?php echo $u_fname; ?>'>
					
					</td>
				</tr>
				<tr>
					<td align='right'>School's Name:</td>
					<td><input type='text' name='scl_name1'  value='<?php echo $u_sname; ?>'>
					
					</td>
				</tr>
				<tr>
					<td align='right'>Roll No:</td>
					<td><input type='text' name='roll1'  value='<?php echo $u_roll; ?>'>
					
					</td>
				</tr>
				<tr>
					<td align='right'> Class:</td>
					<td>
						<select name='class1' >
						<option value='<?php echo $u_class; ?>'><?php echo $u_class; ?></option>
						<option value='1st'>1st</option>
						<option value='2nd'>2nd</option>
						<option value='3rd'>3rd</option>
						<option value='4th'>4th</option>
						<option value='5th'>5th</option>
						<option value='6th'>6th</option>
						<option value='7th'>7th</option>
						<option value='8th'>8th</option>
						
						</select>
						
					</td>
				</tr>
				<tr>
					<td align='center' colspan='5'>
					<input type='submit' name='update' value='Update'>
					</td>
				</tr>
			</table>
		</form>
	</body>

</html>

<?php
if (isset($_POST['update']))
{
	$edit_rec1 = $_GET['edit_form'];
	$student_name = $_POST['std_name1'];
	$student_father = $_POST['father_name1'];
	$student_scl = $_POST['scl_name1_name1'];
	$student_roll = $_POST['roll1'];
	$student_class = $_POST['class1'];
	
	
$que1 = "update registration set name='$student_name',fname='$student_father',sname='$student_scl',roll='$student_roll',class='$student_class' where id = '$edit_rec1'";	

if(mysql_query($que1)){
	
	echo "<script>window.open('view.php?updated=Record has been updated','_self')</script>";
	
}


	
}




?>



