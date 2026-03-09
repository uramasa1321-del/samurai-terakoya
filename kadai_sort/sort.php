<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<!-- http://localhost:8888/kadai_sort/sort.php -->
<body>
    <p>
        <?php
        // ここにコードを書いていく
        $nums = [15, 4, 18, 23, 10 ];
        function sort_2way($array,$order){
            if($order){
                sort($array);
            }else{
                rsort($array);
            }
            foreach($array as $num){
                echo $num ."<br>";
            }
        }
        sort_2way($nums,true);
        sort_2way($nums,false);
        ?>
    </p>
</body>

</html>