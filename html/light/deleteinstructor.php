<?php

include("connection.php");
$qry = "delete from instructor_master where i_id=" . $_GET['i_id'];

$res = mysqli_query($con, $qry);

if ($res == 1) {
    header("location:allinstructor.php");
}
mysqli_close($con);