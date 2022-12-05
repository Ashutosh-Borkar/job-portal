<?php
    include('constant.php');

    //Display data from database
    $jobid = $_GET['jobid'];
    $sql = "SELECT * FROM `create_job` WHERE `id`='$jobid'";
    $result = $conn->query($sql);
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
    <section class="bg-half page-next-level" style="background: url('./images/job_details.png') center center; ">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4" style="font-size: 2rem">JOB DETAILS</h4>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- JOB DETAILS START -->
    <section class="section">
        <div class="container">
            <div class="row">
                    <?php
                        if($_SESSION["message"] != null)
                        {
                    ?>
                        <div class="alert alert-primary" role="alert" style="width: 50%; text-align: center;">
                    <?php
                            echo $_SESSION["message"];
                            $_SESSION["message"] = null;
                    ?>
                        </div>
                    <?php
                        }
                    ?>
                <?php 
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc())
                        {                    
                    
                ?>
            </div>

            <div class="row">

           
                <div class="col-lg-8 col-md-7">

                    <div class="job-detail border rounded p-4">
                        <div class="job-detail-content">
                            <!-- <img src="images/featured-job/img-4.png" alt="" class="img-fluid float-left mr-md-3 mr-2 mx-auto d-block"> -->
                            <div class="job-detail-com-desc overflow-hidden d-block">
                                <h4 class="mb-2"><a href="#" class="text-dark"><?php echo $row['job_title']?></a></h4>
                                <p class="text-muted mb-0"><i class="mdi mdi-link-variant mr-2"></i><?php echo $row['company_name'] ?></p>
                                <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i><?php echo $row['location']?></p>
                            </div>
                        </div>                        
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-4">Job Description :</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">
                                    <p class="text-muted mb-3">
                                        <?php echo $row['job_description']?>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-4">Qualification :</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2"><?php echo $row['educational_requirements']?></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-4">Skills :</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">
                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">
                                            <?php echo $row['skills']?>
                                        </p>
                                    </div>
                                    <!-- <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">Javascript</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">PHP</p>
                                    </div> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 mt-4 mt-sm-0">
                    <div class="job-detail border rounded p-4">
                        <h5 class="text-muted text-center pb-2"><i class="mdi mdi-map-marker mr-2"></i>Location</h5>

                        <div class="job-detail-location pt-4 border-top">
                            <div class="job-details-desc-item">
                                <div class="float-left mr-2">
                                    <i class="mdi mdi-bank text-muted"></i>
                                </div>
                                <p class="text-muted mb-2">: <?php echo $row['company_name']?></p>
                            </div>

                            <!-- <div class="job-details-desc-item">
                                <div class="float-left mr-2">
                                    <i class="mdi mdi-web text-muted"></i>
                                </div>
                                <p class="text-muted mb-2">: https://www.Pionifty.com</p>
                            </div> -->

                            <!-- <div class="job-details-desc-item">
                                <div class="float-left mr-2">
                                    <i class="mdi mdi-cellphone-iphone text-muted"></i>
                                </div>
                                <p class="text-muted mb-2">: 0987654321</p>
                            </div> -->

                            <div class="job-details-desc-item">
                                <div class="float-left mr-2">
                                    <i class="mdi mdi-currency-inr text-muted"></i>
                                </div>
                                <p class="text-muted mb-2">: <?php echo $row['salary']?></p>
                            </div>

                            <div class="job-details-desc-item">
                                <div class="float-left mr-2">
                                    <i class="mdi mdi-calendar text-muted"></i>
                                </div>
                                <p class="text-muted mb-2">: <?php echo $row['work_experience']?></p>
                            </div>

                            <!-- <div class="job-details-desc-item">
                                <div class="float-left mr-2">
                                    <i class="mdi mdi-clock-outline text-muted"></i>
                                </div>
                                <?php
                                    $created_date = substr($row['created_at'],0,10);
                                    $current_date = date("Y/m/d");

                                    $date1=date_create($created_date);
                                    $date2=date_create($current_date);
                                    $diff=date_diff($date1,$date2);

                                ?>
                                <p class="text-muted mb-2">: 1 day ago</p>
                            </div> -->


                        </div>
                    </div>

                    

                    <div class="job-detail border rounded mt-4">
                        <a href="controller.php?jobid=<?php echo $row['id']?>" class="btn btn-primary btn-block">Apply For Job</a>
                    </div>
                </div>
            </div>
            
            <?php
            }
        } 
            ?>
        

        </div>
    </section>
    <!-- JOB DETAILS END -->


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