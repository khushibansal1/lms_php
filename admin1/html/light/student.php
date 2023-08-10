<?php
include('connection.php');
?>
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                class="fa fa-arrow-left"></i></a> Student List</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Student</li>
                        <li class="breadcrumb-item active">All Student List</li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">

                <div class="body">
                    <div class="navbar-brand">
                        <h4 class="m-0 text-primary">Total Student</h4>
                        <?php
                        $qry1 = "select count(sid) from student_master";
                        $result = mysqli_query($con, $qry1);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <h4 class="m-0 text-primary"> <?php echo $row[0]; ?></h4>
                        <?php  }

                        ?>

                    </div>
                    <div></div>

                    <div class="body">
                        <a href="insertstudent.php"><button type=" button" class="btn btn-primary"><i
                                    class="fa fa-plus-square"></i>
                                <span>Add new student</span></button></a>
                        <div> &nbsp</div>
                        <div class="table-responsive">
                            <table border="1" id="customers">
                                <thead>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>ContactNo</th>
                                    <th>email</th>
                                    <th>Password</th>
                                    <th>Country</th>
                                    <th>Province</th>
                                    <th>City</th>
                                    <th>Action</th>
                                </thead>

                                <?php
                                $qry = "select * from student_master";
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
                                        <td><?php echo $row[6]; ?></td>
                                        <td><?php echo $row[7]; ?></td>
                                        <td style="width:200px;">
                                            <a href="updatestudent.php?sid=<?php echo $row[0]; ?>"><button type="button"
                                                    class="btn btn-info" title="Edit"><i class="fa fa-edit"></i>
                                                    Edit</button></a>
                                            <a href="deletestudent.php?sid=<?php echo $row[0]; ?>"><button type="button"
                                                    data-type="confirm" class="btn btn-danger js-sweetalert"
                                                    title="Delete"><i class="fa fa-trash-o"></i> Delete</button></a>
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