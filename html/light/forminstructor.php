<?php
include('connection.php');
?>
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                class="fa fa-arrow-left"></i></a> Instructor Information</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">User</li>
                        <li class="breadcrumb-item active">New Instructor</li>
                    </ul>
                </div>

            </div>
        </div>
        <form method="post" enctype="multipart/form-data">
            <div>
                <div>
                    <div class="card">
                        <div class="header">
                            <h2> Instructor entry</h2>
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
                                <label class="input-label">Documents/Resume</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <input type="file" name="document">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-15">
                                <label class="input-label">Status</label>
                                <input type="text" name="status" value="" class="form-control " placeholder="">
                            </div>

                            <div class="form-group mt-15">
                                <label class="input-label">Bank Account</label>
                                <input type="text" name="bankacc" value="" class="form-control " placeholder="">
                            </div>

                            <div class="form-group mt-15">
                                <label class="input-label">Account No</label>
                                <input type="text" name="accno" value="" class="form-control " placeholder="">
                            </div>

                            <div class="form-group mt-15">
                                <label class="input-label">Identity Proof</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <input type="file" name="identity">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="5" cols="30" required
                                    name="description"></textarea>
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
    $status = $_POST["status"];
    $bankacc = $_POST["bankacc"];
    $accno = $_POST["accno"];
    $description = $_POST["description"];
    $country = $_POST["country"];
    $province = $_POST["province"];
    $city = $_POST["city"];

    $document_tmp = $_FILES['document']['tmp_name'];
    $dest_path = "uploads/" . $_FILES['document']['name'];
    if (move_uploaded_file($document_tmp, $dest_path)) {
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

    $ins_query = "insert into instructor_master(name,contactno,email,password,documents,status,bankacc,accno,identity,description,country,province,city) values ('$name',$contact,'$email','$password','$dest_path','$status','$bankacc',$accno,'$dest_path2','$description','$country','$province','$city')";
    $res1 = mysqli_query($con, $ins_query);

    if ($res1 == 1) {
?>
<script type="text/javascript">
window.location.href = 'allinstructor.php';
</script>
<?php
    } else {
        echo "insert failed";
    }
}
mysqli_close($con);
?>