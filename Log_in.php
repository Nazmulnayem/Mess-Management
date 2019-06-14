<?php
$message = '';
if (isset($_POST['btn'])) {

    require_once'./Login.php';
    $login = new Login;
    $message = $login->admin_login_check($_POST);
}
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Messmanagment</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet"href="css/animate.min.css">
        <link rel="stylesheet" href="css2/bootstrap.min.css">
        <link rel="stylesheet" href="css/../newcss.css">


    </head>
    <body>
        <div class="card text-center badge-info">

            <div class="card-header mr-auto">
                <div class="shadow-sm ">
                    <a href="home.php"><h2 class=""><span class="badge badge-dark">AIO</span></h2></a>

                </div>
            </div>
            <div class="card-body mb-5 mt-5">

                <div class="container" style="text-align:center; margin-left: 500px; margin-bottom:300px; margin-top:50px;">

                    <div class="row">
                        <div class="col-md-8 mt-2">

                            <div class="well">
                                <div class="shadow-lg p-3 mb-5 bg-white rounded">  

                                    <div class="card text-center" >

                                        <div class="card-header badge-dark">
                                            <h5>Log In</h5>
                                        </div>


                                        <form action="" method="POST">
                                            <div class="form-group mt-2">
                                                <label for="exampleInputEmail1" CLASS="alert-light">Email</label>
                                                <input type="email" class="form-control " name="gmail" placeholder="Enter email" required>

                                            </div>
                                            <div class="form-group">

                                                <label for="exampleInputEmail1" CLASS="alert-light">Password</label>
                                                <input type="password" class="form-control" name="password"  placeholder="Password" required>

                                            </div>

                                            <button type="submit" name="btn" class="btn btn-dark btn-block">Log In</button>
                                        </form>
                                        <h5 class="text-center badge-danger"><?php echo $message; ?></h5>
                                        <p class="alert-light">Not sign in yet?<a href="sign_in.php"> sign in</a>first</p>
                                        <p><a href="">forgot password?</a></p>
                                        <p class="text-success"><a href="Guest_login.php">Guest login</a></p>
                                        

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer badge-dark mt-5">
                &copy; Messmanagment2018
            </div>
        </div>




    </div



    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>