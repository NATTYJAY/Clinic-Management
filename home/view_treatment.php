 <?php include"includes/header.php";?>
  <?php include"includes/side.php";?>
  <?php include"db/db_con.php";?>
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
   
    </section>


    <!-- Main content -->
    <section class="invoice">
     
      <?php $today = date("Y-m-d H:i:s");?>
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i>Lagos Hospital
            <small class="pull-right">Date: <?php echo $today;?></small>
             <small><address>
            Lagos Hospital<br>
            No. 29 Alaba Street<br>
            Lagos<br>
            Phone 1: +2348060860316<br>
          </address></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
     
      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
              <?php
                if (isset($_GET['id'])){
                  $id = $_GET['id'];
$query = "SELECT t1.*,m1.fname,m1.mname,m1.lname,m1.patient_ID AS patid FROM patients AS m1 
INNER JOIN treatments AS t1 ON m1.patient_ID = t1.patient_ID
WHERE t1.id = '$id' ";
                  $result = mysqli_query($link,$query);
                  $row = mysqli_fetch_assoc($result);
                  extract($row);
                 }else{
                  header("location:./");
                 }
              ?>
      
            </thead>
            <tbody>
            <tr>
              <td><b>Patient ID :</b></td>
              <td><?php echo $patient_ID;?></td>
              
            </tr>
            
            <tr>
              <td><b>Name:-</b></td>
              <td><?php echo $fname."  ".$mname; ?></td>
              
            </tr> <tr>
              <td><b>Date Treated</b></td>
              <td><?php echo $date_of_treatement;?></td>
            </tr>
            <tr>
              <td><b>Cost:-</b></td>
              <td>N<?php echo $Cost;?></td>
            </tr>
            <tr>
              <td><b>Amount Paid</b></td>
              <td>N<?php echo $Amount_paid;?></td>
            </tr>
            <tr>
              <td><b>Balance</b></td>
              <td>N<?php echo $Amount_balance;?></td>
            </tr>
            <tr>
              <td><b>Doctor:-</b></td>
              <td>Dr. <?php echo $doctor;?></td>
            </tr>

             <tr>
              <td><b>Symptoms:-</b></td>
              <td><?php echo $symtoms;?></td>
            </tr>

             <tr>
              <td><b>Treatment</b></td>
              <td><?php echo $treatment_name; ?></td>
            </tr>

            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div><br/><br/><br/>
      <!-- /.row -->

      
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <!-- <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a> -->
          <!-- <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
          </button>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button> -->
          
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->
 <?php include"footer_table.php";?>