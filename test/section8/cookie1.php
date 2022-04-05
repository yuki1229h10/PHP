<?php require_once '../section8/Encode.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クッキー情報</title>
</head>

<body>
    <form method="POST" action="cookie2.php">
        <label for="email">メールアドレス:</label>
        <input id="email" type="text" name="email" size="40" value="<?= e($_COOKIE['email'] ?? '') ?>" />
        <input type="submit" value="送信">
    </form>
</body>

</html>