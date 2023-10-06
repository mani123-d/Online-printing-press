<?php
// Initialize an empty message variable
$message = "";

// If the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Retrieve the submitted form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $userpassword = $_POST['password'];

    // Check if the username or email already exists
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Username or email already taken, set an error message
        $error = "Username or email already taken";
        echo "<script>alert('$error'); window.location='index.html';</script>";
    } else {
        // Insert the new user into the database
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$userpassword')";

        if (mysqli_query($conn, $query)) {
            // Registration successful, set a success message
            // Start a session and store user data
            session_start();
            $_SESSION['user_email'] = $email;
            $_SESSION['user_username'] = $username;
            // Redirect to user dashboard after displaying the message
            $_SESSION['registration_message'] = "Registration successful";
            header("Location: user_dashboard.php");
            exit();
        } else {
            // Something went wrong, set an error message
            $message = "Error: " . mysqli_error($conn);
        }
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
