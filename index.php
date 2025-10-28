<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    
<h2>Log In </h2>
//Login Form
<form action="#" id="LoginForm" method="post">
<label for="name">Username:</label>
<input type="text" id="name"name="name" placeholder="Enter Username" required>
<br> <br>
<label for="password">Password:</label>
<input type="password" id="password" name="password" placeholder="Enter Password" minlength="6" required>
<br> <br>
<button type="submit">Submit</button>
</form>

// Validate username and password
<script>
document.getElementById("LoginForm").onsubmit = function(e){
if(document.getElementById("name").value !=="princes"){
    alert("Incorrect Username!");
    e.preventDefault();
}
if(document.getElementById("password").value !=="123456"){
    alert("Incorrect Password!");
    e.preventDefault();
}
};
</script>
<br> <br>
<button type="button" onclick="location.href='Registration.php'">Registration Page</button>
</body>

</html>

