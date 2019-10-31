<?php
include "../db.php";

if(!isset($_GET['id'])) {
    die('Ei tarvittavia tietoja poistamiseen');
}

$id = $_GET['id'];

$sql = "UPDATE viestit SET hide = 1 WHERE id =$id";



if ($conn->query($sql) === TRUE) {
    echo "Piilotettu";
} else {
    echo "Ei piilotettu" . $conn->error;
}

$conn->close();
?>
