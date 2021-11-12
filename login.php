<?php
session_start();
$er = '';
if (isset($_POST['login'])) {
    $mail = $_POST['email'];
    $pass = $_POST['password'];

    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $er = "Invalid email format";
        goto exit_1;
    }

    $connection = new mysqli('localhost', 'root', '', 'web_coursera');
    if (!($connection))
        $er = "connection error";
    else {
        $sqlquery = "SELECT * from user where email='$mail'";
        $result = mysqli_query($connection, $sqlquery);
        $arr = mysqli_fetch_array($result);
        if ($arr && $arr['password'] == md5($pass)) {
            $_SESSION['auth_arr'] = $arr;
            header("Location:http://localhost/Web-Coursera/index.php");
        } else {
            $er = "Credentials are wrong.";
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
    <?php
    $main = "login.php";
    include('header.php')
    ?>

    <div class="login-dark">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration">
                <i class="icon ion-ios-locked-outline"></i>
            </div>
            <div class="form-group">
                <input class="form-control" required type="email" name="email" placeholder="Email" />
            </div>
            <div class="form-group">
                <input class="form-control" required type="password" name="password" placeholder="Password" />
            </div>
            <!-- <div class="form-group">
                <select class="form-control" style="background-color: ;" name="cars">
                    <option value="volvo" style="background:black; color: white;">As User</option>
                    <option value="saab" style="background:black; color: white;">As Admin</option>
                </select>
            </div> -->
            <div class="form-group d-grid gap-2">
                <button class="btn btn-primary" type="submit" name="login">Log In</button>
                <p style="color: red; text-align:center;">
                    <?php
                    echo $er;
                    ?>
                </p>
            </div>
            <!-- <a href="#" class="forgot">Forgot your email or password?</a>
            <div class="form-group login-icons">
                <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                <a class="google" href="#"><i class="fa fa-google"></i></a>
            </div> -->
            <a href="signup.php" class="other-button">Sign Up</a>
        </form>
    </div>

    <!-- Site footer -->
    <?php include('footer.php') ?>
</body>

</html>