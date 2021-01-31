<?php
require_once dirname(__FILE__) . '/../../service/article_service.php';

$service = new article_service();
$articles_id = (int)$_GET['id'];
$articles = $service->detail_articles($articles_id);

print json_encode($articles);