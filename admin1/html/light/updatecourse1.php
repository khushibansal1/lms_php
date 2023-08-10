<?php
include('connection.php');


$qry = "select *  from courses_master where cid=" . $_GET['cid'];
$res = mysqli_query($con, $qry);
$row = mysqli_fetch_array($res);


if (isset($_POST['btnInsert']) == "Save") {

    $language = $_POST["lang"];
    $course = $_POST["course"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $tag = $_POST["tag"];
    $category = $_POST["category_id"];
    $filetmp_path = $_FILES['upload_file']['tmp_name'];
    $dest_path = "uploads/" . $_FILES['upload_file']['name'];
    if (move_uploaded_file($filetmp_path, $dest_path)) {
        echo "File uploaded successfully";
    } else {
        echo "Upload failed";
    }

    $updqry = "update courses_master set  title='$title',thumbnail='$dest_path',description='$description',cat_id=$category where cid=" . $_GET['cid'];
    $updres = mysqli_query($con, $updqry);

    if ($updres == 1) ?>
<script type="text/javascript">
window.location.href = 'allcourse.php';
</script>
<?php
}


?>
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                class="fa fa-arrow-left"></i></a> Basic Information</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active"> <a href="allcourse.php">Courses</a></li>
                        <li class="breadcrumb-item active">New Course</li>
                    </ul>
                </div>

            </div>
        </div>
        <form method="post" enctype="multipart/form-data">
            <div>
                <div>
                    <div class="card">
                        <div class="header">
                            <h2> Course entry</h2>
                        </div>
                        <div class="body">


                            <div class="form-group mt-15">
                                <label class="input-label">Title</label>
                                <input type="text" name="title" value=" <?php echo $row[1] ?>" class="form-control "
                                    placeholder="">
                            </div>


                            <div class="form-group mt-15">
                                <label class="input-label">Thumbnail</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <input type="file" name="upload_file" value="<?php echo $row[2]; ?>">
                                        <img src="<?php echo $row[2]; ?>" height="200" width="250" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-15">
                                <label class="input-label">Description</label>
                                <input type="text" name="description" value="<?php echo $row[3]; ?>"
                                    class="form-control " placeholder="">
                            </div>


                            <!-- <div class="form-group mt-15">
                                <label class="input-label">Category</label>

                                <select id="category" class="custom-select " name="category_id" required="">
                                    <?php
                                    $qry1 = "select * from category_master";
                                    $res1 = mysqli_query($con, $qry1);
                                    while ($drow = mysqli_fetch_array($res1)) {
                                    ?>
                                    <option value="<?php echo $row[4] ?>"><?php echo $drow[2] ?></option>
                                    <?php
                                    }

                                    ?>
                                </select>

                            </div> -->

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