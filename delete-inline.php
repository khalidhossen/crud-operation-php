<?php 
echo $sid=$_GET['id'];
include 'config.php';

$sql = "DELETE FROM student WHERE student_id={$sid}";
$result=mysqli_query($conn,$sql) or die("query unsuccessfull");
header("Location: http://localhost/crud/index.php");
mysqli_close($conn);
?>