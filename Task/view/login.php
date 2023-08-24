<html>
<head>  
    <title>Login Form</title>  
</head>
<body>
    <script>
        function validateLoginForm() {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if (username.trim() === '') {
                alert('Please enter a username');
                return false;
            }

            if (password.trim() === '') {
                alert('Please enter a password');
                return false;
            }
            return true;
        }
    </script>
    <div class="login-wrapper">
        <div class="login-box div">
            <h1>Login Form</h1>
            <link rel="stylesheet" href="../css/auth.css">
            <form method="POST" action="../controller/logincheck.php" onsubmit="return validateLoginForm()">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="" placeholder="Enter Username">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter password" value="">
                <input type="submit" name="submit" value="Login">
            </form>
            <div class="links">
                <a href="forgotpassword.php">Forgot password?</a>
                <a href="registration.php">Sign up</a>
                <a href="../welcomepage.html"> Back </a>
            </div>
        </div>
    </div>
</body>
</html>