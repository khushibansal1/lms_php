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
                        <li class="breadcrumb-item active"><a href="alllesson.php">Lesson</a></li>
                        <li class="breadcrumb-item active">New Lesson</li>
                    </ul>
                </div>

            </div>
        </div>
        <form method="post" enctype="multipart/form-data">
            <div>
                <div>
                    <div class="card">
                        <div class="header">
                            <h2> Lesson entry</h2>
                        </div>
                        <div class="body">
                            <div>
                                <label class="input-label">Course Name</label>

                                <select id="course" class="custom-select " name="course" required="">
                                    <?php
                                    $qry = "select * from courses_master";
                                    $res = mysqli_query($con, $qry);

                                    while ($row = mysqli_fetch_array($res)) {
                                    ?>
                                    <option value=" <?php echo $row[0] ?>"><?php echo $row[1] ?> </option>
                                    <?php
                                    }

                                    ?>
                                </select>

                            </div>




                            <div class="form-group mt-15 ">
                                <label class="input-label d-block">Lesson name</label>
                                <input type="text" name="name" value="" class="form-control " placeholder="">



                            </div>

                            <div class="form-group mt-15">
                                <label class="input-label">Descripton</label>
                                <input type="text" name="descripton" value="" class="form-control " placeholder="">
                            </div>


                            <div class="form-group mt-15">
                                <label class="input-label">Video_link</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <input type="file" name="videofile">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-15">
                                <label class="input-label">Text link</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <input type="file" name="textfile">
                                    </div>
                                </div>
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

    $title = $_POST["course"];
    $name = $_POST["name"];
    $descripton = $_POST["descripton"];

    $video_link = $_FILES['videofile']['tmp_name'];
    $dest_path = "uploads/" . $_FILES['videofile']['name'];
    if (move_uploaded_file($video_link, $dest_path)) {
        echo "File uploaded successfully";
    } else {
        echo "Upload failed";
    }

    $text_link = $_FILES['textfile']['tmp_name'];
    $dest_path1 = "uploads/" . $_FILES['textfile']['name'];
    if (move_uploaded_file($text_link, $dest_path1)) {
        echo "File uploaded successfully";
    } else {
        echo "Upload failed";
    }

    $ins_query = "insert into lesson_master(cid,lessonname,description,video_link,text_link) values ($title,'$name','$descripton','$dest_path','$dest_path1')";
    $res1 = mysqli_query($con, $ins_query);
    if ($res1 == 1) {
?>
<script type="text/javascript">
window.location.href = 'alllesson.php';
</script>
<?php
    } else {
        echo "insert failed";
    }

    mysqli_close($con);
}

?>