<?php
require_once dirname(__FILE__) . '/../../usecase/articles_usecase.php';
require_once dirname(__FILE__) . '/../../response/articles.php';

$au = new articles_usecase();
$articles = $au->index_articles();

$response = new ArticlesIndex($articles);

print json_encode($response);