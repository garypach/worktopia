<?php

class Database
{
    public $conn;


    /** 
     * Constructor for Database class
     * 
     * @param array $config
     * 
     * 
     */

    public function _construct($config)
    {
        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']}";

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        ];

        try {
            $this->conn = new PDO($dsn, $config['username'], $config['password'], $options);
        } catch (PDOException $e) {
            throw new Exception("Database connection failed: {$e->getMessage()}");
        }
    }

    /**
     * query database
     * 
     * @param string $query
     * @return PDOStatement
     * @throws PDOException
     *
     * 
     */

    public function query($query, $params = [])
    {
        try {
            $statement = $this->conn->prepare($query);
            //bind named params
            foreach ($params as $param => $value) {
                $statement->bindValue(':' . $param, $value);
            }
            $statement->execute();
            return $statement;
        } catch (PDOException $e) {
            throw new Exception("Query failed to execute:{$e->getMessage()}");
        }
    }
}
