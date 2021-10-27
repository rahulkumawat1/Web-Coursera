<?php
$connection = new mysqli('localhost', 'root', '', 'web_coursera');
$sqlquery = "SELECT id, name FROM course";
$result = mysqli_query($connection, $sqlquery);

$courses = array();
$x = 0;
while ($row = mysqli_fetch_array($result)) {
    $courses[$x] = array();
    $courses[$x] = $row;
    $x++;
}
?>

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
                    <?php
                    foreach ($courses as $course) { ?>
                        <li>
                            <a href="http://<?php echo $_SERVER['SERVER_NAME'] ?>/Web-Coursera/course.php?id=<?php echo $course['id'] ?>"><?php echo $course['name'] ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="terms.php">Terms</a></li>
                    <li><a href="policy.php">Privacy Policy</a></li>
                    <!-- <li>
                        <a href="#">Help and Support</a>
                    </li> -->
                    <!-- <li>
                        <a href="#">Contact us</a>
                    </li> -->
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

            <!-- <div class="col-md-4 col-sm-6 col-xs-12">
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
            </div> -->
        </div>
    </div>
</footer>