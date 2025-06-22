<?php
// 1. Connect to the database
$servername = "localhost"; // or 127.0.0.1
$username = "root";        // change if different
$password = "";            // change if there's a password
$database = "portfolio_data"; // change this

$conn = new mysqli($servername, $username, $password, $database);

// 2. Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 3. Get data from form
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['type'];

// 4. Prepare and insert into table
$sql = "INSERT INTO contacts (name, email, mobile, message) 
        VALUES ('$name', '$email', '$mobile', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Message submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// 5. Close connection
$conn->close();
?>
