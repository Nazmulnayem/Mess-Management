<?php
require_once'./Mess.php';
$Mess = new Mess();
if (isset($_GET['delete'])) {

    $id = $_GET['delete'];

    $message = $Mess->delete_meal_info($id);
}
$query_result = $Mess->select_all_members_info();
    
?>


<script>
            function checkDelete(){
            var check=confirm('Are you sure to delete this !');
            if(check){
                return ture;
            }else{
                return false;
            }
        }
            </script>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <title>view student</title>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <link href="css/bootstrap.min.css" rel="stylesheet">



        </head>
        <body>
            <nav class="navbar navbar-dark badge-dark bg-dark ">
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
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                       
                        <form class="navbar-form navbar-left" action method="post" >
                            <div class="form-group align-center">
                                <input type="text" class="form-control" placeholder="Search member" name="btn">
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
                                    <th>Member No</th>
                                    <th>Member Name</th>
                                    <th>Day</th>
                                    <th>Night</th>
                                    <th>Date</th>
                                    
                                </tr>
                                <?php while ($mess_info = mysqli_fetch_assoc($query_result)) { ?>
                                    <tr>
                                        <td><?php echo $mess_info['member_id']; ?></td>
                                        <td><?php echo $mess_info['member_name']; ?></td>
                                        <td><?php echo $mess_info['Day']; ?></td>
                                        <td><?php echo $mess_info['Night']; ?></td>
                                        <td><?php echo $mess_info['date']; ?></td>
                                        
                                        
                                        
                                    </tr> 
                                    
                                
                                  <?php }
                                  ?>
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

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>