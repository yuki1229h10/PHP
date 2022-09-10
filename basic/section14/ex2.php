<?php
// $names = ["Andy", "Betty", "Carol", "Erwin"];
$names = file("names.txt", FILE_IGNORE_NEW_LINES);
$date  = date('Y-m-d H:i:s');
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP Sample</title>
</head>

<body>
    <h1>Names</h1>
    <ul>
        <?php
        for ($i = 0; $i < count($names); $i++) {
            ?>


            <li><?php echo $names[$i]; ?></li>

        <?php
        }
        ?>
    </ul>
    <hr>
    <p><?php echo $date; ?></p>
</body>

</html>