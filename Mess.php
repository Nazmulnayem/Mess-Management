<?php

class Mess {

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

    public function save_member_info($data) {


        $sql = "INSERT INTO db_member(member_name,phone_number,email_address,address)"
                . "VALUES('$data[member_name]','$data[phone_number]','$data[email_address]','$data[address]')";

        if (mysqli_query($this->connection, $sql)) {
            $message = 'Member info save successfully';
            return $message;
        } else {
            die('query problem' . mysqli_error($this->connection));
        }
    }
    
    public function save_breking_news($data) {
        $sql = "INSERT INTO brecking_news(admin_name,date,news)"
                . "VALUES('$data[admin_name]','$data[date]','$data[news]')";

        if (mysqli_query($this->connection, $sql)) {
            $message = 'Member info save successfully';
            return $message;
        } else {
            die('query problem' . mysqli_error($this->connection));
        }
        
    }
    public function select_breking_news() {
        
        $sql = "SELECT date,news,admin_name from brecking_news ORDER BY admin_id DESC";
        
         if (mysqli_query($this->connection, $sql)) {
            $query_result = mysqli_query($this->connection, $sql);
            return $query_result;
        } else {
            die('query problem' . mysqli_error($this->connection));
        }
        
    }

    public function save_mess_info($data) {


        $sql = "INSERT INTO db_meal(member_name,Day,Night,date)"
                . "VALUES('$data[member_name]','$data[Day]','$data[Night]','$data[date]')";

        if (mysqli_query($this->connection, $sql)) {
            $message = 'Meal info save successfully';
            return $message;
        } else {
            die('query problem' . mysqli_error($this->connection));
        }
    }

    public function select_all_members_info() {
        $sql = "SELECT * FROM db_meal ORDER BY member_id DESC";
        
        if (isset($_POST['btn'])) {
            $searchkey = $_POST['btn'];
            $sql = "SELECT * FROM db_meal WHERE member_name LIKE '$searchkey%'";
        }
        
        if (mysqli_query($this->connection, $sql)) {
            $query_result = mysqli_query($this->connection, $sql);
            return $query_result;
        } else {
            die('query problem' . mysqli_error($this->connection));
        }
        
    }
    
    public function select_total_day_meal() {
        
        $sql = "SELECT sum(Day) from db_meal";
        
         if (mysqli_query($this->connection, $sql)) {
            $query_result = mysqli_query($this->connection, $sql);
               $total_day = $query_result;
               return $total_day;
        } else {
            die('query problem' . mysqli_error($this->connection));
        }
        
    }
    public function select_total_night_meal() {
        
        $sql = "SELECT sum(Night) from db_meal";
        
         if (mysqli_query($this->connection, $sql)) {
            $query_result = mysqli_query($this->connection, $sql);
            return $query_result;
        } else {
            die('query problem' . mysqli_error($this->connection));
        }
        
    }
    
    

    public function select_all_member_info() {
        $sql = "SELECT * FROM db_member ORDER BY member_id";
        if (isset($_POST['btn'])) {
            $searchkey = $_POST['btn'];
            $sql = "SELECT * FROM db_member WHERE member_name LIKE '%$searchkey%'";
        }
        if (mysqli_query($this->connection, $sql)) {
            $query_result = mysqli_query($this->connection, $sql);
            return $query_result;
        } else {
            die('query problem' . mysqli_error($this->connection));
        }
    }

    public function select_member_info_by_id($member_id) {
        $sql = "SELECT * FROM db_meal WHERE member_id='$member_id'";
        
            
        if (mysqli_query($this->connection, $sql)) {
            $query_result = mysqli_query($this->connection, $sql);
            return $query_result;
        } else {
            die('query problem' . mysqli_error($this->connection));
        }
    }
   

    public function select_members_info($member_id) {
        $sql = "SELECT * FROM db_member WHERE member_id='$member_id'";

        if (mysqli_query($this->connection, $sql)) {
            $query_result = mysqli_query($this->connection, $sql);
            return $query_result;
        } else {
            die('query problem' . mysqli_error($this->connection));
        }
    }

    public function update_member_info($data) {
        $sql = "UPDATE db_meal SET member_name = '$data[member_name]',Day = '$data[Day]',Night = '$data[Night]',date = '$data[date]' WHERE member_id='$data[member_id]'";

        if (mysqli_query($this->connection, $sql)) {
            header('Location: view_student.php');
        } else {
            die('query problem' . mysqli_error($this->connection));
        }
    }
    public function delete_member_info($id) {
       $sql="DELETE FROM db_member WHERE member_id='$id'";

        if(mysqli_query($this->connection, $sql)) {
            $message ='Member info update successfully';
            return $message;
        } else {
            die('query problem' . mysqli_error($this->connection));
        }
    }
    public function delete_meal_info($id) {
       $sql="DELETE FROM db_meal WHERE member_id='$id'";

        if(mysqli_query($this->connection, $sql)) {
            $message ='Member info update successfully';
            return $message;
        } else {
            die('query problem' . mysqli_error($this->connection));
        }
    }

    public function update_members($data) {
        $sql = "UPDATE db_member SET member_name = '$data[member_name]',phone_number= '$data[phone_number]',email_address = '$data[email_address]',address = '$data[address]' WHERE member_id='$data[member_id]'";

        if (mysqli_query($this->connection, $sql)) {
            header('Location: member_info.php');
        } else {
            die('query problem' . mysqli_error($this->connection));
        }
    }

    public function sign_in($data) {
        $sql = "INSERT INTO sign_in(full_name,gmail,Institution,password1)"
                . "VALUES('$data[full_name]','$data[gmail]','$data[Institution]','$data[password]')";

        if (mysqli_query($this->connection, $sql)) {
            $message = 'sign in successful';
            return $message;
        } else {
            die('query problem' . mysqli_error($this->connection));
        }
    }

}
