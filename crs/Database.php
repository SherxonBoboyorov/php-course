<?php


class Database 
{
       public $servername;
       public $database;
       public $username;
       public $password;

    public function __construct($servername, $database, $username, $password)
    {
        $this->servername = $servername;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;
        $this->password = $password;

        $this->connect();
    }

    public function connect()
    {
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
            }
                catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();

            echo "19.01.2024"; // bu shunchaki githubda branch ni tekshirish uchun qilindi
            
        }
    }



    
}


?>

