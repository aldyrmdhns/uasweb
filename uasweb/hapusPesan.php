<?php 
    require 'koneksi.php';

    $id = $_GET['id'];

    $hapus = mysqli_query($conn, "SELECT * FROM daftarpesan WHERE id = $id");
    $row = mysqli_fetch_array($hapus);

    $gambar = $row['gambar'];
    $hapus_file = 'img/$gambar';

    if (file_exists($hapus_file)) {
        unlink($hapus);
    }

    $result = mysqli_query($conn, "DELETE FROM daftarpesan WHERE id = $id");

    if ( $result ) {
        echo"
            <script>
                alert('Data berhasil dihapus');
                document.location.href = 'tampilkanForm.php';
            </script>
        ";
    }else{  
        echo"
            <script>
                alert('Data gagal dihapus');
                document.location.href = 'tampilkanForm.php';
            </script>
        ";
    }
?>