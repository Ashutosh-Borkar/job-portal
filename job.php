<?php
include('constant.php');

//for pagination
if (isset($_GET['next'])) {
    $next = $_GET['next'];
} else {
    $next = 0;
}

//For search form
if (isset($_GET['Search'])) {
    $Employmenttype = $_GET['Employmenttype'];
    $Location = $_GET['Location'];
    $Categories = $_GET['Categories'];

    $sql = "SELECT * FROM `create_job` WHERE `employment_type` = '$Employmenttype' AND `location`='$Location' AND `industry_type`='$Categories' AND `deleted_at` is null LIMIT $next,12";
    $result = $conn->query($sql);
} else //For job Dropdown menu 
{
    $category = $_GET['category'];
    $sql = "SELECT * FROM `create_job` WHERE `industry_type`='$category' AND `deleted_at` is null LIMIT $next,12";
    // echo $sql;
    $result = $conn->query($sql);
}
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
    <section class="bg-half page-next-level" style="background: url('./images/job_banner_1.png') center center;  ">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4" style="font-size: 2rem">JOBS</h4>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->


    <section class="section">
        <!-- search-FORM START -->
        <div class="container">
            <div class="home-form-position">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="home-registration-form bg-white job-list-grid-reg-form p-4 mb-3">
                            <form class="registration-form" method="GET" action="job.php">
                                <div class="row">
                                    <!-- <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-briefcase"></i>
                                                    <input type="text" id="exampleInputName1" class="form-control rounded registration-input-box" placeholder="Job keybords...">
                                                </div>
                                            </div> -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="registration-form-box">
                                            <i class="fa fa-briefcase"></i>
                                            <select id="select-country" class="demo-default" name="Employmenttype" required>
                                                <option value="" selected>Employment type</option>
                                                <option value="Full Time, Permanent">Full Time, Permanent</option>
                                                <option value="Freelancing">Freelancing</option>
                                                <option value="Part Time">Part Time</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="registration-form-box">
                                            <i class="fa fa-location-arrow"></i>
                                            <select id="select-country" class="demo-default" name="Location" required>
                                                <option value="" selected>Location</option>
                                                <option value="Mumbai">Mumbai</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Pune">Pune</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="registration-form-box">
                                            <i class="fa fa-list-alt"></i>
                                            <select id="select-category" class="demo-default" name="Categories" required>
                                                <option value="" selected>Categories...</option>
                                                <option value="Accounting">Accounting</option>
                                                <option value="Information Technology">IT & Software</option>
                                                <option value="Digital Marketing">Digital Marketing</option>
                                                <option value="Human Resource">Human Resource</option>
                                                <option value="Sales">Sales</option>
                                                <option value="BPO">BPO</option>
                                                <option value="Manufacturing & Engineering">Manufacturing & Engineering</option>
                                                <option value="Health Care">Health Care</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="registration-form-box">
                                            <input type="submit" id="submit" name="Search" class="submitBnt btn btn-primary btn-block" value="Search">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- search-FORM END -->


        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="show-results mt-4">
                        <div class="float-left">
                            <h5 class="text-dark mb-0 pt-2">
                                Showing (
                                <?php
                                echo $result->num_rows;
                                ?>
                                Jobs & Vacancies)
                            </h5>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <?php
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                        ?>
                                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                                    <div class="list-grid-item rounded">
                                        <div class="grid-item-content p-3">
                                            <ul class="list-inline mb-0" style="display: flex; flex-wrap: wrap; align-content: stretch; justify-content: flex-end;">
                                                <li class="list-inline-item f-15"><span class="badge badge-success"><?php echo $row['employment_type'] ?></span></li>
                                            </ul>
                                            <!-- <div class="grid-list-img mt-3">
                                        <img src="" alt="" class="img-fluid d-block">
                                    </div> -->
                                            <div class="grid-list-desc mt-3">
                                                <h5 class="mb-1"><a href="#" class="text-dark"><?php echo $row['job_title'] ?></a></h5>
                                                <p class="text-muted f-14 mb-1"><?php echo $row['location'] ?></p>
                                                <p class="text-muted mb-1">₹<?php echo $row['salary'] ?></p>
                                                <p class="text-muted mb-1"><?php echo $row['work_experience'] ?> Exp.</p>
                                            </div>
                                        </div>

                                        <div class="apply-button p-3 border-top">
                                            <a href="job-details.php?jobid=<?php echo $row['id'] ?>" class="btn btn-primary btn-sm">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                        } else {
                            ?>
                            <div class="col-lg-12 col-md-6 mt-4 pt-2">
                                <h5 class="mb-1">
                                    <a href="#" class="text-dark">No Search Result were Found
                                        <?php
                                        if (isset($category)) {
                                            echo "for" . " " . $category;
                                        }
                                        ?>
                                    </a>
                                </h5>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination job-pagination mb-0 justify-content-center">
                            <li class="page-item disabled">
                                <!-- <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                    <i class="mdi mdi-chevron-double-left f-15"></i>
                                </a> -->
                            </li>
                            <li class="page-item <?php if ($next == 0) echo "active"; ?>"><a class="page-link" href="<?php echo $_SESSION['current_page'] . "&next=0" ?>">1</a></li>
                            <li class="page-item <?php if ($next == 13) echo "active"; ?>"><a class="page-link" href="<?php echo $_SESSION['current_page'] . "&next=13" ?>">2</a></li>
                            <li class="page-item <?php if ($next == 26) echo "active"; ?>"><a class="page-link" href="<?php echo $_SESSION['current_page'] . "&next=26" ?>">3</a></li>
                            <li class="page-item <?php if ($next == 39) echo "active"; ?>"><a class="page-link" href="<?php echo $_SESSION['current_page'] . "&next=39" ?>">4</a></li>
                            <li class="page-item">
                                <!-- <a class="page-link" href="#">
                                    <i class="mdi mdi-chevron-double-right f-15"></i>
                                </a> -->
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </section>

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