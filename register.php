<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <link rel="stylesheet" href="register.css" />
</head>

<body>
  <div class="container">
    <h1>Register</h1>
    <form action="" method="post">
      <input type="text" name="email" name="username" placeholder="Email" id="input" />
      <input type="text" name="username" name="email" placeholder="Username" id="input" />
      <br />
      <input type="password" name="password" name="password" placeholder="Password" id="input" />
      <br />
      <input type="Submit" name="Submit" value="Register" id="submit" />
      <br />
      <a class="punyaakun" href="index.php">Punya Akun ?</a>
    </form>
  </div>
</body>

</html>

<?php
require 'conn.php';
if (isset($_POST["Submit"])) {
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  // Lakukan validasi data yang dikirimkan oleh form
  if (empty($username) || empty($email) || empty($password)) {
    echo "Harap lengkapi semua data yang diperluka!";
  } else {
    mysqli_query($conn, "INSERT INTO user values(NULL, '$email', '$username','$password', 'pembeli')");
    echo "Registrasi berhasil!";
  }
}
?>