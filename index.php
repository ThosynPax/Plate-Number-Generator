<?php include "includes/header.php" ?>

    <?php include "includes/navbar.php" ?>

    <section id="showcase" class="align-middle">
        <div class="container">
            <div class="row">
                <div id="section-content" class="col-md-6 text-white">
                    <h2 class="display-3">Is your <span class="pink-color">Plate number Registered</span></h2>
                    <p>At Carlead we make it as easy as Possible</p>
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
                                    $age = mysqli_real_escape_string($db, $_POST['age']);
                                    
                                    $letters = "ABCDEFGIJKLMNOPQRSTUVWXYZ";
                                    
                                    $plate_number = $state . rand(100, 900) . substr(str_shuffle($letters), 0, 3);

                                    $image_name = $_FILES['passport']['name'];
                                    $image_tmp_name = $_FILES['passport']['tmp_name'];
                                    
                                    move_uploaded_file($image_tmp_name, "images/uploads/$image_name");

                                    $query = mysqli_query($db, "INSERT INTO users(fullname, state, email, password, age, passport, plate) VALUES('$full_name', '$state', '$email', '$password', '$age', '$image_name', '$plate_number')");

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
                                    <h5 class="text-dark">Your Passport</h5>
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
                                    <input type="number" class="form-control form-control-lg" placeholder="Your Age" name="age" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" placeholder="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" placeholder="password" name="password">
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

    <section id="best" class="m-5">
        <div class="container mt-5">
            <h2 class="h1 text-center">We are the best</h2>
            <p class="text-center">Want to hit the road, we will get your plates in the shortest Time</p>
            <div class="row text-center">
                <div class="col-md-3 shadow">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h2>High secured</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 shadow">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h2>Fast</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 shadow">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h2>Efficient</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 shadow">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h2>24 / 7 support</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="what-we-do">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="card-box">
                        <img src="images/car-3.jpg" alt="Car">
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="what-we-do-content">
                        <h1 class="display-4">
                            One of the Greatest Pleasures <span class="pink-color">Can Have</span>
                        </h1>
                        <p class="lead">
                            For 25 years, we raising the standard of used Plate registration with one of the most innovative and reliable used business plan ever. A comprehensive range of benefits as standard has evolved over time and, today, drivers can leave the forecourt with total reassurance and peace of mind.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="who-we-partner-with" class="mt-5 bg-light">
        <div class="container">
            <h2 class="h1 display-4 text-center">Our Partners</h2>
            <div class="row text-center">
                <div class="col-md-3">
                    <img src="images/brand-1.png" alt="">
                </div>
                <div class="col-md-3">
                    <img src="images/brand-2.png" alt="">
                </div>
                <div class="col-md-3">
                    <img src="images/brand-3.png" alt="">
                </div>
                <div class="col-md-3">
                    <img src="images/brand-4.png" alt="">
                </div>
            </div>
        </div>
    </section>

<?php include "includes/footer.php"; ?>