<?php
include 'sessions.inc.php';
include 'connection.php';

if (isset($_POST['submit'])) {
    $firstname = mysqli_real_escape_string ($conn, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string ($conn, $_POST["lastname"]);
    $email = mysqli_real_escape_string ($conn, $_POST["email"]);
    $phoneNumber = mysqli_real_escape_string ($conn, $_POST["phoneNumber"]);
    $country = mysqli_real_escape_string ($conn, $_POST["country"]);
    $state = mysqli_real_escape_string ($conn, $_POST["state"]);
    $bankNumber = mysqli_real_escape_string ($conn, $_POST["bankNumber"]);
    $bankName = mysqli_real_escape_string ($conn, $_POST["bankName"]);
    $amount = mysqli_real_escape_string ($conn, $_POST["amount"]);
    // $fileUpload = mysqli_real_escape_string ($conn, $_POST["file"]);
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

    if (empty($firstname) || empty($lastname) || empty($email) || empty($phoneNumber) || empty($country) 
    || empty($state) || empty($bankNumber) || empty($bankName) || empty($amount) 
    || empty($checkBoxExample)) {
        $_SESSION["errorMessage"] = "All input field must be filled!";
        header("Location: ../sell.php?sell=emptyfields");
        exit();
    } elseif (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                $fileNameNew = uniqid('', true). ".". $fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: ../sell.php?uploadsuccessful");
            } else {
                echo "Your file is too big";
            }
        } else {
            echo "There was an error";
        }
    } else {
        echo "You can not upload file of such type";
    } if (!preg_match("/^[a-zA-Z ]*$/", $firstname) || !preg_match("/^[a-zA-Z ]*$/", $lastname)) {
        $_SESSION["errorMessage"] = "Please give a valid name!";
        header("Location: ../sell.php?sell=invalidname");
        exit();
    } else {
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