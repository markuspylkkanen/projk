<?php

include "db.php";
$sql = "SELECT viesti, pvm, nimi FROM viestit";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">  
    <link rel="stylesheet" type="text/css" href="näytäviestit.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">  
    <title>Uusimmat viestit</title>
    <style>

    .card-title {
    color: black
    }
    .header-row {
        margin: 50px auto;
    }
    </style>
</head>
<body>
<div class="container">
    <div class="row header-row">
        <div class="col-lg">
            <h1>Uusimmat viestit</h1>
        </div>
    </div>

    

    <?php if ($result->num_rows > 0): ?>
        <?php  while($row = $result->fetch_assoc()): ?>


            <p><?php echo $row["viesti"]?></p>
            <p><?php echo $row["nimi"]?></p>
            <p><?php echo $row["pvm"]?></p>


        <?php endwhile; ?>



        <div class="row">
            <div class="col-sm">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                                    
                    </div>       
                </div>
            </div>
        </div>

    <?php endif; ?>
    
</div>
</body>
</html>