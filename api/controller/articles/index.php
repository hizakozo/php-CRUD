<?php
require_once dirname(__FILE__) . '/../../usecase/article_usecase.php';

$service = new article_usecase();
$articles = $service->index_articles();

print json_encode($articles);