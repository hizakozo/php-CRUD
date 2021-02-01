<?php
require_once dirname(__FILE__) . '/../../usecase/comments_usecase.php';

$body = json_decode(file_get_contents('php://input'), true);
$input_articles_id = $body['articles_id'];
$input_user_name = $body['user_name'];
$input_comment = $body['comment'];

$cu = new comments_usecase();
$response = $cu->insert_comments($input_articles_id, $input_user_name, $input_comment);

print $response->get_json();