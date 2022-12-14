<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preload" href="img/loader.gif" as="image">
    <style>
        * .preloader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: grid;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(9px);
            visibility: visible;
            z-index: 999;
            transition: all 1s linear;
        }

        .hide-preloader {
            z-index: -999;
            visibility: hidden;
        }
    </style>
    <?php $title = "HOME";
    include 'page-content/head.php';
    ?>

</head>

<body data-bs-spy="scroll" data-bs-target="#navId" tabindex="0">
    <?php include "preloader.php"; ?>
    <!-- header -->
    <?php

    include "page-content/headerOverNav.php";
    // header ends here -->
    // <!-- Navbar -->
    include "page-content/navbar.php";
    // <!-- Home -->
    include "page-content/home.php";

    // <!-- Home Ends -->
    // <!-- About -->
    include "page-content/about.php";

    // <!-- About Ends -->
    // <!-- Counter -->
    include "page-content/counter.php";
    // <!-- Counter Ends -->
    // <!-- Services -->
    include "page-content/services.php";
    // <!-- Services Ends -->
    // <!-- Courses -->
    include "page-content/courses.php";
    // <!-- Courses Ends -->
    // <!-- Team -->
    include "page-content/team.php";
    // <!-- Team Ends -->
    // <!--Section: Content-->
    include "page-content/content.php";

    // <!-- Content Ends -->
    // <!-- Contact -->
    include "page-content/contact.php";
    // <!-- Contact Ends -->
    // <!-- Footer Starts -->
    include "page-content/footer.php";

    ?>

    <!-- scripts -->


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- <script src="assets/swiper/swiper-bundle.js"></script> -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>
    <script>
        ScrollOut({
            once: true
        });
        // preloader
        const preloader = document.querySelector(".preloader");

        window.addEventListener("load", function() {
            preloader.classList.add("hide-preloader");
        });
    </script>
    <script src="js/script.js"></script>

</body>

</html>