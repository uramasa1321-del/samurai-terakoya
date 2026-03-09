<!-- 見本 -->
<!-- php -->
<?php
// ここにPHPのコードを書きます
?>
<!-- ↑この中でコメントアウトすれば//や/**/ のコメントアウトが反映される
javascriptと一緒で1行コメントは行頭に//、複数行コメントは/* と */で囲む -->
<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>この文章はHTMLで出力しています。</p>
   <p>
       <?php
       echo 'この文章はPHPで出力しています。';
       ?>
   </p>
</body>

</html>