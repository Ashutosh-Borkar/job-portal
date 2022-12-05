<?php
include('constant.php');
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
                            <div class="login_page bg-white shadow rounded p-4">
                                <div class="text-center">
                                    <h4 class="mb-4">Recover Account</h4>
                                </div>
                                <form class="login-form" action="controller.php" method="post">
                                    <div class="row">
                                        <?php
                                        if (isset($_SESSION["message"])) {
                                        ?>
                                            <div class="col-lg-12">
                                                <p class="text-muted"><?php echo $_SESSION["message"]?></p>
                                            </div>
                                        <?php
                                            $_SESSION["message"] = null;
                                        } else {
                                        ?>
                                            <div class="col-lg-12">
                                                <p class="text-muted">Please enter your email address. You will receive a link to create a new password via email.</p>
                                                <div class="form-group position-relative">
                                                    <label>Email address <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" placeholder="Enter Your Email Address" name="email" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <!-- <button class="btn btn-primary w-100">Send</button> -->
                                                <input type="submit" name="forget_password" value="Forget Password" class="btn btn-primary w-100">
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->

    <!-- javascript -->
    <?php
    include('./pages/include-js.php');
    ?>

</body>

</html>