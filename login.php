<?php
session_start();
include_once "connection/koneksi.php";

function login()
{
    if (empty($_POST['username']) || empty($_POST['password'])) {
        return;
    }

    $conn = koneksidb();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = 'SELECT * FROM "user" WHERE username = $1';
    pg_prepare($conn, "my_query", $sql);
    $result = pg_execute($conn, "my_query", array($username));

    if (!$result || pg_num_rows($result) <= 0) {
        echo "<script>alert('Gagal login: username atau password salah!'); window.location.href='login.php';</script>";
        pg_close($conn);
        return;
    }

    $row = pg_fetch_array($result);
    $password_db = $row["password"];

    if ($password_db == $password) {
        $_SESSION['user_id'] = $row["id"]; // Ini penting untuk feed.php
        $_SESSION['username'] = $username;

        setcookie("ingat_aku", $username, time() + (60 * 60 * 24 * 30), "/");

        pg_close($conn);
        echo "<script>alert('Login berhasil!'); window.location.href='feed.php';</script>";
        exit();
    } else {
        echo "<script>alert('Gagal login: username atau password salah!'); window.location.href='login.php';</script>";
        pg_close($conn);
    }
}

login();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/login.css">
</head>

<body>
    <div class="box">
        <img class="tweet" src="assets/twitter logo.png" alt="logo twitter">

        <div class="judul">
            <h2>Sign in to X</h2>
        </div>

        <div class="email">
            <p>Sign in as Davin</p>
            <a href="">davinramada10@gmail.com</a>
        </div>

        <div class="apple">
            <img src="assets/apple logo.png" alt="logo apple">
            <p>Sign up with Apple</p>
        </div>

        <div class="line_container">
            <div class="line"></div>
            <p>or</p>
            <div class="line"></div>
        </div>

        <form action="login.php" method="POST">
            <div class="username">
                <input type="text" name="username" id="username" placeholder="Username"
                    value="<?php echo isset($_COOKIE['ingat_aku']) ? $_COOKIE['ingat_aku'] : ''; ?>">
            </div>

            <div class="password">
                <input type="password" name="password" id="password" placeholder="Password">
            </div>

            <div class="login">
                <button type="submit">Next</button>
            </div>
        </form>

        <p class="daftar">Don’t have an account? <a href="register.php">Sign up</a></p>
    </div>
</body>

</html>