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

    <body>
        <header class="sub-head-3">
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
            </nav>
            <h1> Visit us here ! </h1>
        </header>

        <div class="location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1152.375003919481!2d117.1511776360486!3d-0.45815577264898516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df678b80f94b937%3A0xcfabc3c04871e0e8!2sRumah%20Kaffah!5e0!3m2!1sen!2sid!4v1664093065390!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="contact-us">
            <div class="row">
                <div class="contact-col">
                    <div>
                        <i class="fa fa-home"></i>
                        <span>
                            <h5> Jalan Ery Suparjan, Rt 12. No 02 </h5>
                            <p> Samarinda, Kalimantan Timur</p>
                        </span>
                    </div>
                    <div>
                        <i class="fa fa-phone"></i>
                        <span>
                            <h5> 0822 5176 7007 </h5>
                            <p> Senin - Sabtu, 07.00 - 17.00 </p>
                        </span>
                    </div>
                    <div>
                        <i class="fa fa-envelope-o"></i>
                        <span>
                            <h5> aldyrmdhns101@gmail.com </h5>
                            <p> Email us here </p>
                        </span>
                    </div>
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

    </body>
</html>




