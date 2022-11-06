<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation System</title>
    <link rel="stylesheet" href="./SCSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <!--Sidebar-->
    <section id="sidebar">
        <a href="" class="brand">
        <i class="fas fa-truck-droplet"></i>
        <span class="text">BloodDonation</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="#">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                <i class='bx bxs-droplet' ></i>
                <span class="text">Blood Groups</span>
                </a>
            </li>
            <li>
                <a href="#">
                <i class='bx bx-list-ul' ></i>
                <span class="text">Donors Donations</span>
                </a>
            </li>
            <li>
                <a href="#">
                <i class='bx bx-transfer-alt'></i>
                <span class="text">Requests</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                <i class='bx bxs-cog' ></i>
                <span class="text">Settings</span>
                </a>
            </li>
            <li >
                <a href="#" class="logout">
                <i class='bx bx-log-out'></i>
                <span class="text">Log Out</span>
                </a>
            </li>
        </ul>
    </section>

    <!--Content-->
    <section id="content">
        <!--navbar-->
        <i class='bx bx-menu' ></i>
        <a href="" class="nav-link">Categories</a>
        <form action="#">
            <div class="form-input">
                <input type="search" placeholder="search...">
                <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
            </div>
        </form>
        <a href="#" class="notification">
        <i class='bx bxs-bell' ></i>
        <span class="num">9</span>
        <img src="" alt="">
        </a>
    </section>
    <script src="./JS/main.js"></script>
</body>
</html>