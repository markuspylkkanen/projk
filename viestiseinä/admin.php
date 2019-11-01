<?php
include "../db.php";
$sql = "SELECT * from viestit";
$result = $conn->query($sql);
?>
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
<?php



?>

<div class="container">
    <div class="row">
        <div class="col">      
          
        <?php if ($result->num_rows > 0): ?>
       
        <?php  while($row = $result->fetch_assoc()): ?>

            <div class="card viesti">
                <div class="col-lg-4 col-md-4 col-sm-12">
                <h5 class="card-title"><?php echo $row["nimi"]?></h5>
                    <p class="card-text"> <?php echo $row["viesti"]?>
                    <p class="card-text"> <?php echo $row["pvm"]?></p>


                    <?php if($row["hide"]== 0): ?>
                        <a href="piilota.php?id=<?php echo $row["id"]?>" class="btn btn-primary">Piilota</a>
                    
                    <?php else: ?>
                        <a href="nayta.php?id=<?php echo $row["id"]?>" class="btn btn-primary">Näytä</a>        
                    
                    <?php endif; ?>
                    
                     <a href="poista.php?id=<?php echo $row["id"]?>" class="btn btn-danger">Poista</a>
                </div>
            </div>
            

       
            
            <?php endwhile; ?>

        <?php endif; ?>

        </div>
    </div>
</div>  

</body>
</html>