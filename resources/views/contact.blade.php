<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <link rel="stylesheet" href="{{ URL::asset('css/css.css') }} ">
</head>
<body>
    
<div class="container">

<br><br><br>
<form>
  <h1>Contact</h1>
  <div class="form-group">
    <label for="titel">Titel</label>
    <input type="text" class="form-control" id="titel" aria-describedby="titel" placeholder="Enter Titel">

  </div>
  <div class="form-group">
    <label for="Naam">Naam</label>
    <input type="text" class="form-control" id="Naam" placeholder="Naam">
  </div>
  <div class="form-group">
    <label for="Naam">Email</label>
    <input type="email" class="form-control" id="Naam" placeholder="Naam">
  </div>
  <div class="form-group">
    <label for="text">Text</label>
    <br>
    <textarea id="text" class="form-control" name="text" rows="4" placeholder="Voer hier je bericht in"></textarea>  
</div>
<div class="form-group text-center">
  <button type="submit" class="btn btn-primary mt-2">Submit</button>
</div>
</form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
                crossorigin="anonymous"></script>
</body>
</html>