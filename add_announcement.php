<?php
session_start();
$connection = new mysqli('localhost', 'root', '', 'web_coursera');

if (!(isset($_SESSION['auth_arr']) and $_SESSION['auth_arr']['admin_flag'] == 1)) {
    header("Location:http://localhost/Web-Coursera/index.php");
}

if (isset($_POST['announced'])) {
    $title = $_POST['title'];
    $text = $_POST['text'];
    $link = $_POST['link'];
    $time = date("Y/m/d");
    $course_id = (int)$_POST['course_id'];
    $sqlquery = "INSERT INTO `announcement` (`id`, `title`, `text`, `link`, `time`, `course_id`) VALUES (NULL, '$title', '$text', '$link', '$time', '$course_id')";
    mysqli_query($connection, $sqlquery);
    unset($_POST['announced']);
}

$sqlquery = "SELECT id, name FROM course";
$result = mysqli_query($connection, $sqlquery);
$x = 0;
$courses = array();

while ($row = mysqli_fetch_array($result)) {
    $courses[$x] = array();
    $courses[$x] = $row;
    $x++;
}
?>

<!DOCTYPE html>

<head>
    <title>Add Course</title>
    <!-- <link rel="stylesheet" href="../bootstrap-5.1.0-dist/css/bootstrap.min.css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/index.css" />
</head>

<body>
    <?php
    include('header.php')
    ?>

    <div class="container mt-4 text-white mb-5">
        <h2 class="text-center">Announcement</h2>
        <form class="mb-5" method="POST">
            <div class="form-group mb-2 ">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title">
            </div>
            <div class="form-group mb-2">
                <label for="text">Text</label>
                <textarea name="text" class="form-control" id="text" cols="60" rows="5" placeholder="Write announcement here..."></textarea>
            </div>
            <div class="form-group mb-2">
                <label for="link">Link</label>
                <input type="text" name="link" class="form-control" id="link">
            </div>
            <div class="form-group mb-2">
                <label for="site_course_id">Course-Id</label>
                <select class="form-control" id="site_course_id" name="course_id">
                    <?php
                    foreach ($courses as $i => $course) { ?>
                        <option <?php echo ($i == 0) ? 'selected' : '' ?> value="<?php echo $course['id'] ?>"><?php echo $course['name'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <button class="btn btn-primary" type="submit" name="announced">Submit</button>

        </form>
    </div>

    <?php include('footer.php') ?>

</body>