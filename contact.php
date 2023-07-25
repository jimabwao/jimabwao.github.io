<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EVAcare Home Health </title>
  <link rel="stylesheet" href='style.css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- whatsapp css -->
    <link rel="stylesheet" href="whatsapp/floating-wpp.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxY21kU9j7GY_wjlTPtjdDXG-MZKVGMYA"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


 
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">
        <img src="images/My project (1).png" alt="logo" width= "150"> EVAcare Home Health </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Services.html">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="About.html">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="testimonials.html">Testimonials</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog & Resources</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Privacy Policy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Careers</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>
  
  <!-- hero section -->
 
 <section class="jumbotron text-center">
    <div class="container py-5">
        <div class="text">
      <h1>Contact Us</h1>
        </div>
    </div>
  </section>

  <!-- Page Content -->
  <section class="container py-5">

    <div class="row">
      <div class="col-md-6">
        <div id="map"></div>
        <button class="btn btn-primary" onclick="openGoogleMaps()">Get Directions</button>
      </div>

      <div class="col-md-6">
          <div class="card text-center">
              <div class="card-p">
        <h2 class="con-text">Contact Information</h2>
        <p><strong>EVAcare Home Health</strong></p>
        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>   355 Pawtucket boulevard Lowell Massachusetts</p>
        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>   +1(978)8363285 or +1(978)2424108</p>
        <p class="mb-2"><i class="fa fa-envelope me-3"></i>   felistusngumbi@gmail.com</p>
        <p><strong>Hours</strong></p>
        <p class="mb-2">Mon: 9am to 6pm</p>
        <p class="mb-2">Tue: 9am to 6pm</p>
        <p class="mb-2">Wed: 9am to 6pm</p>
        <p class="mb-2">Thu: 9am to 6pm</p>
        <p class="mb-2">Fri: 9am to 6pm</p>
        <p class="mb-2">Sat: 1oam to 6pm</p>
        <p class="mb-2">Sun: 10am to 6pm</p>
      </div>
      </div>
      </div>
    </div>
  </section>
  
  <!-- contact form -->
  
  <section class="container py-5">
      <h3 class="con-text text-center">Contact Us</h3>
      <form class="contact-form" action="contactform.php" method="post">
          
          <!-- honeypot -->
          <input type="text" name="_honey" style="display: none;"
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" name="name" class="form-control" required>
          </div>
          <div class="form-group">
              <label for="mail">Email</label>
              <input type="email" name="mail" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" name="phone" class="form-control" required>
          </div>
          <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" name="subject" class="form-control" required>
          </div>
          <div class="form-group">
               <label for="message">Message</label>
               <textarea name="message" class="form-control" rows="5" required></textarea>
          </div>
          <button class="btn btn-primary" type="submit" name="submit">Send Message</button>
      </form>
  </section>

  <!-- Footer -->
  <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a class="btn btn-link" href="About.html">About Us</a>
                    <a class="btn btn-link" href="#">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>   355 Pawtucket boulevard Lowell Massachusetts</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>   +1(978)8363285 or +1(978)2424108</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>   felistusngumbi@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                    <div class=" text-center py-3">
                        &copy; 2023 EVAcare Home Health. All rights reserved.
                    </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://getbootstrap.com/"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
  <script>
    function initMap() {
      var location = { lat: 42.642410827471764, lng: -71.3475273288357};

      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        center: location
      });

      var marker = new google.maps.Marker({
        position: location,
        map: map,
        title: 'EVAcare Home Health'
      });
    }

    function openGoogleMaps() {
      window.open('https://goo.gl/maps/fK838DcqjWFeVFhn8', '_blank');
    }
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxY21kU9j7GY_wjlTPtjdDXG-MZKVGMYA&callback=initMap"></script>
</body>
</html>
