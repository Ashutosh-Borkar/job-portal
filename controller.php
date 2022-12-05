<?php
include('constant.php');

//For Register
if (isset($_POST['Register'])) {
    // var_dump($_POST);
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Email = $_POST['Email'];
    $City = $_POST['City'];
    $Contact = $_POST['Contact'];
    $Education = $_POST['Education'];
    $Experience = $_POST['Experience'];
    $Skills = $_POST['Skills'];
    $Password = $_POST['Password'];
    $ConfirmPassword = $_POST['ConfirmPassword'];

    // SELECT DATA
    $sql = "SELECT * FROM `website_user` WHERE `Email`= '$Email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_SESSION["message"] = "User already Exists";
        // echo $_SESSION["message"];
        header('location: signup.php');
    } else {
        //  INSERT DATA
        if ($Password == $ConfirmPassword) {
            $sql = "INSERT INTO `website_user`(`FirstName`, `LastName`, `Email`, `City`, `Contact`, `Education`, `Experience`, `Skills`, `Password`) VALUES ('$FirstName','$LastName','$Email','$City','$Contact','$Education','$Experience','$Skills','$Password')";

            if ($conn->query($sql) === TRUE) {
                $_SESSION["message"] = "User created successfully";
                header('location: login.php');
            } else {
                $_SESSION["message"] = "Error: " . $sql . "<br>" . $conn->error;
                header('location: signup.php');
            }
        } else {
            $_SESSION["message"] = "Password Doesn't Match";
            header('location: signup.php');
        }
    }
}

//For Login
if (isset($_POST['login'])) {
    // var_dump($_POST);
    $Email = $_POST['email'];
    $Password = $_POST['password'];


    // SELECT DATA
    $sql = "SELECT * FROM `website_user` WHERE `Email`= '$Email' and `Password` = '$Password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $_SESSION["FirstName"] = $row['FirstName'];
            $_SESSION["Email"] = $row['Email'];
            $_SESSION["loggedin"] = "true";
            header('location: index.php');
        }
    } else {
        echo "0 results";
        $_SESSION["message"] = "Please check username or password";
        header('location: login.php');
    }
}

//For Insert Data in applicants table
if (isset($_GET['jobid'])) {
    // var_dump($_GET['jobid']);

    $Email = $_SESSION['Email'];
    $jobid = $_GET['jobid']; //For fetching job details

    if (isset($_SESSION["loggedin"])) //To check if logged in or not when click on apply job
    {
        //For fecthing applicant details if already applied
        $sql = "SELECT * FROM `applicants` WHERE `job_id`='$jobid' AND `email`='$Email' AND `deleted_at` is null";
        // echo $sql;
        $result = $conn->query($sql);

        if ($result->num_rows > 0) // Check if duplicate data exists 
        {
            // output data of each row
            $_SESSION["message"] = "Already Applied";
            header('location: job-details.php?jobid=' . $jobid);
        } else {
            //Fecthing applicant data
            $sql = "SELECT * FROM `website_user` WHERE `Email`='$Email' AND `deleted_at` is null;";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $name = $row["FirstName"];
                    $email = $row["Email"];
                    $contact = $row["Contact"];
                    $city = $row["City"];
                    $education = $row["Education"];
                    $experience = $row["Experience"];
                    $skills = $row["Skills"];
                }
            } else {
                echo "0 results";
            }

            //Fecthing job data
            $sql = "SELECT * FROM `create_job` WHERE `deleted_at` is null AND `id` = '$jobid'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $job_id = $row["id"];
                    $company_name = $row["company_name"];
                    $job_title = $row["job_title"];
                }
            } else {
                echo "0 results";
            }

            //Inserting Data in database
            $sql = "INSERT INTO `applicants`(`job_id`, `name`, `company_name`, `job_title`, `email`, `contact`, `city`, `education`, `experience`, `skills`, `status`) VALUES ('$job_id','$name','$company_name','$job_title','$email','$contact','$city','$education','$experience','$skills','Applied')";
            $insert_data = $conn->query($sql);
            if ($insert_data === TRUE) {
                $_SESSION["message"] = "Job Applied successfully";
                header('location: job-details.php?jobid=' . $job_id);
            } else {
                $_SESSION["message"] = "Error: " . $sql . "<br>" . $conn->error;
                header('location: job-details.php?jobid=' . $job_id);
            }
        }
    } else {
        header('location: login.php');
    }
}

//For saving contact form data
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comments = str_replace("'", "''", $_POST['comments']);

    $sql = "INSERT INTO `contact`(`name`, `email`, `comments`) VALUES ('$name','$email','$comments')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION["message"] = "Thanks For Contacting Us";
        header('location: contact.php');
    } else {
        $_SESSION["message"] = "Error: " . $sql . "<br>" . $conn->error;
        header('location: contact.php');
    }
}

//For forget password
if (isset($_POST['forget_password'])) {
    // the email
    $email = $_POST['email'];
    // the message
    $msg = "Click here to reset password ".$baseurl."newpassword.php?mail=".$email;

    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg, 70);

    // send email
    mail($email, "Forget Password", $msg);
    $_SESSION["message"] = "We have  sent a mail to your registered e-mail id ,click on the link for account recovery.";
    header('Location:'.$baseurl."recovery_passward.php");
}

//For setting new password
if (isset($_POST['Updatepassword'])) {
    $email = $_POST['email'];
    $NewPassword = $_POST['NewPassword'];
    $Confirm_Password = $_POST['Confirm_Password'];

    if($NewPassword==$Confirm_Password)
    {
        $sql = "UPDATE `website_user` SET `Password`='$NewPassword' WHERE `Email`='$email'";
        if ($conn->query($sql) === TRUE) 
        {
            $_SESSION["message"] = "Password Updated Successfully";
            header('location: login.php');
        } else {
            $_SESSION["message"] = "Error in updating record";
            header('location: newpassword.php?mail='.$email);
        }
    }
    else
    {
        $_SESSION["message"] = "Please check your password and confirm password";
        header('location: newpassword.php?mail='.$email);
    }

}
