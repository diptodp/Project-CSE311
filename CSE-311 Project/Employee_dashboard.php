<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Employee_dashboard.css" />
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="/path/to/flickity.pkgd.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <title>Welcome to Employee Dashboard</title>

</head>

<body>
    <div class="sp">
        <img src="image/banner4.jpg" alt="elephant" />

        <header class="shadow">
            <div class="logo">
                <a href="home.html">
                    <img src="image/logo4.png" width="70px" alt="logo" />
                </a>
            </div>
            <nav class="nav" id="nav-menu">
                <ion-icon name="close-outline" class="header_close" id="close-menu"></ion-icon>
                <ul class="nav_list">
                    <li class="nav_item">
                        <a href="Emp_profile.php" class="link link-theme link-arrow">
                            <button class="favorite styled" type="button">Profile
                            </button></a>
                    </li>

                    <li class="nav_item">
                        <a href="displaycust.php" class="link link-theme link-arrow">
                            <button class="favorite styled" type="button">Customers List
                            </button></a>
                    </li>
                    <li class="nav_item">
                        <a href="displaycomplain.php" class="link link-theme link-arrow">
                            <button class="favorite styled" type="button">Customer's Complain
                            </button></a>
                    </li>
                    <li class="nav_item">
                        <a href="CustCre.php" class="link link-theme link-arrow">
                            <button class="favorite styled" type="button">Add Customer
                            </button></a>
                    </li>
                    <li class="nav_item">
                        <a href="displaypay.php" class="link link-theme link-arrow">
                            <button class="favorite styled" type="button">Customer's Bill
                            </button></a>
                    </li>


                    <li class="nav_item olduser">
                        <div class="dropdown">
                            <button class="dropbtn"><strong>

                                    <?php


                                    echo "Hi, " . $_SESSION['user_name'];

                                    ?>


                                </strong></button>
                            <div class="dropdown-content">
                                <div class="dropdown-content2">
                                    <a href="Emp_profile.php">Profile</a>
                                    <hr />
                                </div>
                                <hr />
                                <a href="logout_Employee.php?logout_Employee">Logout <i class="fa fa-power-off"></i></a>

                            </div>
                        </div>
                    </li>
                </ul>
            </nav>

            <ion-icon name="menu-outline" class="header_toggle" id="toggle-menu"></ion-icon>

        </header>
        <div class="service">
            <div class="servtext">
                <div class="border2"></div>
                <p>DATANET INTERNET</p>
                <span>
                    <b style="color: rgb(106, 113, 215)"> Explore The </b><strong> High Speed <br />
                        Internet</strong></span>
            </div>

            <div class="servcards">
                <div class="scard" style="background-color: #7581ff23">

                    <h3>Total Employees</h3>
                    <p>
                    <h1>300+</h1>
                    </p>
                </div>
                <div class="scard" style="background-color: rgb(239, 240, 253)">

                    <h3>Total Customers</h3>
                    <p>
                    <h1>10000+</h1>
                    </p>
                </div>


                <div class="scard">

                    <h3>Largest FTP with</h3>
                    <p id="package">
                    <h1>2000+</h1>
                    </p>
                    <h4>Movies and TV series.</h4>
                </div>
            </div>

        </div>

    </div>

</body>

</html>