<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Add your authentication logic here

    if (/* Your authentication logic */) {
        // Successful login, redirect or perform other actions
        header("Location: welcome.php"); // Change "welcome.php" to your desired destination
        exit();
    } else {
        // Incorrect username or password, display error message
        echo "<p>Incorrect username or password</p>";
    }
}
?>
