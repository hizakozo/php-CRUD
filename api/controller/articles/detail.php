<?php
require_once dirname(__FILE__) . '/../../usecase/articles_usecase.php';
require_once dirname(__FILE__) . '/../../response/articles.php';
require_once dirname(__FILE__) . '/../../response/error.php';


$au = new articles_usecase();
$articles_id = (int)$_GET['id'];
$article = $au->detail_articles($articles_id);

if (array_key_exists('error', $article)) {
    http_response_code(400);
    print json_encode(new ErrorResponse($article['error']));
    return;
}

$response = new Article($article['articles_id'], $article['user_name'], $article['article'], $article['create_at'], $article['update_at']);

print json_encode($response);
