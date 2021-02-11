<?php
require_once dirname(__FILE__) . '/../../usecase/articles_usecase.php';
require_once dirname(__FILE__) . '/../../response/success.php';

$body = json_decode(file_get_contents('php://input'), true);
$input_user_name = $body['user_name'];
$input_article = $body['article'];

$au = new articles_usecase();
$arr = $au->insert_articles($input_user_name, $input_article);

if (array_key_exists('error', $arr)) {
    http_response_code(400);
    print json_encode(new ErrorResponse($arr['error']));
    return;
}

print json_encode(new SuccessResponse('success article insert'));