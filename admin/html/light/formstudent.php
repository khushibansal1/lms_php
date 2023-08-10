<?php
include('connection.php');
?>
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                class="fa fa-arrow-left"></i></a> Student Information</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active"><a href="allstudent.php">Student</a></li>
                        <li class="breadcrumb-item active">New Student</li>
                    </ul>
                </div>

            </div>
        </div>
        <form method="post" enctype="multipart/form-data">
            <div>
                <div>
                    <div class="card">
                        <div class="header">
                            <h2> Student entry</h2>
                        </div>
                        <div class="body">
                            <div class="form-group mt-15">
                                <label class="input-label">Name</label>
                                <input type="text" name="name" value="" class="form-control " placeholder="">
                            </div>

                            <div class="form-group mt-15">
                                <label class="input-label">ContactNo</label>
                                <input type="text" name="contact" value="" class="form-control " placeholder="">
                            </div>

                            <div class="form-group mt-15">
                                <label class="input-label">Email</label>
                                <input type="text" name="email" value="" class="form-control " placeholder="">
                            </div>

                            <div class="form-group mt-15">
                                <label class="input-label">Password</label>
                                <input type="password" name="password" value="" class="form-control " placeholder="">
                            </div>

                            <div class="form-group mt-15">
                                <label class="input-label">Country</label>
                                <input type="text" name="country" value="" class="form-control " placeholder="">
                            </div>

                            <div class="form-group mt-15">
                                <label class="input-label">Province</label>
                                <input type="text" name="province" value="" class="form-control " placeholder="">
                            </div>

                            <div class="form-group mt-15">
                                <label class="input-label">City</label>
                                <input type="text" name="city" value="" class="form-control " placeholder="">
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" name="btnInsert" value="Save"
                                        class="btn btn-primary">Submit</button>
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
<?php

if (isset($_POST['btnInsert']) == "Save") {

    $name = $_POST["name"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $country = $_POST["country"];
    $province = $_POST["province"];
    $city = $_POST["city"];
    $ins_query = "insert into student_master(name,contactno,email,password,country,province,city) values ('$name',$contact,'$email','$password','$country','$province','$city')";
    $res1 = mysqli_query($con, $ins_query);

    if ($res1 == 1) {
?>
<script type="text/javascript">
window.location.href = 'allstudent.php';
</script>
<?php
    } else {
        echo "insert failed";
    }
}
mysqli_close($con);
?>