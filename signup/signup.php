<!DOCTYPE html>
<html>
<head>
    <title>SIGN UP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Add Font Awesome CSS for eye icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Style for input-group */
        .input-group {
            position: relative;
        }

        /* Style for eye icon */
        .eye-icon {
            position: absolute;
            top: 50%;
            right: 10px; /* Adjust as needed */
            margin-right: 10px; /* Added */
            transform: translateY(-50%);
            cursor: pointer;
        }

        /* Style for error message */
        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }
    </style>
    <script>
        function togglePasswordVisibility(id) {
            var passwordInput = document.getElementById(id);
            var toggleIcon = document.getElementById("toggleIcon-" + id);

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleIcon.classList.remove("fa-eye-slash");
                toggleIcon.classList.add("fa-eye");
            } else {
                passwordInput.type = "password";
                toggleIcon.classList.remove("fa-eye");
                toggleIcon.classList.add("fa-eye-slash");
            }
        }

        function validatePassword() {
            var password = document.getElementById("password").value;
            var rePassword = document.getElementById("re_password").value;
            var errorMessage = document.getElementById("passwordError");
            var mismatchErrorMessage = document.getElementById("passwordMismatchError");

            // Regular expressions to check password requirements
            var containsLowerCase = /[a-z]/.test(password);
            var containsUpperCase = /[A-Z]/.test(password);
            var containsNumber = /\d/.test(password);
            var isEightCharacters = password.length >= 8;
            var containsNoSpace = password.trim() === password;
            var containsSymbol = /[!@#$%^&*(),.?":{}|<>]/.test(password); // Example symbols added

            // Construct error message
            var error = "";
            if (!isEightCharacters) {
                error += "<li>Password must be at least 8 characters long.</li>";
            }
            if (!containsLowerCase) {
                error += "<li>Password must contain at least one lowercase letter.</li>";
            }
            if (!containsUpperCase) {
                error += "<li>Password must contain at least one uppercase letter.</li>";
            }
            if (!containsNumber) {
                error += "<li>Password must contain at least one number.</li>";
            }
            if (!containsNoSpace) {
                error += "<li>Password must not contain leading or trailing spaces.</li>";
            }
            if (!containsSymbol) {
                error += "<li>Password must contain at least one symbol (e.g., !@#$%^&*()).</li>";
            }
            if (password.length < 1) {
                error += "<li>Password must contain at least 1 character.</li>";
            }

            // Check if passwords match
            if (password !== rePassword) {
                mismatchErrorMessage.innerHTML = "   Passwords do not match.";
                return false;
            } else {
                mismatchErrorMessage.innerHTML = "";
            }

            // Display error message
            if (error !== "") {
                errorMessage.innerHTML = "<ul>" + error + "</ul>";
                return false;
            }

            errorMessage.innerHTML = ""; // Clear error message
            return true;
        }
    </script>
</head>
<body>
    <form action="signup-check.php" method="post" onsubmit="return validatePassword()" style="max-width: 500px; margin: 0 auto;">
        <h2>SIGN UP</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

        <label>Name</label>
        <?php if (isset($_GET['name'])) { ?>
            <input type="text" 
                    name="name" 
                    placeholder="Name"
                    value="<?php echo $_GET['name']; ?>"><br>
        <?php }else{ ?>
            <input type="text" 
                    name="name" 
                    placeholder="Name"><br>
        <?php }?>

        <label>Email</label>
        <?php if (isset($_GET['uname'])) { ?>
            <input type="text" 
                    name="uname" 
                    placeholder="Email"
                    value="<?php echo $_GET['uname']; ?>"><br>
        <?php }else{ ?>
            <input type="text" 
                    name="uname" 
                    placeholder="Email"><br>
        <?php }?>

        <!-- Password input with eye icon -->
        <div class="form-group">
            <label>Password</label>
            <div class="input-group" id="show_hide_password">
                <input class="form-control" id="password" name="password" type="password">
                <div class="eye-icon" onclick="togglePasswordVisibility('password')">
                    <i id="toggleIcon-password" class="fas fa-eye-slash" aria-hidden="true"></i>
                </div>
            </div>
            <!-- Error message for password requirements -->
            <div class="error-message" id="passwordError"></div>
        </div>

        <!-- Password re-enter input with eye icon -->
        <div class="form-group">
            <label>Re-enter Password</label>
            <div class="input-group" id="show_hide_repassword">
                <input class="form-control" id="re_password" name="re_password" type="password">
                <div class="eye-icon" onclick="togglePasswordVisibility('re_password')">
                    <i id="toggleIcon-re_password" class="fas fa-eye-slash" aria-hidden="true"></i>
                </div>
            </div>
            <!-- Error message for passwords not matching -->
            <div class="error-message" id="passwordMismatchError"></div>
        </div>

        <button type="submit">Sign Up</button>
        <a href="index.php" class="ca">Already have an account?</a>
    </form>
</body>
</html>
