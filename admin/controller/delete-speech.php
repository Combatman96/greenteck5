<?php

include('../../config/constant.php');

if(isset($_POST['delete_id']))
{
    $id = $_POST['delete_id'];
    
    //Connect to database
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($conn));
    
    //Select database
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn));

    //Detele query
    $sql = "DELETE FROM speech WHERE id=$id;";

    //Execute query
    $res = mysqli_query($conn, $sql);

    //Check whether the query executed 
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
