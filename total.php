<?php
require_once'./class/Mess.php';
$Mess = new Mess();
$query_result = $Mess->select_total_day_meal();
$query_result1 = $Mess->select_total_night_meal();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>view student</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet">



    </head>
    <body>
        <nav class="navbar navbar-dark badge-dark bg-dark fixed-top">
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
           <!--     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="add_member.php">Add Members<span class="sr-only">(current)</span></a></li>
                        <li><a href="view_member.php">View Members</a></li>

                    </ul>
                    <form class="navbar-form navbar-left" action method="post" >
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search" name="btn">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-12">

                    <div class="well">
                        <table class="table table-bordered table-hover">
                            <tr>

                                <th class="text-center">Total Day</th>
                                <th class="text-center">Total Night</th>

                            </tr>
                            <tr>
                                <?php while ($meal_info = mysqli_fetch_assoc($query_result)) { ?>


                                    <td class="text-center"><h1><?php
                                        foreach ($meal_info as $value) {
                                            echo $value;
                                        }
                                        ?></h1></td>




                                <?php }
                                ?> 
                   <?php while ($meal_info1 = mysqli_fetch_assoc($query_result1)) { ?>


                                    <td class="text-center"><h1><?php
                                        foreach ($meal_info1 as $value) {
                                            echo $value;
                                        }
                                        ?></h1></td>

                                    


                                <?php }
                                ?> 
                            </tr>
                        </table>  
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="card-footer text-center bg-danger mt-5">
        &COPY;mess managment2018
    </div>
</div>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>