<?php session_start();
if (isset($_POST['change-btn'])) {


    require 'datalink.php'; // this links the website to the database

  $cusid = $_SESSION['cusid'];

  $newfName = $_POST['newFname'];
  $newlName = $_POST['newLname'];
  $newuser_name = $_POST['newuser_Name'];

  $newfName = ucfirst($newfName);
  $newlName = ucfirst($newlName);
  $newuser_name = ucfirst($newuser_name);

//error handlers
  if (empty($newfName) || empty($newlName) || empty($newuser_name)){
    header("location: ../change.php?error=emptyfields");
    exit();
  }

  else {
    $sql = "UPDATE users SET Fname = ?, Sname = ?, User_name = ? WHERE customerID = $cusid";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../change.php?SQLError".$email);
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "sss", $newfName, $newlName, $newuser_name);
      mysqli_stmt_execute($stmt);
      header("location: ../change.php?edit=success");
      exit();
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
  // this stops the user accessing the signupinc.php file.

    else {
      header("location: ../accounts.php");
      exit();
    }
