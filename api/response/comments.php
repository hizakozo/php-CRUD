<?php

class CommentsIndex {
    public $comments;

    /**
     * CommentsIndex constructor.
     * @param $comments
     */
    public function __construct($comments)
    {
        $comment = array();
        foreach ($comments as $value) {
            array_push($comment, new Comment($value['comments_id'], $value['articles_id'], $value['user_name'],
                $value['comment'], $value['create_at'], $value['update_at']));
        }
        $this->comments = $comment;
    }

}

class Comment {
    public $commentsId;
    public $articlesId;
    public $userName;
    public $comment;
    public $createAt;
    public $updateAt;

    /**
     * Comment constructor.
     * @param $commentsId
     * @param $articlesId
     * @param $userName
     * @param $comment
     * @param $createAt
     * @param $updateAt
     */
    public function __construct($commentsId, $articlesId, $userName, $comment, $createAt, $updateAt)
    {
        $this->commentsId = $commentsId;
        $this->articlesId = $articlesId;
        $this->userName = $userName;
        $this->comment = $comment;
        $this->createAt = $createAt;
        $this->updateAt = $updateAt;
    }


}