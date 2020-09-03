<?php

namespace Edu\board\Controller;

use Edu\board\Support\Database;

class User extends Database
{
     public function change_pass($user_id, $new_pass)
     {
          $this->update('users', $user_id, [

               'pass' => password_hash($new_pass, PASSWORD_DEFAULT),

          ]);

          return '<p class="alert alert-success">Successful changed password.<button class="close" data-dismiss="alert">&times;</button></p>';
     }
}
