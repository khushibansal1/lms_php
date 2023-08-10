<?php

include("connection.php");
$qry = "delete from courses_master where cid=" . $_GET['cid'];

$res = mysqli_query($con, $qry);

if ($res == 1) {
    header("location:allcourse.php");
}
mysqli_close($con);