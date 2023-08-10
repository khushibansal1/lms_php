<?php

include("connection.php");
$qry = "delete from lesson_master where lid=" . $_GET['lid'];

$res = mysqli_query($con, $qry);

if ($res == 1) {
    header("location:alllesson.php");
}
mysqli_close($con);
?>