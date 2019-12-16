<?php include('include/header.php'); ?>
<?php include('db.php'); ?>
<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> -->
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header alert alert-primary">
        <h5 class="modal-title" id="exampleModalLabel dept-head">Select Department</h5>
        <button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php
        $staff_id = $_GET['staff_id'];
        $staff_name = $_GET['staff_name'];
        $dept_query = "SELECT * FROM department";
        $data = mysqli_query($db, $dept_query);
    
        while($row = mysqli_fetch_assoc($data)){
            $dept_id = $row['id'];
            $dept_name = $row['name'];
            echo("
              <div class='modal-body alert alert-secondary dept-body' id='body'>
                <a href='attachstaff.php?staff_id=$staff_id&staff_name=$staff_name&dept_id=$dept_id&dept_name=$dept_name'>$row[name]</a>
              </div>
            ");
        }
        mysqli_close($db);
      ?>
    </div>
  </div>
<!-- </div> -->
<?php include('include/footer.php'); ?>