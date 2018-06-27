<?php
include 'conn.php';
session_start();
$name = $_POST['name'];
$passwd = $_POST['passwd'];

$name = mysqli_real_escape_string($conn, $name);

$sql = "select name, passwd from users where name =  '$name' limit 1;";

$result = mysqli_query($conn, $sql) or die('pre' . mysql_error($conn) . '</pre>');

while($row = mysqli_fetch_assoc( $result )){
    $resPasswd = $row['passwd'];
    $resName = row['name'];

    if($resPasswd == $passwd){
        mysqli_close($conn);
        $_SESSION['books_user'] = $name;
        echo "<script type='text/javascript'>";
        echo "window.open('home.html', '_self');";
        echo "</script>";

    }
    else{
        mysqli_close($conn);
        echo "<script type='text/javascript'>";
        echo "alert('登录失败！请重新登录');";
        echo "window.open('login.html', '_self');";
        echo "</script>";
    }
}

mysqli_close($conn);
echo "<script type='text/javascript'>";
echo "alert('登录失败！请重新登录');";
echo "window.open('login.html', '_self');";
echo "</script>";



?>
