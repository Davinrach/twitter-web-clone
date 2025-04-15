<?php
session_start();
include_once "connection/koneksi.php";

$conn = koneksidb();

if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Silakan login terlebih dahulu'); window.location.href='login.php';</script>";
    exit();
}

$userId = $_SESSION['user_id'];

if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty(trim($_POST['content']))) {
    $content = trim($_POST['content']);

    $sqlInsert = "INSERT INTO postingan (user_id, content, create_at) VALUES ($1, $2, NOW())";
    pg_prepare($conn, "insert_post", $sqlInsert);
    $resultInsert = pg_execute($conn, "insert_post", array($userId, $content));

    if (!$resultInsert) {
        echo "<script>alert('Gagal memposting! Silakan coba lagi.'); window.location.href='feed.php';</script>";
        exit();
    } else {
        header("Location: feed.php");
    }
}

$sqlFetchStatus = "
    SELECT postingan.*, \"user\".username 
    FROM postingan 
    JOIN \"user\" ON postingan.user_id = \"user\".id 
    ORDER BY create_at DESC";
$resultStatus = pg_query($conn, $sqlFetchStatus);

$allPosts = [];
if ($resultStatus) {
    $allPosts = pg_fetch_all($resultStatus);
} else {
    echo "Query gagal: " . pg_last_error($conn);
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed</title>
    <link rel="stylesheet" href="style/feed.css">
</head>

<body>
    <div class="main-wrapper">
        <div class="left-sidebar">
            <?php include 'layout/leftSidebar.php'; ?>
        </div>

        <div class="main-feed">
            <?php include 'layout/navtab.php'; ?>

            <!-- Form Postingan -->
            <form action="feed.php" method="POST">
                <div class="whats-happening">
                    <img src="assets/profile.png" alt="Profile" class="profile-pic">
                    <textarea name="content" placeholder="Apa yang sedang terjadi?" class="whats-input"
                        required></textarea>
                </div>
                <div class="whats-actions">
                    <img src="assets/gambar.png" alt="Media">
                    <img src="assets/gif.png" alt="GIF">
                    <img src="assets/polling.png" alt="Polling">
                    <img src="assets/emoji.png" alt="Emoji">
                    <img src="assets/jadwal.png" alt="Schedule">
                    <button type="submit" class="post-btn">Posting</button>
                </div>
            </form>

            <!-- Tampilkan Postingan -->
            <div class="feed-posts">
                <?php
                if (!empty($allPosts)) {
                    foreach ($allPosts as $row) {
                        $tanggal = date("d M Y", strtotime($row['create_at']));
                        echo '<div class="tweet">';
                        echo '  <div class="tweet-header">';
                        echo '      <img src="assets/profile.png" alt="Profile" class="tweet-profile">';
                        echo '      <div class="tweet-user-info">';
                        echo '          <span class="tweet-name">' . htmlspecialchars($row['username']) . '</span>';
                        echo '          <span class="tweet-username">@' . htmlspecialchars($row['username']) . ' · ' . $tanggal . '</span>';
                        echo '      </div>';
                        echo '  </div>';
                        echo '  <div class="tweet-content">';
                        echo nl2br(htmlspecialchars($row['content']));
                        echo '  </div>';
                        echo '  <div class="tweet-actions">';
                        echo '      <a href="#"><img src="assets/comment.png" alt="Comment"></a>';
                        echo '      <a href="#"><img src="assets/retweet.png" alt="Retweet"></a>';
                        echo '      <a href="#"><img src="assets/love.png" alt="Like"></a>';
                        echo '      <a href="#"><img src="assets/bookmark.png" alt="Bookmark"></a>';
                        echo '      <a href="#"><img src="assets/save.png" alt="Share"></a>';
                        echo '  </div>';
                        echo '</div>';
                    }
                } else {
                    echo "<center>Tidak ada postingan untuk ditampilkan</center>";
                }
                ?>
            </div>
        </div>

        <div class="right-sidebar">
            <?php include 'layout/rightSidebar.php'; ?>
        </div>
    </div>
</body>

</html>