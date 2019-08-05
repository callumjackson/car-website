<!DOCTYPE html>
<html lang="en">
<head>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Monda" rel="stylesheet">

   <!--Import materialize.css-->
   <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="all"/>
   <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="all"/>
   <link type="text/css" rel="stylesheet" href="css/stylesheet.css"  media="all"/>

   <title>Musclecarautos</title>
   <meta charset="UTF-8">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <!--Let browser know website is optimized for mobile-->
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 </head>

   <body style="background-image: url(assets/logsignback.jpeg);
   background-size: cover;">
<br>
<div class="row">
  <div class="col s12 m4">
<!-- empty space -->
  </div>
  <div class="row">

          <form class="col s12 m4 reg" action="includes/Signupinc.php" method="post">

        <div class="row"  style="
        padding-top: 10%;
        ">
          <div class="input-field col s12 m6">
            <label class="center" style="padding-top: 10px;">First Name</label>
            <input placeholder="John" name="Fname" type="text" class="validate center msg">
          </div>

          <div class="input-field col s12 m6">
            <label class="center" style="padding-top: 10px;">Last Name</label>
            <input placeholder="Smith" name="Lname" type="text" class="validate center msg">
          </div>

          <div class="input-field col s12">
            <label class="center" style="padding-top: 10px;">Date of birth</label>
            <input placeholder="DD/MM/YYYY" name="DOB" type="number" class="validate center msg">
          </div>

          <div class="input-field col s12">
            <label class="center" style="padding-top: 10px;">Username</label>
            <input name="user_Name" placeholder="John-Smith" type="text" class="validate center msg">
          </div>

          <div class="input-field col s12">
            <label class="center" style="padding-top: 10px;">First Line Of Address</label>
            <input name="FirstLineAdd" placeholder="99 new avenue" type="text" class="validate center msg">
          </div>

          <div class="input-field col s12">
            <label class="center" style="padding-top: 10px;">PostCode</label>
            <input name="Postcode" placeholder="AB12 3CD" type="text" class="validate center msg">
          </div>

          <div class="input-field col s12">
            <label class="center" style="padding-top: 10px;">Username</label>
            <input name="PhoneNum" placeholder="07123456789" type="number" class="validate center msg">
          </div>

        <div class="input-field col s12">
          <label class="center" style="padding-top: 10px;">Password</label>
          <input name="password" placeholder="******" type="password" class="validate center msg">

        </div>
        <div class="input-field col s12">
          <label class="center" style="padding-top: 10px;">Confirm Password</label>
          <input name="pass_rep" placeholder="******" type="password" class="validate center msg">

        </div>
        <div class="input-field col s12"  style="padding-top: 10px;">
          <label>Email</label>
          <input name="email" placeholder="Johnsmith@email.com" type="email" class="validate center msg">

        </div>
        </div>
        <div class="col s12 m4 center">
  <button class="btn" type="submit" name="signup-btn">Sign up</button>
        </div>
        <div class="col s12 m4 center">


        </div>
        <div class="col s12 m4 center">
        <a href="index.php" class="btn">cancel</a>
        </div>
        <p class="center msg" style="text-decoration-color: white;">Welcome to the best Musclecar selling site!</p>

      </form>

        </div>
      </div>


      <div class="col s12 m4">
<!-- empty space -->
      </div>




















     <!--JavaScript at end of body for optimized loading-->
     <script src="js/materialize.min.js"></script>
   </body>
 </html>
