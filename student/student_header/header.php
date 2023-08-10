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

            <a href="../student_courses/courseindex.php" class="nav-item nav-link">All Courses</a>
                <a href="../student_categories/categoryindex.php" class="nav-item nav-link">Categories</a>
                <a href="../my_learnings/mylearnings.php" class="nav-item nav-link">My learnings</a>
                <a href="../student_contact/contact.php" class="nav-item nav-link">Contact</a>
                <!-- <a href="login/form/instructor_reg.php" class="nav-item nav-link">Sign In/Become an instrr</a>
                 -->
                 <div class="nav-item dropdown">
                 <a  class="btn btn-primary py-4 px-lg-5 d-none d-lg-block"> Welcome <strong><?php echo  $_SESSION['Student']; ?></strong></a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="../my_learnings/mylearnings.php" class="dropdown-item">My learnings</a>
                        <a href="../student_home/logout.php" class="dropdown-item">Logout</a>    

                    </div>
                </div> 


            </div>
            <!-- <a href="login/form/student_reg.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a> -->
        </div> 

        
    </nav>