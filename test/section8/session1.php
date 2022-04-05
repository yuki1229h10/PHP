<?php
require_once '../section8/Encode.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>セッション情報</title>
</head>

<body>
    <form method="POST" action="session2.php">
        <label for="email">メールアドレス:</label>
        <input id="email" type="text" name="email" value="<?= e($_SESSION['email'] ?? '') ?>" />
        <input type="submit" value="送信" />
    </form>
</body>

</html>