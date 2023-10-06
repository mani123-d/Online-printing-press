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

$servername = "localhost";
$db_username = "root"; // Changed to a different variable name to avoid conflict
$db_password = "";
$dbname = "kgf";

// Create a connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from the form
    $name = $_SESSION['user_username'];
    $email = $_SESSION['user_email'];
    $copies = $_POST['copies'];
    $file = $_FILES['myFile']['tmp_name'];
    $fileName = $_FILES['myFile']['name'];

    // Prepare and bind the SQL query with placeholders
    $stmt = $conn->prepare("INSERT INTO forms_table (name, email, copies, file_name, file) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $name, $email, $copies, $fileName, $fileData);

    // Read the file data and bind it to the query parameters
    $fileData = file_get_contents($file);
    $stmt->send_long_data(4, $fileData);

    // Execute the statement
    if ($stmt->execute()) {
                $lastInsertedId = $conn->insert_id;
        echo "Data stored successfully.";
        // Redirect to payment.php with the ID parameter
        header("Location: payment.php?id=$lastInsertedId");
        exit();
    } else {
        echo "Error storing data: " . $stmt->error;

    }

    // Close the statement
    
}

// Close the connection
$conn->close();
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
        /*background-image: linear-gradient(to top, #51abdd, #e1f5fe);*/
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

      .food-munch-logo{
        height : 30px;
     }

.forms-card-image {
    width: 100px;
    height: 100px;
  }
  .forms-card-title {
    color: #323f4b;
    font-family: "Roboto";
    font-size: 18px;
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
    background-color: white;
    border-style: solid;
    border-width: 1px;
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
  <div class="body1 extraclass">
     < <div class="wcu-section pt-5 pb-5 mt-5" id="wcuSection">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-4">
              <div class="wcu-card p-3 mb-3 shadow" onclick="aff1()">
                <img
                  src="forms.jpg"
                  class="forms-card-image"
                />
                <h1 class="forms-card-title mt-3" id="f1">Application for Room Allotment to Appear for Remedial.</h1>
                <p class="forms-card-description">
                  Price : Rs.<span id="am1">60 </span>
                </p>
              </div>
            </div>
            <div class="col-12 col-md-4" onclick="aff2()">
              <div class="wcu-card p-3 mb-3 shadow">
                <img
                  src="forms5.jpg"
                  class="forms-card-image"
                />
                <h1 class="forms-card-title mt-3" id="f2">Outpass Form</h1>
                <p class="forms-card-description">
                  Price : Rs.<span id="am2">2 </span>
                </p>
              </div>
            </div>
            <div class="col-12 col-md-4" onclick="aff3()">
              <div class="wcu-card p-3 mb-3 shadow">
                <img
                  src="https://1.bp.blogspot.com/--yIiAQKxVkY/X9OPc2gRnAI/AAAAAAAAAJA/nOenWCHt2-EAnvZWQuIUonSO7JuBq6lmQCPcBGAsYHg/s2197/Income%2BDeclaration%2BFormat.jpg"
                  class="forms-card-image"
                />
                <h1 class="forms-card-title mt-3" id="f3">Income Affidavit</h1>
                <p class="forms-card-description">
                  Price : Rs.<span id="am3">50</span>
            </div>
          </div>
          <div class="col-12 col-md-4" onclick="aff4()">
            <div class="wcu-card p-3 mb-3 shadow">
              <img
                src="forms3.jpg"
                class="forms-card-image"
              />
              <h1 class="forms-card-title mt-3" id="f4">Application for parent ID Card.</h1>
              <p class="forms-card-description">
                Price : Rs.<span id="am4">10</span>
              </p>
            </div>
          </div>
          <div class="col-12 col-md-4" onclick="aff5()">
            <div class="wcu-card p-3 mb-3 shadow">
              <img
                src="forms4.jpg"
                class="forms-card-image"
              />
              <h1 class="forms-card-title mt-3" id="f5">Application for Hostel Room Exchange.</h1>
              <p class="forms-card-description">
                Price : Rs.<span id="am5">6</span>
              </p>
            </div>
          </div>
          <div class="col-12 col-md-4" onclick="aff6()">
            <div class="wcu-card p-3 mb-3 shadow">
              <img
                src="forms6.jpg"
                class="forms-card-image"
              />
              <h1 class="forms-card-title mt-3" id="f6">Application for Upadting Parent Mobile Number.</h1>
              <p class="forms-card-description">
                Price : Rs.<span id="am6">5 </span>
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
<script >
  

function aff3()
{
  const price = Number(document.getElementById('am3').textContent);
  let title = document.getElementById('f3');
  let value=title.textContent;
  localStorage.setItem('formName', value);
  localStorage.setItem('price', price);
  window.location.href="affidivit.php";
}
function aff2()
{
  const price = Number(document.getElementById('am2').textContent);
  let title = document.getElementById('f2');
  let value=title.textContent;
  localStorage.setItem('formName', value);
  localStorage.setItem('price', price);
  window.location.href="affidivit.php";
}
function aff1()
{
  console.log("yes");
  const price = Number(document.getElementById('am1').textContent);
  let title = document.getElementById('f1');
  let value=title.textContent;
  localStorage.setItem('formName', value);
  localStorage.setItem('price', price);
  window.location.href="affidivit.php";
}
function aff4()
{
  const price = Number(document.getElementById('am4').textContent);
  let title = document.getElementById('f4');
  let value=title.textContent;
  localStorage.setItem('formName', value);
  localStorage.setItem('price', price);
  window.location.href="affidivit.php";
}
function aff5()
{
  const price = Number(document.getElementById('am5').textContent);
  let title = document.getElementById('f5');
  let value=title.textContent;
  localStorage.setItem('formName', value);
  localStorage.setItem('price', price)
  window.location.href="affidivit.php";
}
function aff6()
{
  const price = Number(document.getElementById('am6').textContent);
  let title = document.getElementById('f6');
  let value=title.textContent;
  localStorage.setItem('formName', value);
  localStorage.setItem('price', price)
  window.location.href="affidivit.php";
}
</script>
  </body>
</html>



