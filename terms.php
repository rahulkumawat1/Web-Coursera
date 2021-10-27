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
        <h2 style="text-align: center; margin-bottom: 4rem;">Terms & Conditions</h2>
        <h3>Thank you for using WebCoursera!</h3>
        <p>WebCoursera offers products and services provided by WebCoursera, Inc., our subsidiaries, and our international branches
            ("WebCoursera," "us," "we," or "our"). These Terms of Use ("Terms") govern your use of our website, apps, and other
            products and services ("Services"). As some of our Services may be software that is downloaded to your computer, phone,
            tablet, or other device, you agree that we may automatically update this software, and that these Terms will apply to
            such updates. Please read these Terms carefully, and contact us if you have any questions. By using our Services, you
            agree to be bound by these Terms, including the policies referenced in these Terms.</p>
        <br>

        <h3>Using WebCoursera!</h3>
        <p>You may use our Services only if you can form a binding contract with WebCoursera, and only in compliance with these Terms
            and all applicable laws. When you create your WebCoursera account, and subsequently when you use certain features, you must
            provide us with accurate and complete information, and you agree to update your information to keep it accurate and
            complete. Any use or access by anyone under the age of 13 is prohibited, and certain regions and Content Offerings may
            have additional requirements and/or restrictions.</p>
        <br>

        <h3>Our License to You!</h3>
        <p>Subject to these Terms and our policies (including the Acceptable Use Policy, Honor Code, course-specific eligibility
            requirements, and other terms), we grant you a limited, personal, non-exclusive, non-transferable, and revocable license
            to use our Services. You may download content from our Services only for your personal, non-commercial use, unless you
            obtain our written permission to otherwise use the content. You also agree that you will create, access, and/or use only
            one user account, unless expressly permitted by WebCoursera, and you will not share access to your account or access
            information for your account with any third party. Using our Services does not give you ownership of or any intellectual
            property rights in our Services or the content you access.
        </p>
        <br>

        <h3>Changes to Content Offerings</h3>
        <p>WebCoursera offers courses and content ("Content Offerings") from universities and other providers ("Content Providers").
            While we seek to provide world-class Content Offerings from our Content Providers, unexpected events do occur. WebCoursera
            reserves the right to cancel, interrupt, reschedule , or modify any Content Offerings, or change the point value or
            weight of any assignment, quiz, or other assessment, either solely, or in accordance with Content Provider instructions.
            Content Offerings are subject to the Disclaimers and Limitation of Liability sections below.
        </p>
        <br>

        <h3>How WebCoursera and Others May Use User Content</h3>
        <p>To the extent that you provide User Content, you grant WebCoursera a fully-transferable, royalty-free, perpetual,
            sublicensable, non-exclusive, worldwide license to copy, distribute, modify, create derivative works based on, publicly
            perform, publicly display, and otherwise use the User Content. This license includes granting WebCoursera the right to
            authorize Content Providers to use User Content with their registered students, on-campus learners, or other learners
            independent of the Services. Nothing in these Terms shall restrict other legal rights WebCoursera may have to User Content,
            for example under other licenses.
        </p>
        <br>
    </div>


    <!-- Site footer -->
    <?php include('footer.php') ?>

</body>