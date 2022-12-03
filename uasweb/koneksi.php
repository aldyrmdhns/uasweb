<?php
    $conn = mysqli_connect("localhost", "root", "", "daftarpesanan");

    if (!$conn){
        die("Gagal Terhubung ke Database anda ".mysqli_connect_error());
    }

// <?php
//     $conn = mysqli_connect("sql311.epizy.com", "epiz_33019968", "otSGfFVH3jQt", "epiz_33019968_daftarpesanan");

//     if (!$conn){
//         die("Gagal Terhubung ke Database anda ".mysqli_connect_error());
//     }
// ?>