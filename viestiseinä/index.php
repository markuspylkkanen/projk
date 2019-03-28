<?php
echo date("l jS \of F Y h:i:s A") . "<br>";



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
      
        <form action="insert.php" method="POST">
            <div class="form-group">
                <label></label>
                <input type="text" name="name" class="form-control" placeholder="Nimi:">
            </div>
    <br>
            <div class="form-group">
                <label></label>
                <textarea name="message" class="form-control" placeholder="Kirjoita palautetta:"></textarea> 
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

