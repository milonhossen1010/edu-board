<?php
namespace Edu\board\Support;
use Edu\board\Support\Database;

class Auth extends Database
{
     public function userLoginSystem($email_uname, $pass)
     {
          echo $email_uname . $pass; 
     }
}








?>