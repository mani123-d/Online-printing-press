<?php
// Check the login type (user or admin)
if (isset($_GET['login_type'])) {
    $login_type = $_GET['login_type'];

    // Redirect to the appropriate login page based on the login type
    if ($login_type === 'user') {
        header("Location: user_login.php");
    } elseif ($login_type === 'admin') {
        header("Location: admin_login.php");
    } else {
        // Invalid login type, redirect back to the home page
        header("Location: index.php");
    }
} else {
    // No login type specified, redirect back to the home page
    header("Location: index.php");
}
?>
