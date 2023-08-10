<?php
include('conn.php');


    session_start();
    if (isset($_POST['submit']) == "Signin")
    {
        $_SESSION['Student']=$_POST['email'];
       if(empty($_POST['email']) || empty($_POST['password']))
       {
            header("location:student_login.php?Empty= Please Fill in the Blanks");
       }
       else
       {
        $query="select * from student_master where email='".$_POST['email']."' and password='".$_POST['password']."'";
        $result=mysqli_query($con,$query);
        //echo $query;
        // $qry1="select sid,name from student_master where email='".$_POST['email']."' and password='".$_POST['password']."'";
        // $result1=mysqli_query($con,$query);
              
            while($row=mysqli_fetch_array($result))
            {  
             $_SESSION['Student']=$_POST['email'];
       
            header("location:../../student/student_home/student_index.php");
            
            }
        

       }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
<style>
    .myDiv {
  color:red;
  text-align: center;
}
.myDiv1 {
  color:green;
  text-align: center;
}
</style>
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">

                <?php
                        if(@$_GET['Display']==true)
                        {
                        ?>
                          <div class="myDiv">
                            <?php
                        echo $_GET['Display']
                        ?>
                        
                        </div>
                        <?php
                        }

                        ?>
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Login Now</h2>
                      
                        <?php
                        if(@$_GET['Empty']==true)
                        {
                        ?>
                          <div class="myDiv1">
                            <?php
                        echo $_GET['Empty']
                        ?>
                        
                        </div>
                        <?php
                        }

                        ?>


                     <?php
                        if(@$_GET['Invalid']==true)
                        {
                        ?>
                          <div class="myDiv">
                            <?php
                        echo $_GET['Invalid']
                        ?>
                        
                        </div>
                        <?php
                        }

                        ?>

                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                      
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Signin"/>
                        </div>
                    </form>
                    <p class="loginhere">
                       Don't have an account? <a href="student_reg.php" class="loginhere-link">Register here</a>
                        
                    </p>
                </div>
            </div>

        </section>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>