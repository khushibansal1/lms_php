<?php
include('connection.php');

$qry = "select *  from lesson_master where lid=" . $_GET['lid'];
$res = mysqli_query($con, $qry);
$row = mysqli_fetch_array($res);



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

    $ins_query = "update lesson_master set cid=$title,lessonname='$name',description='$descripton',video_link='$dest_path',text_link='$dest_path1' where lid=" . $_GET['lid'];
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
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                class="fa fa-arrow-left"></i></a> Basic Information</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Lesson</li>
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
                                    $qry1 = "select * from courses_master";
                                    $res1 = mysqli_query($con, $qry1);

                                    while ($row1 = mysqli_fetch_array($res1)) {
                                    ?>
                                    <option value=" <?php echo $row1[0] ?>"><?php echo $row1[1] ?> </option>
                                    <?php
                                    }

                                    ?>
                                </select>

                            </div>




                            <div class="form-group mt-15 ">
                                <label class="input-label d-block">Lesson name</label>
                                <input type="text" name="name" class="form-control " placeholder=""
                                    value=" <?php echo $row[2] ?>">



                            </div>

                            <div class="form-group mt-15">
                                <label class="input-label">Descripton</label>
                                <input type="text" name="descripton" class="form-control " placeholder=""
                                    value=" <?php echo $row[3] ?>">
                            </div>


                            <div class="form-group mt-15">
                                <label class="input-label">Video_link</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <input type="file" name="videofile" value=" <?php echo $row[4] ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-15">
                                <label class="input-label">Text link</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <input type="file" name="textfile" value=" <?php echo $row[5] ?>">
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