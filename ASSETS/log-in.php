<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="./Style.css">
</head>
<body>
    <div class="center">
        <h1>LogIn</h1>
        <form method="POST">
            <div class="txt-field">
                <input type="text" required>
                <label>Username</label>
            </div>
            <div class="txt-field">
                <input type="password" required>
                <label>Password</label>
            </div>
            <div class="pass">Forgot password?</div>
            <input type="submit" value="LogIn">
            <div class="signup-link">
                Not a member? <a href="#">Sign up</a>
            </div>
        </form>
    </div>
</body>
</html>