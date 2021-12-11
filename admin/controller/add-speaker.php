<?php
include('../../config/constant.php');

if(isset($_POST['add_speaker'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $national = $_POST['national'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $role = 'speaker';

    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($conn));
    $db_select = mysqli_select_db($conn, DB_NAME);

    $sql = "INSERT INTO people SET
            full_name = '$name',
            age = $age,
            national = '$national',
            city = '$city',
            phone = '$phone',
            email = '$email',
            roleas = '$role';
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

