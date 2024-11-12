<?php
$user=$_POST['user'];
$pass=$_POST['pass'];

include_once("connection.php");

$stmt=$conn->prepare('select * from register where user=?');
$stmt->bind_param("s",$user);
$stmt->execute();
$result= $stmt->get_result();

if($result->num_rows>0){
    $data=$result->fetch_assoc();
    if($data['pass']===$pass)
    {
        echo "Login successfully!";
    }else{
        echo "Invalid emailid or password";
    }
}else{
    echo "Invalid email id or pass";
}
?>