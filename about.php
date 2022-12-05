<?php
    include('constant.php');
?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
<?php
    include('./pages/head.php')
?>

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
   <?php
    include('./pages/header.php')
   ?>
    <!-- Navbar End -->
    
    <!-- Start home -->
    <section class="bg-half page-next-level" style="background: url('./images/about_us_banner.png') center center;  "> 
        <div class="bg-overlay"></div> 
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4" style="font-size: 2rem">ABOUT US</h4>
                      
                    </div>
                </div>
            </div>
        </div>      
    </section>
    <!-- end home -->

    <!-- ABOUT US START -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-4">
                    <!-- <img src="./images/company.jpeg" class="img-fluid rounded shadow" alt=""> -->
                    <img src="" class="img-fluid rounded shadow" alt="">
                </div>

                <div class="col-lg-7 col-md-8">
                    <div class="about-desc ml-lg-4">
                        <h4 class="text-dark">About us</h4>

                        <p class="text-muted">Aenean eros et nisl sagittis as vestibulum at Nullam nulla eros ultricies site amet nonummy id imperdiet feugiat pede as Sed lectuse Donec mollis hendrerit Phasellus at nec sem in at pellentesque facilisis at Praesent congue erat at massa Sed sit cursus turpis vitae tortor that a Donec posuere as vulputate arcu Phasellus accumsan velit.</p>

                        <p class="text-muted">Maecenas tempus tellus eget as that condimentum rhoncus sem quam semper libero amete adipiscing sem neque sed ipsum Nam quam nunce blandit at luctus pulvinar hendrerit id lorem Maecenas nec et ante tincidunt tempus.</p>

                        <p class="text-muted">Sed consequat leo eget bibendum sodales augue at velit cursus nunc.</p>

                        <!-- <a href="javascript:void(0)" class="btn btn-primary">Apply now</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT US END -->

    <!-- COUNTER START -->
    <section class="section bg-light">
        <div class="container">
            <div class="blog-post-counter">
                <div class="row" id="counter">
                    <div class="col-md-4 col-6 border-right">
                        <div class="p-4">
                            <div class="blog-post counter-content text-center">
                                <h1 class="counter-value font-weight-light text-dark mb-2" data-count="2030">0</h1>
                                <p class="counter-name text-muted f-15 text-uppercase mb-2">Jobs</p>
                                <i class="mdi mdi-account-multiple h3 text-muted"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-6 border-right">
                        <div class="p-4">
                            <div class="blog-post counter-content text-center">
                                <h1 class="counter-value font-weight-light text-dark mb-2" data-count="3500">0</h1>
                                <p class="counter-name text-muted f-15 text-uppercase mb-2">Applications</p>
                                <i class="mdi mdi-file h3 text-muted"></i>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-md-4 col-6">
                        <div class="p-4">
                            <div class="blog-post counter-content text-center">
                                <h1 class="counter-value font-weight-light text-dark mb-2" data-count="4000">0</h1>
                                <p class="counter-name text-muted f-15 text-uppercase mb-2">Employers</p>
                                <i class="mdi mdi-account-group h3 text-muted"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- COUNTER END -->
   

    <!-- DOWNLOAD APP START -->
    <section class="section pb-0" style="background: url('') center center;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-1 order-2">
                    <div class="job-about-app-img mt-40">
                        <img src="images/app-download-img.png" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>

                <div class="col-md-6 order-md-2 order-1">
                    <div class="app-about-content">
                        <div class="app-about-desc text-white">
                            <h4 class="text-white mb-3">Get Job App For Your Mobile</h4>
                            <p class="font-weight-light text-white-50">Etiam ultricies nisi vel that augue Curabitur ullamcorper ultricies adipiscing Nam at Etiam rhoncus Maecenas tempus tellus rhoncus ultricies eget condimentum rhoncus massa Sed cursus semquam.</p>
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/apple.png" class="mt-2" height="60" alt=""></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/google.png" class="mt-2" height="60" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- DOWNLOAD APP END -->
  

    <!-- ABOUT CLIENTS Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title pb-5">What Our Clients Say's About Us</h4>
                       
                    </div>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-lg-12">
                    <div id="owl-testi" class="owl-carousel owl-theme">
                        <div class="item testi-box rounded p-4 mr-3 ml-2 mb-4 bg-light position-relative">
                            <p class="text-muted mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit qui perferendis dolorum ad aperiam eveniet explicabo voluptatem fugit minima maiores!</p>
                            <div class="clearfix">
                                <div class="testi-img float-left mr-3">
                                    <img src="https://via.placeholder.com/400X400//88929f/5a6270C/O https://placeholder.com/" height="64" alt="" class="rounded-circle shadow">
                                </div>
                                <h5 class="f-18 pt-1">Mr Uday</h5>
                                <p class="text-muted mb-0">Web Developer at xyz Company</p>
                                <div class="testi-icon">
                                    <i class="mdi mdi-format-quote-open display-2"></i>
                                </div>
                            </div>
                        </div>

                        <div class="item testi-box rounded p-4 mr-3 ml-2 bg-light position-relative">
                            <p class="text-muted mb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate rem accusamus praesentium delectus doloremque! Velit eligendi mollitia nostrum hic autem delectus omnis, nihil deserunt quia.</p>
                            <div class="clearfix">
                                <div class="testi-img float-left mr-3">
                                    <img src="https://via.placeholder.com/400X400//88929f/5a6270C/O https://placeholder.com/" height="64" alt="" class="rounded-circle shadow">
                                </div>
                                <h5 class="f-18 pt-1">Mr Manav</h5>
                                <p class="text-muted mb-0">Marketing manager at abc Company</p>
                                <div class="testi-icon">
                                    <i class="mdi mdi-format-quote-open display-2"></i>
                                </div>
                            </div>
                        </div>

                        <div class="item testi-box rounded p-4 mr-3 ml-2 bg-light position-relative">
                            <p class="text-muted mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate labore repudiandae ea minus qui veniam, unde magnam harum ducimus fuga quos amet consequatur perferendis laudantium!</p>
                            <div class="clearfix">
                                <div class="testi-img float-left mr-3">
                                    <img src="https://via.placeholder.com/400X400//88929f/5a6270C/O https://placeholder.com/" height="64" alt="" class="rounded-circle shadow">
                                </div>
                                <h5 class="f-18 pt-1">Ms. Priya Tripathi</h5>
                                <p class="text-muted mb-0">Hr at abc Company</p>
                                <div class="testi-icon">
                                    <i class="mdi mdi-format-quote-open display-2"></i>
                                </div>
                            </div>
                        </div>                        

                    </div>

                </div>
            </div>
        </div>

        
    </section>
    <!-- ABOUT CLIENTS END -->


    <!-- footer start -->
   <?php
    include('./pages/footer.php');
   ?>
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" class="back-to-top rounded text-center" id="back-to-top"> 
        <i class="mdi mdi-chevron-up d-block"> </i> 
    </a>
    <!-- Back to top -->

    <!-- javascript -->
   <?php
        include('./pages/include-js.php')
   ?>

</body>
</html>