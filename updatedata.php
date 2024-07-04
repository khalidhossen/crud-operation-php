<?php
echo $sid=$_POST['student_id'];
echo $sname=$_POST['student_name'];
echo $saddress=$_POST['student_address'];
echo $sclass=$_POST['student_class'];
echo $sphone=$_POST['student_phone'];
include 'config.php';

$sql = "UPDATE student SET student_name='{$sname}',student_address='{$saddress}',student_class='{$sclass}',student_phone='{$sphone}' WHERE student_id={$sid}";
$result=mysqli_query($conn,$sql) or die("query unsuccessfull.");
header("Location: http://localhost/crud/index.php");
mysqli_close($conn);
?>