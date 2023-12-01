<?php
// Database connection
$servername = "localhost";
$username = "appuser";
$password = "AppUser2024!";
$dbname = "myphrTest";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Insert data into the "contactus" table
    $sql = "INSERT INTO contactus (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Your message was successfully sent!'); window.location.href='index.html';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
