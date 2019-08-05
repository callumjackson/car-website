<?php

if (isset($_POST['email'])) {

  require 'datalink.php';

  $email = $_POST['email'];
  $password = $_POST['password'];

  if (empty($email || $password)) {
    header("location: ../login.php?error=emptyfields");
    exit();
  }

  else {
    $sql = "SELECT * FROM users WHERE Email=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../login.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $passcheck = password_verify($password, $row['Password']);
        if ($passcheck == false) {
          header("location: ../login.php?error=invaliddetails");
          exit();
        }
        elseif ($passcheck == true) {
            session_start();
            $_SESSION['cusid'] = $row['customerID'];
            $_SESSION['user_Name'] = $row['User_name'];
            $_SESSION['email'] = $row['Email'];

            header("location: ../accounts.php");
            exit();
        }
        else {
          header("location: ../login.php?error=invaliddetails");
          exit();
        }
      }
      else {
        header("location: ../login.php?error=nouser");
        exit();
      }
    }
  }
}
else {
  header("location: ../login.php?fail");
  exit();
}
