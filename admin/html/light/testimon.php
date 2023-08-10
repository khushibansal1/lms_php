<?php
include('connection.php');

?>
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                class="fa fa-arrow-left"></i></a> Testimonial</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Testimonial</li>
                        <!-- <li class="breadcrumb-item active">All Courses List</li> -->
                    </ul>
                </div>

            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">

                <div class="body">

                    <div class="navbar-brand">

                        <h4 class="m-0 text-primary">Total testimonials</h4>

                        <?php
                        $qry = "select count(tid) from testimonials";
                        $res = mysqli_query($con, $qry);
                        while ($row = mysqli_fetch_array($res)) {
                        ?>
                        <h4 class="m-0 text-primary"> <?php echo $row[0]; ?></h4>
                        <?php  }
                        ?>

                    </div>
                    </table>
                    <div></div>

                    <div class="body">
                        <!-- <a href="insertcourse.php"><button type=" button" class="btn btn-primary"><i
                                    class="fa fa-plus-square"></i>
                                <span>Add new Course</span></button></a>

                        <div> &nbsp</div> -->
                        <div class="table-responsive">
                            <table id="customers">
                                <thead>
                                    <th>Id</th>
                                    <th> Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <!-- <th>Action</th> -->
                                </thead>

                                <?php
                                $qry = "select * from testimonials";

                                $res = mysqli_query($con, $qry);

                                if (mysqli_num_rows($res) == 0) {
                                    echo "no data found";
                                }
                                while ($row = mysqli_fetch_array($res)) {
                                ?>
                                <tbody style="width:900px;">
                                    <tr>
                                        <td><?php echo $row[0]; ?></td>
                                        <td><?php echo $row[1]; ?></td>
                                        <td><?php echo $row[2]; ?></td>
                                        <td>
                                            <?php echo $row[3]; ?>
                                        </td>
                                        <td><?php echo $row[4]; ?></td>


                                        <!-- <td>
                                            <a href="updatecourse.php?cid=<?php echo $row[0]; ?>"><button type="button"
                                                    class="btn btn-info" title="Edit"><i
                                                        class="fa fa-edit"></i></button></a> <br> <br>
                                            <a href="deletecourse.php?cid=<?php echo $row[0]; ?>"><button type="button"
                                                    data-type="confirm" class="btn btn-danger js-sweetalert"
                                                    title="Delete"><i class="fa fa-trash-o"></i></button></a>
                                        </td> -->
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