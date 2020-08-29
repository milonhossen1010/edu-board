<?php 
    include_once "../../config.php";

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
        private $connection ;

    /**
     * Database connection
     */
        private function connection()
        {
           $connection = new PDO("mysql: host=" . $this -> host. ";db_name=" . $this -> db , $user, $pass);
        }
    }
