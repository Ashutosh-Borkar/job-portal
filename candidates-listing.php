<?php
    include('constant.php');
?>

<!DOCTYPE html>
<html lang="en" class="no-js">

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
    include('./pages/header.php')
   ?>
    <!-- Navbar End -->
    
    <!-- Start home -->
    <section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>        
    </section>
    <div class="container">
        <div class="home-form-position">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="home-registration-form job-list-reg-form bg-light shadow p-4">
                        <form class="registration-form">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="registration-form-box">
                                        <i class="fa fa-briefcase"></i>
                                        <input type="text" id="exampleInputName1" class="form-control rounded registration-input-box" placeholder="Job keybords...">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="registration-form-box">
                                        <i class="fa fa-location-arrow"></i>
                                        <select id="select-country" class="demo-default">
                                        <option value="">Location</option>
                                                        <option value="MU">Mumbai</option>
                                                        <option value="DE">Delhi</option>
                                                        <option value="PU">Pune</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="registration-form-box">
                                        <i class="fa fa-list-alt"></i>
                                        <select id="select-category" class="demo-default">
                                            <option value="">Categories...</option>
                                            <option value="4">Accounting</option>
                                            <option value="1">IT & Software</option>
                                            <option value="3">Marketing</option>
                                            <option value="5">Banking</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="registration-form-box">
                                        <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="Submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end home -->

    

    <!-- CANDIDATES LISTING START -->
    <section class="section pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="show-results">
                        <div class="float-left">
                            <h5 class="text-dark mb-0 pt-2">Showing  Results : 1-6 of 540</h5>
                        </div>
                       
                    </div>
                </div>
            </div>

            <!-- candidates list -->
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="left-sidebar">
                        <div class="accordion" id="accordionExample">
                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapseOne" class="job-list" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="card-header" id="headingOne">
                                        <h6 class="mb-0 text-dark">Job Type</h6>
                                    </div>
                                </a>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">   
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input all-select" id="customCheckAll">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheckAll">All Type</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input all-select" id="customCheck22">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck22">Freelancer</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input all-select" id="customCheck23">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck23">Full Time</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input all-select" id="customCheck3">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck3">Part Time</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input all-select" id="customCheck4">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck4">Internship</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapsetwo" class="job-list" aria-expanded="true" aria-controls="collapsetwo">
                                    <div class="card-header" id="headingtwo">
                                        <h6 class="mb-0 text-dark">Designation</h6>
                                    </div>
                                </a>
                                <div id="collapsetwo" class="collapse show" aria-labelledby="headingtwo">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck5">Project Manager</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck6">Web Designer</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck7">Banking</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck8">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck8">Digital & Creative</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck9">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck9">IT Contractor</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck10">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck10">Java Developer</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck11">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck11">Civil Engineert</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck12">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck12">SEO</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapsethree" class="job-list" aria-expanded="true" aria-controls="collapsethree">
                                    <div class="card-header" id="headingthree">
                                        <h6 class="mb-0 text-dark">Skills</h6>
                                    </div>
                                </a>
                                <div id="collapsethree" class="collapse show" aria-labelledby="headingthree">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck13">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck13">HTML</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck14">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck14">CSS</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck15">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck15">JavaScript</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck16">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck16">PHP</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck17">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck17">Wordpress</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck18">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck18">Photoshop</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapsefour" class="job-list" aria-expanded="true" aria-controls="collapsefour">
                                    <div class="card-header" id="headingfour">
                                        <h6 class="mb-0 text-dark">Experince</h6>
                                    </div>
                                </a>
                                <div id="collapsefour" class="collapse show" aria-labelledby="headingfour">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio1">1Year to 2Year</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio2">2Year to 3Year</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio3">3Year to 4Year</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio4">4Year to 5Year</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio5">5Year +</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- collapse one end -->

                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapsefive" class="job-list" aria-expanded="true" aria-controls="collapsefive">
                                    <div class="card-header" id="headingfive">
                                        <h6 class="mb-0 text-dark">Gender</h6>
                                    </div>
                                </a>
                                <div id="collapsefive" class="collapse show" aria-labelledby="headingfive">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio6" name="customRadio1" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio6">Male</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio7" name="customRadio1" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio7">Female</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio8" name="customRadio1" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio8">Others</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- collapse one end -->

                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapsesix" class="job-list collapsed" aria-expanded="false" aria-controls="collapsesix">
                                    <div class="card-header" id="headingsix">
                                        <h6 class="mb-0 text-dark">Offerd Salary</h6>
                                    </div>
                                </a>
                                <div id="collapsesix" class="collapse" aria-labelledby="headingsix">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio9" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio9">???10000 - ???15000</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio10" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio10">???15000 - ???25000</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio11" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio11">???25000 - ???35000</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio12" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio12">???35000 - ???45000</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio13" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio13">???45000 - ???55000</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- collapse one end -->

                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapsesevan" class="job-list collapsed" aria-expanded="false" aria-controls="collapsesevan">
                                    <div class="card-header border-bottom-0" id="headingsevan">
                                        <h6 class="mb-0 text-dark">Qualification</h6>
                                    </div>
                                </a>
                                <div id="collapsesevan" class="collapse" aria-labelledby="headingsevan">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck19">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck19">Higher Secondary</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck20">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck20">Bachelor Degree</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck21">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck21">Master Degree</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8">
                    <div class="candidates-listing-item">

                        <div class="border mt-4 rounded p-3">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="float-left mr-4">
                                        <img src="https://via.placeholder.com/400X400//88929f/5a6270C/O https://placeholder.com/" alt="" class="d-block rounded" height="90">
                                    </div>
                                    <div class="candidates-list-desc overflow-hidden job-single-meta  pt-2">
                                        <h5 class="mb-2"><a href="#" class="text-dark">Uday Rao</a></h5>
                                        <ul class="list-unstyled">
                                            <li class="text-muted"><i class="mdi mdi-account mr-1"></i>Web Developer</li>
                                            <li class="text-muted"><a href="" class="text-muted"><i class="mdi mdi-map-marker mr-1"></i>Ambernath</a></li>
                                            <li class="text-muted"><i class="fa-sharp fa-solid fa-indian-rupee-sign mr-1"></i>??? 50,000 - 70,000</li>
                                        </ul>
                                        <p class="text-muted mt-1 mb-0">Skills : HTML, CSS, JavaScript, PHP, jQueary.</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="candidates-list-fav-btn text-right">
                                        
                                        <div class="candidates-listing-btn mt-4">
                                            <a href="candidates-profile.php" class="btn btn-primary-outline btn-sm">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border mt-4 rounded p-3">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="float-left mr-4">
                                        <img src="https://via.placeholder.com/400X400//88929f/5a6270C/O https://placeholder.com/" alt="" class="d-block rounded" height="90">
                                    </div>
                                    <div class="candidates-list-desc overflow-hidden job-single-meta  pt-2">
                                        <h5 class="mb-2"><a href="#" class="text-dark">Uday Rao</a></h5>
                                        <ul class="list-unstyled">
                                            <li class="text-muted"><i class="mdi mdi-account mr-1"></i>Web Developer</li>
                                            <li class="text-muted"><a href="" class="text-muted"><i class="mdi mdi-map-marker mr-1"></i>Ambernath</a></li>
                                            <li class="text-muted"><i class="fa-sharp fa-solid fa-indian-rupee-sign mr-1"></i>??? 50,000 - 70,000</li>
                                        </ul>
                                        <p class="text-muted mt-1 mb-0">Skills : HTML, CSS, JavaScript, PHP, jQueary.</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="candidates-list-fav-btn text-right">
                                        
                                        <div class="candidates-listing-btn mt-4">
                                            <a href="candidates-profile.php" class="btn btn-primary-outline btn-sm">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border mt-4 rounded p-3">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="float-left mr-4">
                                        <img src="https://via.placeholder.com/400X400//88929f/5a6270C/O https://placeholder.com/" alt="" class="d-block rounded" height="90">
                                    </div>
                                    <div class="candidates-list-desc overflow-hidden job-single-meta  pt-2">
                                        <h5 class="mb-2"><a href="#" class="text-dark">Uday Rao</a></h5>
                                        <ul class="list-unstyled">
                                            <li class="text-muted"><i class="mdi mdi-account mr-1"></i>Web Developer</li>
                                            <li class="text-muted"><a href="" class="text-muted"><i class="mdi mdi-map-marker mr-1"></i>Ambernath</a></li>
                                            <li class="text-muted"><i class="fa-sharp fa-solid fa-indian-rupee-sign mr-1"></i>??? 50,000 - 70,000</li>
                                        </ul>
                                        <p class="text-muted mt-1 mb-0">Skills : HTML, CSS, JavaScript, PHP, jQueary.</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="candidates-list-fav-btn text-right">
                                        
                                        <div class="candidates-listing-btn mt-4">
                                            <a href="candidates-profile.php" class="btn btn-primary-outline btn-sm">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       
                    </div>

                    <!-- <nav aria-label="Page navigation example">
                        <ul class="pagination job-pagination justify-content-center mb-0 mt-4 pt-2">
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
                    </nav> -->
                </div>
            </div>
        </div>
    </section>
    <!-- CANDIDATES LISTING END -->


    <!-- footer start -->
    <?php
        include('./pages/footer.php')
    ?>
    <!-- footer end -->
    
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