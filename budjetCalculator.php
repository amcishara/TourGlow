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
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu m-0">
                            <a href="destination.php" class="dropdown-item" >Destinations</a>
                            <a href="booking.php" class="dropdown-item">Booking</a>
                            <a href="team.php" class="dropdown-item">Travel Guides</a>
                            <a href="UserProfile.php" class="dropdown-item">User Profiles</a>
                            <a href="Niches.php" class="dropdown-item">Niches</a>
                        
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link active dropdown-toggle " data-bs-toggle="dropdown">Tools</a>
                        <div class="dropdown-menu m-0">
                            <a href="currencyConvertor.php" class="dropdown-item">Currency Convertor</a>
                            <a href="/Googlemap/index.php" class="dropdown-item">Google Map</a>
                            <a href="budjetCalculator.php" class="dropdown-item">Budget calculator</a>
                            <a href="calander.php" class="dropdown-item">Event Calendar</a>
                            <a href="/weather/weather.php" class="dropdown-item">Weather forecast</a>
                        
                        </div>
                    </div>
                   
                </div>
                <!-- <a href="" class="btn btn-info rounded-pill py-2 px-4">Register</a> -->
            </div>
        </nav>
    </div>
    <!-- Navbar & Hero End -->
    <div class="card container mt-5" style="width: 75%; top: 1rem; border-color: rgb(183, 179, 217);">
        <div class="card-body">
            <h1 class=" text-center" style="color: #0d6efd;">TourGlow Budget Calculator</h1>
            <div class="wrapper">
                <div class="container">
                    <div class="sub-container">
                        <!-- Budget -->
                        <div class="total-amount-container">
                            <h3>Budget</h3>
                            <p class="hide error" id="budget-error">Value cannot be empty or negative</p>
                            <input type="number" id="total-amount" placeholder="Enter Total Amount" />
                            <button class="submit" id="total-amount-button">Set Budget</button>
                        </div>
    
                        <!-- Expenditure -->
                        <div class="user-amount-container">
                            <h3>Expenses</h3>
                            <p class="hide error" id="product-title-error">Values cannot be empty</p>
                            <input type="text" class="product-title" id="product-title" placeholder="Enter Title of Product" />
                            <input type="number" id="user-amount" placeholder="Enter Cost of Product" />
                            <button class="submit" id="check-amount">Check Amount</button>
                        </div>
                    </div>
                    <!-- Output -->
                    <div class="output-container flex-space">
                        <div>
                            <p>Total Budget</p>
                            <span id="amount">0</span>
                        </div>
                        <div>
                            <p>Expenses</p>
                            <span id="expenditure-value">0</span>
                        </div>
                        <div>
                            <p>Balance</p>
                            <span id="balance-amount">0</span>
                        </div>
                    </div>
                </div>
                <!-- List -->
                <div class="list bg-info">
                    <h3 class="text-white">Expense List</h3>
                    <div class="list-container" id="list" style="color: white;"></div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        let totalAmount = document.getElementById("total-amount");
        let userAmount = document.getElementById("user-amount");
        const checkAmountButton = document.getElementById("check-amount");
        const totalAmountButton = document.getElementById("total-amount-button");
        const productTitle = document.getElementById("product-title");
        const errorMessage = document.getElementById("budget-error");
        const productTitleError = document.getElementById("product-title-error");
        const productCostError = document.getElementById("product-cost-error");
        const amount = document.getElementById("amount");
        const expenditureValue = document.getElementById("expenditure-value");
        const balanceValue = document.getElementById("balance-amount");
        const list = document.getElementById("list");
        let tempAmount = 0;
    
        //Set Budget Part
        totalAmountButton.addEventListener("click", () => {
            tempAmount = totalAmount.value;
            //empty or negative input
            if (tempAmount === "" || tempAmount < 0) {
                errorMessage.classList.remove("hide");
            } else {
                errorMessage.classList.add("hide");
                //Set Budget
                amount.innerText = tempAmount;
                //Set Balance
                balanceValue.innerText = tempAmount - expenditureValue.innerText;
                //Clear Input Box
                totalAmount.value = "";
            }
        });
    
        //Function To Disable Edit and Delete Button
        const disableButtons = (bool) => {
            let editButtons = document.getElementsByClassName("edit");
            Array.from(editButtons).forEach((element) => {
                element.disabled = bool;
            });
        };
    
        //Function To Modify List Elements
        const modifyElement = (element, edit = false) => {
            let parentDiv = element.parentElement;
            let currentBalance = balanceValue.innerText;
            let currentExpense = expenditureValue.innerText;
            let parentAmount = parentDiv.querySelector(".amount").innerText;
            if (edit) {
                let parentText = parentDiv.querySelector(".product").innerText;
                productTitle.value = parentText;
                userAmount.value = parentAmount;
                disableButtons(true);
            }
            balanceValue.innerText = parseInt(currentBalance) + parseInt(parentAmount);
            expenditureValue.innerText = parseInt(currentExpense) - parseInt(parentAmount);
            parentDiv.remove();
        };
    
        //Function To Create List
        const listCreator = (expenseName, expenseValue) => {
            let sublistContent = document.createElement("div");
            sublistContent.classList.add("sublist-content", "flex-space");
            list.appendChild(sublistContent);
            sublistContent.innerText = `<p class="product">${expenseName}</p><p class="amount">${expenseValue}</p>`;
            let editButton = document.createElement("button");
            editButton.classList.add("fa-solid", "fa-pen-to-square", "edit");
            editButton.style.fontSize = "1.2em";
            editButton.addEventListener("click", () => {
                modifyElement(editButton, true);
            });
            let deleteButton = document.createElement("button");
            deleteButton.classList.add("fa-solid", "fa-trash-can", "delete");
            deleteButton.style.fontSize = "1.2em";
            deleteButton.addEventListener("click", () => {
                modifyElement(deleteButton);
            });
            sublistContent.appendChild(editButton);
            sublistContent.appendChild(deleteButton);
            document.getElementById("list").appendChild(sublistContent);
        };
    
        //Function To Add Expenses
        checkAmountButton.addEventListener("click", () => {
            //empty checks
            if (!userAmount.value || !productTitle.value) {
                productTitleError.classList.remove("hide");
                return false;
            }
            //Enable buttons
            disableButtons(false);
            //Expense
            let expenditure = parseInt(userAmount.value);
            //Total expense (existing + new)
            let sum = parseInt(expenditureValue.innerText) + expenditure;
            expenditureValue.innerText = sum;
            //Total balance(budget - total expense)
            const totalBalance = tempAmount - sum;
            balanceValue.innerText = totalBalance;
            //Create list
            listCreator(productTitle.value, userAmount.value);
            //Empty inputs
            productTitle.value = "";
            userAmount.value = "";
        });
// Function to hide error messages when user starts typing
const hideErrorOnInput = () => {
    errorMessage.classList.add("hide");
    productTitleError.classList.add("hide");
};

// Add event listeners to input fields to hide error messages on input
totalAmount.addEventListener("input", hideErrorOnInput);
productTitle.addEventListener("input", hideErrorOnInput);
userAmount.addEventListener("input", hideErrorOnInput);

        
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
                      <input class="form-control border-info w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                      <button type="button" class="btn btn-info py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
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