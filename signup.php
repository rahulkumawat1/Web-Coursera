<?php
session_start();
$er = '';
if (isset($_POST['signUp'])) {
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $pass = base64_encode($_POST['password']);

    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $er = "Invalid email format";
        goto exit_1;
    }

    $connection = new mysqli('localhost', 'root', '', 'web_coursera');
    if (!($connection))
        echo 'connection error';
    else {
        $sqlquery = "INSERT INTO user (name, email, password, admin_flag) VALUES ('$name', '$mail', '$pass', 0)";
        $result = mysqli_query($connection, $sqlquery);
        if ($result) {
            $sqlquery = "SELECT * FROM user WHERE email='$mail'";
            $result = mysqli_query($connection, $sqlquery);
            $arr = mysqli_fetch_array($result);
            $_SESSION['auth_arr'] = $arr;
            header("Location:http://localhost/Web-Coursera/index.php");
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
    <?php
    $main = "signup.php";
    include('header.php')
    ?>

    <div class="login-dark">
        <form action="signup.php" method="POST">
            <h2 class="sr-only">Signup Form</h2>
            <div class="illustration">
                <i class="icon ion-ios-personadd-outline"></i>
            </div>
            <div class="form-group">
                <input class="form-control" required type="text" name="name" placeholder="Name" />
            </div>
            <div class="form-group">
                <input class="form-control" required type="email" name="email" placeholder="Email" />
            </div>
            <div class="form-group">
                <input class="form-control" required type="password" name="password" placeholder="Password" />
            </div>
            <div class="form-group d-grid gap-2">
                <button class="btn btn-primary" type="submit" name="signUp">Sign Up</button>
                <p style="color: red; text-align:center;">
                    <?php
                    echo $er;
                    ?>
                </p>
            </div>
            <!-- <div class="form-group login-icons">
                <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                <a class="google" href="#"><i class="fa fa-google"></i></a>
            </div> -->
            <a href="login.php" class="other-button">Log In</a>
        </form>
    </div>

    <!-- Site footer -->
    <?php include('footer.php') ?>
</body>

</html>