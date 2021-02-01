<?php
require_once dirname(__FILE__) . '/../../usecase/comments_usecase.php';

$articles_id = (int)$_GET['articles_id'];

$cu = new comments_usecase();
$comments = $cu->index_comments($articles_id);

print $comments->get_json();