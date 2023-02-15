<?php session_start();?>
<?php include"include/header.php";?>
<?php include"includes/alerts.php";?>
    <div class="container-fluid signup-body1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mx-auto signup-cont2-cont">
                    <div class="signup-cont2">
                        <h2>Sign Up</h2>
                        <form action="process/processsignup.php" method="post">
                            <div class="row">
                                <div class="col-md-10 offset-md-1 mb-1">
                                    <div class="flash"><?php error_alert();?></div>
                                </div>
                            </div>
                        
                            <div class="fullname-cont">
                                <input type="text" name="fname" placeholder="Your Full Name">
                            </div>
                            <div class="signup-email-cont">
                                <input type="email" name="email" placeholder="Your Email Address">
                            </div>
                            <div class="signup-password-cont">
                                <input type="password" name="password" placeholder="Password">
                            </div>
                            <div class="signup-re-password-cont">
                                <input type="password" name="rpassword" placeholder="Repeat Password">
                            </div>
                            <p class="agree-terms">
                               <input type="checkbox" name="agree"> I agree to the <a href="terms.php">Membership Terms</a> 
                            </p>
                            <div class="signup-btn-cont">
                                <input type="submit" value="Sign Up" class="btn btn-primary btn-lg">
                            </div>
                        </form>
                            
                        <div class="already-cont">
                            <p>Already have an account</p>
                            <a href="login.php">Sign In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include"include/footer.php";?>