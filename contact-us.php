<?php session_start();?>
<?php include "include/header.php"?>
<?php include "includes/alerts.php"?>
    <div class="container-fluid cont-pg-hd">
        <h1>Contact Us</h1>
    </div>
    <div class="container-fluid contact-us-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cont-col-1">
                        <div class="cont-add">
                            <h3>Address</h3>
                            <p>
                                C/O Planet Capital Ltd, 4th Floor, <br>
                                St. Peter’s House, 3, Ajele Street, <br>
                                Off Broad Street, Lagos-Island, <br>
                                Lagos</p>
                        </div>
                        <div class="cont-phonenum">
                            <h3>Phone</h3>
                            <p>Tel: 08023025771, 08050761156, 08023938773</p>
                        </div>
                        <div class="cont-email-add">
                            <h3>Email Address</h3>
                            <p>esanprofessionals@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="send-msg-cont">
                        <div class="send-form-cont">
                            <h3 class="pb-3">Send Us a Message</h3>
                            <form action="process/processcontact.php" method="post">
                            <?php success_alert();error_alert();?>
                                <div class="enter-name-cont">
                               
                                    <input type="text" name="sendername" placeholder="Full Name">
                                </div>
                                <div class="enter-email-cont">
                               
                                    <input type="email" name="senderemail" placeholder="your email address">
                                </div>
                                <div class="enter-phone-no">
                                    <input type="text" name="senderphone" placeholder="your phone number (optional)">
                                </div>
                                <div class="enter-message-cont">
                                   
                                    <input type="text" name="subject" placeholder="Subject">
                                </div>
                                <div class="enter-message-cont">
                                  
                                    <input type="text" name="sendermessage" placeholder="Your Message">
                                </div>
                                <div class="snd-msg-btn-cont">
                                   <input type="submit" class="btn btn-primary" value="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "include/footer.php"?>
</body>
</html>