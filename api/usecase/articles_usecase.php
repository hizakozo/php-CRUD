<?php
require_once dirname(__FILE__) . '/../repository/articles_repository.php';
require_once dirname(__FILE__) . '/../response/base_response.php';

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

    function insert_articles($user_name, $article): base_response
    {
        if (empty($user_name)) {
            return new base_response('required user_name', null);
        }
        if (empty($article)) {
            return new base_response('required article', null);
        }

        $this->repo->insert($user_name, $article);
        return new base_response(null, null);
    }

    function index_articles(): base_response
    {
        $articles = $this->repo->index();
        return new base_response(null, $articles);
    }

    function detail_articles($articles_id): base_response
    {
        if (empty($articles_id)) {
            return new base_response('articles_id required', null);
        }
        $article = $this->repo->detail($articles_id);
        if (!$article) {
            return new base_response('Not Found Data', null);
        }
        return new base_response(null, $article);
    }
}