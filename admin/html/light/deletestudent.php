<?php

include("connection.php");
$qry = "delete from student_master where sid=" . $_GET['sid'];

$res = mysqli_query($con, $qry);

if ($res == 1) {
    header("location:allstudent.php");
}
mysqli_close($con);