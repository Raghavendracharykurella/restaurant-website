<?php
/**
 * Database Connection Configuration
 * 
 * This file establishes connection to MySQL database
 * for the restaurant website
 */

// Database credentials
$servername = "localhost";
$username = "root";           // Change this to your database username
$password = "";               // Change this to your database password
$dbname = "restaurant";       // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to utf8 for proper handling of special characters
$conn->set_charset("utf8");

// Uncomment below line for debugging
// echo "Connected successfully";
?>
