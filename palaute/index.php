<?php
$msg = '';
$msgClass = '';
$name = "";
$email = "";
$message = "";
$puh ="";


if (filter_has_var(INPUT_POST, 'submit')){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $puh = $_POST['puh'];
   

    if(!empty($email) && !empty($name) && !empty($message)){
        $msg = 'Palaute lähetetty';
        $msgClass = 'alert-success';
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        $msg = 'Syötä kelvollinen sähköpostiosoite.';
        $msgClass = 'alert-danger';
        } else {
           
            $myfile = fopen("newfile.txt", "a") or die("");
            $rivi = "$name;$email;$message;$puh\n";
            fwrite($myfile, $rivi);
            fclose($myfile);

        }
    } else { 
        $msg = 'Täytä pakolliset kentät.';
        $msgClass = 'alert-danger';
    }

}


?>
<!DOCTYPE html>
<html>
<head>

    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header"> 
                <a class="navbar-brand" href="index.php">Palaute lomake</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php if($msg != ''): ?>
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
        <?php endif; ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Nimimerkki:</label>
                <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
            </div>
            <div class="form-group">
                <label>Sähköposti:</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email;?>">
            </div>
            <div class="form-group">
                <label>Kirjoita palautetta:</label>
                <textarea name="message" class="form-control" ><?php echo $message;?></textarea> 
                <br>
                <div class="form-group">
                <label>Puhelinnumero: (Ei pakollinen)</label>
                <input type="number" name="puh" class="form-control" value="<?php echo $puh;?>">  
            </div>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Lähetä</button>
        </form>
    </div>
    </div>
</body>
</html>
<?php

$to      = 'maksu.pylkkanen@gmail.com';
$subject = 'on';
$message = '5/5';
$headers = 'From: markus.pylkkanen@esedulainen.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>





