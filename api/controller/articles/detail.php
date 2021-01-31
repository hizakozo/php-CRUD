<?php
require_once dirname(__FILE__) . '/../../usecase/article_usecase.php';

$service = new article_usecase();
$articles_id = (int)$_GET['id'];
$articles = $service->detail_articles($articles_id);

print json_encode($articles);