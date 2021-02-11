<?php
require_once dirname(__FILE__) . '/../../usecase/comments_usecase.php';
require_once dirname(__FILE__) . '/../../response/error.php';
require_once dirname(__FILE__) . '/../../response/comments.php';


$articles_id = (int)$_GET['articles_id'];

$cu = new comments_usecase();
$arr = $cu->index_comments($articles_id);

if (array_key_exists('error', $arr)) {
    http_response_code(400);
    print json_encode(new ErrorResponse($arr['error']));
}

print json_encode(new CommentsIndex($arr));