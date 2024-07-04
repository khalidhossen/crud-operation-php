<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
      include 'config.php';

      $sql = "SELECT * FROM student JOIN studentclass where student.student_class=studentclass.class_id";
      $result=mysqli_query($conn,$sql) or die("query unsuccessfull");

      if(mysqli_num_rows($result)>0){
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
              while($row=mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['student_id'];?></td>
                <td><?php echo $row['student_name'];?></td>
                <td><?php echo $row['student_address'];?></td>
                <td><?php echo $row['class_name'];?></td>
                <td><?php echo $row['student_phone'];?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['student_id']?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['student_id']?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php }else{
        echo "<h2>No record found</h2>";
    } 
    mysqli_close($conn);
    ?>
</div>
</div>
</body>
</html>
