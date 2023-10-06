<?php
// Start a session to track user login status
session_start();


// If the user is already logged in, redirect to the user dashboard or any other page
if (isset($_SESSION['user_email'])) {
    header("Location: user_dashboard.php");
    exit();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the submitted form data
    $email = $_POST['email'];
    $userpassword = $_POST['password'];

    // Database connection credentials
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "kgf";

    // Create a database connection
    $conn = mysqli_connect($host, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Validate the user's credentials
    $query = "SELECT * FROM users WHERE email='$email' AND password='$userpassword'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // User credentials are correct, set session variables and redirect to the user dashboard
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_email'] = $email;
        $_SESSION['user_username'] = $row['username'];
       header("Location: user_dashboard.php");
        exit();
    } 
        elseif (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }
    else {
        // Invalid credentials, show an error message
        $error = "Invalid email or password";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
