<?php
$dbhost='localhost:3306';
$dbuser='books_root';
$dbpass='books_root';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(!$conn){
    die('不能连接数据库：' . mysql_error());
}
mysqli_query($conn, "set names utf8");
mysqli_select_db($conn, "books");
?>
