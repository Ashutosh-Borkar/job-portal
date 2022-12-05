<?php
include('constant.php');
if (isset($_SESSION["loggedin"])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

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
                        <div class="col-lg-4 col-md-6">
                            <div class="login-page bg-white shadow rounded p-4">
                                <div class="text-center">
                                    <h4 class="mb-4">Reset Password</h4>
                                </div>

                                <form class="login-form" method="post" action="controller.php">
                                    <div class="row">
                                        <?php
                                        if(isset($_SESSION["message"]))
                                        {
                                        ?>
                                        <div class="col-lg-12">
                                            <div class="alert alert-warning" role="alert">
                                                <?php
                                                    echo $_SESSION["message"];
                                                    $_SESSION["message"] = null;
                                                ?>
                                            </div>
                                        </div>
                                        <?php
                                        }
                                        ?>
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <input type="text" class="form-control" placeholder="<?php echo $_GET['mail'] ?>" name="email" value="<?php echo $_GET['mail'] ?>" hidden>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>New Password <span class="text-danger">*</span></label>
                                                <input type="password" class="form-control" placeholder="New Password" name="NewPassword" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>Confirm Password <span class="text-danger">*</span></label>
                                                <input type="password" class="form-control" placeholder="Confirm Password" name="Confirm Password" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-0">
                                            <!-- <button class="btn btn-primary w-100">Sign in</button> -->
                                            <!-- <a href="" class="btn btn-primary w-100" name="login" value="login">Sign in</a> -->
                                            <input type="submit" class="btn btn-primary w-100" name="Updatepassword" value="Update Password">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!---->
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
    <?php
    include('./pages/include-js.php');
    ?>
</body>

</html>