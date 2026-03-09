<?php
// JSON形式を指定してブラウザ側へ返信
header('Content-Type: application/json');

// Ajaxリクエストを取得
$ajax_request = file_get_contents('php://input');

// JSONをPHPの連想配列に変換
$data = json_decode($ajax_request, true);

// nameの値に応じて切り替え
if ($data['name'] === 'SAMURAI') {
    $data['name'] = 'TERAKOYA';
} else {
    $data['name'] = 'SAMURAI';
}

// JSONとして出力
echo json_encode(['message' => $data['name']]);