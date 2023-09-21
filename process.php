<?php
// Establish a database connection (Replace these with your own database credentials)
$host = "sql12.freesqldatabase.com";
$username = "sql12647941";
$password = "your_password";
$database = "https://www.phpmyadmin.co/db_structure.php?server=1&db=sql12647941";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$name = $_POST['name'];
$email = $_POST['email'];

// Insert data into the MySQL database
$sql = "INSERT INTO grtdatabase (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Data stored successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
