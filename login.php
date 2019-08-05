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

   <title>Musslecarautos</title>
   <meta charset="UTF-8">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <!--Let browser know website is optimized for mobile-->
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 </head>

 <body>
<br>

<div class="row">
  <div class="col s12 m4">
<!-- empty space -->
  </div>
  <div class="row">
      <form class="col s4 m4 reg" action="includes/logininc.php" method="post">
        <div class="row"  style="
        padding-top: 10%;
        ">

          <div class="input-field col s12">
            <label>Email</label>
            <input name="email" type="email" class="validate">
          </div>

          <div class="input-field col s12">
            <label>Password</label>
         <input name="password" type="password" class="validate">

         <br>

         <div class="center">
           <p>If you dont have an account with us click </p><a href="signup.php">here</a>
         </div>

       </div>
</div>
        <div class="col s12 m4 center">
  <button class="btn" type="submit" name="login">Login</button>
        </div>
        <div class="col s12 m4 center">


        </div>
        <div class="col s12 m4 center">
        <a href="index.php" class="btn">Cancel</a>
        </div>

      </form>
</div>
      <div class="col s12 m4">
<!-- empty space -->
      </div>
</div>




















     <!--JavaScript at end of body for optimized loading-->
     <script src="js/materialize.min.js"></script>
   </body>
 </html>
