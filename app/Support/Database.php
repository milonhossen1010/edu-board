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


    // public function dataCheck($table, $data)
    // {
    //     $stmt = $this->connection()->prepare("SELECT * FROM $table WHERE email='$data' || uname='$data' ");

    //     $stmt->execute();
    //     $num = $stmt->rowCount();

    //     return [
    //         'num' => $num,
    //         'data' => $stmt
    //     ];
    // }

    /**
     * Data Check 
     */
    public function dataCheck($tbl, array $data, $condition = 'AND')
    {
        $query_string = '';
        foreach ($data as $key => $val) {

            $query_string .=  $key . "='$val' $condition ";
        }

        $query_array = explode(' ', $query_string);
        array_pop($query_array);
        array_pop($query_array);

        $final_query_string =  implode(' ', $query_array);

        $stmt = $this->connection()->prepare("SELECT * FROM $tbl WHERE $final_query_string");
        $stmt->execute();
        $num = $stmt->rowCount();

        return [
            'num'    => $num,
            'data'    => $stmt,
        ];
    }

    /**
     * Delete 
     */
    public function delete($id)
    {
        # code...
    }
    

    /**
     * Find data by Id
     */
    public function FunctionName(Type $var = null)
    {
        # code...
    }


    /**
     * Update 
     */

     public function  update($tbl, $user_id, $data)
     {

        $query_string = '';
        foreach ($data as $key => $value) {
            $query_string .= "$key ='$value' , ";
        }

        $query_array = explode(' ', $query_string);
        array_pop($query_array);
        array_pop($query_array);

        $final_query_string =  implode(' ', $query_array);

        $stmt = $this->connection()->prepare("UPDATE $tbl SET  $final_query_string ");
        $stmt->execute();
        $num = $stmt->rowCount();

        
     }




}
