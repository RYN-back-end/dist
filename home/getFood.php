<?php
require '../system/helper.php';
$selectSql = "SELECT * FROM `nutrients`";
$selectResult = runQuery($selectSql);
$data = array();
while ($row = $selectResult->fetch_assoc()) {
    $smallArray['food_name'] = $row['type'];
    $smallArray['quantity'] = $row['qty'];
    $smallArray['calories'] = $row['calories_no'];
    $smallArray['nutrients']['carp'] = $row['carb'];
    $smallArray['nutrients']['protein'] = $row['protein'];
    $smallArray['nutrients']['fat'] = $row['fats'];
    $data[] = $smallArray;
}
header('Content-Type: application/json');
echo json_encode($data);

