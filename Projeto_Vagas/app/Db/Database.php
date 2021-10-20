<?php

namespace App\Db;

use \PDO;
use \PDOException;
 
class Database{

    const HOST = 'localhost';
    const NAME = 'projeto_vagas';
    const USER = 'root';
    const PASS = 'senha123';

    private $table;
    private $connection;

        //Define a tabela e instancia a conexão

    public function __construct($table = null){
        $this->table = $table;
        $this->setConnection();
    }

    //Método responsável por criar uma conexão com bd
    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME, self::USER, self::PASS);
            $this ->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('Error: '.$e->getMessage());
        }
    }
    //MÉTODO RESPONSÁVEL POR EXECUTAR QUERYS DENTRO DO BANCO DE DADOS
    public function execute($query,$params = []){
        try{
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        }catch(PDOException $e){
            die('Error: '.$e->getMessage());
        }
    }

        //Método responsável por inserir dados no banco

    public function insert($values){
        //DADOS DA QUERY
        $fields = array_keys($values);
        $binds = array_pad([],count($fields), '?');

        //echo "<pre>"; print_r($binds); echo "</pre>"; exit;

        $query = 'INSERT INTO '.$this->table.'('.implode(',',$fields). ') VALUES ('.implode(',',$binds).')';

        $this->execute($query,array_values($values));

        //Retorna o ID
        return $this->connection->lastInsertId();
    }

    public function select($where = null, $order = null, $limit = null, $fields = '*'){

        //Dados da Query
        $where = strlen($where) ? 'WHERE'.$where : '';
        $order = strlen($order) ? 'ORDER BY'.$order : '';
        $limit = strlen($limit) ? 'LIMIT'.$limit : '';

        //Monta a query
        $query = 'SELECT '.$fields.' FROM '.$this->table.'  '.$where.' '.$order.' '.$limit;
                                                                        
        return $this->execute($query);
    }

    public function update($where,$values){
        //DADOS DA QUERY
        $fields = array_keys($values);

        $query = 'UPDATE'.$this->table. 'SET '.implode('=?,',$fields).'=? WHERE'.$where;
        
        $this->execute($query,array_values($values));

        return true;
    }
}