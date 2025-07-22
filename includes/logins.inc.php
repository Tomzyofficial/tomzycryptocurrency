<?php

include 'dbh.inc.php';
include 'sessions.inc.php';

if (isset($_POST['submit'])) {

    $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
    $user_pwd = mysqli_real_escape_string($conn, $_POST['user_pwd']);
   
    //error handler 
    //check if inputs are empty
    if (empty($user_email) || empty($user_pwd)) {
        $_SESSION["errorMessage"] = "All input field must be filled!";
        header("Location: ../login.php");
        exit(); 
    } else {
        $sql = "SELECT * FROM users WHERE user_email = '$user_email'";
        $result = mysqli_query($conn, $sql); 
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
          $_SESSION["errorMessage"] = "No data of such was found in our record!";
          header("Location: ../login.php");
          exit();
        } else {
          if ($row = mysqli_fetch_assoc($result)) {
            //dehashing password
            $hashedPwdCheck = password_verify($user_pwd, $row['user_pwd']);
            if (!$hashedPwdCheck) {
                $_SESSION["errorMessage"] = "Incorrect username or password!";
                header("Location: ../login.php");
                exit(); 
            } else {
                $_SESSION['id'] = $row['user_uid'];
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['user_email'] = $row['user_email'];                    
                header("Location: ../sell.php?user=$_SESSION[user_name]");
                exit(); 
            }
          }
        }
    }
} else {
    header("Location: ../login.php");
    exit();
}