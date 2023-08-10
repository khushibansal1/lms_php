<style>
.card12 {
    color: red;
    text-align: center;
}
</style>
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                class="fa fa-arrow-left"></i></a> Admin Settings</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active"> <a href="index.php">Settings</a></li>
                        <!-- /<li class="breadcrumb-item active">New Category</li> -->
                    </ul>
                </div>

            </div>
        </div>
        <form method="post" enctype="multipart/form-data">
            <div>
                <div>
                    <div class="card">
                        <div class="header">
                            <h2>Change pasword</h2>
                        </div>
                        <?php
                        if (@$_GET['Display'] == true) {
                        ?>
                        <div class="myDiv">
                            <?php
                                echo $_GET['Display']
                                ?>

                        </div>
                        <?php
                        }

                        ?>
                        <?php
                        include('connection.php');

                        if (isset($_POST['btnInsert']) == "Save") {

                            $oldpass = $_POST["oldpass"];
                            $newpass = $_POST["newpass"];
                            $cnfmnewpass = $_POST["cnfmnewpass"];

                            if ($newpass ==    $cnfmnewpass) {

                                $updqry = "update admin set password='$newpass' where password='$oldpass'";
                                $updres = mysqli_query($con, $updqry);

                                // $res1 = mysqli_query($con, $ins_query);

                                if ($updres == 1) {
                        ?>
                        <script type="text/javascript">
                        window.location.href = 'index.php';
                        </script>
                        <?php
                                } else {
                                    echo "update failed";
                                }
                            } else {
                                ?>
                        <div class="card12">

                            <?php
                                    $msg = "Please enter same password";
                                    echo $msg;                                ?>

                        </div>
                        <?php
                                //echo "Please enter same password";
                                //echo '<script>alert("Please enter same password")</script>';
                                //header("location:setting.php?Display= Please enter same password");
                            }
                        }
                        mysqli_close($con);
                        ?>

                        <div class="body">
                            <div class="form-group">
                                <label class="input-label">Enter old password</label>
                                <input type="password" name="oldpass" value="" class="form-control " placeholder="">
                            </div>

                            <div class="form-group">
                                <label class="input-label">Enter New password</label>
                                <input type="password" name="newpass" value="" class="form-control " placeholder="">
                            </div>

                            <div class="form-group">
                                <label class="input-label">Confirm New password</label>
                                <input type="password" name="cnfmnewpass" value="" class="form-control " placeholder="">
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" name="btnInsert" value="Save" class="btn btn-primary">Update
                                        password</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </div>
    </form>

</div>
</div>