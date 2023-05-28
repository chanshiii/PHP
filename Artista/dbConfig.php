<?php

// どこに接続するかの情報を指定
$dbName = 'mysql:host-localhost;dbname=arista;charset=utf8';
// 誰が接続するのかの指定 セキュリティをかけたい場合は以下の情報にパスワード設定が必要
$userName = 'root';

//接続処理
try {
    $db = new PDO($dbName, $userName);
    // var_dump('success');
} catch(\Throwable $th) {
    exit();
}

?>