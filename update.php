<?php

$id = $_REQUEST['id'];
$full_name = $_REQUEST['full_name'];
$money = $_REQUEST['money'];

echo json_encode(array(
    'id' => $id,
    'full_name' => $full_name,
    'money' => $money
));

?>
