<?php
$member_id = $_GET['id'];
require_once './Mess.php';
$mess = new Mess();
$query_result = $mess->select_members_info($member_id);
$mess_info = mysqli_fetch_assoc($query_result);

if (isset($_POST['btn'])) {
    $mess->update_members($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Meal history</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="css/bootstrap.min.css" rel="stylesheet">



    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Meal History</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="add_member.php">Add Members<span class="sr-only">(current)</span></a></li>
                        <li><a href="view_member.php">View Members</a></li>

                    </ul>
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="well">
                        <form class="form-horizontal" action="" method="POST">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Member Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="member_name" value="<?php echo $mess_info['member_name']; ?>" required>
                                    <input type="hidden" class="form-control" name="member_id" value="<?php echo $mess_info['member_id']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Phone Number</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="phone_number" value="<?php echo $mess_info['phone_number']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Email_Address</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email_address" value="<?php echo $mess_info['email_address']; ?>" >

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-10">
                                    <textarea name="address" class="form-control" value="<?php echo $mess_info['address']; ?>"></textarea>
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit"name="btn" class="btn btn-success btn-block">Update member info</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>



        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>
</html