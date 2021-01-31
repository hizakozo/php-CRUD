<?php
require_once dirname(__FILE__) . '/../../service/article_service.php';

$service = new article_service();
$articles = $service->index_articles();

print json_encode($articles);