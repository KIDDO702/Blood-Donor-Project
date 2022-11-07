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
            <li class="active">
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
        <nav>
            <i class='bx bx-menu' ></i>
            <a href="" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search">
                    <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
                </div>
            </form>
            <a href="#" class="notification">
            <i class='bx bxs-bell' ></i>
            <span class="num">9</span>
            <a href="" class="profile">
                <img src="" alt="">
            </a>
        </nav>

        <!--main-->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcramp">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bxs-chevron-right'></i></li>
                        <li><a  class="active" href="#">Home</a></li>
                    </ul>
                </div>
                <a href="#" class="btn-download">
                <i class='bx bxs-cloud-download' ></i>
                <span class="text">Download Form</span>
                </a>
            </div>
            <ul class="box-info">
                <li>
                    <i class='bx bxs-file-plus'></i>
                    <span class="text">
                        <h3>050</h3>
                        <p>New Donor</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-group' ></i>
                    <span class="text">
                        <h3>030</h3>
                        <p>Registered Blood Group</p>
                    </span>
                </li>
                <li>
                    <i class='bx bx-injection'></i>
                    <span class="text">
                        <h3>005</h3>
                        <p>Blood Request</p>
                    </span>
                </li>
            </ul>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Blood Requests</h3>
                        <i class='bx bx-search-alt' ></i>
                        <i class='bx bx-filter' ></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Date Ordered</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="">
                                    <p>Robert Ochieng</p>
                                </td>
                                <td>07.11.2022</td>
                                <td><span class="status completed">Good</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="">
                                    <p>Patrick Okinyi</p>
                                </td>
                                <td>07.11.2022</td>
                                <td><span class="status pending">Bad</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="">
                                    <p>Getrude Masitsa</p>
                                </td>
                                <td>07.11.2022</td>
                                <td><span class="status process">Medium</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="">
                                    <p>Sandra Lilians</p>
                                </td>
                                <td>07.11.2022</td>
                                <td><span class="status pending">Bad</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="">
                                    <p>Chris Lonex</p>
                                </td>
                                <td>07.11.2022</td>
                                <td><span class="status process">Medium</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="">
                                    <p>Gedion Musila</p>
                                </td>
                                <td>07.11.2022</td>
                                <td><span class="status process">Bad</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="todo">
                    <div class="head">
                        <h3>Blood Groups</h3>
                        <i class='bx bx-search-alt' ></i>
                        <i class='bx bx-filter' ></i>
                    </div>
                    <ul class="todo-list">
                        <li class="completed">
                            <p>Blood Group A</p>
                            <i class='bx bx-dots-vertical-rounded' ></i>
                        </li>
                        <li class="completed">
                            <p>Blood Group B</p>
                            <i class='bx bx-dots-vertical-rounded' ></i>
                        </li>
                        <li class="completed">
                            <p>Blood Group AB</p>
                            <i class='bx bx-dots-vertical-rounded' ></i>
                        </li>
                        <li class="completed">
                            <p>Blood Group O</p>
                            <i class='bx bx-dots-vertical-rounded' ></i>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </section>
    <script src="./JS/main.js"></script>
</body>
</html>