<?php
session_start();
// Database credentials
$host = "localhost"; // Change this if your database is hosted on a different server
$username = "root"; // Change this to your MySQL username
$password = "root"; // Change this to your MySQL password
$database = "research_work"; // Change this to your MySQL database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
