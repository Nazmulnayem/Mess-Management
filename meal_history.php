<?php
$message = '';
if (isset($_POST['btn'])) {
    require_once'./class/Mess.php';
    $Mess = new Mess();
    $message = $Mess->save_mess_info($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Meal history</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href=""


    </head>
    <body>
        <nav class="navbar col-lg-12">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="home.php">Mess Managment</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->


            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center text-success"><?php echo $message; ?></h3>
                <div class="well">
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Member Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="member_name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Day</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="Day">
                                    <option >Select_day_meal</option>
                                    <option>00</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Night</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="Night">
                                    <option >Select_night_meal</option>
                                    <option>00</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Date</label>
                            <div class="col-sm-10">
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='date' class="form-control" name="date">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>

                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit"name="btn" class="btn btn-success btn-block">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>



    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

</body>
</html>