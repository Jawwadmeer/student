<?php

$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('students',$conn);

$del_rec = $_GET['del'];

$query = "delete from registration where id = '$del_rec'";

if(mysql_query($query)){
	
	echo "<script>window.open('view.php?deleted=Record has been deleted','_self')</script>";
	
}


?>