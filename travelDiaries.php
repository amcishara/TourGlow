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
        <div class="spinner-border text-info m-0" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>223 Main Street, Colombo 7 , Sri Lanka</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+94 123456789</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>Info@TourGlow.com</small>
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
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0 shadow-sm sticky-top" style="z-index: 1000;">
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
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link active dropdown-toggle " data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu m-0">
                            <a href="destination.php" class="dropdown-item" >Destinations</a>
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
                            <a href="booking.php" class="dropdown-item">Google Map</a>
                            <a href="budgetCalculator.php" class="dropdown-item">Budget calculator</a>
                            <a href="calander.php" class="dropdown-item">Event Calendar</a>
                            <a href="testimonial.php" class="dropdown-item">Weather forecast</a>
                        
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

    <div class="post container mt-0">
        <!-- Post 1 -->
        <!-- Modal -->
        <div class="modal fade" id="sigiriyaModal" tabindex="-1" aria-labelledby="sigiriyaModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="sigiriyaModalLabel">Sigiriya: Sri Lanka's Ancient Fortress</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <iframe src="sigiriyaPop.php" frameborder="0" style="width: 100%; height: 500px;"></iframe>
                        <div class="input-group mt-3">
                            <input type="text" class="form-control" placeholder="Add a comment" aria-label="Add a comment" aria-describedby="button-addon2" id="commentInput">
                        </div>
                        <div class="input-group mt-3">
                            <button class="btn btn-outline-info mb-5" type="button" id="commentButton">Comment</button>
                        </div>
                        <ul id="commentList"></ul>
                        <button type="button" class="btn btn-outline-info mb-5" id="likeButton"><i class="far fa-thumbs-up"></i> Like <span id="likeCount">0</span></button>
                        <span id="commentCount " class="mt-2">0 Comments</span>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Post box -->
        <div class="post-box tech" data-bs-toggle="modal" data-bs-target="#sigiriyaModal" style="max-width: 400px; margin: 0 auto;">
            <img src="sigiriya/Sigiriya.jpg" alt="" class="post-img">
            <h2 class="text-info category mt-3">Sigiriya <i class="fa fa-map-marker-alt"></i></h2>
            <a href="#" class="post-title">Discover the Marvels of Sigiriya: Sri Lanka's Ancient Fortress</a>
            <span class="post-date">12 Feb 2024</span>
            <p class="post-description">Sigiriya, also known as Lion Rock, is a UNESCO World Heritage Site and one of Sri Lanka's most awe-inspiring destinations. This ancient rock fortress, dramatically rising from the surrounding plains, holds a captivating blend of history, engineering marvels, and natural beauty.</p>
            <div class="profile">
                <img src="img/team-2.jpg" alt="" class="profile-img">
                <span class="profile-name">kathy</span>
            </div>
        </div>
    </div>
    
    <script>
    document.addEventListener("DOMContentLoaded", function () {
    const commentInput = document.getElementById("commentInput");
    const commentButton = document.getElementById("commentButton");
    const commentList = document.getElementById("commentList");
    const likeButton = document.getElementById("likeButton");
    const likeCount = document.getElementById("likeCount");
    const commentCount = document.getElementById("commentCount");

    commentButton.addEventListener("click", function () {
        // Your existing event listener code...
        const commentText = commentInput.value.trim();
        if (commentText !== "") {
            const commentItem = document.createElement("li");
            const profileImg = document.createElement("img");
            profileImg.src = "img/team-2.jpg";
            profileImg.alt = "Profile Picture";
            profileImg.className = "profile-img"; // Add class for styling
            const commenterName = document.createElement("span");
            commenterName.textContent = "kathy";
            commenterName.className = "profile-name"; // Add class for styling
            const commentContent = document.createElement("p");
            commentContent.textContent = commentText;
            commentItem.appendChild(profileImg);
            commentItem.appendChild(commenterName);
            commentItem.appendChild(commentContent);
            commentList.appendChild(commentItem);
            commentInput.value = "";
            updateCommentCount();
        }
    });

    // Function to update comment count...
    function updateCommentCount(count) {
        commentCount.innerText = count + " Comments";
    }

    // Update like count function...
    function updateCommentCount() {
        const commentItems = commentList.children;
        commentCount.textContent = commentItems.length + " Comments";
    }

    likeButton.addEventListener("click", function() {
        let count = parseInt(likeCount.textContent);
        count++;
        likeCount.textContent = count;
    });
    // Your existing JavaScript code goes here...

    // Styling for profile pictures
    const style = document.createElement('style');
    style.innerphp = `
        .comment-container {
            display: flex;
            align-items: flex-start; /* Adjust alignment */
            margin-bottom: 10px; /* Adjust margin as needed */
        }

        .profile-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px; /* Adjust margin as needed */
            margin-bottom: 0px;
        }

        .profile-name {
            font-weight: bold;
            margin-bottom: 5px; /* Adjust margin as needed */
        }

        .comment-content {
            margin-left: auto;
            text-align: right; /* Align comments to the right */
        }

        #likeCount, #commentCount {
            display: inline-block;
            margin-left: 10px; /* Adjust margin as needed */
        }

        #likeButton, #commentButton {
            background-color: #007bff; /* Update to match your website color */
            color: #ffffff; /* Update to match your website color */
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
            margin-right: 10px; /* Adjust margin as needed */
        }
        #likebutton, #commentCount {
            flex-wrap=wrap;
            display: inline-block;
            vertical-align: middle;}
            .modal-body #likeCount, .modal-body #commentCount {
            display: inline-block;
            vertical-align: middle;
            margin-left: 10px; /* Adjust margin as needed */
        }

        .modal-body #likeButton, .modal-body #commentButton {
            background-color: #007bff; /* Update to match your website color */
            color: #ffffff; /* Update to match your website color */
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
            margin-right: 10px; /* Adjust margin as needed */
        }
    `;
    document.head.appendChild(style);
});

    </script>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a class="btn btn-link nav-item nav-link active" href="about.php">About Us</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>223 Main Street, Colombo 7 ,Sri Lanka</p>
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
                        <input class="form-control border-info w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-info py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">TourGlow</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://phpcodex.com/credit-removal". Thank you for your support. ***/-->
                        </a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">

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