<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">   
    <link rel="stylesheet" type="text/css" href="ylläpitonäkymä.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Ylläpitonäkymä</title>
    <style>
    .viesti {
        margin-top: 15px;
    }
    h2 {
    text-align: center;
    }
    </style>


</head>
<body>
<i><h2>Ylläpitonäkymä</h2></i>

<div class="container">
    <div class="row">
        <div class="col">      
          
               
        <?php if ($result->num_rows > 0): ?>
            <div class="card viesti">
                <div class="col-lg-4 col-md-4 col-sm-12">
                <h5 class="card-title"><?php echo $row["nimi"]?></h5>
                <p class="card-text"><?php echo $row["viesti"]?></p>
                <p><?php echo $row["pvm"]?></p>
                                
                    <a href="piilota.php?id=" class="btn btn-primary">Piilota</a>
                    <a href="poista.php?id=" class="btn btn-danger">Poista</a>
                    <?php endif; ?>
                </div>
            </div>
