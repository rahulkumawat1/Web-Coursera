<?php
session_start();
$auth = false;
if (isset($_SESSION['auth_arr'])) {
    $auth = true;
}
?>

<!DOCTYPE html>

<head>
    <title>Web Coursera</title>
    <link rel="stylesheet" href="../bootstrap-5.1.0-dist/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/terms.css" />
    <style>
        .terms {
            min-height: 90vh;
            color: white;
            background-color: #212529;
            margin: 5rem auto;
            width: 70%;
            padding: 4rem 4rem;
            box-shadow: 0 0 1px 3px #252525;
        }
    </style>
</head>

<body>
    <?php
    include('header.php')
    ?>

    <div class="terms">
        <h2 style="text-align: center; margin-bottom: 4rem;">Privacy Policy</h2>

        <h3>Key Information!</h3>
        <ul>
            <li>
                <p>WebCoursera, Inc. is the data controller of the personal information we collect about you (i.e., the entity that determines
                    the means and purposes of collecting, using, and disclosing the personal information), unless you are part of a degree,
                    certain MasterTrack programs, or certain other circumstances as communicated to you, in which case Coursera is the data
                    processor.</p>
            </li>
            <li>
                <p>We collect the personal information set out in the "What Information We Collect" section of this Privacy Notice below,
                    including account registration details such as name and email, details of Content Offerings you undertake, survey
                    information (where you provide it), identity verification data, and information about your use of our site and Services.</p>
            </li>
            <li>
                <p>We use your personal information for the purposes set out in the "How We Use the Information" section of this Privacy
                    Notice below, including providing our site and Services to you, ensuring the security and performance of our site,
                    conducting research relating to Content Offerings, sharing information with our Content Providers and our suppliers,
                    direct marketing, and performing statistical analysis of the use of our site and Services.</p>
            </li>
        </ul>

        <br>

        <h3>Purpose and who we are</h3>
        <p>The purpose of this Privacy Notice is to describe how WebCoursera, Inc., our subsidiaries, and our international branches,
            ("WebCoursera," "us," "we," or "our") collects, uses, and shares information about you through our online interfaces (e.g.,
            websites and mobile applications) owned and controlled by us. Please read this Privacy Notice carefully to understand what we do. If
            you do not understand any aspects of our Privacy Notice. Your
            use of our Site is also governed by our Terms of Use..Terms used but not defined in this Privacy Notice can be found in
            our Terms of Use. WebCoursera, Inc. is a Delaware corporation with a principal place of business at 381 E. Evelyn Ave.,
            Mountain View, CA 94041. If you reside or are located in the European Economic Area ("EEA") WebCoursera is the data
            controller of all Personal Data (as defined below) collected via the Site and of certain Personal Data collected from
            third parties, as set out in this Privacy Notice unless you are part of a degree, certain MasterTrack programs, or
            certain other circumstances as communicated to you, in which case WebCoursera is the data processor.
        </p>
        <br>

        <h3>Information relating to your use of our Site</h3>
        <p>When users come to our Site, we may track, collect, and aggregate information indicating, among other things, which
            pages of our Site were visited, the order in which they were visited, when they were visited, and which hyperlinks were
            clicked. We also collect information from the URLs from which you linked to our Site. Collecting such information may
            involve logging the IP address, operating system, and browser software used by each user of the Site. We may be able to
            determine from an IP address a user’s Internet Service Provider and the geographic location of their point of
            connectivity. Location data may be used to route your traffic to the nearest regional server to reduce latency and
            improve your experience. We may also use cookies and web beacons when you visit our Site.
        </p>
        <br>

        <h3>Changes to Content Offerings</h3>
        <p>WebCoursera offers courses and content ("Content Offerings") from universities and other providers ("Content
            Providers").
            While we seek to provide world-class Content Offerings from our Content Providers, unexpected events do
            occur. WebCoursera
            reserves the right to cancel, interrupt, reschedule , or modify any Content Offerings, or change the point
            value or
            weight of any assignment, quiz, or other assessment, either solely, or in accordance with Content Provider
            instructions.
            Content Offerings are subject to the Disclaimers and Limitation of Liability sections below.
        </p>
        <br>

        <h3>Information relating to your use of our Site</h3>
        <p>We use information relating to your use of the Site to build higher quality, more useful Services by performing
            statistical analyses of the collective characteristics and behavior of our users, and by measuring demographics and
            interests regarding specific areas of our Site. We may also use this information to ensure the security of our Services
            and the Site.

        </p>
        <br>
    </div>


    <!-- Site footer -->
    <?php include('footer.php') ?>

</body>