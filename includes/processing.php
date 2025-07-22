<?php
require_once 'sessions.inc.php';
require_once 'dbh.inc.php';

if (isset($_POST['submit'])) {
    $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phoneNumber = mysqli_real_escape_string($conn, $_POST["phoneNumber"]);
    $country = mysqli_real_escape_string($conn, $_POST["country"]);
    $states = mysqli_real_escape_string($conn, $_POST["states"]);
    $bankNumber = mysqli_real_escape_string($conn, $_POST["bankNumber"]);
    $bankName = mysqli_real_escape_string($conn, $_POST["bankName"]);
    $amount = mysqli_real_escape_string($conn, $_POST["amount"]);
    // $fileUpload = mysqli_real_escape_string ($conn, $_POST["file"]);
    $checkBox = mysqli_real_escape_string($conn, $_POST["checkBox"]);

    $fileUpload = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize= $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (empty($fname) || empty($lname) || empty($email) || empty($phoneNumber) || empty($country) 
    || empty($states) || empty($bankNumber) || empty($bankName) || empty($amount) 
    || empty($checkBox)) {
        $_SESSION["errorMessage"] = "All input field must be filled!";
        header("Location: ../sell.php?sell=emptyfields");
        exit();
    } elseif (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                $fileNameNew = uniqid('', true). ".". $fileActualExt;
                $fileDestination = '../uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
            } else {
                $_SESSION['errorMessage'] = "Your file is too big.";
                header("Location: ../sell.php?file_too_large");
                exit();
            }
        } else {
             $_SESSION['errorMessage'] = "Internal Error.";
             header("Location: ../sell.php?Internal_Error");
             exit();
        }
    } else {
        $_SESSION['errorMessage'] = "Wrong file type.";
        header("Location: ../sell.php?Wrong_file");
        exit();
    } if (!preg_match("/^[a-zA-Z ]+$/", $fname) || !preg_match("/^[a-zA-Z ]+$/", $lname)) {
        $_SESSION["errorMessage"] = "Please give a valid name!";
        header("Location: ../sell.php?sell=invalidname");
        exit();
    } else {
        $sql = "INSERT INTO sales (fname, 
                lname, email, phoneNumber,
                country, states, bankNumber, 
                bankName, amount, upload, 
                checkBox) VALUES ('$fname', '$lname', '$email', 
                '$phoneNumber', '$country', '$states', '$bankNumber', '$bankName', '$amount', '$fileDestination', '$checkBox')";
                mysqli_query($conn, $sql);
                $_SESSION['successMessage'] = "Your sell was successful!";
                header("Location: ../sell.php?sell=successful");
                exit();
                    
    }
        
    
    





    /*
    $firstname = mysqli_real_escape_string ($conn, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string ($conn, $_POST["lastname"]);
    $email = mysqli_real_escape_string ($conn, $_POST["email"]);
    $phoneNumber = mysqli_real_escape_string ($conn, $_POST["phoneNumber"]);
    $country = mysqli_real_escape_string ($conn, $_POST["country"]);
    $state = mysqli_real_escape_string ($conn, $_POST["state"]);
    $bankNumber = mysqli_real_escape_string ($conn, $_POST["bankNumber"]);
    $bankName = mysqli_real_escape_string ($conn, $_POST["bankName"]);
    $amount = mysqli_real_escape_string ($conn, $_POST["amount"]);
    $fileUpload = mysqli_real_escape_string ($conn, $_POST["file"]);
    $checkBoxExample = mysqli_real_escape_string ($conn, $_POST["checkBoxExample"]);

    $fileUpload = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize= $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    // error handlers
    if (empty($firstname) || empty($lastname) || empty($email) || empty($phoneNumber) || empty($country) 
    || empty($state) || empty($bankNumber) || empty($bankName) || empty($amount) 
    || empty($checkBoxExample)) {
        if (!preg_match("/^[a-zA-Z ]*$/", $firstname) || !preg_match("/^[a-zA-Z ]*$/", $lastname)) {
            if (in_array($fileActualExt, $allowed)) {
                if ($fileError === 0) {
                    if ($fileSize < 1000000) {
                        $fileNameNew = uniqid('', true). ".". $fileActualExt;
                        $fileDestination = 'uploads/'.$fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);
                        header("Location: ../sell.php?uploadedsuccess");
                    } else {
                        echo 'Your file is to big!';
                        $sql = "INSERT INTO intakes (user_firstName, 
                        user_lastName, user_email, user_phoneNumber,
                        user_country, user_states, user_bankNumber, 
                        user_bankName, user_amount, user_fileUpload, 
                        user_checkBoxExample) VALUES ('$firstname', '$lastname', '$email', 
                        '$phoneNumber', '$country', '$state', '$bankNumber', '$bankName', '$amount', '$fileUpload', '$checkBoxExample')";
                        mysqli_query($conn, $sql);
                        $_SESSION['successMessage'] = "Your sell was successful!";
                 
                        header("Location: ../sell.php?sell=successful");
                        exit();
                    }
                } else {
                    echo 'There was an error uploading your file!';
                }
            } else {
                echo 'You cannot upload files of this type';
            }
        } else {
            $_SESSION["errorMessage"] = "Please give a valid name!";
            header("Location: ../sell.php?sell=invalidname");
            exit();
        }
    } else {
        $_SESSION["errorMessage"] = "All input field must be filled!";
        header("Location: ../sell.php?sell=emptyfields");
        exit();
    }
    */

} else {
    header("Location: ../login.php?" );
    exit();
}