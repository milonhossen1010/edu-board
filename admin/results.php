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
     } elseif ($old_pass_check == false) {
          $mess = "<p class=\"alert alert-danger\">Old password is not match!<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
     } elseif ($cpass == false) {
          $mess = "<p class=\"alert alert-danger\">Confirm password is not match!<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
     } else {
          $mess =  $user->change_pass($user_id, $new_pass);
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
                                   <h3 class="m-b-xs text-black">All Results</h3> <small>Welcome back, <?php echo $_SESSION['name']; ?> <i class="fa fa-envelope fa-lg text-primary"></i> <?php echo $_SESSION['email']; ?></small>
                              </div>



                         </section>

                         <div id="add_user_modal" class="modal fade">
                              <div class="modal-dialog ">
                                   <div class="modal-content ">
                                       
                                        <div class="modal-body">
                                             <h3>Add new student</h3>

                                             <div class="mess"></div>
                                             <hr>
                                             <form id="add_student_form" action="" method="POST" enctype="multipart/form-data">
                                                  <div class="form-group">
                                                       <label for="">Name</label>
                                                       <input class="form-control" name="name" type="text">
                                                  </div>

                                                  <div class="form-group">
                                                       <label for="">Email</label>
                                                       <input class="form-control" name="email" type="text">
                                                  </div>

                                                  <div class="form-group">
                                                       <label for="">Cell</label>
                                                       <input class="form-control" name="cell" type="text">
                                                  </div>

                                                  <div class="form-group">
                                                       <label for="">Photo</label>
                                                       <input class="form-control" name="photo" type="file">
                                                  </div>

                                                  <div class="form-group">
                                                       <label for=""></label>
                                                       <input class="btn btn-primary" name="add" type="submit" value="Add User">
                                                  </div>
                                             </form>
                                        </div>
                                     
                                   </div>
                              </div>
                         </div>




                         <div class="row ">
                              <div class="col-sm-12">
                                   <a id="add_user_btn" class="btn btn-primary" href="#">Add new user</a>
                                   <br><br>
                                   <section class="panel panel-default">
                                        <header class="panel-heading"><span class="label bg-danger pull-right m-t-xs">4 left</span> Tasks</header>
                                        <table class="table table-striped m-b-none">
                                             <thead>
                                                  <tr>
                                                       <th>#</th>
                                                       <th>Name</th>
                                                       <th>Email</th>
                                                       <th>Cell</th>
                                                       <th>Role</th>
                                                       <th>Photo</th>
                                                       <th>Status</th>
                                                       <th>Action</th>

                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                       <td>1</td>
                                                       <td>Milon</td>
                                                       <td>Milon@gmail.com</td>
                                                       <td>01750850216</td>
                                                       <td>admin</td>
                                                       <td><img style="width: 50px;" src="images/a0.png" alt=""></td>
                                                       <td>Active</td>
                                                       <td>
                                                            <a class="btn btn-sm btn-info" href="#">View</a>
                                                            <a class="btn btn-sm btn-warning" href="#">Edit</a>
                                                            <a class="btn btn-sm btn-danger" href="#">Delete</a>
                                                       </td>
                                                  </tr>
                                             <tbody>
                                                  <tr>
                                                       <td>1</td>
                                                       <td>Milon</td>
                                                       <td>Milon@gmail.com</td>
                                                       <td>01750850216</td>
                                                       <td>admin</td>
                                                       <td><img style="width: 50px;" src="images/a0.png" alt=""></td>
                                                       <td>Active</td>
                                                       <td>
                                                            <a class="btn btn-sm btn-info" href="#">View</a>
                                                            <a class="btn btn-sm btn-warning" href="#">Edit</a>
                                                            <a class="btn btn-sm btn-danger" href="#">Delete</a>
                                                       </td>
                                                  </tr>
                                             <tbody>
                                                  <tr>
                                                       <td>1</td>
                                                       <td>Milon</td>
                                                       <td>Milon@gmail.com</td>
                                                       <td>01750850216</td>
                                                       <td>admin</td>
                                                       <td><img style="width: 50px;" src="images/a0.png" alt=""></td>
                                                       <td>Active</td>
                                                       <td>
                                                            <a class="btn btn-sm btn-info" href="#">View</a>
                                                            <a class="btn btn-sm btn-warning" href="#">Edit</a>
                                                            <a class="btn btn-sm btn-danger" href="#">Delete</a>
                                                       </td>
                                                  </tr>
                                             <tbody>
                                                  <tr>
                                                       <td>1</td>
                                                       <td>Milon</td>
                                                       <td>Milon@gmail.com</td>
                                                       <td>01750850216</td>
                                                       <td>admin</td>
                                                       <td><img style="width: 50px;" src="images/a0.png" alt=""></td>
                                                       <td>Active</td>
                                                       <td>
                                                            <a class="btn btn-sm btn-info" href="#">View</a>
                                                            <a class="btn btn-sm btn-warning" href="#">Edit</a>
                                                            <a class="btn btn-sm btn-danger" href="#">Delete</a>
                                                       </td>
                                                  </tr>
                                             <tbody>
                                                  <tr>
                                                       <td>1</td>
                                                       <td>Milon</td>
                                                       <td>Milon@gmail.com</td>
                                                       <td>01750850216</td>
                                                       <td>admin</td>
                                                       <td><img style="width: 50px;" src="images/a0.png" alt=""></td>
                                                       <td>Active</td>
                                                       <td>
                                                            <a class="btn btn-sm btn-info" href="#">View</a>
                                                            <a class="btn btn-sm btn-warning" href="#">Edit</a>
                                                            <a class="btn btn-sm btn-danger" href="#">Delete</a>
                                                       </td>
                                                  </tr>



                                             </tbody>
                                        </table>
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