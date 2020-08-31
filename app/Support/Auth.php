<?php

namespace Edu\board\Support;

use Edu\board\Support\Database;
use PDO;

class Auth extends Database
{
     public function userLoginSystem($email_uname, $pass)
     {
          $data = $this->emailUserCheck($email_uname);

          $num =  $data['num'];
          $login_user_data = $data['data']->fetch(PDO::FETCH_ASSOC);

          if ($num == 1) {
               if (password_verify($pass, $login_user_data['pass'] )) {
                   
                    /**
                     * Session data
                     */
                    $_SESSION['id'] = $login_user_data['id'];
                    $_SESSION['role'] = $login_user_data['role'];
                    $_SESSION['name'] = $login_user_data['name'];
                    $_SESSION['uname'] = $login_user_data['uname'];
                    $_SESSION['email'] = $login_user_data['email'];
                    $_SESSION['cell'] = $login_user_data['cell'];
                    $_SESSION['photo'] = $login_user_data['photo'];

                    /**
                     * Redirect to dashboard
                     */
                    header("location:dashboard.php");
                               
               } else {
                    return '<p class="alert alert-danger"> Wrong password! <button class="close" data-dismiss="alert">&times;</button></p>';
               }
               
          } else {
              return '<p class="alert alert-danger">Username or email is incorrect !<button class="close" data-dismiss="alert">&times;</button></p>';
          }
          
     }


     //Email user check
     public function emailUserCheck($email_uname)
     {
          return $this->dataCheck("users", $email_uname);
     }



     /**
      * Logout system
      */
      public function logoutSystem()
      {
          session_destroy();
          header("location:../admin/index.php");
      }
}
