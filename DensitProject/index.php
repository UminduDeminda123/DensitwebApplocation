<?php
$con =mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($con, "INSERT INTO contact_form(name,email,number,date) 
    VALUES('$name','$email','$number','$date')") or die('query failed');

    if($insert){
        $message='appoiment made successfully';
    }else{
        $message[] = 'appoiment failed';
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- font awesom link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
     integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- css -->
     <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- navbar -->
  <div class="container-fluid p-0">
  <nav class="navbar navbar-expand-lg .bg-dark.bg-gradient">
  <div class="container-fluid">
    <img src="img/logo.png" alt="" class="logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="service.php">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reviews.php">Reviews</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>

      </ul>
      <form class="d-flex">
        <button class="btn btn-info" type="submit" href="index.php?contact.php">Make Appoiment</button>
      </form>
    </div>
  </div>
</nav>
<div>
<div
  class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-black"
  style="background-image: url('img/home2.jpg');">
  <h1 class="mb-3 h2">Smile Brighter With Our Dental Services </h1>
  <h2>Teeth Cleaning,Fillings & More!</h2>

  
</div>
</div>

<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="img/img1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">100,000+ Happy Clients</h5>
      <p class="card-text">Join the 100,000+ satisfied clients who trust their oral health to My Dentist. From preventative care to cosmetic treatments, our commitment to your comfort and satisfaction is unmatched.</p>
      
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/imges2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Multiple Locations </h5>
      <p class="card-text">Whether you're in need of a routine check-up or a more complex procedure, we have you covered. Don't let distance stand in the way of a healthy smile. Choose My Dentist for all your dental needs.</p>
      
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/img3.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Experienced Dentists</h5>
      <p class="card-text">With years of training and hands-on experience, our dentists stay up-to-date with the latest advancements in dentistry to ensure that you receive the best possible treatment. Trust in our expertise to help you achieve and maintain a healthy, beautiful smile.</p>
      
    </div>
  </div>
</div>
<div class="container mt-3">
        <h1 class="text-center">Make Appoinment</h1>
        <!-- form -->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="name" class="form-lable">Your Name</label>
                <input type="text" name="name" id="name"
                 class="form-control" placeholder="name" autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="email" class="form-lable">Your Email</label>
                <input type="email" name="email" id="email"
                 class="form-control" placeholder="email" autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="number" class="form-lable">Your number</label>
                <input type="number" name="number" id="number"
                 class="form-control" placeholder="number" autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="datetime-local" class="form-lable">Appoiment date</label>
                <input type="datetime-local" name="date" id="name"
                 class="form-control">
            </div>
            
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="submit" class="btn btn-info mb-3 px-3" value="Make Appoiment">
            </div>

        </form>
    </div>
    <div class="container">
  <img src="img/home2.jpg" alt="Snow" style="width:100%; " class="rounded-pill">



  <div class="centered text-black"><h2>Our mission</h2><h4><i>A healthier smile is just the start. By eliminating barriers to dental care and by providing the highest standard of care, we empower people to change their lives.
</i></h4></div>
</div>
    <section style="color: #000; background-color: #f3f2f2;">
  <div class="container py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-xl-8 text-center">
        <h3 class="fw-bold mb-4">Patient Reviews</h3>
        <p class="mb-4 pb-2 mb-md-5 pb-md-0">
          
        </p>
      </div>
    </div>

    <div class="row text-center">
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card">
          <div class="card-body py-4 mt-2">
            <div class="d-flex justify-content-center mb-4">
              <img src="img/re3.jpeg"
                class="rounded-circle shadow-1-strong" width="100" height="100" />
            </div>
            <h5 class="font-weight-bold">Arya Stark</h5>

            <ul class="list-unstyled d-flex justify-content-center">
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star-half-alt fa-sm text-info"></i>
              </li>
            </ul>
            <p class="mb-2">
              <i class="fas fa-quote-left pe-2"></i>"Friendly relaxed atmosphere, professional; affordable and honest! State of the art new technology above and beyond! "
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card">
          <div class="card-body py-4 mt-2">
            <div class="d-flex justify-content-center mb-4">
              <img src="img/re2.jpeg"
                class="rounded-circle shadow-1-strong" width="100" height="100" />
            </div>
            <h5 class="font-weight-bold">Lakshani Chamodi</h5>
            <ul class="list-unstyled d-flex justify-content-center">
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
            </ul>
            <p class="mb-2">
              <i class="fas fa-quote-left pe-2"></i>Safety and Health, Good patient care, good facilities. Above standard. Can recommend anyone. First visit and see for yourself. "
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-0">
        <div class="card">
          <div class="card-body py-4 mt-2">
            <div class="d-flex justify-content-center mb-4">
              <img src="img/re1.jpeg"
                class="rounded-circle shadow-1-strong" width="100" height="100" />
            </div>
            <h5 class="font-weight-bold">Alexa Horwitz</h5>
            <ul class="list-unstyled d-flex justify-content-center">
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="far fa-star fa-sm text-info"></i>
              </li>
            </ul>
            <p class="mb-2">
              <i class="fas fa-quote-left pe-2"></i>
customer review
"This is a great place to take care of your teeth. They did a great job. I felt that I was in good hands. They explained very well what was going on. 
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Footer -->
<footer class="text-center text-lg-start .bg-dark.bg-gradient text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Medical Health Center
          </h6>
          <p>
          Discover the best dentists in Colombo for all your dental needs, providing cosmetic dentistry, dental implants, teeth whitening, general dentistry, orthodontics, pediatric dentiststry and more.
          </p>
        </div>
        <!-- Grid column -->

       

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> Colombo,Sri Lanka</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            healthcarecenter@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 94 702 417 066</p>
          <p><i class="fas fa-print me-3"></i> + 94 778 923 007</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Design by Umindu Deminda
    <a class="text-reset fw-bold">umindudeminda99@gmail.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<!-- bootstarp js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
