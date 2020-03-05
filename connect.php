<?php

$name=$_POST['name'];
$email=$_POST['email'];
$service=$_POST['service'];
$subject=$_POST['subject'];

$conn= new mysqli("localhost","root","","portfolioform");
if($conn->connect_error)
{
    die("Connection Failed".$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into registration(name,email,service,subject) values(?,?,?,?)");
    $stmt->bind_param("ssss",$name,$email,$service,$subject);
    $stmt->execute();
    echo "registration success";
    $stmt->close();
    $conn->close();
}

?>