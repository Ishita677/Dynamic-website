<!DOCTYPE html>
<html lang="en">

<head>
    <title>Beyond Tech</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: url('images/f.avif') center center fixed;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #343a40; /* Text color on top of the background */
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
        }

        nav {
            background-color: rgba(0, 0, 0, 0.7); /* Add a semi-transparent background to the navigation bar */
        }

        .carousel-item {
            text-align: center; /* Center text in carousel items */
        }

        .my-5 {
            background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent background to sections */
            padding: 20px; /* Add padding to sections */
            margin: 20px 0; /* Add margin to sections */
        }

        footer {
            background-color: #343a40; /* Background color for the footer */
            color: white; /* Text color for the footer */
            padding: 10px 0; /* Add padding to the footer */
        }

        /* Custom Styles */
        .welcome-section {
            text-align: center; /* Center text in the welcome section */
        }

        .welcome-text {
            font-size: 24px; /* Adjust the font size as needed */
            margin-bottom: 10px; /* Add space between text and button */
        }
    </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Beyond Tech</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/india.png" alt="Curry With Naan" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Curry With Naan</h3>
          <p>India</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/italy.jpg" alt="Pizza" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Pizza</h3>
          <p>Italy</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/korea.jpeg" alt="Budae Jjigae" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Budae Jjigae</h3>
          <p>Korea</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <section class="my-5 welcome-section" style="background-color: rgba(255, 255, 255, 0.3); colour: #000;">
    <div class="py-5">
      <h2 class="text-center">Welcome</h2>
    </div>
    <div class="container-fluid">
      <div class="col-lg-6 col-md-6 col-12 mx-auto">
        <h2 class="display-2 welcome-text">Hello, my name is Ishita Kukreti.</h2>
        <p class="py-1 welcome-text">This is my first Dynamic website page, and I am making this for my mini project.</p>
        <a href="about.php" class="btn btn-success">Check More</a>
      </div>
    </div>
  </section>

  <section class="my-5" style="background-color: rgba(255, 255, 255, 0.3); color: #000;">
    <div class="py-5">
      <h2 class="text-center">Gallery</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4  col-md-4  col-12">
          <img src="images/england.jpg" class="img-fluid pb-3">
        </div>
        <div class="col-lg-4  col-md-4  col-12">
          <img src="images/france.jpeg" class="img-fluid pb-3">
        </div>
        <div class="col-lg-4  col-md-4  col-12">
          <img src="images/greek.jpg" class="img-fluid pb-3">
        </div>
        <div class="col-lg-4  col-md-4  col-12">
          <img src="images/hong.jpg" class="img-fluid pb-3">
        </div>
        <div class="col-lg-4  col-md-4  col-12">
          <img src="images/sweden.jpg" class="img-fluid pb-3">
        </div>
        <div class="col-lg-4  col-md-4  col-12">
          <img src="images/japan.jpg" class="img-fluid pb-3">
        </div>
        <div class="col-lg-4  col-md-4  col-12">
          <img src="images/aus.jpg" class="img-fluid pb-3">
        </div>
        <div class="col-lg-4  col-md-4  col-12">
          <img src="images/argen.jpg" class="img-fluid pb-3">
        </div>

        <div class="col-lg-4  col-md-4  col-12">
          <img src="images/leba.jpeg" class="img-fluid pb-3">
        </div>

      </div>
  </section>

  <section class="my-5" style="background-color: rgba(255, 255, 255, 0.3); colour: #000;">
    <div class="py-5">
      <h2 class="text-center">Contact Us</h2>
    </div>
    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
        <div class="form-group">
        <label style="color: #000;">Username</label>
          <input type="text" name="user" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Email Id</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Mobile</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Comments</label>
          <textarea class="form-control" name="comments">
        </textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </section>

  <footer>
    <p class="p-3 bg-dark text-white text-center">
      @Beyond Tech</p>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>