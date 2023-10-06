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


 body {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            padding: 20px;
        }

        h1 {
            margin-bottom: 30px;
            font-size: 36px;
            text-align: center;
            text-transform: uppercase;
            color: #555;
        }

        /* Container for the cards */
        .cards-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .food-munch-logo{
        height : 30px;
     }
        .card {
            flex: 0 0 calc(33.33% - 20px); /* Adjust card width to show three cards per row */
            margin-bottom: 20px;
            background-color:white;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card h2 {
            margin-top: 0;
            font-size: 20px;
            color: #007BFF;
            margin-bottom: 10px;
        }

        .card p {
            margin: 5px 0;
            color: #666;
            font-size: 14px;
            line-height: 1.4;
        }

        .card-buttons {
            margin-top: 10px;
        }

        .card-buttons button {
            margin-right: 5px;
            border-radius: 3px;
            transition: background-color 0.3s ease;
        }

        /* Styling for buttons */
        .view-btn {
            background-color: #007BFF;
            color: #fff;
        }

        .view-btn:hover {
            background-color: #0056b3;
        }

        .send-mail-btn {
            background-color: #ffc107;
            color: #333;
        }

        .send-mail-btn:hover {
            background-color: #d39e00;
            color: #333;
        }

        .delete-btn {
            background-color: #dc3545;
            color: #fff;
        }

        .delete-btn:hover {
            background-color: #c82333;
        }

        /* Mark as done */
        .mark-done {
            background-color: #28a745;
            color: #fff;
        }

        .mark-done .card {
            background-color: #e9f7ef;
            border-color: #1c7430;
        }

        /* Add hover effect to cards */
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Add styles for special effects */
        .special-effect {
            animation: specialEffect 0.5s infinite alternate;
        }

        @keyframes specialEffect {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(1.1);
            }
        }

        /* Media Query for smaller screens */
        @media (max-width: 768px) {
            .cards-container {
                justify-content: center;
            }

            .card {
                flex: 0 0 calc(50% - 20px);
            }
        }
                .cards-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start; /* Change justify-content to flex-start */
            margin: -10px; /* Add negative margin to remove space between cards */
        }

        .card {
            flex: 0 0 calc(33.33% - 20px);
            margin: 10px; /* Add margin to each card */
            /* Rest of your card styling */
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
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <div class="container cards-container">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "kgf";

            // Create a connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check the connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Retrieve all data from the files_table
            $sql = "SELECT * FROM files_table";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $name = $row['name'];
                    $email = $row['email'];
                    $numberOfCopies = $row['number_of_copies'];
                    $numberOfPages = $row['number_of_pages'];
                    $fileName = $row['file_name'];
                    $fileId = $row['id'];
                    $paymentProofFileName = $row['payment_proof_file_name'];

                    // Display the data in a card
                    echo '<div class="card">';
                    echo "<h2>Order for: $name</h2>";
                    echo "<p>Email: $email</p>";
                    echo "<p>Number of Copies: $numberOfCopies</p>";
                    echo "<p>Number of Pages: $numberOfPages</p>";
                    echo "<p>File Name: $fileName</p>";
                    echo "<div class='card-buttons'>";
                    echo "<button class='btn view-btn' onclick='viewFile($fileId)'>View pdf</button>";
                    echo "<button class='btn view-btn mb-2' onclick='viewpayFile($fileId)'>View payment</button>";
                    echo "<button class='btn send-mail-btn' onclick='sendMail($fileId, \"$email\")'>Send Mail</button>";
                    echo "<button class='btn delete-btn' onclick='confirmDelete($fileId)'>Delete</button>";
                    echo "</div>";
                    echo '</div>';
                }
            } else {
                echo "No data found.";
            }
            $conn->close();
            ?>
        </div>
    </div>
    <footer class="footer">
      <p>&copy; 2023 RGUKT Xerox Centre. All rights reserved.</p>
  </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        function viewFile(rowId) {
            window.location.href = "files/view_pdf.php?id=" + rowId;
        }

        function viewpayFile(rowId) {
            window.location.href = "files/view_payment_proof.php?id=" + rowId;
        }

        function sendMail(rowId, email) {
          if (confirm("sent successfully")){
            window.location.href = "files/send_email.php?id=" + rowId + "&email=" + email;
        }
      }

        function confirmDelete(rowId) {
            if (confirm("Are you sure you want to delete this row?")) {
                window.location.href = "files/delete_row.php?id=" + rowId;
            }
        }
    </script>
</body>
</html>