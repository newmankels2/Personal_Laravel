@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CAMI'S PLACE AUTHENTICITY GRILL AND BAR - Food Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a href="/" class="navbar-brand">foody kings and  <span>queens</span></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="home" class="nav-item nav-link">Home</a>
                        <a href="feature" class="nav-item nav-link">Featured</a>
                        <a href="about" class="nav-item nav-link">About</a>
                        <a href="contact" class="nav-item nav-link">Contact</a>
                        <a href="menu" class="nav-item nav-link active">Menu</a>
                        <a href="chef" class="nav-item nav-link">Chef</a>
                        <a href="booking" class="nav-item nav-link">Booking</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        
        <!-- Page Header Start -->
        <div class="page-header mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Food Menu</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Food Start -->
        <div class="food mt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="food-item">
                            <i class="flaticon-jerky"></i>
                            <h2>jerky</h2>
                            <p>
                                . 
                            </p>
                            <a href="">View Menu</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="food-item">
                            <i class="flaticon-snack"></i>
                            <h2>Snacks</h2>
                            <p>
                                . 
                            </p>
                            <a href="">View Menu</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="food-item">
                            <i class="flaticon-cocktail"></i>
                            <h2>Beverages</h2>
                            <p>
                                . 
                            </p>
                            <a href="">View Menu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Food End -->
        

        <!-- Menu Start -->
        <div class="menu">
            <div class="container">
                <div class="section-header text-center">
                    <style>
                        body {
                          background-color: black;
                          font-family: cursive;
                        }
                        
                        .glow {
                          font-size: 80px;
                          color: #fff;
                          text-align: center;
                          animation: glow 1s ease-in-out infinite alternate;
                        }
                        
                        @-webkit-keyframes glow {
                          from {
                            text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #a1e600, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
                          }
                          
                          to {
                            text-shadow: 0 0 20px #fff, 0 0 30px #ff4da668, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
                          }
                        }
                        </style>
                        </head>
                        <body>
                        
                        <h1 class="glow">DELICIOUS FOOD MENU</h1>
                             
                        </body>
                        </html> 
                        
                    
                </div>
                <div class="menu-tab">
                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#snacks">Dishes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#beverages">Beverages</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        
                        <div id="snacks" class="container tab-pane fade">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="menu-item">
                                        <div class="">
                                            <img src="img/menu-bbb.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3 style="padding-left: 20px;"><span>Salt Mackerel and Ground Food</span> <strong>$15.00</strong></h3>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="">
                                            <img src="img/bread_pudding.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3 style="padding-left: 20px;"><span>Bread Pudding</span> <strong>$35.00</strong></h3>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="">
                                            <img src="img/jerky.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3 style="padding-left: 20px;"><span>Jerk Chicken Combo</span> <strong>$20.00</strong></h3>
                                            
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="">
                                            <img src="img/breadfruit.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3 style="padding-left: 20px;"><span>Red Erring and Breadfruit</span> <strong>$30.00</strong></h3>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <img src="img/excusite.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div id="beverages" class="container tab-pane fade">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="menu-item">
                                        <div class="">
                                            <img src="img/beverage1.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3 style="padding-left: 20px;"><span>Ocean Breeze</span> <strong>$7.00</strong></h3>
                                            
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="">
                                            <img src="img/beverage2.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3 style="padding-left: 20px;"><span>Jamdown Swash</span> <strong>$9.00</strong></h3>

                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="">
                                            <img src="img/beverage3.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3 style="padding-left: 20px;"><span>Cami's Special</span> <strong>$15.00</strong></h3>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="">
                                            <img src="img/beverage4.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3 style="padding-left: 20px;"><span>Autic Crush</span> <strong>$8.00</strong></h3>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="">
                                            <img src="img/beverage5.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3 style="padding-left: 20px;"><span>Rasta Rush</span> <strong>$12.00</strong></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <img src="img/excusite.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>Our Address</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>123 Street, STONY HILL, JAMAICA</p>
                                    <p><i class="fa fa-phone-alt"></i>+187699009</p>
                                    <p><i class="fa fa-envelope"></i>info@example.com</p>
                                    <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>Quick Links</h2>
                                    <a href="">Terms of use</a>
                                    <a href="">Privacy policy</a>
                                    <a href="">Cookies</a>
                                    <a href="">Help</a>
                                    <a href="">FQAs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <p>
                                check our comment section for more satisfaction.
                            </p>
                            <div class="form">
                                <input class="form-control" placeholder="Email goes here">
                                <button class="btn custom-btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>Copyright &copy; <a href="#">Your Site Name</a>, All Right Reserved.</p>
                    <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
@endsection