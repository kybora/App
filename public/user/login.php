<?php
include_once("../../includes/database.php");
include_once("../../includes/Session.php");
include_once("../../includes/User.php");
include_once("../../includes/functions.php");

if($session->is_logged_in()){
    redirect_to("index.php");
}

if(isset($_POST['submit'])){

    $email=trim($_POST['email']);
    $password=trim($_POST['password']);

    $user=User::auth($email,$password);

    if($user){
        $session->login($user);
        redirect_to("../index.php");
    }else{
        message("email and password is false");
    }

}
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="col-md-4 offset-md-4">
            <div class="jumbotron">
                <form action="" method="post">

                    <div class="form-group row">
                        <label for="">email</label>
                        <div class="col-md-8">
                            <input name="email" type="email" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="">password</label>
                        <div class="col-md-8">
                        <input name="password" type="password" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <button name="submit" class="btn btn-success">Click</button>
                    </div>

                </form>
            </div>
        </div>
    </body>
</html>

<?php
if(isset($db)){
    $db->close();
}
?>