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

<form class="" action="searchresults.php" method="POST">
  <div class="row">
    <div class="col s10 m10">
      <input type="text" name="search" placeholder="Search">
    </div>
    <div class="col s2 m2">
      <button type="submit" class="btn center" name="submit-search">Search</button>
    </div>
  </div>
</form>

<h1 class="carheading">All cars in stock</h1>

<div class="car-container">
  <?php
    $sql = "SELECT * FROM cars";
    $result = mysqli_query($conn, $sql);
    $Qres = mysqli_num_rows($result);

    if ($Qres > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='car-box'>
            <img alt='A car' src=".$row['car_img'].">
            <h3>".$row['car_make']."</h3>
            <h4>".$row['car_model']."</h4>
            <p>".$row['car_colour']."</p>
            <p>".$row['car_fuel']."</p>
            <p>".$row['car_trans']."</p>

        </div>";
      }
    }


       ?>
</div>

<?php
require "footer.php";
?>
