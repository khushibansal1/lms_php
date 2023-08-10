<?php
include("conn.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>eLEARNING - eLearning HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">



    <script>
        function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
        </script>
</head>
<style>
    /* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

    </style>
<body onload="document.getElementById('defaultOpen').click();">
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->


    <!-- Navbar Start -->
    
    <?php
    if(isset($stud_email))

    {

      include("../header/header.php");
    
    }
    else{
      ?>
      <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
      <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
          <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING</h2>
      </a>
      <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto p-4 p-lg-0">
          
          <a href="../student_home/student_index.php" class="nav-item nav-link active">Home</a>

          <!-- <a href="../about/about.php" class="nav-item nav-link">About</a> -->

          <a href="../student/student_courses/courseindex.php" class="nav-item nav-link">All Courses</a>
              <a href="../student/student_categories/categoryindex.php" class="nav-item nav-link">Categories</a>
              <a href="../student/my_learnings/mylearnings.php" class="nav-item nav-link">My learnings</a>
              <a href="../student/student_contact/contact.php" class="nav-item nav-link">Contact</a>
              <!-- <a href="login/form/instructor_reg.php" class="nav-item nav-link">Sign In/Become an instrr</a>
               -->
               <div class="nav-item dropdown">
               <a  class="btn btn-primary py-4 px-lg-5 d-none d-lg-block"> Welcome <strong><?php echo $_SESSION['Student']; ?></strong></a>
                  <div class="dropdown-menu fade-down m-0">
                      <a href="#" class="dropdown-item">My learnings</a>
                      <a href="../../home/index1.php" class="dropdown-item">Logout</a>    

                  </div>
              </div> 


          </div>
          <!-- <a href="login/form/student_reg.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a> -->
      </div> 

      
  </nav>
  <?php
    }
?>
    
    <!-- Navbar End -->

    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                <?php 
            if(isset($_GET['cid']))
            {
                $cid = $_GET['cid'];
                $_SESSION['cid']=$_GET['cid'];
            }
            $qry1="select * from courses_master where cid='$cid'";
            $res1 = mysqli_query($con,$qry1);
            while($row1=mysqli_fetch_array($res1))
            {
             
            ?>
                    <h1 class="display-3 text-white animated slideInDown"> <?php echo $row1['title'] ?>  </h1>
                    <?php
             }
             ?>  
                </div>
            </div>
        </div>
    </div>
    <!-- Courses Start -->
    
    <!-- Courses End -->
     <!-- Start Main Content -->

 <div class="container mt-5">

 <div class="row">

<div class="col-md-4">
<?php 
if(isset($_GET['cid']))
{
    $cid = $_GET['cid'];
    
    
}
            $qry3="select * from courses_master where cid='$cid'";
             $res3=mysqli_query($con,$qry3);
             while($row3=mysqli_fetch_array($res3))
             {
            ?>

<?php echo"<img src='../admin/$row3[2]' height='200px' width='360px'/>"; ?>

<?php
             }
             ?>

</div>


<div class="col-md-8">



<div class="card-body">
<?php 
            if(isset($_GET['cid']))
            {
                $cid = $_GET['cid'];
                
            }
            $qry1="select * from courses_master where cid='$cid'";
            $res1 = mysqli_query($con,$qry1);
            while($row1=mysqli_fetch_array($res1))
            {
             
            ?>


<h5 class="card-title">
    
<?php echo $row1['title'] ?> 


</h5>


<p class="card-text"> <strong>Description: </strong><?php echo $row1['description'] ?>  </p>

<?php
            }
            ?>

<form action="" method="post" enctype="multipart/form-data">


            </form>
            </div>
            </div>
            </div>

            </br> </br>

        

 
 <div class="tab">
  <button class="tablinks active" id="defaultOpen" onclick="openCity(event, 'video_lessons')">Video Tutorial</button>
  <button class="tablinks" onclick="openCity(event, 'text_lessons')">Text Overview</button>
</div>

<!-- Tab content -->
<div id="video_lessons" class="tabcontent">
<div class="container">
  <div class="row">
    <div class="col">
    <?php 
            if(isset($_GET['cid']))
            {
                $cid = $_GET['cid'];
                
            }
            $count=1;
            $qry4="select * from lesson_master where cid='$cid'";
            $res4 = mysqli_query($con,$qry4);
            while($row4=mysqli_fetch_array($res4))
            {
             
            ?>
     <h2>  <?php echo $count++.'. '.$row4['lessonname'] ?></h2>
            </br> </br>    
    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $row4['video_link'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
        
        <video controls width="600">

        
    <source src="../admin/uploads/xyz.webm" type="video/webm">

    <source src="../admin/uploads/xyz.mp4"
            type="video/mp4">

   
</video>

    </br> </br>
        <?php
            }
            ?>
    
    </div>
   
  </div>
  
</div>
</div>
</div>
 



    <!-- Footer Start -->
  
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>