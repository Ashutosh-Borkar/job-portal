<?php
    // remove all session variables
    include('constant.php');
    // session_unset();

    $_SESSION["FirstName"] = null ;
    $_SESSION["Email"] = null ;
    $_SESSION["loggedin"] = null ;

    header('Location: index.php');
?>