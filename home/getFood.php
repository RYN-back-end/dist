<?php
require '../system/helper.php';
$selectSql = "SELECT * FROM `nutrients`";
$selectResult = runQuery($selectSql);
$rows = array();
$options = '<option value="" selected disabled>select food</option>';
while ($row = $selectResult->fetch_assoc()) {
    $smallArray['id'] = $row['id'];
    $smallArray['food_name'] = $row['type'];
    $smallArray['quantity'] = $row['qty'];
    $smallArray['calories'] = $row['calories_no'];
    $smallArray['nutrients']['carp'] = $row['carb'];
    $smallArray['nutrients']['protein'] = $row['protein'];
    $smallArray['nutrients']['fat'] = $row['fats'];
    $rows[] = $smallArray;
    $options .= "<option value='{$row['id']}'>{$row['type']}</option>";
}
$data['rows'] = $rows;
$data['options'] = $options;

header('Content-Type: application/json');
echo json_encode($data);

