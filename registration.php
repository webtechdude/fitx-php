<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = "Registration";
    include "page-content/head.php";
    ?>
</head>

<body>
    <?php include "page-content/headerOverNav.php"; ?>
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/logo.png" alt="FitX" height="50"></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-3 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="./#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./#courses">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./#contact">Contact Us</a>
                    </li>
                </ul>
            </div>

            <button onclick="window.location='./index.php'" class="cta">
                <span class="hover-underline-animation"> Go to HOME </span>
                <svg id="arrow-horizontal" xmlns="http://www.w3.org/2000/svg" width="30" height="20" fill="#ffffff" viewBox="0 0 46 16">
                    <path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" transform="translate(30)"></path>
                </svg>
            </button>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>
    <!-- name, gender, email, pass, phone number, address -->
    <div class="container mx-auto col-md-8 col-sm-10">
        <form action="registration.php" method="post" id="registration_form" class="row g-3">
            <div class="col-md-6">
                <label for="inputFn" class="form-label">First Name</label>
                <input type="text" class="form-control" id="inputFn">
            </div>
            <div class="col-md-6">
                <label for="inputLn" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="inputLn">
            </div>
            <div class="col-md-6">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-8">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-md-4">
                <label class="form-label">Gender</label>
                <div class="form-check">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inputMale">
                        <label class="form-check-label" for="inputMale">
                            Male
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inputFemale">
                        <label class="form-check-label" for="inputFemale"> Female </label>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button id="reg_btn" type="submit" class="btn btn-outline-kidorange px-5">Register</button>
            </div>
        </form>
    </div>

</body>

</html>