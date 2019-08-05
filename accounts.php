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


 <div class="row">
       <div class="center">
          <h4>Hello <?php if ($Count > 0) { echo $row['Fname']; }?>, Welcome to your profile page</h4>
       </div>
      <div class="col s12 m4 center">
          <h5>Your Details</h5>
          <hr style="border: 1px solid black;" />
        <h6>Firstname : <?php if ($Count > 0) { echo $row['Fname']; }?></h6>
    <br><h6>Lastname : <?php if ($Count > 0) { echo $row['Sname']; }?></h6>
    <br><h6>Username : <?php if ($Count > 0) { echo $row['User_name']; }?></h6>
    <br><h6>Email : <?php if ($Count > 0) { echo $row['Email']; }?></h6>
    <br>
    <p>If any of these are incorrect click below</p>
    <a href="change.php" class="btn">change</a>





      </div>

       <div class="col s12 m4 center">
         <img alt="The streets of new york" class="accimg" src="assets/accimg.jpg">
       </div>




       <div class="col s12 m4 center">
           <h5>Recent Searches</h5>
           <hr style="border: 1px solid black;" />
            <?php

            $userID = $_SESSION['cusid'];


                $sql2 = "SELECT * FROM savedsearches WHERE userid = '$userID'";
                $res = mysqli_query($conn, $sql2);
                if (mysqli_num_rows($res) > 0) {
                  while ($row2 = mysqli_fetch_assoc($res)) {
                    echo "You searched for ".$row2['KeyWord']."<br>";
                    echo "Search again by clicking here <br><br><br>";
                  }
                }
                else {
                  echo "You Havent made any searches yet";
                }

              ?>

       </div>
 </div>
 <?php
 require "footer.php";
  ?>
