<?php
    session_start();
    require 'koneksi.php';

    if (!isset($_SESSION['login'])) {
        header("location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> MEBEL SINAR PUTRA </title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="main.js"></script>

    <body>
        <header class="sub-head">
            <nav>
                <a href="index.php"><img src="images/logo.png"></a>
                <div class="nav-links">
                    <ul>
                        <li> <a href="index.php"> HOME </a></li>
                        <li> <a href="produk.php"> PRODUCT </a></li>
                        <li> <a href="about.php"> ABOUT ME </a></li>
                        <li> <a href="orderHere.php"> ORDER HERE </a> </li>
                        <li> <a href="tampilkanForm.php"> DAFTAR PESANAN </a> </li>
                        <li> <a href="logout.php"> LOGOUT </a></li>
                    </ul>
                    <label id="theme-change"></label>
                </div>
            </nav>
            <h1> About Me </h1>
        </header>

        <div class="about-me">
            <div class="row">
                <div class="about-col">
                    <h1> Halo! Perkenalkan,</h1>
                    <p>Saya Aldy Ramadhan Syahputra dengan NIM 2109106079, seorang mahasiswa informatika angkatan 2021,
                    baru saja memasuki semester 3 dan sedang mengerjakan sebuah tugas pembuatan Website dengan HTML-CSS,
                    pengalaman saya dalam dunia website baru saja dimulai, dengan mempelajari dasar-dasar html serta css.
                    tidak hanya dari praktikum dan kuliah, saya juga mencari-cari berbagai macam referensi, teknik-teknik,
                    serta tutorial yang terdapat banyak sekali di internet sebagai tempat saya mencari ilmu <br/> <br/> 

                    Adapun Biodata saya sebagai berikut : <br/> <br/>
                    Nama : Aldy Ramadhan Syahputra <br/>
                    NIM : 2109106079 <br/>
                    TTL : Samarinda, 28 November 2002 <br/>
                    Nomor Hp : 0822 5176 7007 <br/>
                    Alamat : Jalan Ery Suparjan Rt. 12, No, 02 <br/>
                    </p>
                </div>
                <div class="about-col">
                    <img src="images/me_her.png">
                </div>
            </div>
        </div>


<!-- footer -->
        <footer class="foot">
            <h4> About Me </h4>
            <p> Saya Aldy Ramadhan Syahputra seorang mahasiswa informatika angkatan 2021,<br/>
                baru saja memasuki semester 3 dan mengerjakan sebuah tugas pembuatan Website dengan HTML-CSS.</p>
            <div class="icon">
                <i class="fa fa-whatsapp"> 0822 5176 7007 </i>
                <i class="fa fa-instagram"> aldyrmdhns_ </i>
                <i class="fa fa-envelope-o"> aldyramadhans101@gmail.com </i>
            </div>
            <p> @Copyright 2022 - aldyrmdhns - Made with HTML - CSS </p>
        </footer>

        <script src="main.js"></script>
    </body>
</html>




