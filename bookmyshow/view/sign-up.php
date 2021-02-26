<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/boleto/demo/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 15:25:03 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/bookmyshow/view/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bookmyshow/view/assets/css/all.min.css">
    <link rel="stylesheet" href="/bookmyshow/view/assets/css/animate.css">
    <link rel="stylesheet" href="/bookmyshow/view/assets/css/flaticon.css">
    <link rel="stylesheet" href="/bookmyshow/view/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/bookmyshow/view/assets/css/odometer.css">
    <link rel="stylesheet" href="/bookmyshow/view/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/bookmyshow/view/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/bookmyshow/view/assets/css/nice-select.css">
    <link rel="stylesheet" href="/bookmyshow/view/assets/css/main.css">

    <link rel="shortcut icon" href="/bookmyshow/view/assets/images/favicon.png" type="image/x-icon">

    <title>Boleto  - Online Ticket Booking Website HTML Template</title>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</head>

<body>
    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->
    
    <!-- ==========Sign-In-Section========== -->
    <section class="account-section bg_img" data-background="/bookmyshow/view/assets/images/account/account-bg.jpg">
        <div class="container">
            <div class="padding-top padding-bottom">
                <div class="account-area">
                    <div class="section-header-3">
                        <span class="cate">welcome</span>
                        <h2 class="title">to Boleto </h2>
                    </div>
                    <form method="POST" action="" class="account-form">
                        <div class="form-group">
                            <label for="username">Username<span>*</span></label>
                            <input type="text" placeholder="Enter Your Email" name="username" name="username" id="user" required>
                        </div>
                        <div class="form-group">
                            <label for="email1">Email<span>*</span></label>
                            <input type="text" placeholder="Enter Your Email" name="email" id="email1" required>
                        </div>
                        <div class="form-group">
                            <label for="pass1">Password<span>*</span></label>
                            <input type="password" placeholder="Password" name="password" id="pass1" required>
                        </div>
                        <div class="form-group">
                            <label for="pass2">Confirm Password<span>*</span></label>
                            <input type="password" placeholder="Password" name="cpassword" id="pass2" required>
                        </div>
                        <div class="form-group checkgroup">
                            <input type="checkbox" id="bal" required checked>
                            <label for="bal">I agree to the <a href="#0">Terms, Privacy Policy</a> and <a href="#0">Fees</a></label>
                        </div>
                        <div class="form-group text-center">
                            <input id="btnSubmit" type="submit" value="Sign Up">
                        </div>
                    </form>
                    <div class="option">
                        Already have an account? <a href="view/sign-in.php">Login</a>
                    </div>
                    <div class="or"><span>Or</span></div>
                    <ul class="social-icons">
                        <li>
                            <a href="#0">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0" class="active">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <i class="fab fa-google"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php 
 echo $result;

?>
    <!-- ==========Sign-In-Section========== -->

    <script type="text/javascript">
        
    </script>
<script type="text/javascript">
    $(function () {
        $("#btnSubmit").click(function () {
            var password = $("#pass1").val();
            var confirmPassword = $("#pass2").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script>
    <script src="/bookmyshow/view/assets/js/jquery-3.3.1.min.js"></script>
    <script src="/bookmyshow/view/assets/js/modernizr-3.6.0.min.js"></script>
    <script src="/bookmyshow/view/assets/js/plugins.js"></script>
    <script src="/bookmyshow/view/assets/js/bootstrap.min.js"></script>
    <script src="/bookmyshow/view/assets/js/isotope.pkgd.min.js"></script>
    <script src="/bookmyshow/view/assets/js/magnific-popup.min.js"></script>
    <script src="/bookmyshow/view/assets/js/owl.carousel.min.js"></script>
    <script src="/bookmyshow/view/assets/js/wow.min.js"></script>
    <script src="/bookmyshow/view/assets/js/countdown.min.js"></script>
    <script src="/bookmyshow/view/assets/js/odometer.min.js"></script>
    <script src="/bookmyshow/view/assets/js/viewport.jquery.js"></script>
    <script src="/bookmyshow/view/assets/js/nice-select.js"></script>
    <script src="/bookmyshow/view/assets/js/main.js"></script>
</body>


<!-- Mirrored from pixner.net/boleto/demo/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 15:25:03 GMT -->
</html>