<?php
    session_start();

    //Initializing variable
    $staffname = $email = $age = $date = $department = $isadmin = $password = "";

    //Connect to the database

    $db = mysqli_connect('localhost', 'root', '', 'org') or die('Unable to connect to the database');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["staff"])){
            $staffname = test_input($_POST["staffname"]);
            $email = test_input($_POST["email"]);
            $age = test_input($_POST["age"]);
            $date = test_input($_POST["date"]);
            $department = test_input($_POST["department"]);
            // Check db if the staff is already create
            $staff_check_query = "SELECT * FROM staff WHERE name = '$staffname' AND email = '$email' LIMIT 1";
            $result = mysqli_query($db, $staff_check_query);
            $staff = mysqli_fetch_assoc($result);

            if($staff){
                if($staff['name'] === $staffname){array_push($errors, "Staff name already exist!");};
                if($staff['email'] === $email){array_push($errors, "Staff email already exist!");};
            }

            // Register the staff if no errors

            if(count($errors) == 0){
                $sql_query = "INSERT INTO staff (name, email, age, date_employed) VALUES ('$staffname', '$email', '$age', '$date')";
                mysqli_query($db, $sql_query);
                echo("<script>alert('Staff created successfully');</script>");
                header("location: http://localhost");
            }
        }

        elseif(isset($_POST["dept"])){
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
                header("location: http://localhost");
            }
        }

        elseif(isset($_GET['next'])){
            echo("<h1>List goes here!</h1>");
            // $query = "SELECT * FROM table_name";
            // echo"<h4>Click on staff or Department to edit</h4>";
            // echo "<table><tr><td>Staff</td> <td>Department</td></tr></table>";
            
            // if ($result = $mysqli->query($query)) {
            
            //     while ($row = $result->fetch_assoc()) {
            //         echo"<tr><td><a href='localhost/org/include/server.php?staff=$row['id']'>$row['name']</td> <td><a href='localhost/org/include/server.php?user=$row['id']'>$row['department']</td></tr>"
            //     }
                    
        }
    
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        global $db;
        $data = mysqli_real_escape_string($db, $data);
        return $data;
      }

?>