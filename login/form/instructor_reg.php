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
    $bankacc = $_POST["bankacc"];
    $accno = $_POST["accno"];
    $description = $_POST["description"];
    $status = $_POST["status"];
    $document_tmp = $_FILES['documents']['tmp_name'];
    $dest_path1 = "uploads/" . $_FILES['documents']['name'];
    if (move_uploaded_file($document_tmp, $dest_path1)) {
        echo "File uploaded successfully";
    } else {
        echo "Upload failed";
    }
    $identity_temp = $_FILES['identity']['tmp_name'];
    $dest_path2 = "uploads/" . $_FILES['identity']['name'];
    if (move_uploaded_file($identity_temp, $dest_path2)) {
        echo "File uploaded successfully";
    } else {
        echo "Upload failed";
    }


    $ins_query = "insert into instructor_master(name,email,password,contactno,documents,status,bankacc,accno,identity,description,country,province,city) values ('$name','$email','$password',$cno,'$dest_path1','$status','$bankacc','$accno','$dest_path2','$description','$country','$province','$city')";
    $res = mysqli_query($con, $ins_query);

    if ($res == 1) {
        header("location:instructor_login.php?Display= Instructor Registered Succesfully!!");
        
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
                    <form method="POST" id="signup-form" class="signup-form" enctype="multipart/form-data">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="contactno" id="contactno" placeholder="Your Contact number"/>
                        </div>

                        <div class="form-group">
                            <input type="file" class="form-input" name="documents" id="documents" placeholder="Upload Documents"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="status" id="status" placeholder="Your status"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="bankacc" id="bankacc" placeholder="Your Bank Account name"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="accno" id="accno" placeholder="Your Bank account number"/>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-input" name="identity" id="identity" placeholder="Upload Identity"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="description" id="description" placeholder="Enter your description"/>
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
                        Have already an account ? <a href="instructor_login.php" class="loginhere-link">Login here</a>
                        
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