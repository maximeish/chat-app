<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['reg_no'];
    $sql = "SELECT * FROM students WHERE NOT reg_no = {$outgoing_id} ORDER BY stud_id DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No students are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>