<?php 

$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"lms");

if(!$con)
{
	echo"connection not established".mysqli_error();
}
if(!$db)
{
	echo"database not connected".mysqli_error();
}	

?>