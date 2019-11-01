<?php
include "../db.php";


$id = $_GET['id'];

$sql = "UPDATE viestit SET hide = 0 WHERE id =$id";



if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "" . $conn->error;
}

$conn->close();
?>
