<?php
require "header.php";
?>

<h3> Cars Available</h3>



<div class="car-container">
  <?php
      if (isset($_POST['submit-search'])) {
        $search = mysqli_real_escape_string($conn, $_POST['search']); //makes sure the search is safe
        $sql = "SELECT * FROM cars WHERE car_make LIKE '%$search%' OR car_model LIKE '%$search%' OR car_colour LIKE '%$search%' OR car_fuel LIKE '%$search%' OR car_trans LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $Qres = mysqli_num_rows($result);

        echo "There are ".$Qres." cars";

        if ($Qres > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<a href='car.php?make=".$row['car_make']."&model=".$row['car_model']."'><div class='car-box'>
                <img src=".$row['car_img'].">
                <h3>".$row['car_make']."</h3>
                <h4>".$row['car_model']."</h4>
                <p>".$row['car_colour']."</p>
                <p>".$row['car_fuel']."</p>
                <p>".$row['car_trans']."</p>

            </div></a>";
          }
        } else {
          echo "There no Cars up for sale right now, try different search";
        }

      }

   ?>
</div>


<?php
$keyword = $_POST['search'];
$userID = $_SESSION['cusid'];
$keyword = ucfirst($keyword);

$sqlsearch = "INSERT INTO savedsearches (userid, KeyWord) VALUES (?, ?)";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sqlsearch)) {
// header("location: ../searchresults.php?error=sqlerror");
  exit();
}

// this if the user successfully signs up

else {

  mysqli_stmt_bind_param($stmt , "ss", $userID, $keyword);
  mysqli_stmt_execute($stmt);
//  header("location: ../searchresults.php?savedsearch=success");
  exit();
}
 ?>
