<?php
    session_start();
    require 'koneksi.php';

    if (isset($_SESSION['login'])) {
        header("location: index.php");
        exit;
    }

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $upass = $_POST['password'];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

        list($id ,$users, $password, $priv) = mysqli_fetch_array($result);
        
        if (mysqli_num_rows($result) === 1) {
            if (password_verify($upass, $password)) {
                $_SESSION['login'] = true;
                $_SESSION['priv'] = $priv;
                header("location: index.php");
                exit;
                echo "
                    <script>
                        alert('Username atau Password Salah');
                    </script>
                ";
            } else {
                echo '<p>Username Atau Password Salah!<p>';

                // $_SESSION['username'] = $users;
                // $_SESSION['priv'] = $priv;
                // header("location: index.php");
                // exit;
                }
            }
        }
?>

<script> 
    if (window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
    }
</script>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="register_login.css">
        <link href="images/logo.png" rel="shortcut icon">
        <title>LOGIN</title>
    </head>

    <body>
        <div class="center">
            <h1> Login Here </h1>
            <?php 
                if (isset($error)) {
                    echo "
                        <script>
                            alert('Registrasi Gagal');
                            document.location.href = 'register.php';
                        </script>
                    ";
                }
            ?>
            <form action="" method="post">
                <div class="textBox">
                    <input type="text" name="username" required>
                    <span></span>
                    <label> Username </label>
                </div>
                <div class="textBox">
                    <input type="password" name="password" required>
                    <span></span>
                    <label> Password </label>
                </div>
                <div class="kata"> Masukan Akun Anda!!! </div>
                <input type="submit" name="login" value="login">
                <div class="kata2"> Belum Punya Akun? <a href="register.php"> Register Here </a> </div>
            </form>
        </div>
    </body>
</html>