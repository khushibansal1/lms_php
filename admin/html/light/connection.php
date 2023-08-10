<?php
$con = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($con, "lms");

if (!$con) {
    echo "Connection not established";
}

if (!$db) {
    echo "database not established";
}