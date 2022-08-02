<?php
    session_start();
    if(isset($_SESSION['reg_no'])){
        include_once "config.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)){
            $status = "Offline now";
            $sql = mysqli_query($conn, "UPDATE students SET status = '{$status}' WHERE reg_no={$_GET['logout_id']}");
            if($sql){
                session_unset();
                session_destroy();
                header("location: ../login.php");
            }
        }else{
            header("location: ../students.php");
        }
    }else{  
        header("location: ../login.php");
    }
?>