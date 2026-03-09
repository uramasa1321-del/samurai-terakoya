<!-- 以下の条件を満たすブラウザゲームを作成してください。

- プログラミング言語: PHP
- ゲームのルール
    - mt_rand()関数を使って1～100のランダムな数値を生成する
    - プレイヤーが入力した数字と比較し、結果に応じて以下のようにテキストを表示する
        - 生成した数値よりも大きい場合: もっと小さいです！
        - 生成した数値よりも小さい場合: もっと大きいです！
        - 生成した数値と等しい場合: 正解です！おめでとうございます！
        - 入力した数値が1～100以外の場合: 数字は1から100の間で入力してください
- 配置するHTML要素
    - 数字の入力フォーム
    - 送信ボタン -->

<?php
// ランダムな数値を生成 (1～100)
session_start();  // セッションを開始して、ゲーム状態を保持する
if (!isset($_SESSION['random_number'])) {
    $_SESSION['random_number'] = mt_rand(1, 100);  // 初回アクセス時にランダムな数を生成
}

// 初期メッセージ
$message = '';

// プレイヤーが数字を送信した場合
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 入力された数字を取得
    $player_input = isset($_POST['player_number']) ? (int)$_POST['player_number'] : 0;

    // 入力された数字が1～100の範囲内かチェック
    if ($player_input < 1 || $player_input > 100) {
        $message = '数字は1から100の間で入力してください';
    } elseif ($player_input > $_SESSION['random_number']) {
        $message = 'もっと小さいです！';
    } elseif ($player_input < $_SESSION['random_number']) {
        $message = 'もっと大きいです！';
    } else {
        $message = '正解です！おめでとうございます！';
        // 正解した場合はセッションのランダム数をリセットして新しいゲームを開始
        unset($_SESSION['random_number']);
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ランダム数字ゲーム</title>
</head>
<body>
    <h1>ランダム数字ゲーム</h1>
    
    <!-- プレイヤーからの入力フォーム -->
    <form method="POST">
        <label for="player_number">1～100 の数字を入力してください:</label>
        <input type="number" id="player_number" name="player_number" min="1" max="100" required>
        <button type="submit">送信</button>
    </form>

    <!-- 結果表示 -->
    <?php if ($message): ?>
        <p><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></p>
    <?php endif; ?>
</body>
</html>