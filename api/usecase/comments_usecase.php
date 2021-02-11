<?php
require_once dirname(__FILE__) . '/../repository/comments_repository.php';
require_once dirname(__FILE__) . '/../repository/articles_repository.php';
require_once dirname(__FILE__) . '/../constants/error_message.php';

class comments_usecase
{
    private $comments_repo;
    private $articles_repo;

    /**
     * article_service constructor.
     */
    public function __construct()
    {
        $this->comments_repo = new comments_repository();
        $this->articles_repo = new articles_repository();
    }

    function insert_comments($articles_id, $user_name, $comment): array
    {
        if (empty($articles_id)) {
            return VALIDATE_FAILED;
        }
        if (empty($user_name)) {
            return VALIDATE_FAILED;
        }
        if (empty($comment)) {
            return VALIDATE_FAILED;
        }

        $target_article = $this->articles_repo->detail($articles_id);
        if (!$target_article) {
            return NOT_FOUND_DATA;
        }
        $this->comments_repo->insert($articles_id, $user_name, $comment);

        return array();
    }

    function index_comments($articles_id): array
    {
        if (empty($articles_id)) {
            return VALIDATE_FAILED;
        }
        if (empty($this->articles_repo->detail($articles_id))) {
            return NOT_FOUND_DATA;
        }

        return $this->comments_repo->index($articles_id);
    }
}