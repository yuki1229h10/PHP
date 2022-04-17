<!-- <?php

        $str = '<h1>Google.com</h1>へのリンクです';
        $pattern = '/<h1>(.*)<\/h1>/u';
        $replace = '<a href="http://$1>$1</a>';
        $content = preg_replace($pattern, $replace, $str);

        echo $content;

        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>q</h1>
    aa
</body>

</html> -->

<?php

$subject = '<h1>私はリンゴが好きです</h1>';
$search = '/<h1>(.*?)<\ /h1>/';
$replace = '<h2>$1</h2>';
$subject = preg_replace($search, $replace, $subject);
echo $subject;
        //実行結果：<h2>私はリンゴが好きです</h2>