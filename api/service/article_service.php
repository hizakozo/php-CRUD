<?php
require_once dirname(__FILE__) . '/../repository/article_repository.php';

class article_service
{
    private $repo;

    /**
     * article_service constructor.
     */
    public function __construct()
    {
        $this->repo = new article_repository();
    }

    function insert_articles($user_name, $article)
    {
        $err = $this->repo->insert($user_name, $article);
        if ($err != null) {
            return $err->getMessage();
        }
        return null;
    }

    function index_articles()
    {
        return $this->repo->index();
    }

    function detail_articles($articles_id) {
        return $this->repo->detail($articles_id);
    }
}