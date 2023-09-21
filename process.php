<?php
// Establish a database connection (Replace these with your own database credentials)
$host = "sql12.freesqldatabase.com";
$port = "3306";
$username = "sql12647941";
$password = "XpFRXJHHxu";
$database = "sql12647941";

$conn = new mysqli($servername . ":" . $port, $username, $password, $dbname);

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
