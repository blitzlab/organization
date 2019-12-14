<?php include('include/header.php'); ?>
<?php include('db.php'); ?>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $staffname = test_input($_POST["staffname"]);
        $email = test_input($_POST["email"]);
        $age = test_input($_POST["age"]);
        $date = test_input($_POST["date"]);
        $department = test_input($_POST["department"]);
        echo $department;
        if(empty($_GET["staff_id"])){
            // Check db if the staff is already created
            $staff_check_query = "SELECT * FROM staff WHERE name = '$staffname' AND email = '$email' LIMIT 1";
            $result = mysqli_query($db, $staff_check_query);
            $staff = mysqli_fetch_assoc($result);

            if($staff){
                if($staff['name'] === $staffname){array_push($errors, "Staff name already exist!");};
                if($staff['email'] === $email){array_push($errors, "Staff email already exist!");};
            }
            // Register the staff if no errors

            // if(count($errors) == 0){
                $sql_query = "INSERT INTO staff (name, email, age, date_employed, department) VALUES ('$staffname', '$email', '$age', '$date', '$department')";
                mysqli_query($db, $sql_query);
                echo("<script>alert('Staff created successfully');</script>");
                header("location: http://localhost");
            
            // }
        }else{
            $id = $_GET["staff_id"];

            $sql_query = "UPDATE staff SET name = '$staffname', email = '$email', age = '$age', date_employed = '$date', department = '$department' WHERE staff.id = '$id'";
            mysqli_query($db, $sql_query);
            echo("<script>alert('Staff updated successfully');</script>");
        }
        
        

        
    }
    else{
        echo("<section class='form reg-form'>
        <form action='createstaff.php' method='post'>

            <h4 class='section-label'>New Staff</h4>

                <label for='staffname'>Staff name</label>
                <input type='text' name='staffname' id='staffname' placeholder='Enter staff name' required>
                <p></p>
                <label for='email'>Staff email</label>
                <input type='text' name='email' id='email' placeholder='Enter staff email' required>
                <p></p>
                <label for='age'>Staff Age</label>
                <input type='number' name='age' id='company' placeholder='Enter staff age' required>
                <p></p>
                <label for='date'>Date Employed</label>
                <input type='date' name='date' id='date' required>
                <p></p>
                <label for='department'>Staff Department</label>
                <select name='department'>
                        <option value='marketing'>Marketing</option>
                        <option value='finance'>Finance</option>
                        <option value='operations management'>Operations management</option>
                        <option value='it'>IT</option>
                        <option value='Human Resource'>Human Resource</option>
                </select>
                <p></p>
                <input type='submit' name ='staff' value='Create Staff'>  
            
            
        </form>
    </section>");
    }

?>
<?php include('include/footer.php'); ?>
