<?php
session_start();
$connection = new mysqli('localhost', 'root', '', 'web_coursera');

if (!(isset($_SESSION['auth_arr']) and $_SESSION['auth_arr']['admin_flag'] == 1)) {
  header("Location:http://localhost/Web-Coursera/index.php");
}

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
    <h2 class="text-center">Add Course</h2>
    <form class="mb-5">
      <div class="form-group mb-2 ">
        <label for="course_name">Name</label>
        <input type="text" name="name" class="form-control" id="course_name">
      </div>
      <div class="form-group mb-2">
        <label for="course_image_url">Image_URL</label>
        <input type="text" name="image_url" class="form-control" id="course_image_url">
      </div>
      <div class="form-group mb-2">
        <label for="course_sh_desc">Short-Description</label>
        <textarea name="sh_desc" class="form-control" id="course_sh_desc" cols="30" rows="5" placeholder="Write short-description here..."></textarea>
      </div>
      <div class="form-group mb-2">
        <label for="course_lg_desc">Long-Description</label>
        <textarea name="lg_desc" class="form-control" id="course_lg_desc" cols="60" rows="5" placeholder="Write long-description here..."></textarea>
      </div>
      <button class="btn btn-primary" type="submit" name="add_course">Submit</button>

    </form>

    <h2 class="text-center">Add Reference</h2>
    <form action="" method="post">
      <div class="mb-2">
        Reference Type:
        <div class="form-check">
          <input class="form-check-input ref_type" type="radio" name="ref_type" id="vid_ref" value="video_ref_type" checked>
          <label class="form-check-label" for="vid_ref">
            Video Ref
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input ref_type" type="radio" name="ref_type" id="site_ref" value="site_ref_type">
          <label class="form-check-label" for="site_ref">
            Site Ref
          </label>
        </div>
      </div>


      <div id="videoRefForm" style="display: block;">
        <div class="form-group mb-2 ">
          <label for="ref_name">Name</label>
          <input type="text" name="ref_name" class="form-control" id="ref_name">
        </div>
        <div class="form-group mb-2 ">
          <label for="author_name">Author-Name</label>
          <input type="text" name="author_name" class="form-control" id="author_name">
        </div>
        <div class="form-group mb-2">
          <label for="ref_image_url">Image_URL</label>
          <input type="text" name="ref_image_url" class="form-control" id="ref_image_url">
        </div>
        <div class="form-group mb-2">
          <label for="vid_access_link">Access-Link</label>
          <input type="text" name="access_link" class="form-control" id="vid_access_link">
        </div>
        <div class="form-group mb-2">
          <label for="dur_val">Duration-Value</label>
          <input type="number" name="dur_val" class="form-control" id="dur_val">
        </div>
        <div class="form-group mb-2">
          <label for="dur_tag">Duration-Tag</label>
          <select class="form-control" id="dur_tag" name="dur_tag">
            <option value="Small" selected>Small</option>
            <option value="Medium">Medium</option>
            <option value="Large">Large</option>
          </select>
        </div>
        <div class="form-group mb-2">
          <label for="vid_course_id">Course-Id</label>
          <select class="form-control" id="vid_course_id" name="course_id">
            <?php
            foreach ($courses as $i => $course) { ?>
              <option <?php echo ($i == 0) ? 'selected' : '' ?> value="<?php echo $course['id'] ?>"><?php echo $course['name'] ?></option>
            <?php } ?>
          </select>
        </div>

        <button type="submit" name="video_ref" class="btn btn-primary">Submit</button>
      </div>

      <div id="siteRefForm" style="display: none;">
        <div class="form-group mb-2 ">
          <label for="site_ref_name">Name</label>
          <input type="text" name="ref_name" class="form-control" id="site_ref_name">
        </div>
        <div class="form-group mb-2">
          <label for="site_access_link">Access-Link</label>
          <input type="text" name="access_link" class="form-control" id="site_access_link">
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

        <button type="submit" name="site_ref" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>

  <?php include('footer.php') ?>


  <script>
    function changeRefType(event) {
      const siteForm = document.getElementById("siteRefForm");
      const videoForm = document.getElementById("videoRefForm");
      if (event.srcElement['value'] == "site_ref_type") {
        siteForm.style.display = "block";
        videoForm.style.display = "none";
      } else {
        siteForm.style.display = "none";
        videoForm.style.display = "block";
      }
    }

    var radios = document.getElementsByClassName("ref_type");
    radios = [...radios];
    radios.forEach(radio => radio.addEventListener("click", changeRefType));
  </script>

</body>