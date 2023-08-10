<?php
include('connection.php');

$qry2 = "select *  from category_master where cat_id=" . $_GET['cat_id'];
$res2 = mysqli_query($con, $qry2);
$row = mysqli_fetch_array($res2);


if (isset($_POST['btnInsert']) == "Save") {

    $language = $_POST["lang"];
    $title = $_POST["title"];

    $updqry = "update category_master set language='$language', title='$title'  where cat_id=" . $_GET['cat_id'];
    $updres = mysqli_query($con, $updqry);

    if ($updres == 1) ?>
<script type="text/javascript">
window.location.href = 'allcategory.php';
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
                                class="fa fa-arrow-left"></i></a> Category Information</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Category</li>
                        <li class="breadcrumb-item active">New Category</li>
                    </ul>
                </div>

            </div>
        </div>
        <form method="post" enctype="multipart/form-data">
            <div>
                <div>
                    <div class="card">
                        <div class="header">
                            <h2> Category entry</h2>
                        </div>
                        <div class="body">
                            <div class="form-group">
                                <label class="input-label">Language</label>
                                <select name="lang" class="form-control " value="<?php echo $row[1]; ?>">
                                    <option value="English" selected="">English</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="Spanish">Spanish</option>
                                </select>


                                <div class="form-group mt-15">
                                    <label class="input-label">Title</label>
                                    <input type="text" name="title" value="<?php echo $row[2]; ?>" class="form-control "
                                        placeholder="">
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