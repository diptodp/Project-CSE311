<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="pay.css">

</head>
<body>
    
  

<div class="container">
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
                <?php
                            echo '<button class="favorite styled"><a style="color: white" href="userpro.php ? upid='.$_SESSION['user_name'].'" class="link link-theme link-arrow">Edit Profile</a></button>'
                            ?>
            </li>

            <li class="nav_item">
                <a class="link link-theme link-arrow">
                    
                    <button class="favorite styled" input type="button"class="text-light" onclick="history.back()">Go Back!</button>
                    </button></a>
            </li>


            <li class="nav_item olduser">
                <div class="dropdown">
                    <button class="dropbtn"><strong>
                        <?php
                        echo "Hi, ".$_SESSION['user_name'];
                        ?>
                        </strong>
                    </button>
                    <div class="dropdown-content">
                        <div class="dropdown-content2">
                            <a href="u_dashboard.php">Dashboard</a>
                        </div>
                        <hr />
                        <a href="C_login.php">Logout <i class="fa fa-power-off"></i></a>

                    </div>
                </div>
            </li>
        </ul>
    </nav>

    <ion-icon name="menu-outline" class="header_toggle" id="toggle-menu"></ion-icon>

</header>

    <form action="connection_pay.php"method="post">

        <div class="row">

            <div class="col">

                <h3 class="title">billing information</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="john deo" name="fname">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com" name="mail">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="room - street - locality" name="add">
                </div>
                <div class="inputBox">
                    <span>User ID :</span>
                    <input type="text" placeholder="xyz123" name="uid">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Your Package :</span>
                        <!-- <input type="text" placeholder="india"> -->
                        <label>
                        <select name="pack">
							<option>Choose Package</option>
							<option>5 Mbps - 799 TK</option>
							<option>10 Mbps - 999 TK</option>
							<option>15 Mbps - 1499 TK</option>
							<option>20 Mbps - 1999 TK</option>
							<option>40 Mbps - 3999 TK</option>
							<option>20 MbpsF - 2499 TK</option>
							<option>100 Mbps - 9499 TK</option>
							<option>12 MbpsE - 499 TK</option>
						</select>
                    </label>
                    </div>
                    <div class="inputBox">
                        <span>Select Month :</span>
                        <!-- <input type="text" placeholder="123 456"> -->
                        <label>
                            <select name="bmonth">
                                <option>Month</option>
                                <option>January</option>
                                <option>February</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option>September</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option>
                                
                            </select>
                        </label>
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="image/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="mr. john deo" name="cname">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444" name="cnum">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="january" name="emonth">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2022" name="eyear">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="123" name="cv">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="PAY BILL" class="submit-btn" name="payb">

    </form>

</div>    
    
</body>
</html>