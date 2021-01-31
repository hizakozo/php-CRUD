<?php
require_once dirname(__FILE__) . '/../../service/article_service.php';

$body = json_decode(file_get_contents('php://input'), true);
$input_user_name = $body['user_name'];
$input_article = $body['article'];

$service = new article_service();
$err = $service->insert_articles($input_user_name, $input_article);
$response = array('err' => $err);
print json_encode($response);