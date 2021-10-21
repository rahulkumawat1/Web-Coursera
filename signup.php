<?php
session_start();
$er = '';
if (isset($_POST['signUp'])) {
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $pass = $_POST['password'];

    if ($name == "") {
        $er = "Name cannot be empty";
        goto exit_1;
    }

    $connection = new mysqli('localhost', 'root', '', 'web_coursera');
    if (!($connection))
        echo 'connection error';
    else {
        $sqlquery = "INSERT INTO user (Name, Email, Password) VALUES ('$name', '$mail', '$pass')";
        $result = mysqli_query($connection, $sqlquery);
        $arr = mysqli_fetch_array($result);
        if ($arr) {
            $_SESSION['arr'] = $arr;
            header("Location:http://localhost/DBMS/pages/index.php");
        } else {
            $er = "Error in credentials";
        }
    }
    exit_1:;
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Coursera</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/login.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Web Coursera</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-4">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" style="color: rgb(238, 237, 237)">Sign Up</a>
                    </li>
                </ul>

                <form class="d-flex">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-primary" type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                    <!-- <div class="input-group">
            <input
              type="text"
              class="form-control"
              placeholder="Search"
              style="border: white"
            />
            <span class="input-group-btn">
              <button class="btn btn-search" type="button">
                <i class="fa fa-search"></i>
              </button>
            </span>
          </div> -->
                </form>
            </div>
        </div>
    </nav>

    <div class="login-dark">
        <form action="signup.php" method="POST">
            <h2 class="sr-only">Signup Form</h2>
            <div class="illustration">
                <i class="icon ion-ios-personadd-outline"></i>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Name" />
            </div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email" />
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>
            <div class="form-group d-grid gap-2">
                <button class="btn btn-primary" type="submit" name="signUp">Sign Up</button>
                <p style="color: red; text-align:center;">
                    <?php
                    echo $er;
                    ?>
                </p>
            </div>
            <div class="form-group login-icons">
                <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                <a class="google" href="#"><i class="fa fa-google"></i></a>
            </div>
            <a href="login.php" class="other-button">Log In</a>
        </form>
    </div>

    <!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify">
                        <i>Web Coursera</i> is an initiative to help the upcoming
                        programmers with the code. Web Coursera focuses on providing the
                        most efficient code or snippets as the code wants to be simple. We
                        will help programmers build up concepts in different web
                        development concepts that include HTML, CSS, JavaScript, Java,
                        Python and ajax.
                    </p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Categories</h6>
                    <ul class="footer-links">
                        <li>
                            <a href="html_course.html">HTML</a>
                        </li>
                        <li>
                            <a href="css_course.html">CSS</a>
                        </li>
                        <li>
                            <a href="js_course.html">JavaScript</a>
                        </li>
                        <li>
                            <a href="java_course.html">Java</a>
                        </li>
                        <li>
                            <a href="ajax_course.html">Ajax</a>
                        </li>
                        <li>
                            <a href="python_course.html">Python</a>
                        </li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="terms.html">Terms</a></li>
                        <li><a href="policy.html">Privacy Policy</a></li>
                        <li>
                            <a href="#">Help and Support</a>
                        </li>
                        <li>
                            <a href="#">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">
                        Copyright &copy; 2021 All Rights Reserved by
                        <a href="#">Web Coursera</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li>
                            <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                        </li>
                        <li>
                            <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>