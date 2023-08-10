<?php

include("connection.php");
$qry = "delete from category_master where cat_id=" . $_GET['cat_id'];

$res = mysqli_query($con, $qry);

if ($res == 1) {
    header("Location:allcategory.php");
}
mysqli_close($con);