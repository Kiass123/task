<html lang="en">
<head>
    <title>Registation Form</title>
</head>
<body>
 <script>
    function validateForm() {
        var username = document.forms["registation"]["username"].value;
        var email = document.forms["registation"]["email"].value;
        var password = document.forms["registation"]["password"].value;
        var phone = document.forms["registation"]["phone"].value;
        var address = document.forms["registation"]["address"].value;
        var dob = document.forms["registation"]["dob"].value;
        var phoneRegex = /^\d{10}$/;
        var dobRegex = /^\d{4}-\d{2}-\d{2}$/;

        if (username == "") {
            alert("Username must be filled out");
            return false;
        }

        if (email == "") {
            alert("Email must be filled out");
            return false;
        }

        if (password == "") {
            alert("Password must be filled out");
            return false;
        }

        if (phone == "") {
            alert("Phone number must be filled out");
            return false;
        }
        if (address == "") {
            alert("Address must be filled out");
            return false;
        }

        if (dob == "") {
            alert("Date of Birth must be filled out");
            return false;
        } else if (!dob.match(dobRegex)) {
            alert("Date of Birth must be in mm-dd-yyyy format");
            return false;
        }
    }
 </script>
    <div class="signup-content">
    <div class="signup-box div">
        <link rel="stylesheet" href="../css/auth.css">
        <form id="myForm" name="registation" action="../controller/registrationcheck.php" method="POST" onsubmit="return validateForm()">
            <h1>Sign Up Form </h1>
            <table>
                <tr>
                    <td>
                        <label for="username">Username</label><br />
                        <input type="text" name="username" />
                    </td>
                </tr>
                <td>
                    <label for="email">Email</label><br />
                    <input type="email" name="email" />
                </td>
                <tr>
                <tr>
                    <td>
                        <label for="password">Password</label><br />
                        <input type="password" name="password" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="phone">Phone</label><br />
                        <input type="text" name="phone" />
                        <p id="nmer"></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="address">Address</label><br />
                        <input type="text" name="address" />
                    </td>

                </tr>
                <tr>
                    <td>
                        <label for="dob">Date Of Birth</label><br />
                        <input type="date" name="dob" />
                    </td>

                </tr>
                <tr>
                    <td>
                        <input class="submit" name="submit" type="submit" value="submit" />
                    </td>
                </tr>
                <tr>
                    <td>Have an account? <a href="login.php"><strong>Login</strong></a></td>
                </tr>
            </table>
        </form>
    </body>
</html>
             