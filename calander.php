<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TourGlow</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-info" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@example.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0 shadow-sm sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0 shadow-sm sticky-top">
            <a href="" class="navbar-brand p-0">
                <h1 class="m-0" style="color: #0d6efd;"><i class="fa fa-map-marker-alt me-3"></i>TourGlow</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link  ">Home</a>
                    <a href="about.php" class="nav-item nav-link ">About</a>
                    <a href="contact.php" class="nav-item nav-link ">Contact</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu m-0">
                            <a href="destination.php" class="dropdown-item">Destinations</a>
                            <a href="booking.php" class="dropdown-item">Booking</a>
                            <a href="team.php" class="dropdown-item">Travel Guides</a>
                            <a href="UserProfile.php" class="dropdown-item">User Profiles</a>
                            <a href="Niches.php" class="dropdown-item">Niches</a>
                        
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Tools</a>
                        <div class="dropdown-menu m-0">
                            <a href="currencyConvertor.php" class="dropdown-item">Currency Convertor</a>
                            <a href="./Googlemap/index.php" class="dropdown-item">Google Map</a>
                            <a href="budjetCalculator.php" class="dropdown-item">Budget calculator</a>
                            <a href="calander.php" class="dropdown-item">Event Calendar</a>
                            <a href="./weather/weather.php" class="dropdown-item">Weather forecast</a>
                        
                        </div>
                    </div>
                   
                </div>
                <!-- <a href="" class="btn btn-info rounded-pill py-2 px-4">Register</a> -->
            </div>
        </nav>

        <div class="container-fluid bg-info py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Enjoy Your Vacation With Us</h1>
                        <p class="fs-4 text-white mb-4 animated slideInDown">" Unleash Adventure
                            Craft unforgettable memories in extraordinary destinations</p>
                            <p class="fs-4 text-white mb-4 animated slideInDown">Your journey starts now "</p>
                        <div class="position-relative w-75 mx-auto animated slideInDown">
                            <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Ella">
                            <button type="button" class="btn btn-info rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->
   
    <div class="container-xxl py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-info m-0 px-3">Event Calendar</h6>
                <h1 class="mb-5">2024</h1>
            </div>
            <div class="row g-4"   >
                <!-- January -->
                <!-- January -->
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
    <div class="calender-item rounded pt-3 text-decoration-none" style="background-color: #ffffff !important; display: block;">
        <div class="p-4">
            <i class="fa fa-3x fa-table  text-info m-0 mb-4"></i>
            <h5>January</h5>
            <p style="color: #0d6efd;">Tamil Thai Pongal Day<br>Date: January 15th</p>
            <p style="color: #0d6efd;">Duruthu Poya<br>Date: January 25th</p>
            <!-- Additional Content for January -->
            <div class="additional-content" style="display: none;">
                <!-- Add additional events for January here -->
            </div>
            <button class="see-more-btn rounded-pill py-2 px-4" onclick="toggleAdditionalContent(this)">See More</button>

        </div>
    </div>
</div>

<!-- February -->
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
    <div class="calender-item rounded pt-3 text-decoration-none" style="background-color: #ffffff !important; display: block;">
        <div class="p-4">
            <i class="fa fa-3x fa-table  text-info m-0 mb-4"></i>
            <h5>February</h5>
            <p style="color: #0d6efd;">National Day<br>Date: February 4th</p>
            <p style="color: #0d6efd;">Navam Full Moon Poya Day<br>Date: February 23rd</p>
            <!-- Additional Content for February -->
            <div class="additional-content" style="display: none;">
                <!-- Add additional events for February here -->
            </div>
            <button class="see-more-btn rounded-pill py-2 px-4" onclick="toggleAdditionalContent(this)">See More</button>

        </div>
    </div>
</div>

<!-- March -->
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
    <div class="calender-item rounded pt-3 text-decoration-none" style="background-color: #ffffff !important; display: block;">
        <div class="p-4">
            <i class="fa fa-3x fa-table  text-info m-0 mb-4"></i>
            <h5>March</h5>
            <p style="color: #0d6efd;">Maha Shivaratri<br>Date: March 8th</p>
            <p style="color: #0d6efd;">Medin Full Moon Poya Day<br>Date: March 24th</p>
            
            <!-- Additional Content for March -->
            <div class="additional-content" style="display: none;">
                <p style="color: #0d6efd;">Good Friday<br>Date: March 29th</p>
                <!-- Add additional events for March here -->
            </div>
            <button class="see-more-btn rounded-pill py-2 px-4" onclick="toggleAdditionalContent(this)">See More</button>

        </div>
    </div>
</div>

<!-- April -->
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
    <div class="calender-item rounded pt-3 text-decoration-none" style="background-color: #ffffff !important; display: block;">
        <div class="p-4">
            <i class="fa fa-3x fa-table  text-info m-0 mb-4"></i>
            <h5>April</h5>
            <p style="color: #0d6efd;">Good Friday<br>Date: March 29th</p>
            <p style="color: #0d6efd;">Ramazan Festival Day<br>Date: April 11th</p>
            <div class="additional-content" style="display: none;">
                <p style="color: #0d6efd;">Day prior to Sinhala & Tamil New Year Day<br>Date: April 12th</p>
                <p style="color: #0d6efd;">Sinhala & Tamil New Year Day<br>Date: April 13th</p>
                <p style="color: #0d6efd;">Bak Full Moon Poya Day<br>Date: April 23rd</p>
            </div>
            <button class="see-more-btn rounded-pill py-2 px-4" onclick="toggleAdditionalContent(this)">See More</button>

        </div>
    </div>
</div>

<!-- May -->
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
    <div class="calender-item rounded pt-3 text-decoration-none" style="background-color: #ffffff !important; display: block;">
        <div class="p-4">
            <i class="fa fa-3x fa-table  text-info m-0 mb-4"></i>
            <h5>May</h5>
            <p style="color: #0d6efd;">May Day<br>Date: May 1st</p>
            <p style="color: #0d6efd;">Vesak Full Moon Poya Day<br>Date: May 23rd</p>
            <!-- Additional Content for May -->
            <div class="additional-content" style="display: none;">
                <!-- Add additional events for May here -->
            </div>
            <button class="see-more-btn rounded-pill py-2 px-4" onclick="toggleAdditionalContent(this)">See More</button>

        </div>
    </div>
</div>

<!-- June -->
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
    <div class="calender-item rounded pt-3 text-decoration-none" style="background-color: #ffffff !important; display: block;">
        <div class="p-4">
            <i class="fa fa-3x fa-table  text-info m-0 mb-4"></i>
            <h5>June</h5>
            <p style="color: #0d6efd;">Poson Full Moon Poya Day<br>Date: June 21st</p>
            <!-- Additional Content for June -->
            <div class="additional-content" style="display: none;">
                <!-- Add additional events for June here -->
            </div>
            <button class="see-more-btn rounded-pill py-2 px-4" onclick="toggleAdditionalContent(this)">See More</button>

        </div>
    </div>
</div>

<!-- July -->
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
    <div class="calender-item rounded pt-3 text-decoration-none" style="background-color: #ffffff !important; display: block;">
        <div class="p-4">
            <i class="fa fa-3x fa-table  text-info m-0 mb-4"></i>
            <h5>July</h5>
            <p style="color: #0d6efd;">Esala Full Moon Poya Day<br>Date: July 20th</p>
            <p style="color: #0d6efd;">Kandy Esala Perahera (Major festival - dates vary within July)</p>
            <!-- Additional Content for July -->
            <div class="additional-content" style="display: none;">
                <!-- Add additional events for July here -->
            </div>
            <button class="see-more-btn rounded-pill py-2 px-4" onclick="toggleAdditionalContent(this)">See More</button>

        </div>
    </div>
</div>

<!-- August -->
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
    <div class="calender-item rounded pt-3 text-decoration-none" style="background-color: #ffffff !important; display: block;">
        <div class="p-4">
            <i class="fa fa-3x fa-table  text-info m-0 mb-4"></i>
            <h5>August</h5>
            <p style="color: #0d6efd;">Vel Festival<br>Date: late July/early August</p>
            <p style="color: #0d6efd;">Nikini Full Moon Poya Day<br>Date: August 18th</p>
            <!-- Additional Content for August -->
            <div class="additional-content" style="display: none;">
                <!-- Add additional events for August here -->
            </div>
            <button class="see-more-btn rounded-pill py-2 px-4" onclick="toggleAdditionalContent(this)">See More</button>

        </div>
    </div>
</div>

<!-- September -->
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
    <div class="calender-item rounded pt-3 text-decoration-none" style="background-color: #ffffff !important; display: block;">
        <div class="p-4">
            <i class="fa fa-3x fa-table  text-info m-0 mb-4"></i>
            <h5>September</h5>
            <p style="color: #0d6efd;">Binara Full Moon Poya Day<br>Date: September 17th</p>
            <!-- Additional Content for September -->
            <div class="additional-content" style="display: none;">
                <!-- Add additional events for September here -->
            </div>
            <button class="see-more-btn rounded-pill py-2 px-4" onclick="toggleAdditionalContent(this)">See More</button>

        </div>
    </div>
</div>

<!-- October -->
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
    <div class="calender-item rounded pt-3 text-decoration-none" style="background-color: #ffffff !important; display: block;">
        <div class="p-4">
            <i class="fa fa-3x fa-table  text-info m-0 mb-4"></i>
            <h5>October</h5>
            <p style="color: #0d6efd;">Vap Full Moon Poya Day<br>Date: October 15th</p>
            <p style="color: #0d6efd;">Milad-Un-Nabi<br>Date: October 28th</p>
            <!-- Additional Content for October -->
            <div class="additional-content" style="display: none;">
                <!-- Add additional events for October here -->
            </div>
            <button class="see-more-btn rounded-pill py-2 px-4" onclick="toggleAdditionalContent(this)">See More</button>

        </div>
    </div>
</div>

<!-- November -->
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
    <div class="calender-item rounded pt-3 text-decoration-none" style="background-color: #ffffff !important; display: block;">
        <div class="p-4">
            <i class="fa fa-3x fa-table  text-info m-0 mb-4"></i>
            <h5>November</h5>
            <p style="color: #0d6efd;">Il Full Moon Poya Day<br>Date: November 13th</p>
            <p style="color: #0d6efd;">Deepavali<br>Date: November 12th</p>
            <!-- Additional Content for November -->
            <div class="additional-content" style="display: none;">
                <!-- Add additional events for November here -->
            </div>
            <button class="see-more-btn rounded-pill py-2 px-4" onclick="toggleAdditionalContent(this)">See More</button>

        </div>
    </div>
</div>

<!-- December -->
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
    <div class="calender-item rounded pt-3 text-decoration-none" style="background-color: #ffffff !important; display: block;">
        <div class="p-4">
            <i class="fa fa-3x fa-table  text-info m-0 mb-4"></i>
            <h5>December</h5>
            <p style="color: #0d6efd;">Unduvap Full Moon Poya Day<br>Date: December 12th</p>
            <p style="color: #0d6efd;">Christmas<br>Date: December 25th</p>
            <!-- Additional Content for December -->
            <div class="additional-content" style="display: none;">
                <!-- Add additional events for December here -->
            </div>
            <button class="see-more-btn rounded-pill py-2 px-4" onclick="toggleAdditionalContent(this)">See More</button>

        </div>
    </div>
</div>

            </div>
        </div>
    </div>
    
    
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a class="btn btn-link nav-item nav-link active" href="about.php">About Us</a>
                    <a class="btn btn-link nav-item nav-link active" href="contact.php">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 6789</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>Info@TourGlow.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-info w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-info py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-info btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>