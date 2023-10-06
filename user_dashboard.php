<?php
// Start a session to track user login status
session_start();

// If the user is not logged in, redirect to the user login page
if (!isset($_SESSION['user_email'])) {
    header("Location: user_login.php");
    exit();
}
// You can retrieve user information from the session if needed
$username = $_SESSION['user_username'];
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel = "stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/20c5629a29.js" crossorigin="anonymous"></script>
    <style type="text/css">
            .nav-item.dropdown .dropdown-toggle.highlighted {
    color: #18021e; /* Set the text color of the highlighted username to white */
    padding: 0.25rem 0.75rem; /* Add some padding to the highlighted username */
    border-radius: 0.25rem; /* Add rounded corners to the highlighted username */
    font-weight: bold; /* Set the font-weight to bold for the highlighted username */
  }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img
            src="Logo.png"
            class="food-munch-logo"
          />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-link active" id="navItem1" href="#section1">
              Home
              <span class="sr-only">(current)</span>
            </a>
            <a class="nav-link" href="#section2" id="navItem2">About</a>
            <a class="nav-link" href="#wcuSection" id="navItem3">Services</a>
            <a class="nav-link" href="#followUsSection" id="navItem4">Follow Us</a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
  <div class="navbar-nav ml-auto">
    <!-- User Dashboard Dropdown -->
    <div class="nav-item dropdown">
      <a class="nav-link dropdown-toggle <?php echo $username ? 'highlighted' : ''; ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo $username; ?>
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="logout.php">Logout</a>
      </div>
    </div>
  </div>
</div>
          </div>
        </div>
      </div>
    </nav>
    <div class="banner-section-bg-container d-flex justify-content-center flex-column" id="section1">
      <div class="text-center">
        <h1 class="banner-heading mb-5">Welcome to RGUKT Xerox Centre</h1>
      </div>
    </div>
    <div class="delivery-and-payment-section pt-5 pb-5" id="section2" >
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-5 order-1 order-md-2">
            <div class="text-center mt-4">
              <img
                src="image.png"
                class="delivery-and-payment-section-img"
              />
            </div>
          </div>
          <div class="col-12 col-md-7 order-2 order-md-1">
            <h1 class="delivery-and-payment-section-heading mt-5">
              About Us
            </h1>
            <p class="delivery-and-payment-section-description mt-4">
              Welcome to our Xerox Center! We are your trusted destination for all your printing, copying, and document management needs. With a commitment to quality, efficiency, and exceptional customer service, we strive to deliver professional solutions for individuals and businesses alike.
              <br><br>At our Xerox Center, we understand the importance of reliable and timely document services. Whether you require black and white or color printing, high-resolution scanning, or efficient photocopying, we have the state-of-the-art equipment and expertise to meet your requirements. Our dedicated team of skilled professionals is always ready to assist you and provide personalized solutions to ensure your satisfaction.
              <br><br>
              Thank you for choosing our Xerox Center. We look forward to serving you and providing the highest quality printing and document services to meet your needs.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="wcu-section pt-5 pb-5 mb-3" id="wcuSection">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="wcu-section-heading">Our Services</h1>
            <p class="wcu-section-description">
              We use a better quality paper than a newspaper.
            </p>
          </div>

          <div class="col-12 col-md-4" id="uploads">
            <div class="wcu-card p-3 mb-3 shadow">
              <img
                src="https://cdn-icons-png.flaticon.com/512/99/99468.png?w=740&t=st=1689428469~exp=1689429069~hmac=0b738a60390af155f4e3650a42b93145467497240e8d59c7e9a8e3e6ba5aa5fc"
                class="wcu-card-image"
              />
              <h1 class="wcu-card-title mt-3">Print Outs</h1>
              <p class="wcu-card-description">
               Click here for all  black and white or color printing, high-resolution scanning, or efficient photocopying.
              </p>
            </div>
          </div>
          <div class="col-12 col-md-4" id="formss">
            <div class="wcu-card p-3 mb-3 shadow">
              <img
                src="https://cdn-icons-png.flaticon.com/512/766/766173.png?w=740&t=st=1689429029~exp=1689429629~hmac=28ed0f55b562e6c2794f75abb6bfb59b9d08433bc5377f6ea9079944f589d832"
                class="wcu-card-image"
              />
              <h1 class="wcu-card-title mt-3">Application Forms</h1>
              <p class="wcu-card-description">
                Are you in need of professionally designed and meticulously printed application forms? Click here.
              </p>
            </div>
          </div>
          <div class="col-12 col-md-4" id="records">
            <div class="wcu-card p-3 mb-3 shadow">
              <img
                src="https://m.media-amazon.com/images/I/41aQsZ+ViCL.jpg"
                class="wcu-card-image"
              />
              <h1 class="wcu-card-title mt-3">Record Books</h1>
              <p class="wcu-card-description">
                we are thrilled to present our exquisite collection of spiral books that are designed to elevate your productivity and creativity. 
          </div>
        </div>
      </div>
    </div>
<!-- Include Bootstrap JS and jQuery before the closing </body> tag -->
</p>
</div>
<div id="followUsSection">
  <footer class="footer">
    
  <div class="box-container">
      <div class="box text-left ml-5  pl-5">
         <h3>contact info</h3>
        <p><i class="fas fa-phone ic pr-2"></i>9908567843 <br><br></p>
          <p><i class="fas fa-phone ic pr-2"></i>6456890765 <br><br></p>
       <p> <i class="fas fa-envelope ic pr-2"></i>rguktg@gmail.com <br><br></p>
        <p> <i class="fas fa-map-marker-alt ic pr-2"></i>Nirmal, india - 400104 <br><br></p>
        
      </div>
      <div class="box ml-auto mr-5 pr-5">
        <div class="text-left"> 
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>
      </div>
      </div>
      <div><p class="credit"> &copy; 2023 RGUKT Xerox Centre. All rights reserved. </p></div>
  </footer>
  </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
        // Check if there's a registration message in the session
        var registrationMessage = "<?php echo isset($_SESSION['registration_message']) ? $_SESSION['registration_message'] : '' ?>";
        if (registrationMessage) {
            alert(registrationMessage);
            <?php unset($_SESSION['registration_message']); ?>
        }
  const uploads=document.getElementById('uploads');

  uploads.addEventListener('click', () => {
    window.location.href = 'upload.php';
  });
  const formss=document.getElementById('formss');

  formss.addEventListener('click', () => {
    window.location.href = 'form.php';
  });
  const records=document.getElementById('records');

  records.addEventListener('click', () => {
    window.location.href = 'record.php';
  });
</script>
  </body>
</html>