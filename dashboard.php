<?php include "includes/header.php"; ?>

    <?php include "includes/navbar.php"; ?>

    <div class="container">
      <div class="row mt-10 mb-5">
        <div class="col-md-4">
        <div class="card" style="width: 20rem;">
            <?php 
              $user_id = $_SESSION['user_id'];
              $query = mysqli_query($db, "SELECT * FROM users WHERE id = $user_id; ");    
              $user_details = mysqli_fetch_assoc($query);
            ?>
            <img src="images/uploads/<?php echo $user_details['passport']; ?>" class="card-img-top" alt="...">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Full name: <?php echo $user_details['fullname']; ?></li>
              <li class="list-group-item">Age: <?php echo $user_details['Age']; ?></li>
              <li class="list-group-item">Email: <?php echo $user_details['email']; ?></li>
              <li class="list-group-item">State Code: <?php echo $user_details['state']; ?></li>
            </ul>
            <div class="card-body"> 
              <a href="logout.php" class="card-link text-dark">Log out</a>
            </div>
          </div>
        </div>

        <div class="col-md-8">
          <div class="jumbotron">
            <h2 class="card-title">Hello <?php echo $user_details['fullname']; ?></h2>
            <p class="lead">Welcome to caLead, Your Plate number is right below hands the screen please contact us if you have any problems</p>
            <div class="card">
              <div class="card-body">
                <h2 class="display-4 text-dark"><?php echo $user_details['plate']; ?></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    </div>


<?php include "includes/footer.php" ?>