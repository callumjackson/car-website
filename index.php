<?php
require "header.php";
 ?>
<div class="fullscreen-video">
  <video autoplay loop muted>
      <source src="assets/Car-video.mp4" type="video/mp4">
      video not supported
  </video>
</div>

<div class="overlay"></div>
<?php if (isset($_SESSION['email'])) {
echo '
    <div class="col s12 center">
    <div class="content center">
      <h1>Welcome back to Muscle Car Autos</h1>
      <p>Please use the links below!</p>
<div class="row">
<div class="col m6">
      <a class="btn right" href="buysearch.php">Cars</a>
      </div>

      <div class="col m6">

            <a class="btn" href="accounts.php">account</a>
            </div>

</div>
  </div>';
}
else {
echo '  <div class="col s12 center">
    <div class="content center">
      <h1>Welcome to Muscle Car Autos</h1>
      <p>Please login to view cars we have for sale</p>
      <a href="login.php" class="btn">login</a>

  </div>';
}
?>
</div>


 <?php
require "footer.php";
 ?>
