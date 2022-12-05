<?php
include('constant.php');
if(isset($_SESSION["loggedin"]))
{
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

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

    <div class="back-to-home rounded d-none d-sm-block">
        <a href="index.php" class="text-white rounded d-inline-block text-center"><i class="mdi mdi-home"></i></a>
    </div>

    <!-- Hero Start -->
    <section class="vh-100" style="background: url('') center center;">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="login_page bg-white shadow rounded p-4">
                                <?php
                                if ($_SESSION["message"] !="null") 
                                {
                                ?>
                                    <div class="alert alert-primary" role="alert">
                                        <?php
                                            echo $_SESSION["message"];
                                            $_SESSION["message"] = null;
                                        ?>
                                    </div>
                                <?php
                                }
                                ?>

                                <div class="text-center">
                                    <h4 class="mb-4">Signup</h4>
                                </div>
                                <form class="login-form" method="post" action="controller.php">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>First name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="First Name" name="FirstName" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>Last name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Last Name" name="LastName" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Your Email <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" placeholder="Email" name="Email" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>City <span class="text-danger">*</span></label>
                                                <select class="form-control" name="City" id="" style="width: 14rem; border-radius: 9px; border-color: #dbdbdb; height: 41px;" required="">
                                                    <option value="" selected>City</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Mumbai">Mumbai</option>
                                                    <option value="Pune">Pune</option>
                                                    <option value="Bangalore">Bangalore</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>Contact<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Contact" name="Contact" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>Education<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Education" name="Education" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>Experience<span class="text-danger">*</span></label>
                                                <select class="form-control" name="Experience" id="" style="width: 14rem; border-radius: 9px; border-color: #dbdbdb; height: 41px;" required="">
                                                    <option value="" selected>Experience</option>
                                                    <option value="1 Year">1 Year</option>
                                                    <option value="2 Year">2 Year</option>
                                                    <option value="3 Year">3 Year</option>
                                                    <option value="4 Year">5 Year +</option>
                                                    <option value="Fresher">Fresher</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Skills<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="HTML/CSS/JS etc." name="Skills" required="">
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Password <span class="text-danger">*</span></label>
                                                <input type="password" class="form-control" placeholder="Password" name="Password" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Confirm Password <span class="text-danger">*</span></label>
                                                <input type="password" class="form-control" placeholder="Confirm Password" name="ConfirmPassword" required="">
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="custom-control m-0 custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                                    <label class="custom-control-label" for="customCheck1">I Accept <a href="#" class="text-primary">Terms And Condition</a> <span class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <!-- <button class="btn btn-primary w-100">Register</button> -->
                                            <input type="submit" class="btn btn-primary w-100" name="Register" value="Register">
                                        </div>

                                        <!-- <div class="col-lg-12 mt-4 text-center">
                                            <h6>Or Signup With</h6>
                                            <ul class="list-unstyled social-icon mb-0 mt-3">
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-github-circle" title="Github"></i></a></li>
                                            </ul>                                            
                                        </div> -->

                                        <div class="mx-auto">
                                            <p class="mb-0 mt-3"><small class="text-dark mr-2">Already have an account ?</small> <a href="login.php" class="text-dark font-weight-bold">Sign in</a></p>
                                        </div>

                                    </div>
                                </form>


                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </div>
        </div>
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/plugins.js"></script>

    <!-- selectize js -->
    <script src="js/selectize.min.js"></script>

    <script src="js/jquery.nice-select.min.js"></script>

    <script src="js/app.js"></script>

    <!-- file upload script -->
    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>

</body>

</html>