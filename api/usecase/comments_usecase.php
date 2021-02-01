<?php
require_once dirname(__FILE__) . '/../repository/comments_repository.php';
require_once dirname(__FILE__) . '/../repository/articles_repository.php';
require_once dirname(__FILE__) . '/../response/base_response.php';

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

    function insert_comments($articles_id, $user_name, $comment): base_response
    {
        if (empty($articles_id)) {
            return new base_response('required articles_id', null);
        }
        if (empty($user_name)) {
            return new base_response('required user_name', null);
        }
        if (empty($comment)) {
            return new base_response('required comment', null);
        }

        $target_article = $this->articles_repo->detail($articles_id);
        if (!$target_article) {
            return new base_response('Not Found article', null);
        }
        $this->comments_repo->insert($articles_id, $user_name, $comment);
        return new base_response(null, null);
    }

    function index_comments($articles_id): base_response
    {
        if (empty($articles_id)) {
            return new base_response('required articles_id', null);
        }
        $comments = $this->comments_repo->index($articles_id);
        return new base_response(null, $comments);
    }
}