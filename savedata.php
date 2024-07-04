<?php
echo $sname=$_POST['student_name'];
echo $saddress=$_POST['student_address'];
echo $sclass=$_POST['student_class'];
echo $sphone=$_POST['student_phone'];
include 'config.php';

$sql = "INSERT INTO student(student_name,student_address,student_class,student_phone) VALUES('{$sname}','{$saddress}','{$sclass}','{$sphone}')";
$result=mysqli_query($conn,$sql) or die("query unsuccessfull.");
header("Location: http://localhost/crud/index.php");
mysqli_close($conn);
?>