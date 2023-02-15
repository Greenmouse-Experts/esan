<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Association Of Esan Professionals</title>
<link rel="icon" href="images/logo.png" type="image/png" sizes="16x16">
  <link rel="shortcut icon" type="images/x-icon" href="images/logo.png">
    <script src="https://kit.fontawesome.com/427654d872.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid px-0">
        <div id="desktop-navbar" class="desktop-nav">
            <div class="desk-navbrand-cont">
                <a href="#"><img src="images/logo.png" alt=""></a>
            </div>
            <div class="desk-nav-menu">
                <div class="row mx-0">
                    <div style="background-color: #00A1D2;" class="col-lg-9 px-0">
                        <div class="desk-col1">
                            <ul>
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">HOME</a>
                                </li>
                                <li class="nav-item desk-dropdown">
                                    <a class="desk-dropbtn nav-link" href="#">ABOUT US <i
                                            class="fas fa-angle-down"></i></a>
                                    <div class="desk-dropdown-content">
                                        <a href="about-us.php">ABOUT AEP</a>
                                        <a href="our-excos.php">OUR EXECUTIVE COUNCIL</a>
                                        <a href="history.php">OUR HISTORY</a>
                                        <a href="achievements.php">OUR ACHIEVEMENTS</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="aep-events.php">EVENTS</a>
                                </li>
                                
                                <li class="nav-item desk-dropdown">
                                    <a class="desk-dropbtn nav-link" href="#">AEP PROGRAMMES <i
                                            class="fas fa-angle-down"></i></a>
                                    <div class="desk-dropdown-content">
                                        <a href="aep-edu.php">AEP EDUCATION FOUNDATION</a>
                                        <a href="aep-work.php">ESAN ECONOMIC EMPOWERMENT WORKSHOP</a>
                                        <a href="aep-job.php">CAREERS</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="aep-arts.php">ESAN ART & CULTURE</a>
                                </li>
                                <li class="nav-item desk-dropdown">
                                    <a class="desk-dropbtn nav-link" href="#">DONATIONS <i
                                            class="fas fa-angle-down"></i></a>
                                    <div class="desk-dropdown-content">
                                        <a href="dontaions.php">DONATIONS</a>
                                        <a href="payform.php">PAY ONLINE</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact-us.php">CONTACT US</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div style="background-color: #2C3292;" class="col-lg-3">
                        <div class="desk-col2">
                            <a href="login.php">LOGIN / SIGN UP</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav id="mobile-navbar" class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">HOME</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ABOUT US
                    </a>
                    <div class="dropdown-menu border-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="about-us.php">ABOUT AEP</a>
                        <a class="dropdown-item" href="our-excos.php">OUR EXECUTIVE COUNCIL</a>
                        <a class="dropdown-item" href="history.php">OUR HISTORY</a>
                        <a class="dropdown-item" href="achievements.php">OUR ACHIEVEMENTS</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aep-events.php">EVENTS</a>
                </li>
             
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        AEP PROGRAMMES
                    </a>
                    <div class="dropdown-menu border-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="aep-edu.php">AEP EDUCATION FOUNDATION</a>
                        <a class="dropdown-item" href="aep-work.php">ESAN ECONOMIC EMPOWERMENT <br> WORKSHOP</a>
                        <a class="dropdown-item" href="aep-job.php">CAREERS</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aep-arts.php">ESAN ART & CULTURE</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        DONATIONS
                    </a>
                    <div class="dropdown-menu border-0" aria-labelledby="navbarDropdown1">
                        <a class="nav-link" href="dontaions.php">DONATIONS</a>
                        <a class="dropdown-item" href="payform.php">PAY ONLINE</a>
                        
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact-us.php">CONTACT US</a>
                </li>
            </ul>
            <div class="sign-btn">
                <a href="login.php"><button type="button" class="btn login-btn bg-primary text-white">LOGIN / SIGN
                        UP</button></a>
            </div>
        </div>
    </nav>