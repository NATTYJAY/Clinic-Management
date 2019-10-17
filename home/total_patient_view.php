
 <?php include"includes/header.php";?>
  <?php include"includes/side.php";?>
   <?php include"db/db_con.php";?>
   <?php
                if (isset($_GET['id'])){
                  $id = $_GET['id'];
                  $me = "SELECT patients.* , treatments.id AS treatID,treatments.treatment_name,treatments.date_of_treatement,treatments.Cost,
treatments.Amount_paid,treatments.Amount_balance, doctors.id AS docID,doctors.name_of_doctor,doctors.lname FROM patients 
INNER JOIN treatments ON treatments.patient_ID = patients.patient_ID
INNER JOIN doctors ON doctors.id = treatments.doctor
WHERE patients.patient_ID = '$id' ORDER BY treatID DESC ";
$ok = mysqli_query($link,$me);
                  $p = 1; 
                  while($yes = mysqli_fetch_assoc($ok)){
                    extract($yes);
$data = 'ddddddddddddd';         
                  }
             

                 }else{
                  header("location:./");
                 }
              ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>
        Lagos Hospital management system<br/>
        <small>Registered Patients </small>
        
      </h3>
     
    </section>
    <hr>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
          <div class="box-header" style="float:right; ">
           <!-- <div class="input-group margin">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="modal" data-target="#add_patient">Add Patient
                    </button>
                 
                </div>
                
              </div> -->
              <!-- <button type="button" class="btn btn-info" value="Add Patients"  data-toggle="modal" data-target="#modal-success">Add Patient</button> -->

            </div>

            <div class="box-header">
              <h3 class="box-title">Registered Patients </h3>
            </div>
             
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S/N</th>
                  <th>Patient-ID</th>
                  <th>Patient Name</th>
                  <th>Phone Number</th>
                  <th>Last Treatment</th>
                  <th>Date treated</th>
                  <th>Sex</th>
                  <th>Age</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($data)){ echo $data;} ?>


                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
         
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
 <?php include"footer_table.php";?>