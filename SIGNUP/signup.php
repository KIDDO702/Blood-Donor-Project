<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <div class="center">
        <h1>BloodDonation</h1>
        <form method="POST">
            <div class="txt-field">
                <input type="text" required>
                <span></span>
                <label>First Name</label>
            </div>
            <div class="txt-field">
                <input type="text" required>
                <span></span>
                <label>Last Name</label>
            </div>
            <div class="txt-field">
                <input type="text" required>
                <span></span>
                <label>Email Address</label>
            </div>
            <div class="txt-field">
                <input type="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="txt-field">
                <input type="password" required>
                <span></span>
                <label>Confirm password</label>
            </div>
            <div class="pass"></div>
            <input type="submit" value="SignUp">
            <div class="signup-link">
                Welcome to <a href="#">BloodDonation</a>
            </div>
        </form>
    </div>
</body>
</html>