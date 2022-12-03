<?php
    session_start();
    require 'koneksi.php';

    if (!isset($_SESSION['login'])) {
        header("location: login.php");
        exit;
    }
?>

<?php
    require 'koneksi.php';

    if (isset($_POST['kirim'])){
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $nomorhp = $_POST["nomorhp"];
        $barang = $_POST["barang"];
        $panjang = $_POST["panjang"];
        $tinggi = $_POST["tinggi"];
        $metode = $_POST["metode"];
        $waktu = $_POST["waktu"];
        $namafile = $_POST["namafile"];
        $gambar = $_FILES["gambar"]["name"];

        $x = explode(".", $gambar);
        $extensi = strtolower(end($x));
        $gambar_baru = "$namafile.$extensi";
        $temp = $_FILES["gambar"]["tmp_name"];

        if (move_uploaded_file($temp, 'img/'. $daftarpesan ."/" . $gambar_baru)){
            $query = mysqli_query($conn, "INSERT INTO daftarpesan VALUES ('', '$nama', '$nomorhp', '$alamat', '$barang', '$panjang', '$tinggi', '$metode', '$gambar_baru', '$waktu')");
            if ($query) {
                echo "
                    <script>
                        alert('Pesanan Anda Telah ditambahkan!!!');
                        document.location.href = 'tampilkanForm.php';
                    </script>
                ";
            } else {
                echo error_log($query);
            }
        }
        else {
            echo "
                <script>
                    alert('Data Gagal Ditambahkan!!!');
                    document.location.href = 'orderHere.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> MEBEL SINAR PUTRA </title>
        <link rel="stylesheet" href="style_php.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="main.js"></script>
    </head>

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
                </div>
            </nav>
            <h1> ORDER HERE RIGHT NOW !!! </h1>
        </header>

        <div class="form">
            <div class="kotak">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="isi">
                        <div class="input-box">
                            <span class="detail"> Nama Pemesan </span>
                            <input type="text" name="nama" placeholder="Masukan Nama Anda" required>
                        </div>
                        <div class="input-box">
                            <span class="detail"> Alamat Pemesan </span>
                            <input type="text" name="alamat" placeholder="Masukan Alamat Anda" required>
                        </div>
                        <div class="input-box">
                            <span class="detail"> Nomor Telepon </span>
                            <input type="tel" name="nomorhp" placeholder="Masukan Nomor HP Anda" required>
                        </div>
                        <div class="input-box">
                            <span class="detail"> Barang Pesanan </span>
                            <input type="text" name="barang" placeholder="Masukan Nama Barang Anda" required>
                        </div>
                        <div class="input-box">
                            <span class="detail"> Masukan Panjang </span>
                            <input type="number" step="any" name="panjang" placeholder="Masukan Panjang Barang" required>
                        </div>
                        <div class="input-box">
                            <span class="detail"> Masukan Tinggi </span>
                            <input type="number" step="any" name="tinggi" placeholder="Masukan Tinggi Barang" required>
                        </div>
                        <div class="input-check">
                            <input type="radio" name="metode" value="Cash" id="dot-1">
                            <input type="radio" name="metode" value="Transfer" id="dot-2">
                            <span class="metode-judul"> Metode Pembayaran </span>
                            <div class="category">
                                <label for="dot-1">
                                    <span class="dot one"></span>
                                    <span class="metode">Cash</span>
                                </label>
                                <label for="dot-2">
                                    <span class="dot two"></span>
                                    <span class="metode">Transfer</span>
                                </label>
                            </div>
                        </div>
                        <div class="input-box">
                            <span class="detail"> Nama File </span>
                            <input type="text" name="namafile" placeholder="Masukan Nama File Anda" required>
                        </div>
                        <div class="input-gambar">
                            <span class="detail"> Masukan Gambar Barang Pesanan </span>
                            <input type="file" name="gambar" required>
                        </div>
                        <div class="input-box">
                            <span class="detail"> Waktu Pemesanan </span>
                            <input type="datetime-local" name="waktu" value="" required>
                        </div>
                        
                        <div class="button-submit">
                            <input type="submit" name="kirim" value="kirim">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script src="main.js"></script>
    </body>
</html>