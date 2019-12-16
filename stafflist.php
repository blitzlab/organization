<?php include('include/header.php'); ?>
<?php include('db.php'); ?>
<?php
    $sql = "SELECT * FROM staff";
    $dept_query="SELECT dept_name FROM dept_membership WHERE staff_id = $staff_id";
    ?>
    <table class="jumbotron">
        <tr>
            <th>STAFF</th> <th>  </th> <th>DEPARTMENT</th> <th>  </th>
        </tr>
    <?php       
    $result = mysqli_query($db, $sql);
            
    while($staff = mysqli_fetch_assoc($result)){
        $staff_id = $staff['id'];
        $staff_name = $staff['name'];
        $dept_query="SELECT dept_name FROM dept_membership WHERE staff_id = $staff_id";
        $dept = mysqli_query($db, $dept_query);
        $res = mysqli_fetch_assoc($dept);
        $dept = $res['dept_name'];
    ?>
    <tr>
        <?php echo "<td>$staff_name</td>"; ?>
        <?php echo "<td class='btn btn-primary'><a href='editstaff.php?staff_id=$staff_id'>Edit</a></td>"; ?>
        <?php echo "<td>$dept</td>"; ?>
        <?php echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
           <a href='select_dept.php?staff_id=$staff_id&staff_name=$staff_name'>Attach To Dept</a>
        </button></td>"; ?>
    </tr>
    <?php }; 
    mysqli_close($db);
    ?>
    </table>
    <!-- Button trigger modal -->



<?php include('include/footer.php'); ?>