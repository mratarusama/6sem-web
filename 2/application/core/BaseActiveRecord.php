<?php
class BaseActiveRecord {
    private $host = "127.0.0.1";
    private $charset = "utf8mb4";
    private $port = "3306";
    private $user = "root";
    private $pass = "root";
    private $options = [
        PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES      => false
    ];
    private $db = "";
    private $dsn = "";
    private $pdo;


    function __construct($dbName) {
        $this->db = $dbName;
        $this->dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset;port=$this->port";
        try {
            $this->pdo = new PDO($this->dsn, $this->user, $this->pass, $this->options);
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    // Создаёт/обновляет запись в БД
    function save(){

    }

    // Удаляет запись из БД
    function delete(){

    }

    // Ищет в таблице элемент с полем id равным $id
    function find($id){

    }

    // Возвращает все строки таблицы
    function findAll(){

    }
}
