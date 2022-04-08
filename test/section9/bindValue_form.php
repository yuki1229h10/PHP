<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>画像のアップロード</title>
</head>

<body>
    <form method="POST" enctype="multipart/form-data" action="bindValue_process.php">
        <input id="photo" type="file" name="photo" size="50" />
        <input type="submit" value="アップロード">
    </form>
</body>

</html>