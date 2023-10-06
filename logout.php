<?php
// Start a session to track user login status
session_start();

// Destroy the session and redirect to the login page
session_destroy();
header("Location: index.html");
exit();
?>
