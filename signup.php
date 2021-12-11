<?php

include('config/constant.php');

session_start();

//Receive from the form
if(isset($_POST['submit'])){
    $name = $_POST['name_input'];
    $age = $_POST['age_input'];
    $national = $_POST['national_input'];
    $city = $_POST['city_input'];
    $phone = $_POST['phone_input'];
    $email = $_POST['email_input'];
    $role = 'attendance';

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
    if($res == true)
        {
            //Create a Sesstion variable to dislpay message
            $_SESSION['signup_success'] = "1";
            //Redirect to the list manager page
            header('location:'.SITEURL.'index.php');
        }
        else
        {
            
            //Create a Sesstion variable to dislpay message
            $_SESSION['signup_fail'] = "1";
            //Redirect to the same page;
            header('location:'.SITEURL.'index.php');
        }
    
    mysqli_close($conn);
}

?>

