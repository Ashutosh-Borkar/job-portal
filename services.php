<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jobya - Responsive Job Board HTML Template</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Themesdesign" />

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />

    <link rel="stylesheet" type="text/css" href="css/fontawesome.css" />

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="css/selectize.css" />

    <link rel="stylesheet" type="text/css" href="css/nice-select.css" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />

</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <!-- Navigation Bar-->
    <header id="topnav" class="defaultscroll scroll-active">
        <!-- Tagline STart -->
        <div class="tagline">
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
        </div>
        <!-- Tagline End -->

        <!-- Menu Start -->
        <div class="container">
            <!-- Logo container-->
            <div>
                <a href="index.html" class="logo">
                    <img src="images/logo-light.png" alt="" class="logo-light" height="18" />
                    <img src="images/logo-dark.png" alt="" class="logo-dark" height="18" />
                </a>
            </div>                 
            <div class="buy-button">
                <a href="post-a-job.html" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i> Post a Job</a>
            </div><!--end login button-->
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
                    <li><a href="index.html">Home</a></li>
                    <li class="has-submenu">
                        <a href="javascript:void(0)">Jobs</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="job-list.html">Job List</a></li>
                            <li><a href="job-grid.html">Job Grid</a></li>
                            <li><a href="job-details.html">Job Details</a></li>
                            <li><a href="job-details-2.html">Job Details-2</a></li>
                        </ul>
                    </li>
    
                    <li class="has-submenu">
                        <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="about.html">About us</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="faq.html">Faqs</a></li>
                            <li><a href="pricing.html">Pricing plans</a></li>
                            <li class="has-submenu"><a href="javascript:void(0)"> Candidates</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="candidates-listing.html">Candidates Listing</a></li>
                                    <li><a href="candidates-profile.html">Candidates Profile</a></li>
                                    <li><a href="create-resume.html">Create Resume</a></li>
                                </ul>  
                            </li>
                            <li class="has-submenu"><a href="javascript:void(0)"> Blog</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="blog-grid.html">Blogs</a></li>
                                    <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>  
                            </li>
                            <li class="has-submenu"><a href="javascript:void(0)"> Employers</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="employers-list.html">Employers List</a></li>
                                    <li><a href="company-detail.html">Company Detail</a></li>
                                </ul>  
                            </li>
                            <li class="has-submenu"><a href="javascript:void(0)"> User Pages</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="signup.html">Signup</a></li>
                                    <li><a href="recovery_passward.html">Forgot Password</a></li>
                                </ul>  
                            </li>
                            <li><a href="components.html"> Components</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">contact</a>
                    </li>
                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
        <!--end end-->
    </header><!--end header-->
    <!-- Navbar End -->
    
    <!-- Start home -->
    <section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Services</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="index.html" class="text-uppercase font-weight-bold">Home</a></li>
                            <li><a href="#" class="text-uppercase font-weight-bold">Pages</a></li> 
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Services</span> 
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- SERVICE START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="services-box">
                        <div class="service-icon mb-3">
                            <i class="mdi mdi-account-multiple h1"></i>
                        </div>
                        <div class="services-desc">
                            <h5 class="mb-2"><a href="#" class="text-dark">Awesome Support</a></h5>
                            <p class="text-muted mb-0">Aenean leo ligula porttitor eu consequat vitae eleifend enim liquam lorem ante dapibus in viverra feugia hasellus viverra at metus.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="services-box">
                        <div class="service-icon mb-3">
                            <i class="mdi mdi-image-filter-tilt-shift h1"></i>
                        </div>
                        <div class="services-desc">
                            <h5 class="mb-2"><a href="#" class="text-dark">Goal Business</a></h5>
                            <p class="text-muted mb-0">Integer ante arcu accumsan a consectetuer posuere ut mauris praesent adipiscing phasellus ullamcorper ipsum rutrum nunc.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="services-box">
                        <div class="service-icon mb-3">
                            <i class="mdi mdi-ungroup h1"></i>
                        </div>
                        <div class="services-desc">
                            <h5 class="mb-2"><a href="#" class="text-dark">Branding Identity</a></h5>
                            <p class="text-muted mb-0">Donec pede justo fringilla vel aliquet at vulputate eget arcu In enim justo rhoncus ut imperdiet a venenatis vitae justo.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="services-box">
                        <div class="service-icon mb-3">
                            <i class="mdi mdi-invert-colors h1"></i>
                        </div>
                        <div class="services-desc">
                            <h5 class="mb-2"><a href="#" class="text-dark">Solutions Business</a></h5>
                            <p class="text-muted mb-0">Vestibulum rutrum nec elementum vehicula eros quam gravida nisl id fringilla neque ante vel mi Morbi mollis tellus ac sapien.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="services-box">
                        <div class="service-icon mb-3">
                            <i class="mdi mdi-monitor h1"></i>
                        </div>
                        <div class="services-desc">
                            <h5 class="mb-2"><a href="#" class="text-dark">Digital Design</a></h5>
                            <p class="text-muted mb-0">Ut tincidunt tincidunt Etiam feugiat lorem non metus estibulum dapi nunc augue Curabitur vestibulum aliquam Praesent egestas.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="services-box">
                        <div class="service-icon mb-3">
                            <i class="mdi mdi-image-filter-center-focus h1"></i>
                        </div>
                        <div class="services-desc">
                            <h5 class="mb-2"><a href="#" class="text-dark">Dynamic Growth</a></h5>
                            <p class="text-muted mb-0">Donec pede justo fringilla vel aliquet at vulputate eget arcu In enim justo rhoncus ut imperdiet a venenatis vitae justo.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <a href="javascript:void(0)" class="btn btn-primary">See More <i class="mdi mdi-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICE END -->

    <!-- SERVICE INFORMATION START -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">Service Information</h4>
                        <p class="text-muted para-desc mx-auto mb-1">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6 mt-4 pt-2">
                            <a href="">
                                <div class="service-info-img position-relative d-block overflow-hidden">
                                    <img src="https://via.placeholder.com/400X240//88929f/5a6270C/O https://placeholder.com/" alt="" class="img-fluid mx-auto d-block rounded">
                                    <div class="service-overlay">
                                        <div class="service-info text-center">
                                            <h6 class="mb-0 text-white shadow title">Clean Design</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 mt-4 pt-2">
                            <a href="">
                                <div class="service-info-img position-relative d-block overflow-hidden">
                                    <img src="https://via.placeholder.com/400X240//88929f/5a6270C/O https://placeholder.com/" alt="" class="img-fluid mx-auto d-block rounded">
                                    <div class="service-overlay">
                                        <div class="service-info text-center">
                                            <h6 class="mb-0 text-white shadow title">Clean Design</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mt-4 pt-2">
                            <a href="">
                                <div class="service-info-img position-relative d-block overflow-hidden">
                                    <img src="https://via.placeholder.com/400X240//88929f/5a6270C/O https://placeholder.com/" alt="" class="img-fluid mx-auto d-block rounded">
                                    <div class="service-overlay">
                                        <div class="service-info text-center">
                                            <h6 class="mb-0 text-white shadow title">Clean Design</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 mt-4 pt-2">
                            <a href="">
                                <div class="service-info-img position-relative d-block overflow-hidden">
                                    <img src="https://via.placeholder.com/400X240//88929f/5a6270C/O https://placeholder.com/" alt="" class="img-fluid mx-auto d-block rounded">
                                    <div class="service-overlay">
                                        <div class="service-info text-center">
                                            <h6 class="mb-0 text-white shadow title">Clean Design</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 pt-2">
                    <p class="text-muted mb-2">Felis quis tortor malesuada pretium pellentesque auctor neque nec urna at sapien ipsum porta, auctor quis euismod aenean viverra rhoncus pede Pellentesque habitant morbi tristique.</p>
                    <div class="job-details-desc-item">
                        <div class="float-left mr-2">
                            <i class="mdi mdi-chevron-right text-muted"></i>
                        </div>
                        <p class="text-muted mb-1">Aenean tellus metus bibendum sed posuere nunc.</p>
                    </div>

                    <div class="job-details-desc-item">
                        <div class="float-left mr-2">
                            <i class="mdi mdi-chevron-right text-muted"></i>
                        </div>
                        <p class="text-muted mb-1">Integer ante arcu consectetuer eget posuere ut mauris.</p>
                    </div>

                    <div class="job-details-desc-item">
                        <div class="float-left mr-2">
                            <i class="mdi mdi-chevron-right text-muted"></i>
                        </div>
                        <p class="text-muted mb-1">Donec mollis nec justo pellentesque facilisis.</p>
                    </div>

                    <div class="job-details-desc-item">
                        <div class="float-left mr-2">
                            <i class="mdi mdi-chevron-right text-muted"></i>
                        </div>
                        <p class="text-muted mb-1">Curabitur aliquam Praesent egestas neque eu enim.</p>
                    </div>

                    <div class="job-details-desc-item">
                        <div class="float-left mr-2">
                            <i class="mdi mdi-chevron-right text-muted"></i>
                        </div>
                        <p class="text-muted mb-0"> Praesent massa at ligula laoreet iaculis.</p>
                    </div>
                    <div class="mt-4">
                        <a href="#" class="btn btn-primary-outline">Read More <i class="mdi mdi-chevron-double-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICE INFORMATION END -->

    <!-- subscribe start -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="float-left position-relative notification-icon mr-2">
                        <i class="mdi mdi-bell-outline text-primary"></i>
                        <span class="badge badge-pill badge-danger">1</span>
                    </div>
                    <h5 class="mt-2 mb-0">Your Job Notification</h5>
                </div>
                <div class="col-lg-8 col-md-7 mt-4 mt-sm-0">
                    <form>
                        <div class="form-group mb-0">
                            <div class="input-group mb-0">
                                <input name="email" id="email" type="email" class="form-control" placeholder="Your email :" required="" aria-describedby="newssubscribebtn">
                                <div class="input-group-append">
                                    <button class="btn btn-primary submitBnt" type="submit" id="newssubscribebtn">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe end -->

    <!-- footer start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <a href="javascript:void(0)"><img src="images/logo-light.png" height="20" alt=""></a>
                    <p class="mt-4">At vero eos et accusamus et iusto odio dignissim os ducimus qui blanditiis praesentium</p>
                    <ul class="social-icon social list-inline mb-0">
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-google"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title">Company</p>
                    <ul class="list-unstyled footer-list">
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> About Us</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Media & Press</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Career</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Blog</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Pricing</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Marketing</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> CEOs </a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Agencies</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Our Apps</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title">Resources</p>
                    <ul class="list-unstyled footer-list">
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Support</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Privacy Policy</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Terms</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Accounting </a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Billing</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> F.A.Q.</a></li>
                    </ul>
                </div>
            
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title f-17">Business Hours</p>
                    <ul class="list-unstyled text-foot mt-4 mb-0">
                        <li>Monday - Friday : 9:00 to 17:00</li>
                        <li class="mt-2">Saturday : 10:00 to 15:00</li>
                        <li class="mt-2">Sunday : Day Off (Holiday)</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <hr>
    <footer class="footer footer-bar">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="">
                        <p class="mb-0">© 2019 Jobya. Design with <i class="mdi mdi-heart text-danger"></i> by Themesdesign.</p>
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </footer><!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" class="back-to-top rounded text-center" id="back-to-top"> 
        <i class="mdi mdi-chevron-up d-block"> </i> 
    </a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/plugins.js"></script>

    <!-- selectize js -->
    <script src="js/selectize.min.js"></script>

    <script src="js/jquery.nice-select.min.js"></script>

    <script src="js/app.js"></script>

</body>
</html>