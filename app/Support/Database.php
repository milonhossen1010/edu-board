<?php

namespace Edu\board\Support;




use PDO;

/**
 * Database Management
 */
abstract class Database
{
    /**
     * Server information
     */
    private $host = HOST;
    private $user = USER;
    private $pass = PASS;
    private $db = DB;
    private $connection;

    /**
     * Database connection
     */
    private function connection()
    {
        return $this->connection = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db, $this->user, $this->pass);
    }


    public function dataCheck($table, $data)
    {
        $stmt = $this->connection()->prepare("SELECT * FROM $table WHERE email='$data' || uname='$data' ");

        $stmt->execute();
        $num = $stmt->rowCount();

        return [
            'num' => $num,
            'data' => $stmt
        ];
    }
}
