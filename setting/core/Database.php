<?php
class Database  
{
    private $dsn,$dbh,$stmt;
    public function __construct() {
        $this->dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;
        try {
            $this->dbh = new PDO($this->dsn,DB_USER,DB_PASS);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Database error : '.$e->getMessage());
        }
    }
    
    // prepare
    public function prepare($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }
    // bind untuk sql injection
    public function bind($param,$value,$type = null)
    {
        switch (is_null($type)) {
            case is_int($value):
                $type = PDO::PARAM_INT;
                break;
            case is_null($value):
                $type = PDO::PARAM_NULL;
                break;
            case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                break;
            default:
                $type = PDO::PARAM_STR;
                break;
        }
        $this->stmt->bindValue($param,$value,$type);
    }
    // execute 
    public function execute()
    {
        $this->stmt->execute();
    }

    // query All
    public function queryAll()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function queryOne()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
    // row count
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}
