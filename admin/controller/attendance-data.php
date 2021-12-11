<?php

include("../../config/constant.php");

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
//Query SQL
$sql = "SELECT * FROM people WHERE roleas='attendance';";
//Execute query
$result = mysqli_query($conn, $sql);

//Get the data
$data = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($data, $row);
}
echo json_encode($data);
exit();


?>