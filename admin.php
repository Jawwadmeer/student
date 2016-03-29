<html>
<head>
<title>Admin Panel</title>
</head>

<body>
<form action = 'view.php' method='post'>
<table width='400' border='2' align='center' bgcolor='orange'>

<tr>
<td align='center' colspan='5'><h3>ADMIN PANEL</h3></td>
</tr>
<tr>
	<td align='right'>Admin Name:</td>
	<td><input type='text' name='admin_name'></td>
</tr>
<tr>
	<td align='right'>Admin Password:</td>
	<td><input type='password' name='admin_pass'></td>
</tr>
<tr>
	<td colspan='4' align='center'><input type='submit' name='login' value='login'></td>
</tr>



</table>
</form>
</body>
</html>

<?php

$con = mysql_connect("localhost","root","");
$db = mysql_select_db('students',$con);


if(isset($_POST['login'])){
	$admin_name = $_POST['admin_name'];
	$admin_pass = $_POST['admin_pass'];
	
$query1 = "select * from login where user_name='$admin_name' AND user_pass='$admin_pass'";

$run1 = mysql_query($query1);

if(mysql_query($run1)){
	
	echo "<script>window.open('view.php?logg=Login Successfully','_self')</script>";
}
	
	else{
		echo "<script>alert('password or username is incorrect')</script>";
		
	}	
	

	
}



?>




