<?php

class ArticlesIndex {
    public $articles;

    /**
     * ArticlesIndex constructor.
     * @param $articles
     */
    public function __construct($articles)
    {
        $article = array();
        foreach ($articles as $value) {
            array_push($article, new Article($value['articles_id'], $value['user_name'], $value['article'], $value['create_at'], $value['update_at']));
        }
        $this->articles = $article;
    }

}

class Article {
    public $articlesId;
    public $userName;
    public $article;
    public $createAt;
    public $updateAd;

    /**
     * Article constructor.
     * @param $articlesId
     * @param $userName
     * @param $article
     * @param $createAt
     * @param $updateAd
     */
    public function __construct($articlesId, $userName, $article, $createAt, $updateAd)
    {
        $this->articlesId = $articlesId;
        $this->userName = $userName;
        $this->article = $article;
        $this->createAt = $createAt;
        $this->updateAd = $updateAd;
    }


}