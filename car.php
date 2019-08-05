<?php
require "header.php";

    $email =  $_SESSION['email'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE Email = '$email'");
    $row = mysqli_fetch_array($result);
    $Count = mysqli_num_rows($result);
    if ($Count > 0) {
      //loads page
    }
    else {
        header("location: ../login.php");
        exit();
    }
 ?>

<div class="car-container">
  <?php
  $make = mysqli_real_escape_string($conn, $_GET['make']); // stops the user changing the title to mess with the website
  $model = mysqli_real_escape_string($conn, $_GET['model']); // stops the user changing the title to mess with the website


    $sql = "SELECT * FROM cars WHERE car_make='$make' and car_model='$model'";
    $result = mysqli_query($conn, $sql);
    $Qres = mysqli_num_rows($result);

    if ($Qres > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='car-box'>
            <h2>".$row['car_make']."</h2>
            <h3>".$row['car_model']."</h3>
            <img alt='A car' src=".$row['car_img'].">
            <h4>Colour: ".$row['car_colour']."</h4>
            <h4>Fuel type: ".$row['car_fuel']."</h4>
            <h4>Gearbox type: ".$row['car_trans']."</h4>

        </div>";
      }
    }


       ?>
</div>


<?php
require "footer.php";
?>
