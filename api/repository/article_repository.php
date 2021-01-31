<?php

require_once dirname(__FILE__) . '/../db_connection.php';

class article_repository
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
        try {
            $stmt->execute();
            return null;
        } catch (Exception $e) {
            return $e;
        }
    }

    function index()
    {
        $sql = 'SELECT * FROM articles ORDER BY articles_id DESC ';
        try {
            $stmt = $this->con->query($sql);
            return $stmt->fetchAll();
        } catch (Exception $e) {
            return $e;
        }
    }

    function detail($articles_id): Exception
    {
        $sql = 'SELECT * FROM articles WHERE articles_id = :articles_id ';
        try {
            $stmt = $this->con->prepare($sql);
            $stmt->bindParam(':articles_id', $articles_id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();
        } catch (Exception $e) {
            return $e;
        }
    }
}