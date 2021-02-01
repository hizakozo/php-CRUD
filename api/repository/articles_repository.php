<?php

require_once dirname(__FILE__) . '/../db_connection.php';

class articles_repository
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

    function insert($user_name, $article)
    {
        $sql = 'INSERT INTO articles (user_name, article) VALUES (:user_name, :article)';
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':user_name', $user_name);
        $stmt->bindParam(':article', $article);
        $stmt->execute();
    }

    function index(): array
    {
        $sql = 'SELECT * FROM articles ORDER BY articles_id DESC ';
        $stmt = $this->con->query($sql);
        return $stmt->fetchAll();
    }

    function detail($articles_id)
    {
        $sql = 'SELECT * FROM articles WHERE articles_id = :articles_id ';
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':articles_id', $articles_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }
}