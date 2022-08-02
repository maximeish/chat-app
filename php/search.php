<?php
    session_start();
    include_once "config.php";

    $outgoing_id = $_SESSION['reg_no'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);

    $sql = "SELECT * FROM students WHERE NOT reg_no = {$outgoing_id} AND (stud_firstname LIKE '%{$searchTerm}%' OR stud_lastname LIKE '%{$searchTerm}%') ";
    $output = "";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }else{
        $output .= 'No student found related to your search term';
    }
    echo $output;
?>