<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the submitted form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the admin email and password are correct
    if ($email === 'sweety@gmail.com' && $password === 'sweety@14') {
        // Start a session to track admin login status
        session_start();

        // Admin credentials are correct, set session variable and redirect to the admin dashboard
        $_SESSION['admin_email'] = $email;
        header("Location: admin_dashboard.php");
        exit();
    } else {
        // Invalid credentials, show an error message
        $error = "Invalid email or password";
    }
}
?>
