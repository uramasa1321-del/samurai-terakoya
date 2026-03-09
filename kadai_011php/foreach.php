<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12章課題</title>
</head>
<body>
    <p>
    <?php
        $score = [
            '名前' => '玉ねぎ',
            '値段' => 200,
            '産地' => '北海道'
        ];
        //  配列$user_namesの要素を1つずつ順番に出力する
        foreach ($score as $key => $value) {
            echo "$key : $value<br>";
        }
     ?>
    </p>
</body>
</html>