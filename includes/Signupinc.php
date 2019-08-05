<?php
if (isset($_POST['signup-btn'])) {

  require 'datalink.php';

$user_name = $_POST['user_Name']; //this is username
$email = $_POST['email'];
$password = $_POST['password'];
$Pass_Rep = $_POST['pass_rep'];
$fName = $_POST['Fname'];
$lName = $_POST['Lname'];
$DOB = $_POST['DOB'];
$FirstLineAdd = $_POST['FirstLineAdd'];
$PostCode = $_POST['Postcode'];
$PhoneNum = $_POST['PhoneNum'];

$fName = ucfirst($fName);
$lName = ucfirst($lName);
$user_name = ucfirst($user_name);


// error handlers

    if (empty($user_name) || empty($email) || empty($FirstLineAdd) || empty($PostCode) || empty($FirstLineAdd) || empty($PhoneNum) || empty($Pass_Rep) ){
      header("location: ../signup.php?error=emptyfields&userName=".$user_name."&email=".$email);
      exit();

    }
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $user_name)){
          header("location: ../signup.php?error=invalidemailuserName");
          exit();
        }
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          header("location: ../signup.php?error=invalidemail&userName=".$user_name);
            exit();
          exit();
        }

        elseif (!preg_match("/^[a-zA-Z0-9]*$/", $user_name)) {
        header("location: ../signup.php?error=invalidusername&email=".$email);
        exit();
        }

        elseif ($password !== $Pass_Rep) {
          header("location: ../signup.php?error=passwordcheckuserName=".$user_name."&mail=".$email);
          exit();
}
else {
  $sql = "SELECT User_name FROM users WHERE User_name=?";
  $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../signup.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt , "s", $user_name);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
          if ($resultCheck > 0) {
        header("location: ../signup.php?error=usertaken&mail=".$email);
        exit();
          }
          else {

          $sql = "INSERT INTO users (User_name, Fname, Sname, FirstLineAdd, Postcode, DOB, Email, PhoneNum, Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signup.php?error=sqlerror");
            exit();
          }

          // this if the user successfully signs up

          else {
            $hashedPWD = password_hash($password, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt , "sssssssss", $user_name, $fName ,$lName, $FirstLineAdd, $PostCode, $DOB, $email, $PhoneNum, $hashedPWD);
            mysqli_stmt_execute($stmt);
            header("location: ../login.php?signup=success");
            exit();
          }
        }
    }

  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}

// this stops the user accessing the signupinc.php file.

  else {
    header("location: ../signup.php");
    exit();
  }
