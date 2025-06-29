<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Mandela";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$table_name = "user";
$check_table_query = "SHOW TABLES LIKE '$table_name'";
$table_exists = $conn->query($check_table_query);

if ($table_exists && $table_exists->num_rows > 0) {
} else {
    // SQL to create 'users' table
    $sql = "CREATE TABLE $table_name (
        fullname VARCHAR(30) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        phone VARCHAR(10) NOT NULL,
        username VARCHAR(30) NOT NULL PRIMARY KEY,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error creating table: " . $conn->error . "<br>";
    }
}


