<?php
include('conn.php');
if (isset($_POST['submit']) == "Signup") {

    $name = $_POST["name"];
    $cno = $_POST["contactno"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $country = $_POST["country"];
    $province = $_POST["province"];
    $city = $_POST["city"];
    $ins_query = "insert into student_master(name,contactno,email,password,country,province,city) values ('$name',$cno,'$email','$password','$country','$province','$city')";
    $res = mysqli_query($con, $ins_query);

    if ($res == 1) {
        header("location:student_login.php?Display= Student Registered Succesfully!!");
        
    } else {
        echo "insert failed";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="contactno" id="contactno" placeholder="Your Contact number"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="country" id="country" placeholder="Enter your country"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="province" id="province" placeholder="Enter your province"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="city" id="state" placeholder="Enter your city"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Signup"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="student_login.php" class="loginhere-link">Login here</a>
                        
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>