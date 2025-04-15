<?php
include_once "connection/koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = koneksidb();
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $pass = $_POST['password'] ?? '';

    if (!empty($username) && !empty($email) && !empty($pass)) {
        $sql = 'INSERT INTO "user" (username, email, password, create_at) VALUES ($1, $2, $3, NOW())';
        $result = pg_query_params($conn, $sql, array($username, $email, $pass));

        if ($result) {
            echo "<script>alert('Registrasi berhasil!');</script>";
        } else {
            echo "<script>alert('Registrasi gagal: " . pg_last_error($conn) . "');</script>";
        }

        pg_close($conn);
    } else {
        echo "<script>alert('Mohon isi semua data.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style/register.css">
</head>

<body>
    <div class="box">
        <div class="btn-back">
            <a href="login.php">
                <img src="assets/back.png" alt="back">
            </a>
        </div> 

        <img class="tweet" src="assets/twitter logo.png" alt="logo twitter">

        <form action="register.php" method="POST">
            <div class="judul">
                <p>Create your account</p>
            </div>

            <div class="nama">
                <input type="text" name="username" id="nama" placeholder="username" required>
            </div>

            <div class="email">
                <input type="email" name="email" id="email" placeholder="email" required>
            </div>

            <div class="password">
                <input type="password" name="password" id="password" Placeholder="password" required>
            </div>

            <div class="daftar">
                <button type="submit">Next</button>
            </div>
        </form>
    </div>
</body>
</html>