<?php include 'loginSession.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="login.css" />
</head>

<body>
  <div class="container">
    <img src="img/log.png" />
    <h1>Login</h1>
    <form action="" method="post">
      <input type="text" name="username" placeholder="Username" id="input" />
      <br />
      <input type="password" name="password" placeholder="Password" id="input" />
      <br />
      <button type="submit" name="login" id="submit">Login</button>
      <a href="register.php" style="color: white; text-decoration: none;">Register</a>
    </form>
  </div>
</body>

</html>