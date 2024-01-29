<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="./login.css">
</head>

<body>
    <div class="login_container">

        <form id="loginForm" action="./login_control_class.php" method="post">

            <h1>Login</h1>

            <div id="error_section"></div>

            <input type="text" name="username" id="username" placeholder="username" required>
            <input type="password" name="password" id="password" placeholder="password" required>

            <button type="button" id="login_button">Login</button>

            <p><small>Do not have an account? </small><a href="signup.php">Sign-up</a></p>
        </form>
    </div>

    <script src="./login.ajax.js"></script>
</body>

</html>