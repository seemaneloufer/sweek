<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Codex</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
    <section class="colored-section" id="title">

      <div class="container-fluid">



        <nav class="navbar navbar-expand-lg navbar-dark">

          <!--<h1 class="big-heading">CODEX</h1>-->
          <img class="logo" src="images/logo.png" alt="logo">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="#footer">About CODEX</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#cta">Contact Us</a>
              </li>
            </ul>

          </div>
        </nav>


        <!-- Title -->


        </div>

      </div>

    </section>
    <section class="sec-section">



    <center >
      <div class="corona-free">
        <img src="images/CONG.PNG" alt="CORONA FREE">


        <section class="colored-section2" id="testimonials">

          <img src="images/next.png" alt="">

    <div id="testimonial-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active container-fluid">
          <img class="testimonial-image" src="images/stayhome.png" alt="stayhome"><br>
          <h3 class="testimonial-text">Do your bit and please stay at home</h3>

        </div>
        <div class="carousel-item container-fluid">
          <img class="testimonial-image" src="images/hands.png" alt="wash hands"><br>
          <h3 class="testimonial-text">Wash your hands frequently</h3>
        </div>
        <div class="carousel-item container-fluid">
          <img class="testimonial-image" src="images/sani.png" alt="Sanitize"><br>
          <h3 class="testimonial-text">Clean groceries or anything you get from outside throughly</h3>
        </div>

      </div>
      <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon"></span>
      </a>
    </div>

  </section>


      </div>
      </section>

      <!-- Footer -->

      <center class="colored-section">
        <footer class="footer" id="footer">
          <div class="container-fluid">
            <i class="social-icon fab fa-facebook-f"></i>
            <i class="social-icon fab fa-twitter"></i>
            <i class="social-icon fab fa-instagram"></i>
            <i class="social-icon fas fa-envelope"></i>
            <p>© Copyright 2020 Codex</p>
          </div>
        </footer>
      <center >
    </center>

  </body>
</html>

<?php

$connection = mysqli_connect("localhost", "root", "", "sweekdb"); //Connection variable

if(mysqli_connect_errno())
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

//$connection=mysqli_connect("localhost","root","");
//$db=mysqli_select_db($connection,'sweekdb');
if (isset($_POST['upload'])) {
  $file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  // code...
  $name=$_POST['name'];
  $id=$_POST['id'];
  //$query="INSERT INTO 'image'('image','name','id') VALUES ('$file','$name','$id')";
  $query = "INSERT INTO image (image, name, id) VALUES ('$file', '$name', '$id')";
  $query_run=mysqli_query($connection,$query);

  if ($query_run) {
    echo '<script type="text/javascript">alert("Upload successful")</script>';
    // code...
  }
  else {
    // code...
    echo '<script type="text/javascript">alert("Upload unsuccessful")</script>';
  }

}
 ?>
