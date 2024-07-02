<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<?php include "includes/header.php" ?>

    <?php include "includes/navbar.php" ?>

    <section id="showcase" class="align-middle">
        <div class="container">
            <div class="row">
                <div id="section-content" class="col-md-6 text-white">
                    <h2 class="display-3">Register and get your <span class="pink-color">Plate number today!</span></h2>
                </div>
                <div id="showcase-card" class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-dark">Register Here..</h5>
                            <?php 
                                if(isset($_POST['register_btn'])){
                                    $full_name = mysqli_real_escape_string($db, $_POST['full_name']);
                                    $state = mysqli_real_escape_string($db, $_POST['state']);
                                    $email = mysqli_real_escape_string($db, $_POST['email']);
                                    $password = mysqli_real_escape_string($db, $_POST['password']);
                                    $vehicle_make = mysqli_real_escape_string($db, $_POST['vehicle_make']);
                                    $fuel_type = mysqli_real_escape_string($db, $_POST['fuel_type']);
                                    $car_year = mysqli_real_escape_string($db, $_POST['car_year']);
                                    $chasis_no = mysqli_real_escape_string($db, $_POST['chasis_no']);
                                    
                                    $letters = "ABCDEFGIJKLMNOPQRSTUVWXYZ";
                                    
                                    $plate_number = $state . rand(100, 900) . substr(str_shuffle($letters), 0, 3);

                                    $image_name = $_FILES['passport']['name'];
                                    $image_tmp_name = $_FILES['passport']['tmp_name'];
                                    
                                    move_uploaded_file($image_tmp_name, "images/uploads/$image_name");

                                    $query = mysqli_query($db, "INSERT INTO users(fullname, state, email, password, passport, vehicle_make, fuel_type, car_year, chasis_no, plate) VALUES('$full_name', '$state', '$email', '$password', '$image_name', '$vehicle_make', '$fuel_type', '$car_year', '$chasis_no', '$plate_number')");

                                    $_SESSION['full_name'] = $full_name;

                                    header("Location: login.php");
                                    exit();

                                }
                            ?>
                            <form action="index.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" placeholder="full name" name="full_name" required>
                                </div>
                                <div class="form-group">
                                    <h5 class="text-dark">Upload Driver's license</h5>
                                    <input type="file" class="form-control form-control-lg" name="passport" placeholder="Passport" required>
                                </div>
                                <div class="form-group">   
                                    <select name="state" class="form-control" required>
                                        <option disabled="true" selected="true" value="">Select Your state</option>
                                        <option value="ADM">Adamawa</option>
                                        <option value="ABI">Abia</option>
                                        <option value="AKIB">Akwa Ibom</option>
                                        <option value="AMR">Anambra</option>
                                        <option value="BAU">Bauchi</option>
                                        <option value="BYS">Bayelsa</option>
                                        <option value="BNE">Benue</option>
                                        <option value="BRN">Borno</option>
                                        <option value="CRV">Cross River</option>
                                        <option value="EBN">Ebonyi</option>
                                        <option value="EDO">Edo</option>
                                        <option value="EKT">Ekiti</option>
                                        <option value="ENU">Enugu</option>
                                        <option value="GMB">Gombe</option>
                                        <option value="Imo">Imo</option>
                                        <option value="JGW">Jigawa</option>
                                        <option value="KDN">Kaduna</option>
                                        <option value="KNO">Kano</option>
                                        <option value="KAT">Katsina</option>
                                        <option value="KEB">Kebbi</option>
                                        <option value="KGI">Kogi</option>
                                        <option value="KWA">Kwara</option>
                                        <option value="LGS">Lagos</option>
                                        <option value="NAS">Nasarawa</option>
                                        <option value="NIG">Niger</option>
                                        <option value="OGN">Ogun</option>
                                        <option value="OND">Ondo</option>
                                        <option value="OSN">Osun</option>
                                        <option value="OYO">Oyo</option>
                                        <option value="PLT">Plateau</option>
                                        <option value="SKT">Sokoto</option>
                                        <option value="TRB">Taraba</option>
                                        <option value="YBE">Yobe</option>
                                        <option value="ZMF">Zamfara</option>
                                        <option value="FCT">Abuja</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" placeholder="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" placeholder="password" name="password">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" placeholder="Vehicle Brand and Model" name="vehicle_make">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" placeholder="Fuel type" name="fuel_type">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" placeholder="Year of manufacture" name="car_year">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-lg" placeholder="Chasis No" name="chasis_no">
                                </div>
                                <input type="submit" 
                                       value="Register" 
                                       class="btn btn-outline-dark btn-block" 
                                       name="register_btn" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include "includes/footer.php"; ?>