<!-- display_info.php -->
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>機種情報とIPアドレス</title>
</head>
<body>
    <?php if (isset($_SESSION['ip']) && isset($_SESSION['user_agent'])): ?>
        <p>IPアドレス: <?php echo htmlspecialchars($_SESSION['ip'], ENT_QUOTES, 'UTF-8'); ?></p>
        <p>機種情報: <?php echo htmlspecialchars($_SESSION['user_agent'], ENT_QUOTES, 'UTF-8'); ?></p>
        <?php 
            // セッションをクリア
            session_unset();
            session_destroy();
        ?>
    <?php else: ?>
        <p>データはありません。</p>
    <?php endif; ?>
</body>
</html>
