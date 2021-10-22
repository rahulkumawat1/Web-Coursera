<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Web Coursera</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-4">
                <?php if ($auth) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" <?php if (isset($main) && $main == "login.php") { ?> style="color: rgb(238, 237, 237)" <?php } ?> href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" <?php if (isset($main) && $main == "signup.php") { ?> style="color: rgb(238, 237, 237)" <?php } ?> href="signup.php">Sign Up</a>
                    </li>
                <?php } ?>
            </ul>
            <form class="d-flex" action="<?php echo $main ?>" method="GET">
                <input class="form-control" type="search" name="search" placeholder="Search Courses" aria-label="Search" />
                <button class="btn btn-primary" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>
    </div>
</nav>