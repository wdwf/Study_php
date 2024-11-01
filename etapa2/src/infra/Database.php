<?php

namespace Src\Infra;

use PDO;
use PDOException;

class Database
{
    private $host = "dcs-postgres";
    private $port = '5432';
    private $dbname = 'study_php';
    private $user = 'postgres';
    private $password = 'password';
    private $pdo;

    public function getConnection()
    {
        if ($this->pdo === null) {
            try {
                // Cria uma nova conexão PDO e configura o modo de erro do PDO para lançar exceções
                $dsn = "pgsql:host={$this->host};port={$this->port};dbname={$this->dbname}";
                $this->pdo = new PDO($dsn, $this->user, $this->password);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
            } catch (PDOException $e) {
                die("Erro ao conectar ao banco de dados:" . $e->getMessage());
            }
            return $this->pdo;
        }
    }
}