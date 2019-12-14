<?php include('include/header.php'); ?>
<?php include('db.php'); ?>

<?php
    $id = $_GET['staff_id'];
    $sql = "SELECT * FROM staff WHERE id = $id";
    $result = mysqli_query($db, $sql);
    $staff = mysqli_fetch_assoc($result);
    echo $staff['name'];
    echo("<section class='form reg-form'>
        <form action='createstaff.php?staff_id=$id' method='post'>

            <h4 class='section-label'>New Staff</h4>

                <label for='staffname'>Staff name</label>
                <input type='text' name='staffname' id='staffname' value=$staff[name] placeholder='Enter staff name' required>
                <p></p>
                <label for='email'>Staff email</label>
                <input type='text' name='email' id='email' value=$staff[email] placeholder='Enter staff email' required>
                <p></p>
                <label for='age'>Staff Age</label>
                <input type='number' name='age' id='company' value=$staff[age] placeholder='Enter staff age' required>
                <p></p>
                <label for='date'>Date Employed</label>
                <input type='date' name='date' value=$staff[date_employed] id='date' required>
                <p></p>
                <label for='department'>Staff Department</label>
                <select name='department value=$staff[department]'>
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
?>
<?php include('include/footer.php'); ?>
