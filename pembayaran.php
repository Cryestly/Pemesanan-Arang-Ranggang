<?php
require 'loginSession.php';
if (empty($_SESSION['status'])) {
  header('location:index.php');
}
require 'conn.php';
$jenisArang = $_GET['jenisArang'];
$Harga = $_GET['Harga'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pembayaran</title>
  <link rel="stylesheet" href="pembayaran.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
</head>

<body>
  <br />
  <?php
  if (isset($_POST['Kirim'])) {
    $Nama = $_POST['Nama'];
    $Alamat = $_POST['Alamat'];
    $NomorHP = $_POST['NomorHP'];
    $Email = $_POST['Email'];
    $Banyak = (int)$_POST['Banyak'];
    $Total = $Harga * $Banyak;
    echo '<div class="alert alert-dismissible" role="alert"><div>Pesanan Sedang Diprosess mohon tunggu konfirmasi dari kami</div>
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    mysqli_query($conn, "INSERT INTO pembeli VALUES(NULL, '$Nama', '$Alamat', '$NomorHP', '$Email', '$jenisArang', '$Total', 'Belum Bayar')");
    // header("location:loginPembeli.php");
  }
  ?>
  <form method="post">
    <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">Jenis Arang</span>
      <input type="text" class="form-control" aria-label="Sizing example input" disabled value="<?= $jenisArang ?>" aria-describedby="inputGroup-sizing-sm" />
    </div>
    <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">Harga</span>
      <input type="text" class="form-control" aria-label="Sizing example input" disabled value="<?= $Harga ?>" aria-describedby="inputGroup-sizing-sm" />
    </div>
    <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">Banyak</span>
      <input name="Banyak" type="text" class="form-control" placeholder="(Kg)" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
    </div>
    <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">Nama</span>
      <input name="Nama" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
    </div>
    <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">Alamat</span>
      <input name="Alamat" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
    </div>
    <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">Nomor HP</span>
      <input name="NomorHP" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
    </div>
    <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
      <input name="Email" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
    </div>
    <button name="Kirim" type="submit" class="btn btn-primary" id="liveAlertBtn">Kirim</button>
  </form>
  <script>
    const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
    const appendAlert = (message, type) => {
      const wrapper = document.createElement('div')
      wrapper.innerHTML = [
        `<div class="alert alert-${type} alert-dismissible" role="alert">`,
        `   <div>${message}</div>`,
        '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
        '</div>'
      ].join('')

      alertPlaceholder.append(wrapper)
    }

    const alertTrigger = document.getElementById('liveAlertBtn')
    if (alertTrigger) {
      alertTrigger.addEventListener('click', () => {
        appendAlert('Nice, you triggered this alert message!', 'success')
      })
    }
  </script>
</body>

</html>