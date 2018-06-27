<?php
$id=$_REQUEST['id'];
$name=$_REQUEST['full_name'];
$host_name=$_REQUEST['host_name'];
$money=(int)$_REQUEST['money'];
$addr=$_REQUEST['addr'];
$mark_datetime=date('Y-m-d H:m:s');

include 'conn.php';


$sql = "insert into host_followers(id, name, host_name, addr, money, mark_datetime) values(NULL, '$name', '$host_name',
    '$addr', '$money', '$mark_datetime')";

$insert_res = mysqli_query($conn, $sql);

if(!insert_res){
    echo json_encode(array(
        'id' => $id,
        'full_name' => $full_name,
        'host_name' => $host_name,
        'money' => $money,
        'addr' => $addr,
        'mark_datetime' => $mark_datetime
    ));
}
else{
    $MSG = "insert erro!";
    echo json_encode(array(
        'id' => $id,
        'full_name' => $MSG,
        'host_name' => $MSG,
        'money' => $money,
        'addr' => $addr,
        'mark_datetime' => $mark_datetime
    ));
}

/*
$MSG = "insert erro!";
error_log($MSG);
echo json_encode(array(
    'id' => $id,
    'full_name' => $MSG,
    'host_name' => $MSG,
    'money' => $money,
    'addr' => $addr,
    'mark_datetime' => $mark_datetime
));
 */

?>
