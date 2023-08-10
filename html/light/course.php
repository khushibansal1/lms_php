<?php
include('connection.php');




?>
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                class="fa fa-arrow-left"></i></a> Courses List</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Courses</li>
                        <li class="breadcrumb-item active">All Courses List</li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">

                <div class="card">
                    <div class="header">
                        <h2>Total courses</h2>
                        <?php
                        $qry = "select count(cid) from courses_master";
                        $res = mysqli_query($con, $qry);
                        while ($row = mysqli_fetch_array($res)) {
                        ?>
                        <h2> <?php echo $row[0]; ?></h2>
                        <?php  }
                        ?>
                        <a href="insertcourse.php"><button type=" button" class="btn btn-primary"><i
                                    class="fa fa-plus-square"></i>
                                <span>Add new Course</span></button></a>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table border="1">
                                <thead>
                                    <th>Id</th>
                                    <th>Language</th>
                                    <th>course type</th>
                                    <th>course Name</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </thead>

                                <?php
                                $qry = "select cid,language,c_type,title,description,cat_id from courses_master";

                                $res = mysqli_query($con, $qry);

                                if (mysqli_num_rows($res) == 0) {
                                    echo "no data found";
                                }
                                while ($row = mysqli_fetch_array($res)) {
                                ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $row[0]; ?></td>


                                        <td><?php echo $row[1]; ?></td>


                                        <td><?php echo $row[2]; ?></td>
                                        <td><?php echo $row[3]; ?></td>
                                        <td><?php echo $row[4]; ?></td>
                                        <td><?php echo $row[5]; ?></td>
                                        <td>
                                            <a href="updatecourse.php?cid=<?php echo $row[0]; ?>"><button type="button"
                                                    class="btn btn-info" title="Edit"><i
                                                        class="fa fa-edit"></i></button></a> <br> <br>
                                            <a href="deletecourse.php?cid=<?php echo $row[0]; ?>"><button type="button"
                                                    data-type="confirm" class="btn btn-danger js-sweetalert"
                                                    title="Delete"><i class="fa fa-trash-o"></i></button></a>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php
                                }
                                mysqli_close($con);
                                ?>


                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>