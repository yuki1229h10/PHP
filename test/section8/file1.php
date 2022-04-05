<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アップロード処理</title>
</head>

<body>
    <form method="POST" action="file2.php" enctype="multipart/form-data">
        <label for="upfile">ファイルのパス:</label>
        <input type="hidden" name="max_file_size" value="1000000" />
        <input id="upfile" type="file" name="upfile" size="40" />
        <input type="submit" value="アップロード" />
    </form>
</body>

</html>