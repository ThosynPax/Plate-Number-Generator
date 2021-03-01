<nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
    <div class="container">
        <a href="index.php" class="navbar-brand">
            <img src="images/logo-dark.svg" alt="logo" width="200px">
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php if(isset($_SESSION['user'])) : ?>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                </ul>
            </div>
        <?php else : ?>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>   
            </div>
        <?php endif; ?>

    </div>
</nav>   