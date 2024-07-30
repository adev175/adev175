<?php
include 'config.php';

$sql = "SELECT id, title, content FROM notes";
$result = $conn->query($sql);

$notes = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $notes[] = $row;
    }
} else {
    echo "0 results";
}

$conn->close();

echo json_encode($notes);
?>
