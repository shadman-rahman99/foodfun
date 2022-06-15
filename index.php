<?php
//for table menu
require_once('assets/config/all.php');
$sql='SELECT * FROM `menu`';
$result=mysqli_query($virtual_con,$sql);
$counter = 1;

//for table review
$sql1='SELECT * FROM `review`';
$result1=mysqli_query($virtual_con,$sql1);
$counter1 = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Foodfun</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
	<header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo-area">
                        <a href="index.php"><img src="assets/images/logo/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>  
                    <div class="main-menu">
                        <ul>
                            <li class="active"><a href="index.php">home</a></li>
                            <li><a href="about.html">about</a></li>
                            <li><a href="menupage.php">menu</a></li>
                            <li><a href="reviewpage.php">review</a></li>
                            <li><a href="contactpage.php">contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Banner Area Starts -->
    <section class="banner-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>the most interesting food in the world</h6>
                    <h1>Discover the <span class="prime-color">flavors</span><br>  
                    <span class="style-change">of <span class="prime-color">foodfun</span></span></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Food Area starts -->
    <section class="food-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-top">
                        <h3>we serve<br><span class="style-change">delicious</span> food</h3>
                        <p class="pt-3">Welcome to the end of your journey, weary food lover. This is the <b>greatest</b> eatery of all time.</p>
                    </div>
                </div>
            </div> 
            <div class="row">
            <?php while(($row=mysqli_fetch_assoc($result)) && $counter <= 3){ ?>    
            <div class="col-md-4 col-sm-6">
                    <div class="single-food">
                        <div class="food-img">
                        <?php echo "<img src='assets/images/".$row['image']."' class='img-fluid' alt=''>"; ?>
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5><?php echo $row['name']; ?></h5>
                                <span class="style-change">RM<?php echo $row['price']; ?></span>
                            </div>
                            <p class="pt-3"><?php echo $row['desc']; ?></p>
                        </div>
                    </div>
                </div>
            <?php $counter++;} ?>
            </div>
        </div>
    </section>
    <!-- Food Area End -->
    
    <!-- Deshes Area Starts -->
    <div class="deshes-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3>Our <span>special</span> dishes</h3>
                        <p><i>There is no "after". This is the best food you can experience. Nothing will ever compare.</i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-6 align-self-center">   
                    <div class="deshes-text">
                        <h3><span>Garlic</span><br> green beans</h3>
                        <p class="pt-3">"I'm done." - <i>Gordon Ramsay</i>. The very dish that made Gordon Ramsay gave it all up. He knew there was nothing left to pursue. </p>
                        <span class="style-change">RM12.00</span>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="assets/images/deshes1.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                    <img src="assets/images/deshes2.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2">
                    <div class="deshes-text">
                        <h3><span>Lemon</span><br> rosemary chicken</h3>
                        <p class="pt-3">"I came back because I knew heaven was here." - <i>Auguste Gusteau</i>. Thought by many to be dead, the chef came back when he heard of this dish.</p>
                        <span class="style-change">RM17.00</span>
                    </div>
                </div>
            </div>
            <a href="menupage.php" class="template-btn mt-3">Full Menu</a>
        </div>
    </div>
    <!-- Deshes Area End -->

    <!-- Testimonial Area Starts -->
    <section class="testimonial-area section-padding4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3>Customer <span>says</span></h3>
                        <p><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-slider owl-carousel">
                    <?php while(($row1=mysqli_fetch_assoc($result1)) && $counter1 <= 3){ ?>
                        <div class="single-slide d-sm-flex">
                            <div class="customer-img mr-4 mb-4 mb-sm-0">
                            <?php echo "<img src='assets/images/".$row1['image']."' alt=''>"; ?>
                            </div>
                            <div class="customer-text">
                                <h5><?php echo $row1['Name']; ?></h5>
                                <span><i><?php echo $row1['DateUploaded']; ?></i></span>
                                <p class="pt-3"><?php echo $row1['Description']; ?></p>
                            </div>
                        </div>
                        <?php $counter1++; } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Area End -->

    <!-- Footer Area Starts -->
    <footer class="footer-area">
        <div class="footer-widget section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-widget single-widget2 my-5 my-md-0">
                            <h5 class="mb-4">contact us</h5>
                            <div class="d-flex">
                                <div class="into-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="info-text">
                                    <p><?php echo $address; ?></p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="into-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="info-text">
                                    <p><?php echo $no; ?></p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="into-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="info-text">
                                    <p><?php echo $email; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-widget single-widget3">
                            <h5 class="mb-4">opening hours</h5>
                            <p>Monday ...................... Closed</p>
                            <p>Tue-Fri .............. 10 am - 5 pm</p>
                            <p>Sat-Sun ............... 3 pm - 10 pm</p>
                            <p>Holidays ............. 10 am - 12 pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="social-icons">
                            <ul>
                                <li class="no-margin">Follow Us</li>
                                <li><a href="https://facebook.com/rickroll548" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/rickroll" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/officialrickastley" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->


    <!-- Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
