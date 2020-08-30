<?php
namespace Edu\board\Support;
require_once "../config.php";
require_once "../vendor/autoload.php";

use Edu\board\Support\Auth;

$auth = new Auth;



?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Education Board Result</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="css/app.v1.css" type="text/css" />

</head>

<body class="">

    <?php
    /**
     * Form isset
     */
    if (isset($_POST['submit'])) {
        $email_uname = $_POST['email_uname'];
        $pass = $_POST['pass'];

        if (empty($email_uname)|| empty($pass)) {
           $mess = '<p class="alert alert-danger">All flied are required!<button class="close" data-dismiss="alert">&times;</button></p>';
        } else {
            $auth -> userLoginSystem($email_uname, $pass);
        }
        
    }






    ?>

    <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
        <div class="container aside-xl"> <a class="navbar-brand block" href="index.html">Education Board Result</a>
            <section class="m-b-lg">
                <header class="wrapper text-center"> <strong>Sign in to get in touch</strong> </header>
                <?php
                    if (isset($mess)) {
                        echo $mess;
                    }
                ?>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>  " method="POST">
                    <div class="list-group">
                        <div class="list-group-item">
                            <input name="email_uname" type="text" placeholder="Email or Username" class="form-control no-border"> </div>
                        <div class="list-group-item">
                            <input name="pass" type="password" placeholder="Password" class="form-control no-border"> </div>
                    </div>
                    <button name="submit" type="submit" class="btn btn-lg btn-primary btn-block">Log in</button>

                    <div class="line line-dashed"></div>
                </form>
            </section>
        </div>
    </section>

    <!-- footer -->
    <footer id="footer">
        <div class="text-center padded">
            <p> <small>Education Board Result<br>&copy; 2020</small> </p>
        </div>
    </footer>
    <!-- / footer -->



    <!-- Bootstrap -->
    <!-- App -->
    <script src="js/app.v1.js"></script>
    <script src="js/app.plugin.js"></script>
</body>


</html>