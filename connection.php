<?php
$conn=new mysqli('localhost','root','','log');
if($conn->connect_error){
    die('connection filed ;' .$conn->connect_error);
}
?>

