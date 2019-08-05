<?php
if (isset($_SESSION) {
  require 'datalink.php';

  $user_name = $_POST['user_Name'];
  $email = $_POST['email'];


    $result = mysqli_query("SELECT * FROM users WHERE User_name = '$user_name' AND Email = '$email'");
    $row = mysqli_fetch_array($result);

    if ($row['User_name'] == $user_name && $row['Email'] == $email) {
        echo "Login Success Welcome".$row['User_name'];
    }
    else {
      echo "failed to connect";
    }

}
else {
  echo "connection failed";
}
 ?>
