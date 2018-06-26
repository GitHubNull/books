<?php
session_start();
if(isset($_SESSION['books_user'])){
    unset($_SESSION['books_user']);
    echo "OK";
}
else{
echo "NO";
}
?>
