<?php include('include/header.php'); ?>
<?php include('db.php'); ?>
<?php
    $sql = "SELECT * FROM staff";
    ?>
    <table>
        <tr>
            <th>STAFF</th> <th> - </th> <th>DEPARTMENT</th> <th> - </th>
        </tr>
    <?php       
    $result = mysqli_query($db, $sql);
            
    while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <?php echo "<td>$row[name]</td>"; ?>
            <?php echo "<td><a href='editstaff.php?staff_id=$row[id]'>Edit</a></td>"; ?>
            <?php echo "<td>$row[department]</td>"; ?>
            <?php echo "<td><a href='attach_dept.php?staff=$row[id]'>Attach Department</td>"; ?>
        </tr>
    <?php }; ?>
    </table>
<?php include('include/footer.php'); ?>