<?php
$name = "";
$message = "";



if (filter_has_var(INPUT_POST, 'submit')){
}
?>
<!DOCTYPE html>
<html>
<head>

    <title>Viestiseinä</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header"> 
                <a class="navbar-brand" href="index.php">Viestiseinä</a>
            </div>
        </div>
    </nav>
    <div class="container">
      
        <form action="http://localhost/projk/n%C3%A4yt%C3%A4viestit/n%C3%A4yt%C3%A4viestit.html" method="post">
            <div class="form-group">
                <label>Nimi:</label>
                <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
            </div>
    
            <div class="form-group">
                <label>Kirjoita palautetta:</label>
                <textarea name="message" class="form-control" ><?php echo $message;?></textarea> 
                <br>
              
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


?>

