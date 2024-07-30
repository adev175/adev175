<?php
include 'config.php';

$title = $_POST['title'];
$content = nl2br($_POST['content']); // Convert new lines to <br>

$sql = "INSERT INTO notes (title, content) VALUES ('$title', '$content')";

if ($conn->query($sql) === TRUE) {
    echo "Note saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
