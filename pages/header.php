<?php
// Program to display URL of current page.
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $link = "https";
else
    $link = "http";

// Here append the common URL characters.
$link .= "://";

// Append the host(domain name, ip) to the URL.
$link .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL
$link .= $_SERVER['REQUEST_URI'];

// Print the link
$_SESSION['current_page'] = $link;
?>
<header id="topnav" class="defaultscroll scroll-active">
    <!-- Tagline STart -->
    <!-- <div class="tagline">
            <div class="container">
                <div class="float-left">
                    <div class="phone">
                        <i class="mdi mdi-phone-classic"></i> +1 800 123 45 67
                    </div>
                    <div class="email">
                        <a href="#">
                            <i class="mdi mdi-email"></i> Support@mail.com
                        </a>
                    </div>
                </div>
                <div class="float-right">
                    <ul class="topbar-list list-unstyled d-flex" style="margin: 11px 0px;">
                        <li class="list-inline-item"><a href="javascript:void(0);"><i class="mdi mdi-account mr-2"></i>Benny Simpson</a></li>
                        <li class="list-inline-item">
                            <select id="select-lang" class="demo-default">
                                <option value="">Language</option>
                                <option value="4">English</option>
                                <option value="1">Spanish</option>
                                <option value="3">French</option>
                                <option value="5">Hindi</option>
                            </select>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div> -->
    <!-- Tagline End -->

    <!-- Menu Start -->
    <div class="container">
        <!-- Logo container-->
        <div>
            <a href="index.php" class="logo">
                <!-- <img src="images/logo-light.png" alt="" class="logo-light" height="18" /> -->
                <!-- <img src="../images/logo.jpg" alt="" class="logo-dark" height="18" /> -->
                <p style="font-size: 1.5rem; color: #2f55d4; background-color: #fff; border-radius:50px; padding-left: 25px; padding-right: 25px; margin-top: 1rem; font-weight:bold">
                    JOB SEARCH
                </p>
                <!-- <img src="./images/21 09 logo.png" alt="" style="width: 10rem; height: 4rem; border-radius: 10px;"> -->

            </a>
        </div>
        <!-- <div class="buy-button">
                <a href="" class="btn btn-primary ml-3"> Profile</a>
            </div>
            <div class="buy-button">
                <?php
                if (isset($_SESSION["loggedin"])) {
                ?>
                    <a href="<?php echo $baseurl ?>logout.php" class="btn btn-primary">Log Out</a>
                <?php
                } else {
                ?>
                    <a href="<?php echo $baseurl ?>login.php" class="btn btn-primary"> Sign In</a>
                <?php
                }
                ?>
            </div> -->


        <!--end login button-->
        <!-- End Logo container-->

        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">

                <li><a href="<?php echo $baseurl ?>">Home</a></li>

                <li>
                    <a href="about.php">About Us</a>
                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)">Jobs</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="job.php?category=Information Technology">IT & Software</a></li>
                        <li><a href="job.php?category=Digital Marketing">Digital Marketing</a></li>
                        <li><a href="job.php?category=Human Resource">Human Resource</a></li>
                        <li><a href="job.php?category=Sales">Sales</a></li>
                        <li><a href="job.php?category=BPO">BPO</a></li>
                        <li><a href="job.php?category=Manufacturing & Engineering">Manufacturing & Engineering</a></li>
                        <li><a href="job.php?category=Health Care">Health Care</a></li>
                    </ul>
                </li>
                

                <li class="has-submenu">
                    <a href="javascript:void(0)">Profile</a><span class="menu-arrow"></span>
                    <?php
                    if (isset($_SESSION["loggedin"])) {
                    ?>
                        <ul class="submenu">
                            <!-- <li><a href="profile.php">View Profile</a></li> -->
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    <?php
                    } else {
                    ?>
                        <ul class="submenu">
                            <li><a href="login.php">Login</a></li>
                        </ul>
                    <?php
                    }
                    ?>
                </li>

                <li>
                    <a href="contact.php">contact</a>
                </li>
            </ul>
            <!--end navigation menu-->
        </div>
        <!--end navigation-->
    </div>
    <!--end container-->
    <!--end end-->
</header>
<!--end header-->