<?php
include('connection.php');
?>
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                class="fa fa-arrow-left"></i></a> Category List</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Category</li>
                        <li class="breadcrumb-item active">All Category List</li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="row clearfix">

            <div class="col-lg-12">

                <div class="body">

                    <div class="navbar-brand">
                        <h4 class="m-0 text-primary">Total category</h4>
                        <?php
                        $qry1 = "select count(cat_id) from category_master";
                        $result = mysqli_query($con, $qry1);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <h4 class="m-0 text-primary"> <?php echo $row[0]; ?></h4>
                        <?php  }
                        ?>

                    </div>
                    <div></div>
                    <div class="body">
                        <a href="insertcategory.php"><button type=" button" class="btn btn-primary"><i
                                    class="fa fa-plus-square"></i>
                                <span>Add new Category</span></button></a>
                        <div> &nbsp</div>
                        <div class="table-responsive">
                            <table border="1" id="customers">
                                <thead>
                                    <th>Id</th>
                                    <th>Language</th>
                                    <th>course Name</th>
                                    <th>Icon</th>
                                    <th>Actions</th>
                                </thead>

                                <?php
                                $qry = "select * from category_master";
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

                                        <td><?php echo "<img src='$row[3]' height='100px' width='150px'/>" ?></td>
                                        <td>
                                            <a href=" updatecategory.php?cat_id=<?php echo $row[0]; ?>"><button
                                                    type="button" class="btn btn-info" title="Edit"><i
                                                        class="fa fa-edit"></i> Edit</button></a>
                                            <a href="deletecategory.php?cat_id=<?php echo $row[0]; ?>"><button
                                                    type="button" data-type="confirm"
                                                    class="btn btn-danger js-sweetalert" title="Delete"><i
                                                        class="fa fa-trash-o"></i> Delete</button></a>
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