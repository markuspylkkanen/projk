<!DOCTYPE html>
<html>
<head>
<style>
span {
font-size: 1.8em;
font-family: 'Germania One', cursive;
}
</style>

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
            <span id="clock"> </span>
            <br>
                <a class="navbar-brand" href="index.php">Viestiseinä</a>
            </div>
        </div>
    </nav>
    <div class="container">
        
        <?php if (isset($_GET['error'])): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_GET['error']; ?>
            </div>
        <?php endif; ?>


        <form action="insert.php" method="POST">
            <div class="form-group">
                <label></label>
                <input type="text" name="name" class="form-control" placeholder="Nimi:">
            </div>
    <br>
            <div class="form-group">
                <label></label>
                <textarea rows="10" cols="50" name="message" class="form-control" placeholder="Kirjoita palautetta:"></textarea> 
                <br>
              
            </div>
            </div>
            
            <br>
            
            <button type="submit" name="submit" class="btn btn-primary">Lähetä</button>
            </form>

         </div>
         
    </div>
    <a class="btn btn-primary" href="admin/admin.php">admin</a>
    
    <script>
(function(){
    updateClock();
    setInterval('updateClock()', 1000);

})();

function updateClock() {
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();
    if (hours < 10) { hours = "0" + hours;}
    if (minutes < 10) {minutes = "0" + minutes;}
    if (seconds < 10) {seconds = "0" + seconds;}
    var elem = document.getElementById('clock');
    elem.innerHTML = hours + ':' + minutes + ':' + seconds;
}
</script> 
    </body>
</html>
<?php


?>

