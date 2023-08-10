<?php

include("connection.php");
$qry = "delete from courses_master where cid=" . $_GET['cid'];
$res1 = mysqli_query($con, $qry);
//echo $qry;
//echo $res1;
if ($res1 == 1) {
    header("location:allcourse.php");
    echo $qry;
}
mysqli_close($con);