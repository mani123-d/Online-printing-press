<?php
// Start a session to track user login status
session_start();

// If the admin is not logged in, redirect to the login page
if (!isset($_SESSION['admin_email'])) {
    header("Location: login.php");
    exit();
}
$username = "admin";
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/20c5629a29.js" crossorigin="anonymous"></script>
    <style type="text/css">
              @import url("https://fonts.googleapis.com/css2?family=Bree+Serif&family=Caveat:wght@400;700&family=Lobster&family=Monoton&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display+SC:ital,wght@0,400;0,700;1,700&family=Playfair+Display:ital,wght@0,400;0,700;1,700&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,700&family=Work+Sans:ital,wght@0,400;0,700;1,700&display=swap");
                .custom-button {
    color: #fff;
    background-color: #51abdd;
    width: 150px;
    height: 50px;
    border-width: 0;
    border-radius: 25px;
    font-weight: 600;
    font-size: 18px;
    cursor: pointer;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: background-color 0.2s ease-in-out; /* Add a transition effect */
  }

  /* Add the hover effect for the custom button */
  .custom-button:hover {
    background-color: #0056b3;
  }

.navbar-brand img {
  max-height: 50px; /* Limit the height of the logo */
}

  .footer {
    background-color: #3f90e1;
    text-align: center;
    margin-top: auto; /* Add this line to center-align the footer */
    padding: 1px 0; /* Add some padding to the footer for better appearance */
    color: #fff; /* Change the text color to white */
    font-family: "Roboto";
    font-size: 14px;
  }

      .footer p {
      text-align: center;
margin-top: unset;
padding: 8px;
margin-bottom: unset;
    }
          #navItem1,
      #navItem2,
      #navItem3,
      #navItem4,
      #loginButton,
      #navItem6 {
        color: black;
        font-family: "Roboto";
        font-weight: 600;
      }

      /* Updated styles for the navigation bar */
  .navbar {
    background-image: linear-gradient(to bottom, #51abdd, #e1f5fe); /* Use a gradient for the background */
        background-image: linear-gradient(to top, #51abdd, #e1f5fe);
    padding: 10px 0;
    transition: background-image 0.4s ease-in-out; /* Add a transition effect */
  }

      .navbar-brand img {
        max-height: 50px;
      }

      .navbar-nav .nav-link {
        color: white; /* White text color for nav links */
        font-size: 16px;
        margin-left: 20px;
        transition: color 0.2s ease-in-out;
      }

      .navbar-nav .nav-link:hover {
        color: #0056b3; /* Hover color on the nav links */
      }

      .navbar-toggler {
        border: none; /* Remove border from toggler button */
      }

      .navbar-toggler-icon {
        background-color: white; /* White color for toggler icon */
      }

      .navbar-collapse {
        justify-content: flex-end; /* Align items to the right */
      }

      /* Add a box shadow on hover */
      .navbar:hover {
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }


.forms-card-image {
    width: 100px;
    height: 100px;
  }
  .forms-card-title {
    color: #323f4b;
    font-family: "Roboto";
    font-size: 22px;
    font-weight: 500;
    text-decoration : underline ;
  }
  .forms-card-description {
    color: blue;
    font-family: "Roboto";
    font-size: 16px;
  }

  .wcu-section {
    background-color: #f9fbfe;
  }


  .wcu-card {
    text-align: center;
    background-color:white ;
    border-style: solid;
    border-width: 2px;
    border-color: #e5eaf4;
    border-radius: 16px;
    transition: transform 0.2s ease;
  }

  .wcu-card:hover {
    transform: scale(1.1);
  }

      /* Stick the footer to the bottom and make it full width */
      .footer {
        background-color: #3f90e1;
        text-align: center;
        color: #fff;
        font-family: "Roboto";
        font-size: 14px;
        position: absolute;
        bottom: 0;
        width: 100%;
        padding: 8px;
      }

      .footer p {
        margin: 0;
      }
           body {
        background-color: #f9fbfe;
      }
      .extraclass
      {
        background-color: #f9fbfe;

      }

      .body1 {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Use viewport height for centering */
      }

      .food-munch-logo{
        height : 30px;
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
            <a class="nav-link" href="#wcuSection" id="navItem3">Services</a>
            <a class="nav-link" href="#followUsSection" id="navItem4">Follow Us</a>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <!-- User Dashboard Dropdown -->
          <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $username; ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Profile</a>
              <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
          </div>
        </div>
      </div>
          </div>
        </div>
      </div>
    </nav>
  <div class="body1 extraclass">
        <div class="col-12 col-md-4" onclick="aff1()">
            <div class="wcu-card p-3 mb-3 shadow">
              <img
                src="https://cdn-icons-png.flaticon.com/512/99/99468.png?w=740&t=st=1689428469~exp=1689429069~hmac=0b738a60390af155f4e3650a42b93145467497240e8d59c7e9a8e3e6ba5aa5fc"
                class="forms-card-image"
              />
              <h1 class="forms-card-title mt-3" id="f4">Files</h1>
              <p class="forms-card-description">
               
              </p>
            </div>
          </div>
          <div class="col-12 col-md-4" onclick="aff2()">
            <div class="wcu-card p-3 mb-3 shadow">
              <img
                src="https://cdn-icons-png.flaticon.com/512/766/766173.png?w=740&t=st=1689429029~exp=1689429629~hmac=28ed0f55b562e6c2794f75abb6bfb59b9d08433bc5377f6ea9079944f589d832"
                class="forms-card-image"
              />
              <h1 class="forms-card-title mt-3" id="f5">Forms</h1>
              <p class="forms-card-description">
                
              </p>
            </div>
          </div>
          <div class="col-12 col-md-4" onclick="aff3()">
            <div class="wcu-card p-3 mb-3 shadow">
              <img
                src="https://m.media-amazon.com/images/I/41aQsZ+ViCL.jpg"
                class="forms-card-image"
              />
              <h1 class="forms-card-title mt-3" id="f6">Records</h1>
              <p class="forms-card-description">
                
              </p>
            </div>
          </div>
        </div>
      </div>
       
    </div>
  <footer class="footer">
      <p>&copy; 2023 RGUKT Xerox Centre. All rights reserved.</p>
  </footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
function aff3()
{
  window.location.href="display_records_table.php";
}
function aff2()
{
  window.location.href="display_forms_table.php";
}
function aff1()
{
  window.location.href="display_file_table.php";
}
</script>
  </body>
</html>