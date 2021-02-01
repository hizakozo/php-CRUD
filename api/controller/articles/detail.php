<?php
require_once dirname(__FILE__) . '/../../usecase/articles_usecase.php';

$au = new articles_usecase();
$articles_id = (int)$_GET['id'];
$article = $au->detail_articles($articles_id);

print $article->get_json();