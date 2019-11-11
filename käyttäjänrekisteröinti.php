<html>
<head>
	<title>Rekisteröinti</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

    <h2>Rekisteröinti</h2>
    <form action="/kkona.php">
    <div class="form-group">
    <label for="name">Nimi:</label>
    <input type="name" class="form-control" id="name">
  </div>
    
  <div class="form-group">
    <label for="email">Sähköposti:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Salasana:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>