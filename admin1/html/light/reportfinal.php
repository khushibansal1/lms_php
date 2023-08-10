<?php
include('connection.php');
?>
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                class="fa fa-arrow-left"></i></a> Sell Report</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Report</li>
                        <!-- <li class="breadcrumb-item active">All Category List</li> -->
                    </ul>
                </div>

            </div>
        </div>

        <div class="container-fluid">

            <div>

                <div class="card">

                    <form action="" method="POST" class="d-print-none">

                        <div class="form-row">

                            <div class="form-group col-md-2">

                                <input type="date" class="form-control" id="startdate" name="startdate">
                            </div>
                            <h5> To </h5>

                            <div class="form-group col-md-2">
                                <input type="date" class="form-control" id="enddate" name="enddate">
                            </div>


                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="search" value="search">
                        </div>
                </div>


                </form>


                <div class="table-responsive" style="margin-right:400px ;">
                    <table border="1" id="customers">
                        <thead>
                            <th>Order Id</th>
                            <th>student Name</th>
                            <th>course id</th>
                            <th>payment status
                            </th>
                            <th>order date</th>
                            <th>amount</th>
                        </thead>

                        <?php
                        if (isset($_POST['search']) == "search") {
                            $startdate = $_REQUEST['startdate'];
                            $enddate = $_REQUEST['enddate'];
                            $qry  = "SELECT * FROM courseorder WHERE date BETWEEN '$startdate' AND '$enddate'";
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
                                <td><?php echo $row[4]; ?></td>
                                <td><?php echo $row[5]; ?></td>
                                <td><?php echo $row[6]; ?></td>

                            </tr>
                        </tbody>
                        <?php
                            }
                        }
                        mysqli_close($con);
                        ?>



                    </table>
                </div>
            </div>
        </div>
    </div>
</div>