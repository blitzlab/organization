<?php include('include/header.php'); ?>
<?php include('db.php'); ?>
<?php
    $staff_id = $_GET['staff_id'];
    $staff_name = $_GET['staff_name'];
    $dept_id = $_GET['dept_id'];
    $dept_name = $_GET['dept_name'];

    //Check if department has already been set
    $dept_check_query="SELECT dept_name FROM dept_membership WHERE staff_id = $staff_id";
    $dept = mysqli_query($db, $dept_check_query);
    $res = mysqli_fetch_assoc($dept);
    if(empty($res)){
        $sql_query = "INSERT INTO dept_membership (staff_id, staff_name, dept_id, dept_name) VALUES ('$staff_id', '$staff_name', '$dept_id', '$dept_name')";
    }else{
        $sql_query = "UPDATE dept_membership SET dept_name = '$dept_name' WHERE staff_id = $staff_id ";
    }
    mysqli_query($db, $sql_query);
    mysqli_close($db);
    header("location: stafflist.php");
?>



<?php include('include/footer.php'); ?>