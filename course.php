<?php
session_start();


if (!array_key_exists('id', $_GET)) {
    header("Location:http://localhost/Web-Coursera/index.php");
}
$id = $_GET['id'];

$auth = false;
$enrolled = false;
$connection = new mysqli('localhost', 'root', '', 'web_coursera');



if (isset($_SESSION['auth_arr'])) {
    $auth = true;
    $user_id = $_SESSION['auth_arr']['id'];
    if (isset($_POST['enrollReq'])) {
        if ($_POST['enrollReq'] == '0') {
            $sqlquery = "DELETE FROM enrollment WHERE user_id='$user_id' AND course_id='$id'";
            mysqli_query($connection, $sqlquery);
        } else {
            $sqlquery = "INSERT INTO enrollment VALUES ('$user_id', '$id')";
            mysqli_query($connection, $sqlquery);
        }
    }

    $sqlquery = "SELECT * FROM enrollment WHERE user_id='$user_id' AND course_id='$id'";
    $result = mysqli_query($connection, $sqlquery);
    if (mysqli_fetch_array($result))
        $enrolled = true;
}


$sqlquery = "SELECT * from course WHERE id='$id'";
$result = mysqli_query($connection, $sqlquery);
$course = mysqli_fetch_array($result);

$sqlquery = "SELECT * FROM video_ref WHERE course_id='$id'";
$result = mysqli_query($connection, $sqlquery);
$x = 0;
$video_refs = array();

while ($row = mysqli_fetch_array($result)) {
    $video_refs[$x] = array();
    $video_refs[$x] = $row;
    $x++;
}

function dur_compare($element1, $element2)
{
    return $element1['dur_val'] - $element2['dur_val'];
}

usort($video_refs, 'dur_compare');

$sqlquery = "SELECT * FROM site_ref WHERE course_id='$id'";
$result = mysqli_query($connection, $sqlquery);
$x = 0;
$site_refs = array();

while ($row = mysqli_fetch_array($result)) {
    $site_refs[$x] = array();
    $site_refs[$x] = $row;
    $x++;
}

?>

<!DOCTYPE html>

<head>
    <title>Web Coursera</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/course.css" />
</head>

<body>
    <?php
    include('header.php')
    ?>

    <div class="container-fluid">
        <div class="row mt-5 ms-4">
            <div class="col-lg-6 mt-5">
                <img class="rounded mt-5" src="<?php echo $course['image_url'] ?>" alt="" height="370" width="640" />
            </div>
            <div class="col-lg-5">
                <div class="card">
                    <div class="mt-4 ms-3">
                        <h5>Learn <?php echo strtoupper($course['name']) ?></h5>
                    </div>
                    <div class="card-body mt-2">
                        <p>
                            <?php echo $course['lg_desc'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="table-responsive">
                <table class="table table-striped custom-table">
                    <thead>
                        <tr>
                            <th scope="col">S.No</th>
                            <th scope="col">Video</th>
                            <th scope="col">Title</th>
                            <th scope="col">
                                <div style="width: fit-content;">
                                    <div>Duration</div>
                                    <div style="transform:rotate(180deg); transition: all 0.3s linear; text-align: center; cursor: pointer; color: rgb(14, 191, 235);" id="sortButton">v</div>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="references">
                        <?php for ($i = 0; $i < count($video_refs); $i++) { ?>
                            <tr scope="row" data-len="<?php echo $video_refs[$i]['dur_val'] ?>">
                                <td><?php echo ($i + 1) ?></td>
                                <td>
                                    <a href="<?php echo $video_refs[$i]['access_link'] ?>"><img src="<?php echo $video_refs[$i]['image_url'] ?>" alt="" height="100" width="200" /></a>
                                </td>
                                <td>
                                    <a href="<?php echo $video_refs[$i]['access_link'] ?>"><?php echo $video_refs[$i]['name'] ?></a>
                                    <small class="d-block"><?php echo $video_refs[$i]['author'] ?></small>
                                </td>
                                <td><?php echo $video_refs[$i]['dur_tag'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="content" style="padding-top: 0;">
        <div class="container">
            <div style="color: #e0e0e0; font-size: 1.5rem; padding: 2rem 0;">Site References ></div>
            <div class="table-responsive">
                <table class="table table-striped custom-table">
                    <thead>
                        <tr>
                            <th scope="col">S.No</th>
                            <th scope="col">References</th>
                            <th scope="col">Links</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < count($site_refs); $i++) { ?>
                            <tr scope="row">
                                <td><?php echo ($i + 1) ?></td>
                                <td><?php echo $site_refs[$i]['name'] ?></td>
                                <td><a href="<?php echo $site_refs[$i]['access_link'] ?>">Reference<?php echo ($i + 1) ?></a></td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
            <?php
            if ($auth) { ?>
                <form method="POST">
                    <div class="text-center">
                        <?php
                        if ($enrolled) { ?>
                            <input type="hidden" name="enrollReq" value="0">
                        <?php } else { ?>
                            <input type="hidden" name="enrollReq" value="1">
                        <?php } ?>
                        <button class="btn mt-5 <?php echo ($enrolled) ? 'btn-primary' : 'btn-success'; ?>">Click to <?php echo ($enrolled) ? "Unenroll" : "Enroll" ?></button>
                    </div>
                </form>
            <?php } ?>

        </div>
    </div>


    <!-- Site footer -->
    <?php include('footer.php') ?>


    <script type="application/javascript">
        var x = 0;
        var enrolled = 0;

        function sortWithIndeces(toSort) {
            for (var i = 0; i < toSort.length; i++) {
                toSort[i] = [toSort[i], i];
            }
            toSort.sort(function(left, right) {
                return left[0] < right[0] ? -1 : 1;
            });
            toSort.sortIndices = [];
            for (var j = 0; j < toSort.length; j++) {
                toSort.sortIndices.push(toSort[j][1]);
                toSort[j] = toSort[j][0];
            }
            return toSort;
        }

        function sortRefs(event) {
            refrences = document.getElementById("references");
            refs = [...refrences.children];
            data_lens = refs.map((ref) => ref.getAttribute("data-len"));
            sorted_indices = sortWithIndeces(data_lens).sortIndices;
            sorted_refs = [];

            if (x == 1) {
                event.srcElement.style.transform = "rotate(180deg)";
                x = 0;
                for (var i = 0; i < sorted_indices.length; i++) {
                    refrences.children[sorted_indices[i]].children[0].innerText = i + 1;
                    sorted_refs.push(refs[sorted_indices[i]].outerHTML);
                }
            } else {
                event.srcElement.style.transform = "rotate(0deg)";
                x = 1;
                for (var i = sorted_indices.length - 1; i >= 0; i--) {
                    refrences.children[sorted_indices[i]].children[0].innerText =
                        sorted_indices.length - i;
                    sorted_refs.push(refs[sorted_indices[i]].outerHTML);
                }
            }

            refrences.innerHTML = sorted_refs.join(" ");
        }

        document.getElementById("sortButton").addEventListener("click", sortRefs);
    </script>
</body>