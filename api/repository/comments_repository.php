<?php

require_once dirname(__FILE__) . '/../db_connection.php';

class comments_repository
{
    private $con;

    /**
     * article_repository constructor.
     */
    public function __construct()
    {
        $pdo = new db_connection();
        $this->con = $pdo->get_pdo();
    }

    function insert($articles_id, $user_name, $comment)
    {
        $sql = 'INSERT INTO comments (articles_id, user_name, comment) VALUES (:articles_id, :user_name, :comment)';
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':articles_id', $articles_id, PDO::PARAM_INT);
        $stmt->bindParam(':user_name', $user_name);
        $stmt->bindParam(':comment', $comment);
        $stmt->execute();
    }

    function index($articles_id): array
    {
        $sql = 'SELECT * FROM comments WHERE articles_id = :articles_id ORDER BY comments_id DESC ';
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':articles_id', $articles_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}