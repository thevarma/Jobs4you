<?php
// Include the database connection
include 'database.php';

// SQL to create table
$sql = "CREATE TABLE form_submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Execute query
if ($conn->query($sql) === TRUE) {
    echo "Table 'form_submissions' created successfully!";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>
