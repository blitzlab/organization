<?php include('include/header.php'); ?>
<section class="form reg-form">
        <form action="include/server.php" method='post'>

            <h4 class="section-label">New Staff</h4>

                <label for="staffname">Staff name</label>
                <input type="text" name="staffname" id="staffname" placeholder="Enter staff name" required>
                <p></p>
                <label for="email">Staff email</label>
                <input type="text" name="email" id="email" placeholder="Enter staff email" required>
                <p></p>
                <label for="age">Staff Age</label>
                <input type="number" name="age" id="company" placeholder="Enter staff age" required>
                <p></p>
                <label for="date">Date Employed</label>
                <input type="date" name="date" id="date" required>
                <p></p>
                <label for="department">Staff Department</label>
                <select name="department">
                        <option value="marketing">Marketing</option>
                        <option value="finance">Finance</option>
                        <option value="operations management">Operations management</option>
                        <option value="it">IT</option>
                        <option value="Human Resource">Human Resource</option>
                </select>
                <p></p>
                <input type="submit" name ="staff" value="Create Staff">  
            
            
        </form>
    </section>
<?php include('include/footer.php'); ?>
