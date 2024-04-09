<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <div class="header_wrapper">
        <header>
            <img src="./bg.jpeg" class="pop2">
        </header>
        <div class="cols_container">
            <div class="left_col">
                <div class="img_container">
                    <img src="./user.jpeg" alt="Anna smith" class="img">
                    <span></span>
                </div>
                <h2>Anna Smith</h2>
                <p>UI/UX Designer</p>
                <p>anna@example.com</p>
                <ul class="about">
                    <li><span>4,073</span>Followers</li>
                    <li><span>322</span>Following</li>
                    <li><span>200,543</span>Attractions</li>
                </ul>
                <div class="content">
                    <p>
                        This section contains metadata about the HTML document, such as the character set, viewport
                        settings, title, and links to external resources like stylesheets and scripts.
                    </p>
                    <ul>
                        <li><i class="fab fa-twitter"></i></li>
                        <li><i class="fab fa-pinterest"></i></li>
                        <li><i class="fab fa-facebook"></i></li>
                        <li><i class="fab fa-dribbble"></i></li>
                    </ul>
                </div>
            </div>
            <div class="right_col">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">PHOTO</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu1">POST</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu2">GROUPS</a></li>
                </ul>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade show active">

                        <div class="photos">
                            <!-- Display your images here -->
                            <img src="./img_1.avif" alt="photo" class="popup-image" />
                            <img src="./img_2.avif" alt="photo" class="popup-image" />
                            <img src="./img_3.avif" alt="photo" class="popup-image" />
                            <img src="./img_4.avif" alt="photo" class="popup-image" />
                            <img src="./img_5.avif" alt="photo" class="popup-image" />
                            <img src="./img_6.avif" alt="photo" class="popup-image" />
                        </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">

                        <p>This is a post.</p>
                    </div>
                    <div id="menu2" class="tab-pane fade">

                        <div class="groups-content">
                            <!-- Your groups content goes here -->
                            <p>These are groups.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script1.js"></script>
    <script src="image1.js"></script>
</body>

</html>