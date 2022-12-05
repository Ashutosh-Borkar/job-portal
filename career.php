<?php
    include('constant.php');
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<!-- head -->
<head>   
<?php
    include('./pages/head.php');
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
        include('./pages/header.php');
    ?>
    <!-- Navbar End -->
    
    <!-- Start home -->
    <section class="bg-half page-next-level" style="background: url('./images/career.png') center center; "> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4" style="font-size: 2rem">Careers</h4>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

 
    <!-- JOB LIST START -->
    <section class="section mb-0 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-0 pb-0">
                        <h4 class="title pb-0">Current Openings</h4>                        
                    </div>
                </div>
            </div>

            <div class="row">                

                <div class="col-lg-12 mt-4 pt-2">

                    <div class="row">
                        <div class="col-lg-12 mt-4 pt-2">
                            <div class="job-list-box border rounded">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <!-- <div class="col-lg-2">
                                            <div class="company-logo-img">
                                                <img src="./images/" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div> -->
                                        <div class="col-lg-9 col-md-9" style="padding:2rem">
                                            <div class="job-list-desc">
                                                <h6 class="mb-2"><a href="#" class="text-dark">Web Developer</a></h6>
                                                <p class="text-muted mb-0"><i class="mdi mdi-bank mr-2"></i>Pionifty pvt Ltd</p>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item mr-3">
                                                        <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i>Ambernath</p>
                                                    </li>
    
                                                    <li class="list-inline-item">
                                                        <p class="text-muted mb-0">₹ 10000 - 15000</p>
                                                    </li>

                                                    <li class="list-inline-item">
                                                        <p class="text-muted mb-0"><i class="mdi mdi-clock-outline mr-2"></i>1 day ago</p>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3" style="padding:2rem">
                                            <div class="job-list-button-sm text-right">
                                                <span class="badge badge-success">Full-Time</span>

                                                <div class="mt-3">
                                                    <a href="#" class="btn btn-sm btn-primary">Apply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                               
                        
                        <!-- pagination -->
                        <!-- <div class="col-lg-12 mt-4 pt-2">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination job-pagination mb-0 justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                            <i class="mdi mdi-chevron-double-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">
                                            <i class="mdi mdi-chevron-double-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JOB LIST START -->



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
      include('./pages/include-js.php');
   ?>

</body>
</html>