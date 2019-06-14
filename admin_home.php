<?php
session_start();
$message = '';
if (isset($_POST['btn'])) {
    require_once'./class/Mess.php';
    $Mess = new Mess();
    $message = $Mess->save_breking_news($_POST);
}
?>





<!doctype html>
<html lang="en">
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="assets/css/font/all.min.css">
        <link rel="stylesheet" href="assets/css/animate.css-master/animate.min.css">
        <link rel="stylesheet" href="assets/css/newcss.css">
        <link rel="stylesheet" href="assets/css2/bootstrap.min.css">


    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#"><h2 class="bounceIn"><span class="badge badge-info">AIO</span></h2></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynev" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mynev">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="member_info.php">Member Info</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Meal
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="meal_history.php">Add your meal</a>
                            <a class="dropdown-item" href="view_student.php">Meal History</a>
                            <div class="dropdown-divider"></div>

                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link disabled" href="#">Click here</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">

                        <p>welcome <?php echo $_SESSION['full_name']; ?></p>
                    </li>

                    <li class="nav-item">

                        <a class="btn btn-info" href="Log_in.php">Log out</a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link disabled" href="#">Follow us:</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.facebook.com/profile.php?id=100010448894479" target="_blank"><i class="fab fa-facebook-f" style="height:20px;"></i></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.instagram.com/nazmulian/?fbclid=IwAR3fOrBjsWUadRTKVq4-f8Q5_JXJSn3nj_M38Qj2PoYqdZ2NX67pBroslBA" target="_blank"><i class="fab fa-instagram" style="width:20px; height:20px;"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://twitter.com/nazmulagm0721?fbclid=IwAR3E6v8GG36-KXMbWGmsFnvalFJMEUTQRlK9g8071rCdVq6rGsw5Qdf2Ulo" target="_blank"><i class="fab fa-twitter"style="width:20px; height:20px;"></i></a>
                    </li>



                </ul>


            </div>
        </nav>


        <section id="banner">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active" style="background:url(img/hello-welcome.png);"> 
                    </div>
                    <div class="carousel-item" style="background:url();">
                    </div>
                    <div class="carousel-item" style="background:url();">

                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <div class="card text-center">
            <div class="card-header">
                <h3 class="bounceIn"><span class="badge badge-danger"> write Breaking news</span></h3>
                <form class="form-horizontal" action="" method="post">
                    <div class="form-control">


                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Admin Name</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="admin_name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Date</label>
                            <div class="col-sm-12">
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='date' class="form-control" name="date">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">news</label>
                            <div class="col-sm-12">
                                <textarea name="news" class="form-control"></textarea>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-12">
                                <button type="submit"name="btn" class="btn btn-success ">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="card-footer text-muted">
                &COPY;mess managment2018
            </div>
        </div>



        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/all.min.js"></script>

        <script src="assets/js2/bootstrap.min.js"></script>
    </body>
</html