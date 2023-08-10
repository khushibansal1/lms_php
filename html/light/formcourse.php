<?php
include('connection.php');
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
                        <li class="breadcrumb-item active">Courses</li>
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
                            <div class="form-group">
                                <label class="input-label">Language</label>
                                <select name="lang" class="form-control ">
                                    <option value="English" selected="">English</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="Spanish">Spanish</option>
                                </select>
                            </div>
                            <div class="form-group mt-15 ">
                                <label class="input-label d-block">Course type</label>

                                <select name="course" class="custom-select ">

                                    <option value="Video course">Video Course</option>
                                    <option value="text course">Text Course</option>
                                </select>

                            </div>

                            <div class="form-group mt-15">
                                <label class="input-label">Title</label>
                                <input type="text" name="title" value="" class="form-control " placeholder="">
                            </div>


                            <div class="form-group mt-15">
                                <label class="input-label">Thumbnail</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <input type="file" name="upload_file">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-15">
                                <label class="input-label">Description</label>
                                <input type="text" name="description" value="" class="form-control " placeholder="">
                            </div>

                            <div class="form-group mt-15">
                                <label class="input-label">Tags</label>
                                <input type="text" name="tag" value="" class="form-control " placeholder="">
                            </div>





                            <div class="form-group mt-15">
                                <label class="input-label">Category</label>

                                <select id="category" class="custom-select " name="category_id" required="">
                                    <?php
                                    $qry = "select * from category_master";
                                    $res = mysqli_query($con, $qry);

                                    while ($row = mysqli_fetch_array($res)) {
                                    ?>
                                    <option value=" <?php echo $row[0] ?>"><?php echo $row[2] ?> </option>
                                    <?php
                                    }

                                    ?>
                                </select>

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

    $ins_query = "insert into courses_master(language,c_type,title,thumbnail,description,tags,cat_id) values ('$language','$course','$title','$dest_path','$description','$tag',$category)";
    $res1 = mysqli_query($con, $ins_query);

    if ($res1 == 1) {
?>
<script type="text/javascript">
window.location.href = 'allcourse.php';
</script>
<?php
    } else {
        echo "insert failed";
    }
}
mysqli_close($con);
?>