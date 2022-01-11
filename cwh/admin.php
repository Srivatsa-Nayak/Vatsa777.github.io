<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="acss.css">
    <title>ADMIN</title>
</head>
<body>
<div id="bg"></div>

<form>
<form action="admin.php" method="POST">
  <div class="form-field">
    <input type="email" name="email" placeholder="Email" required/>
  </div>
  
  <div class="form-field">
    <input type="password" name="password" placeholder="Password" required/>         
    </div>
  <div class="form-field">
    <button class="btn" type="submit" name="submit">Log in</button>
  </div>
</form>
</body>
</html>

