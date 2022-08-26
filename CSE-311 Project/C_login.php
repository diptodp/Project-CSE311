<?php
session_start();

?>


<!DOCTYPE html>
<html>

<head>
    <title>Customer Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>


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
                    <a href="home.html" class="link link-theme link-arrow">Home</a>
                </li>
                <li class="nav_item">
                    <a href="pack.html" class="link link-theme link-arrow">Packages</a>
                </li>


                <li class="nav_item">
                    <a href="#contact" class="link link-theme link-arrow">Contact</a>
                </li>
                <li class="nav_item">
                    <a href="about.html" class="link link-theme link-arrow">About Us</a>
                </li>
                <li class="nav_item olduser">
                    <div class="dropdown">
                        <button class="dropbtn">Self-Care</button>
                        <div class="dropdown-content">
                            <a href="login.php">Admin</a>
                            <a href="Employee.php">Employee</a>
                            <a href="C_login.php">User Login</a>
                            <a href="Signup.html">User Signup</a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        <ion-icon name="menu-outline" class="header_toggle" id="toggle-menu"></ion-icon>
    </header>
    <!--<img class="wave" src="img/wave.png">-->
    <div class="container">
        <div class="containp">
            <div class="img">
                <img src="image/wave.png">
            </div>
            <div class="login-content">
                <form action="user_config.php" method="post" name="f1">
                    <img src="image/avatar2.svg">
                    <h2 class="title">User Login</h2>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>Username</h5>
                            <input type="text" class="input" name="userid" required>
                        </div>
                    </div>
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Password</h5>
                            <input type="password" class="input" name="pass" required>
                        </div>
                    </div>
                    <a href="#">Forgot Password?</a>
                    <input type="submit" class="btn" name="login" value="Login">
                    <a class="btn3" href="Signup.html">singup here</a>
                </form>
            </div>
            <script>
                function validation() {
                    var id = document.f1.user.value;
                    var ps = document.f1.pass.value;
                    if (id.length == "" && ps.length == "") {
                        alert("User Name and Password fields are empty");
                        return false;
                    }
                    else {
                        if (id.length == "") {
                            alert("User Name is empty");
                            return false;
                        }
                        if (ps.length == "") {
                            alert("Password field is empty");
                            return false;
                        }
                    }
                }  
            </script>
            <script type="text/javascript" src="main.js"></script>
        </div>

        <footer id="contact">
            <div class="rowf">
                <div class="colf">
                    <img src="image/logo4.png" alt="" class="logof" />
                    <h2>DATANET</h2>
                    <p>
                        Datanet Internet started its operation in the year 2022 with the commitment of quality internet
                        service at an
                        affordable price. At the time of commencement, Datanet Internet started with broadband service
                        with
                        the state
                        of the art technology.
                    </p>
                </div>
                <div class="colf1">
                    <h3>
                        Office
                        <div class="underline"><span></span></div>
                    </h3>
                    <p>ROAD-04,HOUSE-11</p>
                    <p>Block-B,Basundhara RA,</p>
                    <p>Dhaka, Bangladesh</p>
                    <p class="emailid">datanetisp@gmail.com</p>
                    <h4>+8801628953063</h4>
                </div>
                <div class="colf2">
                    <h3>
                        Links
                        <div class="underline"><span></span></div>
                    </h3>
                    <ul>
                        <li><a href="home.html">Home</a></li>

                        <li><a href="pack.html">Packages</a></li>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="">Contacts</a></li>
                    </ul>
                </div>
                <div class="colf3">
                    <h3>
                        Get In Touch
                        <div class="underline"><span></span></div>
                    </h3>
                    <form class="formf">
                        <i class="far fa-envelope"></i>
                        <input type="email" placeholder="Enter your email id" required />
                        <input type="text" placeholder="Enter your message" required />
                        <button type="submit"><i class="fas fa-arrow-right"> </i></button>
                    </form>
                    <div class="social-icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-whatsapp"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
            </div>
            <hr />
            <p class="copyright">DATANET INTERNET &copy;-2022 - All rights Reserved</p>
        </footer>
    </div>

</body>

</html>