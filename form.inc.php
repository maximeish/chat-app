<?php
    session_start();
    include_once "config.php";
    $stud_name = mysqli_real_escape_string($conn, $_POST['stud-name']);
    $requested_class = mysqli_real_escape_string($conn, $_POST['requested-class']);
    $address_1 = mysqli_real_escape_string($conn, $_POST['address-1']);
    $address_2 = mysqli_real_escape_string($conn, $_POST['address-2']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $contact_person = mysqli_real_escape_string($conn, $_POST['contact-person']);

	echo "$stud_name, $requested_class";
    
    if(!empty($stud_name) && !empty($requested_class) && !empty($address_1) && !empty($address_2) && !empty($city)) {
            $insert_query = mysqli_query($conn, "INSERT INTO students (stud_name, class_requested, address_1, address_2, city, contact_person, state)
            VALUES ('{$stud_name}','{$requested_class}', '{$address_1}', '{$address_2}', '{$city}', '{$contact_person}', '{$state}')");
            if($insert_query){
                $select_sql2 = mysqli_query($conn, "SELECT * FROM students WHERE stud_name = '{$stud_name}'");
                if(mysqli_num_rows($select_sql2) > 0){
                    $result = mysqli_fetch_assoc($select_sql2);
                    $_SESSION['stud_name'] = $result['stud_name'];
                    echo "success";
                }else{
                    echo "This email address not Exist!";
                }
            }else{
                echo "Something went wrong. Please try again!";
            }


    } else {
        echo "All input fields are required!";
    }
?>
