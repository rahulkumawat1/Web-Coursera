<?php
session_start();
unset($_SESSION['auth_arr']);
header("Location:http://localhost/Web-Coursera/login.php");
