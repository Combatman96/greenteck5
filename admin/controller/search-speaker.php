<?php 

include('../../config/constant.php');

if(isset($_POST['input']))
{
    $input = $_POST['input'];
 
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($conn));
    $db_select = mysqli_select_db($conn, DB_NAME);

    $sql = "SELECT A.* 
            FROM (SELECT people.* , speech.title 
                    FROM people, speech 
                    WHERE speech.speaker = people.full_name) AS A 
            WHERE  A.full_name LIKE '%{$input}%' 
                OR A.national LIKE '%{$input}%' 
                OR A.title LIKE '%{$input}%' 
                OR A.city LIKE '%{$input}%';
            ";

    $res = mysqli_query($conn, $sql);

    $data =array();
    if(mysqli_num_rows($res) > 0){
        while ($row = mysqli_fetch_object($res))
        {
            array_push($data, $row);
        }
        echo json_encode($data);
    }
    else{
        mysqli_close($conn);
        exit();
    }
    mysqli_close($conn);
    exit();

}


?>