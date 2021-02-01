<?php
require_once dirname(__FILE__) . '/../../usecase/articles_usecase.php';

$au = new articles_usecase();
$articles = $au->index_articles();

print $articles->get_json();