<?php
require_once dirname(__FILE__) . '/../../usecase/articles_usecase.php';

$body = json_decode(file_get_contents('php://input'), true);
$input_user_name = $body['user_name'];
$input_article = $body['article'];

$au = new articles_usecase();
$response = $au->insert_articles($input_user_name, $input_article);

print $response->get_json();