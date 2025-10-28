<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <!--// Registration Form-->
    <h2>Registration Form</h2>
    <form action="index.php" id="RegistrationForm" method="post">
        <label for="name">Username:</label>
        <input type="text" id="name" name="name" placeholder="Enter Username" required>
        <br> <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Enter Email" required>
        <br> <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter Password" minlength="6" required>
        <br> <br>
        <label for="ConfirmPassword">Confirm Password:</label>
        <input type="password" id="ConfirmPassword" name="ConfirmPassword" placeholder="Confirm Password" minlength="6" required>
        <br> <br>
        <button type="submit">Submit</button>
    </form>

    <!--Validate password match-->
    <script>
        document.getElementById("RegistrationForm").onsubmit = function (e) {
            if (document.getElementById("password").value !== document.getElementById("ConfirmPassword").value) {
                alert("Passwords do not match!");
                e.preventDefault();
            }
        };
    </script>
</body>

</html>