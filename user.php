<html>
	<head>
	<title>Student's Registration Form</title>
	</head>
	
	<body>
		<form method='post' action='user.php'>
			<table width='600' border='4' align='center'>
				<tr>
				<th bgcolor='green' colspan='5'>Student's Registration Form
				</th>
				</tr>
				<tr>
					<td align='right'>Student's Name:</td>
					<td><input type='text' name='std_name'>
					<font color = 'red'><?php echo @$_GET['name'];  ?></font>
					</td>
				</tr>
				<tr>
					<td align='right'>Father's Name:</td>
					<td><input type='text' name='father_name'>
					<font color = 'red'><?php echo @$_GET['fname'];  ?></font>
					</td>
				</tr>
				<tr>
					<td align='right'>School's Name:</td>
					<td><input type='text' name='scl_name'>
					<font color = 'red'><?php echo @$_GET['sclname'];  ?></font>
					</td>
				</tr>
				<tr>
					<td align='right'>Roll No:</td>
					<td><input type='text' name='roll'>
					<font color = 'red'><?php echo @$_GET['roll'];  ?></font>
					</td>
				</tr>
				<tr>
					<td align='right'> Class:</td>
					<td>
						<select name='class'>
						<option value='null'>SELECT CLASS</option>
						<option value='1st'>1st</option>
						<option value='2nd'>2nd</option>
						<option value='3rd'>3rd</option>
						<option value='4th'>4th</option>
						<option value='5th'>5th</option>
						<option value='6th'>6th</option>
						<option value='7th'>7th</option>
						<option value='8th'>8th</option>
						
						</select>
						<font color = 'red'><?php echo @$_GET['class'];  ?></font>
					</td>
				</tr>
				<tr>
					<td align='center' colspan='5'>
					<input type='submit' name='submit' value='REGISTER'>
					</td>
				</tr>
			</table>
		</form>
	</body>

</html>


<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('students',$conn);

if(isset($_POST['submit']))
{	

$student_name = $_POST['std_name'];
$student_father = $_POST['father_name'];
$student_school = $_POST['scl_name'];
$student_roll = $_POST['roll'];
$student_class = $_POST['class'];

if($student_name=='')
{
	echo "<script> window.open('user.php?name=Name is required','_self')</script>";
    exit();	
}
if($student_father=='')
{
	echo "<script> window.open('user.php?fname=Father name is required','_self')</script>";
    exit();	
}
if($student_school=='')
{
	echo "<script> window.open('user.php?sclname=School name is required','_self')</script>";
    exit();	
}
if($student_roll=='')
{
	echo "<script> window.open('user.php?roll=Roll No. is required','_self')</script>";
    exit();	
}
if($student_class=='')
{
	echo "<script> window.open('user.php?class=Select your class','_self')</script>";
    exit();	
}

$query = "insert into registration
(name,fname,sname,roll,class) values ('$student_name','$student_father','$student_school','$student_roll','$student_class')
";

if(mysql_query($query))
{
	echo "<center><b>Data has been Successfully inserted</b></center>";
	echo "<table align = 'center' border='2'>
	<tr>
	<td>$student_name</td>
	<td>$student_father</td>
	<td>$student_school</td>
	<td>$student_roll</td>
	<td>$student_class</td>
	</tr>
	</table> ";
	
}


}





?>