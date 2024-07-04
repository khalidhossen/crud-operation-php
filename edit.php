<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
      include 'config.php';
      $sid=$_GET['id'];
      $sql = "SELECT * FROM student where student_id={$sid}";
      $result=mysqli_query($conn,$sql) or die("query unsuccessfull");

      if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="student_id" value="<?php echo $row['student_id'];?>"/>
          <input type="text" name="student_name" value="<?php echo $row['student_name'];?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="student_address" value="<?php echo $row['student_address'];?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <?php
      $sql1 = "SELECT * FROM studentclass";
      $result1=mysqli_query($conn,$sql1) or die("query unsuccessfull");

      if(mysqli_num_rows($result1)>0){
        echo '<select name="student_class">';
        while($row1=mysqli_fetch_assoc($result1)){
            if($row['student_class']==$row1['class_id']){
                $select="selected";

            }else{
                $select="";

            }
             echo" <option {$select} value='{$row1['class_id']}'>{$row1['class_name']}</option>";
        }
          echo"</select>";
      }
          ?>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="student_phone" value="<?php echo $row['student_phone'];?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php 
    }
}
     ?>
</div>
</div>
</body>
</html>
