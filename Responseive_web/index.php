<!DOCTYPE html>
<html lang="en">
<head>
  <title>Responsive Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">India's Monuments and Sites</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#ser">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#sst">Contact</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Taj.jpg" alt="Los Angeles" width="1100" height="400">
      
    </div>
    <div class="carousel-item">
      <img src="RedFort.jpg" alt="Chicago" width="1100" height="400">
      
    </div>
    <div class="carousel-item">
      <img src="Qutub-Minar.jpg" alt="New York" width="1100" height="400">
      
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section id="section1" class="my-5">
    <div class ="py-5">
       <h2  class="text-center">About Us</h2> 
    </div>
    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-6 col-md-6  col-12">
        <img src="munnar.jpg" class="img-fluid aboutimg">
    </div>
    <div class="col-lg-6 col-md-6  col-12">
        <h2 class="display-4">I am Aman</h2>
        <p class ="py-3">Hii welcome to our website enjoy the best place in india, and you learn to explore more substances in this field</p>
        <a href="about.php" class ="btn btn-success">check more</a>
    </div>
    </div>
    </div>
    </div>
</section>

<section  class="my-5">
    <div class ="py-5">
       <h2  class="text-center">Our Services</h2> 
    </div>

    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
        <img class="card-img-top" src="ss.jpeg" alt="Card image">
        <div class="card-body">
        <h4 class="card-title"> Scene !.</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
        </div>
        </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
        <img class="card-img-top" src="nn.jpg" alt="Card image">
        <div class="card-body">
        <h4 class="card-title">Scene !!.</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
        </div>
        </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
        <img class="card-img-top" src="ww.jpg" alt="Card image">
        <div class="card-body">
        <h4 class="card-title">!!.</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
        </div>
        </div>
        </div>
        </div>
    </div>
</section>

<section3 class="my-5">
    <div class ="py-5">
       <h2  class="text-center">Gallery</h2> 
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="11.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="flag.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="13.jpg" class="img-fluid pb-3">
            </div>
            
        </div>
    </div>
</section3>

<section  class="my-5">
    <div class ="py-5">
       <h2 class="text-center">Contact Form</h2>
    </div>
    <div class="w-50 m-auto">
        <form id ="sst"action="userinfo.php" method ="POST">
        <div class="form-group">
          <label>Username</label>
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
          <textarea  class="form-control" rows="8" name="comment"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>
<section3 id ="ser" class="my-5">
    <div class ="py-5">
       <h2  class="text-center">Service</h2> 
    </div>
    <div class="p-3 text-white">
      <div class="container-fluid">
      <p class="text-center" ><a href="Instagram.com">Instagram</a></p>
      <p class="text-center" ><a href="Facebook.com">Facebook</a></p>
      <p class="text-center" ><a href="Twitter.com">Twitter</a></p>

      </div>
    </div>
</section3>
<footer>
  <p class="p-3 bg-dark text-white text-center">@amanProductions</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>