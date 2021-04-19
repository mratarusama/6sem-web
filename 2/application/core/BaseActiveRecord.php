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
    private $db = "web-labs";
    private $dsn = "";
    public $pdo;


    function __construct($dbName = null) {
        if(is_null($this->db)) {
            if(is_null($dbName)) {
                throw new Exception("Please specify database name");
            } else {
                $this->db = $dbName;
            }
        }

        $this->dsn = "mysql:host=$this->host;port=$this->port;dbname=$this->db";
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
    static function find($id){

    }

    // Возвращает все строки таблицы
    static function findAll(){

    }

    // Выполнение запроса
    protected function query($query){
        try {
            $result = $this->pdo->query($query);
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
        return $result;
    }
}
