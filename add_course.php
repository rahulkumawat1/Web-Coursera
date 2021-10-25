<?php
session_start();
$connection = new mysqli('localhost', 'root', '', 'web_coursera');

if (isset($_POST['add_course'])) {
  $course_name = $_POST['name'];
  $image_url = $_POST['image_url'];
  $sh_desc = $_POST['sh_desc'];
  $lg_desc = $_POST['lg_desc'];
  $sqlquery = "INSERT INTO course (name, image_url, sh_desc, lg_desc) VALUES ('$course_name', '$image_url', '$sh_desc', '$lg_desc')";
  mysqli_query($connection, $sqlquery);
  unset($_POST['add_course']);
}

if (isset($_POST['video_ref'])) {
  $name = $_POST['ref_name'];
  $author_name = $_POST['author_name'];
  $image_url = $_POST['ref_image_url'];
  $access_link = $_POST['access_link'];
  $dur_val = $_POST['dur_val'];
  $dur_tag = $_POST['dur_tag'];
  $course_id = (int)$_POST['course_id'];
  $sqlquery = "INSERT INTO video_ref (name, author, image_url, access_link, dur_val, dur_tag, course_id) VALUES ('$name', '$author_name', '$image_url', '$access_link', '$dur_val', '$dur_tag', '$course_id')";
  mysqli_query($connection, $sqlquery);
  unset($_POST['video_ref']);
}

if (isset($_POST['site_ref'])) {
  $name = $_POST['ref_name'];
  $access_link = $_POST['access_link'];
  $course_id = (int)$_POST['course_id'];
  $sqlquery = "INSERT INTO site_ref (name, access_link, course_id) VALUES ('$name', '$access_link', '$course_id')";
  mysqli_query($connection, $sqlquery);
  unset($_POST['site_ref']);
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
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add Course</title>
</head>

<body>
  <h2>Add Course</h2>
  <form action="" method="post">
    Name:
    <input type="text" name="name" /><br />
    Image_URL:
    <input type="text" name="image_url" /><br />
    Short-Description:
    <textarea name="sh_desc" id="" cols="60" rows="10" placeholder="Write short-description here..."></textarea><br />
    Long-Description:
    <textarea name="lg_desc" id="" cols="60" rows="10" placeholder="Write long-description here..."></textarea><br />
    <button type="submit" name="add_course">Submit</button>
  </form>
  <h2>Add Video Ref</h2>
  <form action="" method="post"><br>
    Name:
    <input type="text" name="ref_name"><br>
    Author-Name:
    <input type="text" name="author_name"><br>
    Image-URL:
    <input type="text" name="ref_image_url"><br>
    Access-Link
    <input type="text" name="access_link" id=""><br>
    Duration-Value:
    <input type="number" name="dur_val"><br>
    Duration-Tag:
    <input type="text" name="dur_tag"><br>
    Course-Id:
    <select name="course_id">
      <?php
      foreach ($courses as $i => $course) { ?>
        <option <?php echo ($i == 0) ? 'selected' : '' ?> value="<?php echo $course['id'] ?>"><?php echo $course['name'] ?></option>
      <?php } ?>
    </select><br>
    <button type="submit" name="video_ref">Submit</button>
  </form>

  <h2>Add Site Ref</h2>
  <form action="" method="post">
    Name:
    <input type="text" name="ref_name"><br>
    Access-Link
    <input type="text" name="access_link" id=""><br>
    Course-Id:
    <select name="course_id">
      <?php
      foreach ($courses as $i => $course) { ?>
        <option <?php echo ($i == 0) ? 'selected' : '' ?> value="<?php echo $course['id'] ?>"><?php echo $course['name'] ?></option>
      <?php } ?>
    </select><br>
    <button type="submit" name="site_ref">Submit</button>
  </form>

</body>

</html>