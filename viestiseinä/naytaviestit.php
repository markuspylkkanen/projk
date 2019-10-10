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

    <div class="row">

            <?php if ($result->num_rows > 0): ?>
                
                <?php  while($row = $result->fetch_assoc()): ?>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row["nimi"]?></h5>
                                <p class="card-text">
                                    <?php echo $row["viesti"]?>
                                </p>
                                <p><?php echo $row["pvm"]?></p>
                                            
                            </div>       
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        
        </div>
    </div> 
</div>
<button onclick="window.location.href = 'http://localhost/projk2/yll%C3%A4piton%C3%A4kym%C3%A4/yll%C3%A4piton%C3%A4kym%C3%A4.php';">Admin</button>
</body>
</html>