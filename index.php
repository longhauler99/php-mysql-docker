
<?php
// Database connection parameters
$servername = "db"; // Change this to your MySQL server hostname
$username = "root"; // Change this to your MySQL username
$password = "root"; // Change this to your MySQL password
$database = "cajcms2"; // Change this to your MySQL database name
 
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data from the table
$sql = "SELECT * FROM feedback"; // Change 'your_table' to your table name
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Feedback Type</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["FeedbackID"] . "</td><td>" . $row["firstName"] . "</td><td>" . $row["feedbackType"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results found..";
}

// Close connection
$conn->close();
?>
