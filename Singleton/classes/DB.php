<?php
/*
 * Шаблон проектирования singleton на примере подключения к БД
 */

class DB
{
    private static $instance;
    private $pdo;
    private function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=name', 'user', 'password');
        return $this->pdo;
    }
    private function __clone()
    {
        //return Singleton;
    }
    private function __wakeup()
    {
        //return Singleton;
    }
    public static function getInstance()
    {
        if ( empty(self::$instance) )
        {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function selectAll()
    {
        $query = $this->pdo->prepare('SELECT * FROM dbname');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        echo "<pre>" . print_r($result, true) . "</pre>";
    }
}

