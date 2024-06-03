<?php
require 'loginSession.php';
if (empty($_SESSION['status'])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arang Ranggang</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,500&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!--Navbar start-->
    <nav class="navbar">
        <a href="#" class="navbar-logo">Arang<span>Ranggang</span></a>
        <div class="navbar-nav">
            <a href="#">Beranda</a>
            <a href="#about">Tentang Kami</a>
            <a href="#produk">Produk</a>
            <a href="#kontak">Kontak</a>
            <a href="index.php">Login</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </nav>
    <!--Navbar end-->

    <!--Hero Section start-->
    <section class="hero" id="home">
        <main class="content">
            <h1>Pesanlah <span>arang</span> Sekarang</h1>
            <a href="#produk" class="cta">Pesan Sekarang</a>
        </main>
    </section>
    <!--Hero Section end-->

    <!--About Section start-->
    <section id="about" class="about">
        <h2><span>Arang </span>Ranggang</h2>
        <div class="content">
            <p>Usaha Arang Ranggang merupakan salah satu usaha yang terletak di desa Ranggang, Kecamatan Takisung, Kabupaten Tanah Laut, Provinsi Kalimantan Selatan. Usaha Arang Ranggang memproduksi serta menjual berbagai macam jenis arang, adapun diantaranya yaitu arang alaban, arang ulin, arang hutan dan lain-lain.</p>
        </div>
    </section>
    <!--About Section end-->

    <!--produk Section start-->
    <section id="produk" class="produk">
        <h2><span>Produk</span> Kami</h2>
        <div class="row">
            <div class="produk-card">
                <img src="img/Arang1.jpg" alt="Belum Bernama" class="produk-card-img">
                <h3 class="produk-card-tittle">- Arang Hutan -</h3>
                <p class="produk-card-price">IDR 2.650Rb/KG</p>
                <a href="pembayaran.php?jenisArang=ArangHutan&Harga=2650" class="cta">Pesan Sekarang</a>
            </div>
            <div class="produk-card">
                <img src="img/Arang2.jpg" alt="Belum Bernama" class="produk-card-img">
                <h3 class="produk-card-tittle">- Arang Alaban -</h3>
                <p class="produk-card-price">IDR 3.950Rb/KG</p>
                <a href="pembayaran.php?jenisArang=ArangAlaban&Harga=3950" class="cta">Pesan Sekarang</a>
            </div>
            <div class="produk-card">
                <img src="img/Arang2.jpg" alt="Belum Bernama" class="produk-card-img">
                <h3 class="produk-card-tittle">- Arang Ulin -</h3>
                <p class="produk-card-price">IDR 2.700Rb/KG</p>
                <a href="pembayaran.php?jenisArang=ArangUlin&Harga=2700" class="cta">Pesan Sekarang</a>

            </div>
        </div>
    </section>

    <!--produk Section end-->

    <!-- Contact Section Start -->
    <section id="kontak" class="kontak">
        <h2><span>Kontak</span> Kami</h2>
        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d509548.20086769183!2d114.6125717698269!3d-3.843362571661755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de6578666f7c7af%3A0xddfba802dfacc81e!2sKabupaten%20Tanah%20Laut%2C%20Kalimantan%20Selatan!5e0!3m2!1sid!2sid!4v1683467376141!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
            <form action="">
                <p> Hubungi Kami Jika Anda Menemukan Kendala Saat Melakukan Pesanan </p>
                <a href="https://wa.me/6283153333866" type="submit" class="btn">Kirim Pesan</button>
            </form>
        </div>
    </section>
    <!-- Contact Section End -->

    <!--icons-->
    <script>
        feather.replace()
    </script>

    <!--Javascript-->
    <script src="js/script.js"></script>
</body>

</html>