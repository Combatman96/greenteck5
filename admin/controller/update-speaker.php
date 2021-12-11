<?php

include('../../config/constant.php');


//Receive from the form
if(isset($_POST['update_speaker'])){
    $id = $_POST['id'];
    $fullname = $_POST['name'];
    $age = $_POST['age'];
    $national = $_POST['national'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($conn));
    $db_select = mysqli_select_db($conn, DB_NAME);

    $sql = "UPDATE people SET
            full_name = '$fullname',
            age = $age,
            national = '$national',
            city = '$city',
            phone = '$phone',
            email = '$email' 
            WHERE id=$id;
    ";

    $res = mysqli_query($conn, $sql);
    if($res)
        {
            exit('success');
        }
        else
        {            
           exit('fail');
        }
    
    mysqli_close($conn);
}

?>