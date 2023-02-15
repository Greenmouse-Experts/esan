<?php include "include/header.php"?>
    <div class="container-fluid paystack-body1">
        <div class="container">
            <div class="paystack-form-cont">
                <h3>Payment Gateway</h3>
                <form id="paymentForm">
                    <div class="paystack-name">
                        <input type="text" name="name" id="name" placeholder="Your Full Name">
                    </div>
                    <div class="paystack-email">
                        <input type="email" name="email" id="email" placeholder="Your Email Address">
                    </div>
                    <div class="paystack-amount">
                        <input type="number" name="amount" id="amount" placeholder="Amount">
                    </div>
                    <div class="paystack-bottom-cont">
                        <div class="paystack-logo-cont">
                        Powered by <img src="images/paystack.png" width="100px">
                        </div>
                        <div class="paystack-btn">
                        <button type="submit" onclick=" payWithPaystack() " class="btn btn-primary btn-block">
                                    Pay Now
                                </button>
                        </div>
                    </div>
                </form>
                <script src="https://js.paystack.co/v1/inline.js"></script> 
                <script src="js/donate.js"></script> 
            </div>
        </div>
    </div>
    <?php include "include/footer.php"?>
</body>
</html>