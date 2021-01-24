<?php

const DB_HOST = 'mysql:dbname=bbs;host=db;charset=utf8';
const DB_USER = 'root';
const DB_PASS = 'root';

//例外処理
try {
    $pdo = new PDO(DB_HOST, DB_USER, DB_PASS, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //連想配列
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //例外
        PDO::ATTR_EMULATE_PREPARES => false, //SQLインジェクション対策
    ]);
} catch (PDOException $e) {
    echo '接続失敗' . $e->getMessage() . "\n";
    exit();
}