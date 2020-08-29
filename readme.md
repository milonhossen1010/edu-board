## Education Board Result Systeam

This is a learning purpose project for student result calculation. We use some programming language here.

#### Laguage List

- HTML 5
- CSS 3
- javascript
- jQuery
- PHP
- MySQL
- Ajax
- OOP
- PDO

#### Database class design
'''php

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

'''