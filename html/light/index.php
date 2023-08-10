<!doctype html>
<html lang="en">
<?php
@include('head.php');
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
                            <h2 style="color:red">Welcome, Admin!</h2>

                            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between">
                                <div>
                                    <p class="lead" style="color:red">Everything is in your control, use quick access
                                        buttons to manage
                                        related actions easily.</p>

                                    <div>
                                        <div>
                                            <a href="allcourse.php"> <button type="button"
                                                    class="btn btn-outline-danger"><i class="icon-graduation"></i>
                                                    Course</button>
                                            </a>

                                            <a href="allcategory.php"> <button type="button"
                                                    class="btn btn-outline-danger"><i class="icon-grid"></i>
                                                    Category</button>
                                            </a>
                                        </div>
                                    </div>
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