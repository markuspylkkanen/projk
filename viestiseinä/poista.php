<?php
include "../db.php";


if(!isset($_GET['id'])) {
    die('Ei tarvittavia tietoja poistamiseen');
}

$id = $_GET['id'];

$sql = "DELETE FROM viestit WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Viesti poistettu";
} else {
    echo "viestiä ei voinut poistaa:" . $conn->error;
}

$conn->close();
?>