<?php include('include/header.php'); ?>
<section class="form">
        <form action="include/server.php" method='post'>

            <h4 class="section-label">New Department</h4>
            <label for="company">Department</label>
                <input type="text" name="department" id="department" placeholder="Enter new department" required>
            <p></p>
            <input type="submit" name ="dept" value="Create Department">  
            
            
        </form>
    </section>
<?php include('include/footer.php'); ?>
