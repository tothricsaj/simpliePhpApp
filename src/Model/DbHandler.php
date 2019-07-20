<?php

class DbHandler
{
    private static $instance = null;
    private $conn;

    private $server = '172.9.30.3';
    private $port = '3306';
    private $db = 'saDb';

    private function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->server; port=$this->port; dbname=$this->db", 'root', 'root');
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'We are in<br />';
        } catch (PDOException $e) {
            echo "Something went wrong: ". $e->getMessage();
        }
    }

    public static function getInstance(): DbHandler
    {
        if(!self::$instance)
        {
           self::$instance = new DbHandler();
        }

        return self::$instance;
    }

    public function getConection(): PDO
    {
        return $this->conn;
    }
}