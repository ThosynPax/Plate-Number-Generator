<?php include 'includes/head.php'; ?>
    <body>
        <?php include 'includes/navbar.php'; ?>
        <!-- /navbar -->        
        <?php include 'includes/sidebar.php'; ?>

                    <div class="span9">
                        <?php 
                            $query = mysqli_query($db, "SELECT * FROM users");

                            while($row = mysqli_fetch_assoc($query)){
                                $total_users = $row['id'];
                                $email = $row['email'];
                                $passport = $row['passport'];
                                $fullname = $row['fullname'];
                                $age = $row['Age'];
                                $plate_no = $row['plate'];
                            }

                        ?>
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <!-- <a href="#" class="btn-box big span4"><i class=" icon-random"></i><b>65%</b>
                                        <p class="text-muted">
                                            Growth</p> -->
                                    </a><a href="#" class="btn-box big span4"><i class="icon-user"></i><b><?php echo $total_users; ?></b>
                                        <p class="text-muted">
                                            Registered Users
                                        </p>
                                    </a><a href="#" class="btn-box big span4"><i class="icon-money"></i><b><?php echo $total_users; ?></b>
                                        <p class="text-muted">
                                            Registered Vehicles
                                        </p>
                                    </a>
                                </div>

                            <div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        Adjust Budget Range</h3>
                                </div>
                                <div class="module-body">
                                    <div class="form-inline clearfix">
                                        <a href="#" class="btn pull-right">Update</a>
                                        <label for="amount">
                                            Price range:</label>
                                        &nbsp;
                                        <input type="text" id="amount" class="input-" />
                                    </div>
                                    <hr />
                                    <div class="slider-range">
                                    </div>
                                </div>
                            </div>
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        DataTables</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    No
                                                </th>
                                                <th>
                                                    fullname
                                                </th>
                                                <th>
                                                    Email
                                                </th>
                                                <th>
                                                    Age
                                                </th>
                                                <th>
                                                    Plate No
                                                </th>
                                                <th>
                                                    Passport
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php 
                                            $query = mysqli_query($db, "SELECT * FROM users");
                                            while($row = mysqli_fetch_assoc($query)){
                                                $total_users = $row['id'];
                                                $email = $row['email'];
                                                $passport = $row['passport'];
                                                $fullname = $row['fullname'];
                                                $age = $row['Age'];
                                                $plate_no = $row['plate'];
                                                $passport = $row['passport'];
                                        ?>
                                        
                                            <tr class="odd gradeX">
                                                <td>
                                                    <?php echo $total_users; ?>
                                                </td>
                                                <td>
                                                    <?php echo $fullname; ?>
                                                </td>
                                                <td>
                                                    <?php echo $email; ?>
                                                </td>
                                                <td>
                                                    <?php echo $age; ?>
                                                </td>
                                                <td>
                                                    <?php echo $plate_no; ?>
                                                </td>
                                                <td>
                                                    <img src="../images/uploads/<?php echo $passport; ?>" alt="passport"
                                                    width="100"
                                                    >
                                                </td>
                                            </tr>
                                        <?php }  ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->

<?php include 'includes/footer.php'; ?>