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
    </head>
    <body>
        <header class="sub-head-2">
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
            <h1> Our Product </h1>
        </header>

        <div class="nav-product">
            <div class="nav-col">
                <ul>
                    <li> <a href="produk.php"> All </a> </li>
                    <li> <a href="produk-meja.php"> Meja </a> </li>
                    <li> <a href="produk-lemari.php"> lemari </a></li> 
                    <li> <a href="produk-pintu.php"> Pintu </a> </li>
                    <li> <a href="produk-aksesoris.php"> Aksesoris </a> </li>
                </ul>
            </div>
        </div>

        <div class="product">
            <h1> Beberapa Produk Kami </h1>
            <p> Berbagai macam jenis pintu, jendela, lemari, meja dan lainnya <br/>
            sesuai permintaan Pelanggan kami</p>

            <div class="row">
                <div class="product-col">
                    <img src="images/meja1.jpg">
                </div>
                <div class="product-col">
                    <img src="images/meja2.jpg">
                </div>
                <div class="product-col">
                    <img src="images/meja3.jpg">
                </div>
            </div>

            <div class="row2">
                <div class="product-col">
                    <img src="images/meja4.jpg">
                </div>
                <div class="product-col">
                    <img src="images/meja-makan.jpeg">
                </div>
                <div class="product-col">
                    <img src="images/meja-lemari.jpeg">
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




