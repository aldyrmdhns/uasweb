<?php
    require 'koneksi.php';

    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if ($password === $cpassword) {
            $password = password_hash($password, PASSWORD_DEFAULT);

            $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

            if (mysqli_fetch_assoc($result)) {
                echo "
                    <script>
                        alert('Username Telah Digunakan');
                        document.location.href = 'register.php';
                    </script>
                ";
            } else {
                $priv = 'user';

                $sql = "INSERT INTO user VALUES ('','$username','$password', '$priv')";
                $result = mysqli_query($conn, $sql);
                
                if(mysqli_affected_rows($conn) > 0){
                    echo "
                        <script>
                            alert('Registrasi Berhasil');
                            document.location.href = 'index.php';
                        </script>
                    ";
                } else {
                    echo "
                        <script>
                            alert('Registrasi Gagal');
                            document.location.href = 'register.php';
                        </script>
                    ";
                }
            }


        } else {
            echo "
                <script>
                    alert('Password Anda Tidak Sama !!!');
                    document.location.href = 'register.php';
                </script>
            ";
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
        <title>Register</title>
    </head>

    <body>
        <div class="center">
            <h1> Register </h1>
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
                <div class="textBox">
                    <input type="password" name="cpassword" required>
                    <span></span>
                    <label> Confirm Password </label>
                </div>
                <input type="submit" name="register" value="register">
                <div class="kata2"> Sudah Punya Akun? <a href="login.php"> Login Here </a> </div>
            </form>
        </div>
    </body>
</html>