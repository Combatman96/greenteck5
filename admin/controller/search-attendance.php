<?php 

include('../../config/constant.php');

if(isset($_POST['input']))
{
    $input = $_POST['input'];
 
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($conn));
    $db_select = mysqli_select_db($conn, DB_NAME);

    $sql = "SELECT * FROM people 
            WHERE ( full_name LIKE '%{$input}%' 
                OR national LIKE '%{$input}%'
                OR city LIKE '%{$input}%' ) AND roleas='attendance' ;
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