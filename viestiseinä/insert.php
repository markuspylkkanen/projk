<?php
// Kirjoitetaan data tekstitiedostoon
if (filter_has_var(INPUT_POST, 'submit')){
    $name = $_POST['name'];
    $message = $_POST['message'];
    
    $myfile = fopen("tiedot.txt", "a") or die("");
    $rivi = "$name;$message\n";
    fwrite($myfile, $rivi);
    fclose($myfile);

    // Tallennetaan tiedot kantaan
    $servername = "localhost";
    $username = "root";
    $password = "qwerty";
    $dbname = "seina";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "INSERT INTO viestit (viesti, pvm, nimi)
    VALUES ('$name', 'value2', '$message')";

    if ($conn->query($sql) === TRUE) 
    {
        header('Location: http://localhost/projk/n%C3%A4yt%C3%A4viestit/n%C3%A4yt%C3%A4viestit.html');
    }
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

}
?>
