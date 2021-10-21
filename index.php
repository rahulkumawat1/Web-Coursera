<?php
session_start();
$course_content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                            feugiat augue id efficitur porttitor. Morbi eget leo at mauris
                            fringilla ornare ac ut elit. Cras ultrices lectus nec risus
                            gravida, nec viverra est varius. Sed arcu sapien, elementum
                            sit amet consectetur nec, elementum eget enim. In pretium
                            lacus sem, eget venenatis nulla molestie vitae. Sed massa leo,
                            pulvinar eu pharetra ac, efficitur pellentesque odio. Cras
                            suscipit quam mauris, eu condimentum nisl venenatis id.
                            Maecenas sagittis pharetra nisl nec congue. Praesent consequat
                            arcu eu nisi euismod aliquet.";

if (isset($_POST['submit'])) {
    $s_name = $arr['full_name'];
    $roll = $arr['Student_ID'];
    $room_no = 406;
    $msg = $_POST['msg'];

    $connection = new mysqli('localhost', 'root', '', 'hostel');
    if (!($connection))
        echo 'connection error';
    $sql = $connection->prepare("INSERT INTO COMPLAINTS(Student_ID,Subject) 
      VALUES('$roll','$msg')");
    $sql->execute();
    //echo 'Data inserted successfully';
    $sql->close();
    $connection->close();
}
?>

<!DOCTYPE html>

<head>
    <title>Web Coursera</title>
    <!-- <link rel="stylesheet" href="../bootstrap-5.1.0-dist/css/bootstrap.min.css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/index.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">Web Coursera</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-4">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Sign Up</a>
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

    <div class="container py-3 text-left">
        <h1 style="color: #d3d3d3" class="display-6">
            <a style="text-decoration: none; color: #d3d3d3" href="login.php" onmouseover="this.style.color='#fdfdfd'" onmouseout="this.style.color='#d3d3d3'">Web Coursera</a>
            >
            <a style="text-decoration: none; color: #d3d3d3" href="" onmouseover="this.style.color='#fdfdfd'" onmouseout="this.style.color='#d3d3d3'">Courses</a>
        </h1>
    </div>

    <div class="container-fluid">
        <?php
        $course_name = 'HTML';
        $image = './images/HTML-Image.jpg';
        include 'course_temp.php';
        ?>
        <hr class="ms-5 me-5" />
        <?php
        $course_name = 'CSS';
        $image = './images/css-image.png';
        include 'course_temp.php';
        ?>
        <hr class="ms-5 me-5" />
        <?php
        $course_name = 'JavaScript';
        $image = "./images/js-image.png";
        include 'course_temp.php';
        ?>
        <hr class="ms-5 me-5" />
        <?php
        $course_name = 'Learn Java';
        $image = "./images/java-image.png";
        include 'course_temp.php';
        ?>
        <hr class="ms-5 me-5" />
        <?php
        $course_name = 'Ajax Framwork';
        $image = "./images/ajax-Image.jpg";
        include 'course_temp.php';
        ?>
        <hr class="ms-5 me-5" />
        <?php
        $course_name = 'Python';
        $image = "./images/python-Image.jpg";
        include 'course_temp.php';
        ?>
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
                        will help programmers build up concepts in different web development
                        concepts that include HTML, CSS, JavaScript, Java, Python and ajax.
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