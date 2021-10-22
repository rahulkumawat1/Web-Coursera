<?php
session_start();
$auth = false;
if (isset($_SESSION['auth_arr'])) {
    $auth = true;
}

$connection = new mysqli('localhost', 'root', '', 'web_coursera');
$sqlquery = "SELECT course_id, COUNT(*) FROM done_course GROUP BY course_id";
$result = mysqli_query($connection, $sqlquery);
$x = 0;
$no_of_students = array();

while ($row = mysqli_fetch_array($result)) {
    $no_of_students[$row['course_id']] = $row['COUNT(*)'];
    $x++;
}

$sqlquery = "SELECT * from course";
$result = mysqli_query($connection, $sqlquery);
$x = 0;
$courses = array();

function prefix($word, $prefix)
{
    $word = strtolower($word);
    $prefix = strtolower($prefix);
    if (strlen($word) < strlen($prefix)) {
        $tmp = $prefix;
        $prefix = $word;
        $word = $tmp;
    }

    $word = substr($word, 0, strlen($prefix));

    if ($prefix == $word) {
        return 1;
    }

    return 0;
}

while ($row = mysqli_fetch_array($result)) {
    $courses[$x] = array();
    $courses[$x] = $row;
    if (!isset($no_of_students[$row['id']]))
        $no_of_students[$row['id']] = 0;
    $x++;
}

if (isset($_GET['search'])) {
    $search_courses = array();
    $x = 0;
    for ($i = 0; $i < count($courses); $i++) {
        if (prefix($courses[$i]['name'], $_GET['search']) == 1) {
            $search_courses[$x] = array();
            $search_courses[$x] = $courses[$i];
            $x++;
        }
    }
    $courses = $search_courses;
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
    <?php
    $main = "index.php";
    include('header.php')
    ?>

    <div class="container py-3 text-left">
        <h1 style="color: #d3d3d3" class="display-6">
            <a style="text-decoration: none; color: #d3d3d3" href="login.php" onmouseover="this.style.color='#fdfdfd'" onmouseout="this.style.color='#d3d3d3'">Web Coursera</a>
            >
            <a style="text-decoration: none; color: #d3d3d3" href="" onmouseover="this.style.color='#fdfdfd'" onmouseout="this.style.color='#d3d3d3'">Courses</a>
        </h1>
    </div>

    <div class="container-fluid">
        <?php for ($i = 0; $i < count($courses); $i++) { ?>
            <div class="row mt-3 ms-5 me-5">
                <div class="col">
                    <div class="card text-white">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img class="rounded" src=<?php echo $courses[$i]['image_url'] ?> alt="" width="361" height="200" />
                                </div>
                                <div class="col-sm-8">
                                    <h5 class="card-title"><?php echo $courses[$i]['name'] ?></h5>
                                    <p class="card-text">
                                        <?php echo $courses[$i]['sh_desc'] ?>
                                    </p>
                                    <a href="course.php?id=<?php echo $courses[$i]['id'] ?>" class="btn btn-primary">View course</a>
                                    <p style="display: inline; margin-left: 20px;">(<?php echo $no_of_students[$courses[$i]['id']] ?>)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($i != count($courses) - 1) { ?>
                <hr class="ms-5 me-5" />
            <?php } ?>
        <?php } ?>
    </div>
    <?php include('footer.php') ?>
</body>