<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="student_name" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="student_address" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="student_class">
                <option value="" selected disabled>Select Class</option>
                <?php
                $conn= mysqli_connect("localhost","root","","crud") or die("connection failed");

                $sql = "SELECT * FROM studentclass";
                $result=mysqli_query($conn,$sql) or die("query unsuccessfull.");
                while($row=mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row['class_id']?>"><?php echo $row['class_name']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="student_phone" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
