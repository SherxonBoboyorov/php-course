<?php 

class Post 
{
    public static $pdo;
    
    public $id;
    public $title;
    public $body;
    public $created_at;

    public static function getAll()
    {
        $stmt = self::$pdo->prepare("SELECT * FROM posts");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post');
        $stmt->execute();
        $posts = $stmt->fetchAll();

        return $posts;
    }

    public static function getById($id) 
    {
        $stmt = self::$pdo->prepare("SELECT * FROM posts Where id = ?");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post');
        $stmt->execute([$id]);
        $post = $stmt->fetch();

        return $post;
    }
}



?>