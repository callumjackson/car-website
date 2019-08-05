  <?php session_start();
  require 'includes/datalink.php';
  ?>
  <!DOCTYPE html>
   <html lang="en">
     <head>
       <!--Import Google Icon Font-->
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Monda" rel="stylesheet">

       <!--Import materialize.css-->
       <link type="text/css" rel="stylesheet" href="css/materialize.min.css"/>
       <link type="text/css" rel="stylesheet" href="css/materialize.css"/>
       <link type="text/css" rel="stylesheet" href="css/stylesheet.css"/>

       <title>Musclecar Autos</title>
       <meta charset="UTF-8">
       <meta name="description" content="">
       <meta name="keywords" content="">
       <!--Let browser know website is optimized for mobile-->
       <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     </head>

     <body>

       <nav>
    <div class="nav-wrapper">
     <a href="index.php" class="brand-logo logotext">MuscleCarAutos.com</a>
     <ul id="nav-mobile" class="right hide-on-med-and-down">
       <li><?php
       $email =  $_SESSION['email'];

       $result = mysqli_query($conn, "SELECT * FROM users WHERE Email = '$email'");
       $row = mysqli_fetch_array($result);
       $Count = mysqli_num_rows($result);
       if ($Count > 0) {
        echo "Welcome ".$row['Fname'];
       }
       ?></li>
       <li><?php
       $email =  $_SESSION['email'];

       $result = mysqli_query($conn, "SELECT * FROM users WHERE Email = '$email'");
       $row = mysqli_fetch_array($result);
       $Count = mysqli_num_rows($result);
       if ($Count > 0) {
        echo "<a class='dropdown-trigger' href='#' data-target='dropdown1'>links</a>
            <ul id='dropdown1' class='dropdown-content'>
            <li><a href='buysearch.php'>Cars</a></li>
            <li><a href='accounts.php'>Your Account</a></li></ul>";
       }
       ?>

      <li>

         <?php if (isset($_SESSION['email'])) {
    echo '<form action="includes/logoutinc.php" method="post">
           <button class="btn" type="submit" name="logout-btn">logout</button>
         </form>';
       }
       else {
         echo ' <a class="waves-effect waves-light btn" href="login.php" name="login-btn">login</a>
                <a class="waves-effect waves-light btn" href="signup.php">Sign up</a>';
       }
       ?>


     </li>
     </ul>
   </div>
    </nav>
