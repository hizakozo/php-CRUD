<?php

require_once dirname(__FILE__).'/../db_connection.php';

const user_name = 'user_name';
const article = 'article';
const sql = 'INSERT INTO articles (user_name, article) VALUES (:user_name, :article)';

$body = json_decode(file_get_contents('php://input'), true);
$input_user_name = $body[user_name];
$input_article = $body[article];

if (empty($pdo)) {
    return;
}
if ($input_user_name == '' && $input_user_name == null) {
    echo 'user_name必須';
    return;
}
if ($input_article == '' && $input_article == null) {
    echo 'article必須';
    return;
}
$stmt = $pdo -> prepare(sql);
$stmt->bindParam(':'.user_name, $input_user_name);
$stmt->bindValue(':'.article, $input_article);
$stmt->execute();

echo '成功';