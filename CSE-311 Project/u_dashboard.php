<?php
session_start();
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="u_dashboard.css" />
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="/path/to/flickity.pkgd.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <title>Welcome to User Dashboard</title>

</head>

<body>


    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>

            <form action="Complain.php" method="post">
                <input type="text" name="complain" placeholder="Complain Here"required>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>



    <div class="sp">
        <img src="image/banner5.jpg" alt="elephant" />

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
                        <a href="User_profile.php" class="link link-theme link-arrow">
                            <button class="favorite styled" type="button">Profile
                            </button></a>
                    </li>
                    <li class="nav_item">
                        <!-- <a href="Upcust.php" class="link link-theme link-arrow">
                            <button class="favorite styled" type="button">Edit Profile
                            </button></a> -->
                            <?php
                            echo '<button class="favorite styled"><a style="color: white" href="userpro.php ? upid='.$_SESSION['user_name'].'" class="link link-theme link-arrow">Edit Profile</a></button>'
                            ?>
                    </li>

                    
                    <li class="nav_item">
                        
                            <button class="favorite styled" type="button" a href="" id="myBtn" style="cursor: pointer;"
                                class="link link-theme link-arrow">Complain
                            </button>
                    </li>
                    <li class="nav_item">
                        <a href="pay.php" class="link link-theme link-arrow">
                            <button class="favorite styled" type="button">Pay Bill
                            </button></a>
                    </li>


                    <li class="nav_item olduser">
                        <div class="dropdown">
                            <button class="dropbtn"><strong>

                            <?php


echo "Hi, ".$_SESSION['user_name'];

?>

                            </strong></button>
                            <div class="dropdown-content">
                                <div class="dropdown-content2">
                                    <a href="User_profile.php">Profile</a>
                                </div>
                                <hr />
                                <a href="logout_User.php?logout_User">Logout <i class="fa fa-power-off"></i></a>

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

                    <h3>Happy Clients</h3>
                    <p>
                    <h1>20+</h1>
                    </p>
                    <h4>Big Companies.</h4>
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
    <script src="app.js"></script>
    <script src="modal.js"></script>

</body>

</html>