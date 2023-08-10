<!doctype html>
<html lang="en">
<?php
@include('head.php');
include('connection.php');
?>

<body class="theme-cyan">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="../assets/images/logo-icon.svg" width="48" height="48" alt="Lucid"></div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->

    <div id="wrapper">
        <?php
        @include('nav.php');
        ?>

        <?php
        @include('sidebar.php');
        ?>


        <div id="main-content">
            <div class="container-fluid">
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-5 col-md-8 col-sm-12">
                            <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                        class="fa fa-arrow-left"></i></a> Dashboard</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div>
                    <div>
                        <div class="hero-inner">
                            <h2 style="color:Blue">Welcome, Admin!</h2>

                            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between">
                                <!-- <div>
                                    <p class="lead" style="color:red">Everything is in your control, use quick access
                                        buttons to manage
                                        related actions easily.</p>

                                    <div>
                                        <div>
                                            <a href="allcourse.php"> <button type="button" class="btn btn-primary"><i
                                                        class="icon-graduation"></i>
                                                    Course</button>
                                            </a>

                                            <a href="allcategory.php"> <button type="button"
                                                    class="btn btn-outline-danger"><i class="icon-grid"></i>
                                                    Category</button>
                                            </a>
                                        </div>
                                    </div> -->
                                <div class="row clearfix">

                                    <a href="allcourse.php">
                                        <div class="col-lg-4 col-md-8 col-sm-8">
                                            <div class="card overflowhidden number-chart">
                                                <div class="body">
                                                    <div class="number">
                                                        <h1>Courses</h1>
                                                        <span><?php
                                                                $qry = "select count(cid) from courses_master";
                                                                $res = mysqli_query($con, $qry);
                                                                while ($row = mysqli_fetch_array($res)) {
                                                                ?>
                                                            <h2> <?php echo $row[0]; ?></h2>
                                                            <?php  }
                                                            ?>
                                                        </span>
                                                    </div>
                                                    <!-- <small class="text-muted">19% compared to last week</small> -->
                                                </div>
                                                <div class="sparkline" data-type="line" data-spot-Radius="0"
                                                    data-offset="90" data-width="100%" data-height="50px"
                                                    data-line-Width="1" data-line-Color="#f79647"
                                                    data-fill-Color="#f79647">
                                                    1,4,1,3,7,1</div>
                                            </div>
                                    </a>
                                </div>
                                <a href="allcategory.php">
                                    <div class="col-lg-4 col-md-8 col-sm-8">
                                        <div class="card overflowhidden number-chart">
                                            <div class="body">
                                                <div class="number">
                                                    <h1>Category</h1>
                                                    <span><?php
                                                            $qry = "select count(cat_id) from category_master";
                                                            $res = mysqli_query($con, $qry);
                                                            while ($row = mysqli_fetch_array($res)) {
                                                            ?>
                                                        <h2> <?php echo $row[0]; ?></h2>
                                                        <?php  }
                                                        ?>
                                                    </span>
                                                </div>
                                                <!-- <small class="text-muted">19% compared to last week</small> -->
                                            </div>
                                            <div class="sparkline" data-type="line" data-spot-Radius="0"
                                                data-offset="90" data-width="100%" data-height="50px"
                                                data-line-Width="1" data-line-Color="#604a7b" data-fill-Color="#a092b0">
                                                1,4,2,3,6,2</div>
                                        </div>
                                </a>
                            </div>
                            <a href="alllesson.php">
                                <div class="col-lg-4 col-md-8 col-sm-8">
                                    <div class="card overflowhidden number-chart">
                                        <div class="body">
                                            <div class="number">
                                                <h1>Lesson</h1>
                                                <span><?php
                                                        $qry = "select count(lid) from lesson_master";
                                                        $res = mysqli_query($con, $qry);
                                                        while ($row = mysqli_fetch_array($res)) {
                                                        ?>
                                                    <h2> <?php echo $row[0]; ?></h2>
                                                    <?php  }
                                                    ?>
                                                </span>
                                            </div>
                                            <!-- <small class="text-muted">19% compared to last week</small> -->
                                        </div>
                                        <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90"
                                            data-width="100%" data-height="50px" data-line-Width="1"
                                            data-line-Color="#f79647" data-fill-Color="#f79647">
                                            1,4,2,3,6,2</div>
                                    </div>
                            </a>
                        </div>
                        <a href="allstudent.php">
                            <div class="col-lg-4 col-md-8 col-sm-8">
                                <div class="card overflowhidden number-chart">
                                    <div class="body">
                                        <div class="number">
                                            <h1>Student</h1>
                                            <span><?php
                                                    $qry = "select count(sid) from student_master";
                                                    $res = mysqli_query($con, $qry);
                                                    while ($row = mysqli_fetch_array($res)) {
                                                    ?>
                                                <h2> <?php echo $row[0]; ?></h2>
                                                <?php  }
                                                ?>
                                            </span>
                                        </div>
                                        <!-- <small class="text-muted">19% compared to last week</small> -->
                                    </div>
                                    <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90"
                                        data-width="100%" data-height="50px" data-line-Width="1"
                                        data-line-Color="#604a7b" data-fill-Color="#a092b0">
                                        1,4,2,3,6,2</div>
                                </div>
                        </a>
                    </div>
                    <a href="testimonial.php">
                        <div class="col-lg-4 col-md-8 col-sm-8">
                            <div class="card overflowhidden number-chart">
                                <div class="body">
                                    <div class="number">
                                        <h1>Testimonails</h1>
                                        <span><?php
                                                $qry = "select count(tid) from testimonials";
                                                $res = mysqli_query($con, $qry);
                                                while ($row = mysqli_fetch_array($res)) {
                                                ?>
                                            <h2> <?php echo $row[0]; ?></h2>
                                            <?php  }
                                            ?>
                                        </span>
                                    </div>
                                    <!-- <small class="text-muted">19% compared to last week</small> -->
                                </div>
                                <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90"
                                    data-width="100%" data-height="50px" data-line-Width="1" data-line-Color="#f79647"
                                    data-fill-Color="#f79647">
                                    1,4,2,3,6,2</div>
                            </div>
                    </a>
                </div>
                <a href="">
                    <div class="col-lg-4 col-md-8 col-sm-8">
                        <div class="card overflowhidden number-chart">
                            <div class="body">
                                <div class="number">
                                    <h1>Total earnings</h1>
                                    <span><?php
                                            $qry = "select sum(amount) from courseorder";
                                            $res = mysqli_query($con, $qry);
                                            while ($row = mysqli_fetch_array($res)) {
                                            ?>
                                        <h2> <?php echo $row[0]; ?></h2>
                                        <?php  }
                                        ?>
                                    </span>
                                </div>
                                <!-- <small class="text-muted">19% compared to last week</small> -->
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90"
                                data-width="100%" data-height="50px" data-line-Width="1" data-line-Color="#604a7b"
                                data-fill-Color="#a092b0">
                                1,4,2,3,6,2</div>
                        </div>
                </a>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <?php
    @include('footer.php');
    ?>
</body>

</html>