<?php
// Connect to the database (adjust credentials as needed)
$conn = new mysqli("localhost", "username", "password", "database");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $content = $_POST['courseContent'];

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO courses (content) VALUES (?)");
    $stmt->bind_param("s", $content);
    $stmt->execute();
    $stmt->close();

    echo "Course saved successfully!";
}
?>
