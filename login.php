<?php include "includes/header.php" ?>

    <?php include "includes/navbar.php" ?>
        
        <div class="container mt-10 mb-5"> 
          <div class="card">
            <div class="card-body">
                <h5 class="text-dark">login Here..</h5>
                <?php 
                    if(isset($_POST['login_btn'])){
                        $email = mysqli_real_escape_string($db, $_POST['email']);
                        $password = mysqli_real_escape_string($db, $_POST['password']);
                        
                        $query = mysqli_query($db, "SELECT * FROM users WHERE email='$email' AND password='$password' ");

                        $user_query = mysqli_query($db, "SELECT * FROM users WHERE email = '$email' ");
                        $query_row = mysqli_fetch_assoc($user_query);
                        
                        $user_id = $query_row['id'];
    
                        $_SESSION['user_id'] = $user_id;

                        if(mysqli_num_rows($query) != 1){
                          echo "invalid login details";
                        }else {
                          // $_SESSION['user'] = $email;
                          header("Location: dashboard.php");
                          exit();
                        }
                      }
                      
                  ?>
                <form action="login.php" method="POST">
                    <div class="form-group">
                        <input type="email" class="form-control form-control-lg" placeholder="email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" placeholder="password" name="password">
                    </div>
                    <input type="submit" 
                            value="Login" 
                            class="btn btn-outline-dark btn-block" 
                            name="login_btn" />
                </form>
            </div>
        </div>
      </div>

<?php include "includes/footer.php"; ?>