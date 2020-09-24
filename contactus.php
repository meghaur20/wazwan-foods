<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];


$conn=new mysqli('localhost','root' 'name');
if ($conn->connect_error)
{
	die('connection failed:' $conn-.connect_error);
}
else{
$stmt=$conn->prepare("insert into contact(name,email,subject,message)value(?,?, ?, ?)");

$stmt->bind_param("ssss", $name, $email, $subject, $message);
$stmt->execute();
echo"thanks";

$stmt->close();
$conn->close();
}
?>