<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/427654d872.js" crossorigin="anonymous"></script>
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
                                    <a class="nav-link" href="aep-events.php">EVENTS GALLERY</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="dontaions.php">DONATE</a>
                                </li>
                                <li class="nav-item desk-dropdown">
                                    <a class="desk-dropbtn nav-link" href="#">AEP PROGRAMMES <i
                                            class="fas fa-angle-down"></i></a>
                                    <div class="desk-dropdown-content">
                                        <a href="aep-edu.php">AEP EDUCATION FOUNDATION</a>
                                        <a href="aep-work.php">ESAN ECONOMIC EMPOWERMENT WORKSHOP</a>
                                        <a href="aep-job.php">CAREERS</a>
                                        <a href="#">ESAN SECURITY</a>
                                        <a href="#">AEP SKILL ACQUISITION PROGRAMS</a>
                                        <a href="#">AEP GROUP LIFE ASSURANCE SCHEME</a>
                                        <a href="#">AEP END OF YEAR FAMILY GET-TOGETHER</a>
                                        <a href="#">ANNUAL GENERAL MEETING (AGM)</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="aep-arts.php">ESAN ART & CULTURE</a>
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
                    <a class="nav-link" href="aep-events.php">GALLERY & EVENTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dontaions.php">DONATE</a>
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
                        <a class="dropdown-item" href="#">ESAN SECURITY</a>
                        <a class="dropdown-item" href="#">AEP SKILL ACQUISITION <br> PROGRAMS</a>
                        <a class="dropdown-item" href="#">AEP GROUP LIFE ASSURANCE<br> SCHEME</a>
                        <a class="dropdown-item" href="#">AEP END OF YEAR FAMILY<br> GET-TOGETHER</a>
                        <a class="dropdown-item" href="#">ANNUAL GENERAL MEETING (AGM</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aep-arts.php">ESAN ART & CULTURE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact-us.php">CONTACT US</a>
                </li>
            </ul>
            <div class="sign-btn">
                <a href="login.html"><button type="button" class="btn login-btn bg-primary text-white">LOGIN / SIGN
                        UP</button></a>
            </div>
        </div>
    </nav>
    <div class="container-fluid renewal-banner">
        <center>
            <h1>Membership Renewal</h1>
        </center>
    </div>
    <div class="container-fluid renewal-body2">
        <div class="container">
            <div class="renewal-body2-text">
                <h3 style="color: #00A1D2;" class="py-3">Information on Membership Renewal:</h3>
                <h5>
                    Note: Please you are required to make payment of ₦76,000 to complete your 2020 membership renewal as follows:
                </h5>
                <strong><p>
                    2020 Annual Dues = ₦15,000 <br><br>
                    
                    EEEW Levy = ₦20,000 <br><br>
                    
                    Premium Due on Group Life Assurance Policy = ₦17,000 <br><br>
                    
                    Esanland Security Levy (₦2,000 monthly) = ₦24,000 <br><br>
                    
                    TOTAL DUE AND PAYABLE = ₦76,000
                </p></strong>
                <p><em>Note : Members are at liberty to pay the dues in whatever way convenient for them.</em></p>
                <h3 style="color: #00A1D2;" class="pt-5 pb-2">Membership Renewal Fees Can Be Paid Through:</h3>
                <p>
                <h4>Bank Payment: <br><br></h4>
                <h5>
                    ACCOUNT NAME: Association of Esan Professionals <br><br>
                
                    BANK: First Bank PLC. <br><br>
                
                    ACCOUNT NUMBER: 2007683101
                </h5>
                </p>
                <h4 class="py-4">Or</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid footer">
        <div style="border-bottom: 1px solid white; padding: 50px 10px;" class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-us-cont">
                        <h5>CONTACT US</h5>
                        <p>C/O Planet Capital Ltd, 4th Floor, <br>
                            St. Peter’s House, 3, Ajele Street, <br>
                            Off Broad Street, Lagos-Island, <br>
                            Lagos</p>
                        <p class="contact-foot-tel">Tel: 08023025771, 08050761156, 08023938773</p>
                        <p>esanprofessionals@gmail.com</p>
                        <ul>
                            <li><a href="#"><i class="social-icons fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a
                                    href="https://www.facebook.com/Association-of-Esan-Professionals-AEP-155194981182399/?ref=page_internal"><i
                                        class="social-icons fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="social-icons fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="social-icons fab fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="quick-link-cont">
                        <h5>QUICK LINKS</h5>
                        <ul>
                            <li><a href="about-us.html">About AEP</a></li>
                            <li><a href="our-excos.html">Our Executive Council</a></li>
                            <li><a href="">Our History</a></li>
                            <li><a href="our-excos.html">Executive Coucil</a></li>
                            <li><a href="#">Eligibilty & Benefits</a></li>
                            <li><a href="#">Become a Member</a></li>
                            <li><a href="#">Membership Renewal</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="subscribe-cont">
                        <h5>SUBSCRIBE TO NEWSLETTER
                        </h5>
                        <form action="">
                            <input class="sub-email-cont" type="email" name="email" placeholder="Enter Your Email Here">
                            <div class="sub-now-btn-cont">
                                <button type="submit">SUBSCRIBE NOW</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright-cont">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="copy-text">
                        © 2020 The Association of Esan Professionals (AEP). All Right Reserved.
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="design-by">
                        Web design by: <a href="greenmousetech.com">Greenmouse</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>