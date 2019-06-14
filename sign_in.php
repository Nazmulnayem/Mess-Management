
<?php
$message = '';
if (isset($_POST['btn'])) {
    require_once'./class/Mess.php';
    $Mess = new Mess();
    $message = $Mess->sign_in($_POST);
}
?>




<html lang="en">
    <head>
        <title>Messmanagment</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet"href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css2/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/newcss.css">


    </head>
    <body>
        <div class="card text-center badge-dark">

            <div class="card-header  mr-auto mb-5">
                <div class="shadow-sm">
                    <a href="Log_in.php"><h2><span class="badge badge-dark">Mess Managment</span></h2></a>

                </div>
            </div>

            <section>

                <div class="container" style="text-align:center; margin-left: 500px; margin-bottom:200px; margin-top:50px;">
                    <div class="row">

                        <div class="col-lg-8">


                            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                <div class="card text-center">
                                    <div class="card-header badge-info">
                                        <h4>Sign In</h4>
                                    </div>


                                    <div class="col-lg-12">


                                        <form action="sign_in.php" method="POST">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" CLASS="alert-light">Full Name</label>
                                                <input type="text" name="full_name" class="form-control" placeholder="Full Name" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" CLASS="alert-light">Gmail</label>
                                                <input type="email" class="form-control " name="gmail"  placeholder="Enter email" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1" CLASS="alert-light">Institution</label>

                                                <select class="form-control" name="Institution">
                                                    <option >Select_your_institution</option>
                                                    <option>DIU</option>
                                                    <option>DU</option>
                                                    <option>AIUB</option>
                                                    <option>BUET</option>
                                                    <option>BRAC</option>
                                                    <option>EWU</option>
                                                    <option>NU</option>
                                                </select>

                                            </div>

                                            <div class="form-group" CLASS="alert-light">
                                                <label for="exampleInputPassword1" CLASS="alert-light" >Password</label>

                                                <input type="password" class="form-control" name="password1" placeholder="Password" required>

                                            </div>
                                            <div class="form-group" CLASS="alert-light">
                                                <label for="exampleInputPassword1" CLASS="alert-light" >Confirm Password</label>

                                                <input type="password" class="form-control" name="password2" placeholder="Password" required>

                                            </div>



                                            <button type="submit" name="btn" class="btn btn-info  mb-2">Sign In</button>
                                            <a href="sign_in.php" class="btn btn-info  mb-2">Refresh</a>
                                        </form>
                                        <h5 class="text-center badge-dark"><?php echo $message; ?></h5>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="card-footer text-mute mt-5">
                &copy; Messmanagment2018
            </div>

        </div>





        <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>