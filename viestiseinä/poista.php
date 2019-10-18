<?php
include "../db.php";



$sql = "DELETE FROM viestit WHERE id=";

if ($conn->query($sql) === TRUE) {
    echo "Viesti poistettu";
} else {
    echo "viestiä ei voinut poistaa:" . $conn->error;
}

$conn->close();
?>