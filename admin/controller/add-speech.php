<?php

include('../../config/constant.php');


//Receive from the form
if(isset($_POST['add_speech'])){
    $tile = $_POST['title'];
    $speaker_name = $_POST['speaker_name'];
    $date = $_POST['date'];
    $time_start = $_POST['time_start'];
    $time_end = $_POST['time_end'];

    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($conn));
    $db_select = mysqli_select_db($conn, DB_NAME);

    $sql = "INSERT INTO speech SET
            title = '$tile',
            speaker = '$speaker_name',
            date_show = '$date',
            time_start = '$time_start',
            time_end = '$time_end';
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