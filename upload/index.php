<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="on.css">
<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
<body>

<h1>Kuvagalleria sovellus</h1> 
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="text" name="nimi">
    <input type="text" name="aihe">
<br>
<br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Lataa tiedosto" name="submit">
</form>

</body>
</html>