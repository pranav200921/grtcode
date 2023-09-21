<?php
// Establish a database connection (Replace these with your own database credentials)
$host = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database_name";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve search criteria from the form
$search_name = $_POST['search_name'];

// Perform a search in the MySQL database
$sql = "SELECT * FROM your_table_name WHERE name LIKE '%$search_name%'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Search Results:</h2>";
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row['name'] . "<br>";
        echo "Email: " . $row['email'] . "<br><br>";
    }
} else {
    echo "No results found.";
}

$conn->close();
?>
