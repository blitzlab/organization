<?php
   //Initializing variable
   $staffname = $email = $age = $date = $department = $isadmin = $password = "";
   $staff_id ="";
   //Connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'org') or die('Unable to connect to the database');
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        global $db;
        $data = mysqli_real_escape_string($db, $data);
        return $data;
      };
?>