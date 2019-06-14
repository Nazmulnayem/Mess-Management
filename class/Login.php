<?php

class Login {

    protected $connection;

    public function __construct() {
        $host_name = 'localhost';
        $user_name = 'root';
        $password = '';
        $db_name = 'db_meal_system';
        $this->connection = mysqli_connect($host_name, $user_name, $password, $db_name);
        if (!$this->connection) {
            die('Connection Fail' . mysqli_error($this->connection));
        }
    }

    public function admin_login_check($data) {

        $password = md5($data['password']);
        $sql = "select * from sign_in where gmail = '$data[gmail]' and password = '$password'";
        $query_result = mysqli_query($this->connection, $sql);
        $admin_info = mysqli_fetch_assoc($query_result);
        if ($admin_info) {
            session_start();
            
            $_SESSION['full_name']=$sign_in['full_name'];
            
            header('Location: admin_home.php');
        } else {
            $message = 'Log in failed.Try again';
            return $message;
        }
    }

}
