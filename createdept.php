<?php include('include/header.php'); ?>
<?php include('db.php'); ?>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $department = test_input($_POST["department"]);

        // Check db if the department is already create
        $dept_check_query = "SELECT * FROM department WHERE name = '$department' LIMIT 1";
        $result = mysqli_query($db, $dept_check_query);
        $dept = mysqli_fetch_assoc($result);

        if($dept){
            if($dept['name'] === $department){array_push($errors, "Department already exist!");};
        }

        // Register department if no errors

        if(count($errors) == 0){
            $sql_query = "INSERT INTO department (name) VALUES ('$department')";
            mysqli_query($db, $sql_query);
            echo("<script>alert('Department created successfully');</script>");
            header("location: index.php");
        }
    }else{
        echo("
            <section class='form'>
                <form action='createdept.php' method='post'>

                    <h4 class='section-label'>New Department</h4>
                    <label for='department'>Department</label>
                        <input type='text' name='department' id='department' placeholder='Enter new department' required>
                    <p></p>
                    <input type='submit' value='Create Department'>  
                    
                    
                </form>
            </section>
        ");
    }
    mysqli_close($db);
?>

<?php include('include/footer.php'); ?>
