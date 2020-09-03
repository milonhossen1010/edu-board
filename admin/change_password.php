<?php include_once "template/header.php";

use Edu\board\Controller\User;

$user = new User;



?>


<?php

/**
 * Value get 
 */
if (isset($_POST['submit'])) {
     $old_pass = $_POST['old_pass'];
     $new_pass = $_POST['new_pass'];
     $confirm_pass = $_POST['confirm_pass'];

     $user_id = $_SESSION['id'];

     //Old password check 
     if (password_verify($old_pass, $_SESSION['pass'])) {
          $old_pass_check = true;
     } else {
          $old_pass_check = false;
     }
     
     //Password check
     if ($new_pass == $confirm_pass) {
          $cpass = true;
     } else {
          $cpass = false;
     }

     if (empty($confirm_pass) || empty($new_pass) || empty($old_pass)) {
          $mess = "<p class=\"alert alert-danger\">All flied are required!<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
     }elseif($old_pass_check == false){
          $mess = "<p class=\"alert alert-danger\">Old password is not match!<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
     } elseif ($cpass == false) {
          $mess = "<p class=\"alert alert-danger\">Confirm password is not match!<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
     } else {
        $mess =  $user -> change_pass($user_id, $new_pass  );
     }
}




?>


<!-- MAIN CONTENT  -->
<section id="content">
     <section class="hbox stretch">
          <section>
               <section class="vbox">
                    <section class="scrollable padder">



                         <section class="row m-b-md">
                              <div class="col-sm-6">
                                   <h3 class="m-b-xs text-black">Setting</h3> <small>Welcome back, <?php echo $_SESSION['name']; ?> <i class="fa fa-envelope fa-lg text-primary"></i> <?php echo $_SESSION['email']; ?></small>
                              </div>
                              <div class="col-sm-6 text-right text-left-xs m-t-md">
                                   <div class="btn-group"> <a class="btn btn-rounded btn-default b-2x dropdown-toggle" data-toggle="dropdown">Widgets <span class="caret"></span></a>
                                        <ul class="dropdown-menu text-left pull-right">
                                             <li><a href="#">Notification</a></li>
                                             <li><a href="#">Messages</a></li>
                                             <li><a href="#">Analysis</a></li>
                                             <li class="divider"></li>
                                             <li><a href="#">More settings</a></li>
                                        </ul>

                         </section>






                         <div class="row">
                              <div class="col-sm-6">
                                   <section class="panel panel-default">
                                        <header class="panel-heading font-bold">Change Password</header>
                                        <?php
                                        if (isset($mess)) {
                                             echo $mess;
                                        }
                                        ?>
                                        <div class="panel-body">
                                             <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" role="form">

                                                  <div class="form-group">
                                                       <label>Old Password</label>
                                                       <input name="old_pass" type="password" class="form-control" />
                                                  </div>

                                                  <div class="form-group">
                                                       <label>New Password</label>
                                                       <input name="new_pass" type="password" class="form-control" />
                                                  </div>

                                                  <div class="form-group">
                                                       <label>Confirm Password</label>
                                                       <input name="confirm_pass" type="password" class="form-control" />
                                                  </div>

                                                  <button name="submit" type="submit" class="btn btn-sm btn-default">Change Password</button>
                                             </form>
                                        </div>
                                   </section>
                              </div>

                         </div>












                    </section>
               </section>
          </section>

     </section>
     <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>





<?php include_once "template/footer.php"; ?>