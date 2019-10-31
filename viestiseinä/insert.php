<?php



// Kirjoitetaan data tekstitiedostoon
if (filter_has_var(INPUT_POST, 'submit')){
    
    var_dump($_POST['name']);
    
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
        $error = "Palautetta ei ole jätetty"; 
        header("Location: index.php?error=".$error);
        die();  
    }
    
    
    $myfile = fopen("tiedot.txt", "a") or die("Tallennus ei onnistu");
    $rivi = "$name;$message\n";
    fwrite($myfile, $rivi);
    fclose($myfile);

    include "db.php";

    $sql = "INSERT INTO viestit (viesti, pvm, nimi)
    VALUES ('$message', '$date', '$name')";

    if ($conn->query($sql) === TRUE) 
    {
        header('Location: naytaviestit.php');
    }
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

}
?>
