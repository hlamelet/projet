<?php
include('pdo.php');
header('Content-Type: application/json; charset=utf-8');
$sql = "select * from `athjson` WHERE 1";
$result = mysqli_query($connection, $sql);

$jsonparray = array();
while ($row = mysqli_fetch_assoc($result)) {
    $row["list_date"] = date('m/d/Y H:i:s', $row["list_date"]);

    $jsonArray[] = $row;
}
$jsonArray["data"] = $jsonArray;
json_encode($jsonArray);
// header('Content-disposition: attachment; filename=jsonFile.json');
// print_r($emparray);
echo json_encode($jsonArray);
