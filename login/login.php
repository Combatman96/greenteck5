<?php
    include('../config/constant.php');

    session_start();

    //Receive from the form
    if(isset($_POST['login'])){

        //Connect to the database
        $conn = new mysqli(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

        $username = $conn->real_escape_string($_POST['usernamePHP']);
        $password = md5($conn->real_escape_string($_POST['passwordPHP']));

        $data = $conn->query("SELECT code FROM admin_account WHERE username='$username' AND password='$password' ");
        if($data->num_rows > 0){
            $_SESSION['logged_in'] = '1';
            //$_SESSION['username'] = $username;
            exit('success');
        }
        else{
            exit('failed');
        }
    }

?>