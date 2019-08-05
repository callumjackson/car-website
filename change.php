<?php session_start(); ?>
<!DOCTYPE html>
 <html>
 <head>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Monda" rel="stylesheet">

   <!--Import materialize.css-->
   <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
   <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
   <link type="text/css" rel="stylesheet" href="css/stylesheet.css"  media="screen,projection"/>

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

          <form class="col s12 m4 reg" action="includes/changeinc.php" method="post">

        <div class="row"  style="padding-top: 10%;">
          
          <div class="input-field col s12 m6">
            <label class="center" for="first_name"  style="padding-top: 10px;">First Name</label>
            <input placeholder="John" name="newFname" type="text" class="validate center msg">
          </div>

          <div class="input-field col s12 m6">
            <label class="center" for="last_name"  style="padding-top: 10px;">Last Name</label>
            <input placeholder="Smith" name="newLname" type="text" class="validate center msg">
          </div>


          <div class="input-field col s12">
            <label class="center" for="user_name"  style="padding-top: 10px;">Username</label>
            <input name="newuser_Name" placeholder="John-Smith" type="text" class="validate center msg">
          </div>
        </div>
        <div class="col s12 m4 center">
  <button class="btn" type="submit" name="change-btn">change</button>
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
</div>




















     <!--JavaScript at end of body for optimized loading-->
     <script type="text/javascript" src="js/materialize.min.js"></script>
   </body>
 </html>
