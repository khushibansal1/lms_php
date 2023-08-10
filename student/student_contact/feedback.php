<?php
include('conn.php');
session_start();
if (isset($_POST['submit1']) == "SendMessage") {

    $name2 = $_POST["name1"];
    $email2 = $_POST["email1"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $ins_query = "insert into testimonials(name,email,subject,message) values ('$name2','$email2','$subject','$message')";
    $res = mysqli_query($con, $ins_query);

    if ($res == 1) {
        header("location:feedback.php");
        
    } else {
        echo "insert failed";
    }
}
?>