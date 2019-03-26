<?php

echo date("l jS \of F Y h:i:s A") . "<br>";

// Kirjoitetaan data tekstitiedostoon
if (filter_has_var(INPUT_POST, 'submit')){
    $name = $_POST['name'];
    $message = $_POST['message'];
    
    $myfile = fopen("tiedot.txt", "a") or die("");
    $rivi = "$name;$message\n";
    fwrite($myfile, $rivi);
    fclose($myfile);
}

// Tallennetaan tiedot kantaan
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";



$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>