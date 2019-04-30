<?php
// Kirjoitetaan data tekstitiedostoon
if (filter_has_var(INPUT_POST, 'submit')){
    $name = $_POST['name'];
    $message = $_POST['message'];
    $date = date("Y-m-d");
    if (strlen($name) <= 0)
    {
        $error = "Nimeä ei ole syötetty"; 
        header("Location: index.php?error=".$error);
        die();  
    }
    if (strlen($message) <= 0)
    {
        $error = "Viestiä ei ole jätetty"; 
        header("Location: index.php?error=".$error);
        die();  
    }
    
    
    $myfile = fopen("tiedot.txt", "a") or die("");
    $rivi = "$name;$message\n";
    fwrite($myfile, $rivi);
    fclose($myfile);

    include "db.php";

    $sql = "INSERT INTO viestit (viesti, pvm, nimi)
    VALUES ('$name', '$date', '$message')";

    if ($conn->query($sql) === TRUE) 
    {
        header('Location: http://localhost/projk2/viestisein%C3%A4/n%C3%A4yt%C3%A4viestit.php');
    }
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

}
?>
