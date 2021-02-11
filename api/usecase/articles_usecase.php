<?php
require_once dirname(__FILE__) . '/../repository/articles_repository.php';
require_once dirname(__FILE__) . '/../constants/error_message.php';

class articles_usecase
{
    private $repo;

    /**
     * article_service constructor.
     */
    public function __construct()
    {
        $this->repo = new articles_repository();
    }

    function insert_articles($user_name, $article): array
    {
        if (empty($user_name)) {
            return VALIDATE_FAILED;
        }
        if (empty($article)) {
            return VALIDATE_FAILED;
        }
        $this->repo->insert($user_name, $article);
        return array();
    }

    function index_articles(): array
    {
        return $this->repo->index();
    }

    function detail_articles($articles_id): array
    {
        if (empty($articles_id)) {
            return VALIDATE_FAILED;
        }
        $article = $this->repo->detail($articles_id);
        if (!$article) {
            return NOT_FOUND_DATA;
        }
        return $article;
    }
}