<?php
function split_name($name)
{
    $name = trim($name);
    if (strpos($name, " ") == False) {
        return array($name, "");
    } else {
        $sp_pos = strpos($name, " ");
        $fname = substr($name, 0, $sp_pos);
        $sname = substr($name, $sp_pos);
        return array($fname, $sname);
    }
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Web Coursera</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-4">
                <?php if (isset($_SESSION['auth_arr'])) { ?>

                    <li class="nav-item">
                        <a class="nav-link" style="color: #F1522A; cursor: default;" href="">
                            <?php
                            $name_arr = split_name($_SESSION['auth_arr']['name']);
                            echo $name_arr[0];
                            ?></a>
                    </li>
                    <?php if ($_SESSION['auth_arr']['admin_flag'] == 1 and isset($main) and $main == "course.php") { ?>
                        <li class="nav-item">
                            <button class="nav-link" style="background: none; outline: none; border: none;" data-toggle="modal" data-target="#exampleModalLong">Users</button>
                        </li>
                    <?php } ?>
                    <?php if ($_SESSION['auth_arr']['admin_flag'] == 1) { ?>
                        <li class="nav-item">
                            <a class="nav-link" <?php if (isset($main) && $main == "add_course.php") { ?> style="color: rgb(238, 237, 237)" <?php } ?> href="add_course.php">AddCourse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" <?php if (isset($main) && $main == "add_announcement.php") { ?> style="color: rgb(238, 237, 237)" <?php } ?> href="add_announcement.php">Anouncement</a>
                        </li>
                    <?php } ?>
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
            <form class="d-flex" action="index.php" method="GET">
                <input class="form-control" type="search" name="search" placeholder="Search Courses" aria-label="Search" value="<?php echo (isset($_GET['search'])) ? $_GET['search'] : '' ?>" />
                <button class="btn btn-primary" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>
    </div>
</nav>