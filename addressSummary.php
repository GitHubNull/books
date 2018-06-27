<?php

include 'conn.php';

$sql = "SELECT addr, COUNT(*) as cnt FROM books GROUP BY addr ORDER BY cnt DESC;";
$res = mysqli_query($conn, $sql) or die('pre' . mysql_error($conn) . '</pre>');

$addrs = array();
$cnts = array();
$status = false;

while($row = mysqli_fetch_array($res)){
    array_push($addrs, $row['addr']);
    array_push($cnts, (int)$row['cnt']);
}

/*
    for($j = 0; $j < $i; $j++){
    echo $addrs[$j] . "--->" . $cnts[$j];
    echo "<br/>";
}
 */

if( 1 <= count($addrs) ){
    $status = true;
}

$data = array(
    'status' => $status,
    'addrs' => $addrs,
    'cnts' => $cnts
);


$data= json_encode($data);
echo $data;

mysqli_close($conn);
?>
