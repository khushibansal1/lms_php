<?php
include('connection.php');
?>
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                class="fa fa-arrow-left"></i></a> Instructor List</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">User</li>
                        <li class="breadcrumb-item active">All Instructor List</li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">

                <div class="card">
                    <div class="header">
                        <h2>Total Instructor</h2>
                        <?php
                        $qry1 = "select count(i_id) from instructor_master";
                        $result = mysqli_query($con, $qry1);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <h2> <?php echo $row[0]; ?></h2>
                        <?php  }
                        ?>
                        <a href="insertinstructor.php"><button type=" button" class="btn btn-primary"><i
                                    class="fa fa-plus-square"></i>
                                <span>Add new Instructor</span></button></a>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table border="1">
                                <thead>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>ContactNo</th>
                                    <th>email</th>
                                    <th>Password</th>
                                    <th>Status</th>
                                    <th>Bank Account</th>
                                    <th>Acount No</th>
                                    <th>description</th>
                                    <th>Country</th>
                                    <th>Province</th>
                                    <th>City</th>
                                    <th>Action</th>
                                </thead>

                                <?php
                                $qry = "select * from instructor_master";
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
                                        <td><?php echo $row[6]; ?></td>
                                        <td><?php echo $row[7]; ?></td>
                                        <td><?php echo $row[8]; ?></td>
                                        <td><?php echo $row[10]; ?></td>
                                        <td><?php echo $row[11]; ?></td>
                                        <td><?php echo $row[12]; ?></td>
                                        <td><?php echo $row[13]; ?></td>
                                        <td>
                                            <a href="updateinstructor.php?i_id=<?php echo $row[0]; ?>"><button
                                                    type="button" class="btn btn-info" title="Edit"><i
                                                        class="fa fa-edit"></i></button></a> <br> <br>
                                            <a href="deleteinstructor.php?i_id=<?php echo $row[0]; ?>"><button
                                                    type="button" data-type="confirm"
                                                    class="btn btn-danger js-sweetalert" title="Delete"><i
                                                        class="fa fa-trash-o"></i></button></a>
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