<?php

$user=$_POST['user'];
$email=$_POST['email'];
$pass=$_POST['pass'];

include_once("connection.php");

$stmt=$conn->prepare("insert into register(user,email,pass)
    value(?,?,?)");
    $stmt->bind_param("sss",$user,$email,$pass);
    $stmt->execute();
    echo("Registration wa successful");
    $stmt->close();
    $conn->close();
?>