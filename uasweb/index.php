<?php
    session_start();
    require 'koneksi.php';

    if ($_SESSION['priv'] == 'user') {
        header("location: user.php");
    } elseif ($_SESSION['priv'] != 'admin') {
        header('location: login.php');
        // exit;
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
    </head>

    <body>
        <header class="head">
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
                </div>
                <label id="theme-change"></label>
            </nav>
        </header>

        <div class="text-box">
            <h1 id="title"> MEBEL SINAR PUTRA </h1>
            <p id="isi" style="display: none;"> Pembuatan segala perlengkapan rumah idaman anda mulai dari pintu, jendela,
                lemari, meja, kursi dan lainnya!<br/> percayakan kepada kami, keindahan dimulai dari
                segala detail kecil
            </p>
            <a href="visit-us.php" class="button"> Visit Us to know more!</a>
        </div>

<!-- Produk -->
        <div class="product">
            <h1> Beberapa Produk Kami </h1>
            <p> Berbagai macam jenis pintu, jendela, lemari, meja dan lainnya <br/>
            sesuai permintaan Pelanggan kami</p>

            <div class="row">
                <div class="product-col">
                    <img src="images/pintu.jpeg">
                </div>
                <div class="product-col">
                    <img src="images/ranjang.jpeg">
                </div>
                <div class="product-col">
                    <img src="images/lemari.jpeg">
                </div>
            </div>

            <div class="row2">
                <div class="product-col">
                    <img src="images/pintu2.jpeg">
                </div>
                <div class="product-col">
                    <img src="images/pintu-jendela.jpeg">
                </div>
                <div class="product-col">
                    <img src="images/kusen.jpeg">
                </div>
            </div>
        </div>

<!-- Kata-kata orang -->
        <div class="testimony">
            <h1> Apa yang orang-orang katakan</h1>
            <p> beberapa testimoni dari orang-orang yang telah memesan di molding kami</p>

            <div class="row">
                <div class="testimony-col">
                    <img src="images/user1.jpg">
                    <div>
                        <p>Saya sama sekali tidak kecewa datang jauh-jauh kesini. barang yang saya minta dibuat dengan sangat perfect, waktu pembuatan juga cepat sehingga saya tidak
                            perlu menunggu lama.
                        </p>
                        <h3> Vanessa Allegra </h3>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star-half-o" ></i>
                    </div>
                </div>
                <div class="testimony-col">
                    <img src="images/user2.jpg">
                    <div>
                        <p>Sebuah mahakarya yang sangat baik, pembuatan yang sangat cepat dan profesional. saya sangat puas sekali setelah memesan beberapa interior rumah saya disini.
                            saya sangat merekomendasikannya!</p>
                        <h3> Chris Lukewarm </h3>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star-half-o" ></i>
                    </div>
                </div>
            </div>
        </div>
<!-- footer -->
        <footer class="foot">
            <h4> About Me </h4>
            <p> Saya Aldy Ramadhan Syahputra seorang mahasiswa informatika angkatan 2021,<br/>
                baru saja memasuki semester 3 dan mengerjakan sebuah tugas pembuatan Website dengan HTML-CSS</p>
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




