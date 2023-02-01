<?php
require '../vendor/autoload.php';

// クライアントの生成
$cli = new GuzzleHttp\Client([
    'base_uri' => 'https://wings.msn.to/',
]);

// リクエストの送信
$res = $cli->request('get', '/tmp/sample.txt');
// 取得したコンテンツを出力
print $res->getBody();
