 <?php include"includes/header.php";?>
  <?php include"includes/side.php";?>
   <?php include"db/db_con.php";?>
 
    <?php
                if (isset($_GET['idre'])){
                  $idp = $_GET['idre'];
                  $query = "SELECT patients.*  FROM patients
WHERE patients.id = '$idp'";
                  $result = mysqli_query($link,$query);
                  $row = mysqli_fetch_assoc($result);
                  extract($row);

                 }else{
                  header("location:./");
                 }
              ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>

<?php $today = date("Y-m-d H:i:s");?>
    <!-- Main content -->
    <section class="invoice">
      <!-- <div class="pad margin no-print">
      <div class="alert alert-warning" role="alert"><i class="fa fa-info"></i>
  This is a warning alert—check it out!
    </div>
    </div> -->
      <!-- title row -->
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
     
      <!-- info row -->

      
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          <address>
            <strong><b>Full Name:</b></strong>  <?php if(isset($fname) && isset($mname)){ echo $fname."  ".$mname."  ".$lname; }else{}?><br>
            <strong><b>Address:</b></strong>  <?php if(isset($address)){echo $address;}else{}?>
           <br>
            <strong><b>Tel 1:</b></strong>  <?php if(isset($phone_one)){echo $phone_one;}else{}?><br>
            <strong><b>Tel 2:</b></strong>  <?php if(isset($phone_two)){ echo $phone_two;}else{}?><br>
            <strong><b>Reg ID:</b></strong>  <?php if(isset($patient_ID)){ echo $patient_ID;}else{} ?>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
        </div>
        <div class="col-sm-4 invoice-col">
         <address>
            <strong><b>Age: </b></strong>  <?php if(isset($age)){ echo $age;}else{}?><br>
            <strong><b>Gender: </b></strong>  <?php if(isset($gender)){ echo $gender;}else{}?><br>
            <strong><b>Next Of Kin: </b></strong>  <?php if(isset($Next_of_kin_FName) && isset($Next_of_kin_FName)){echo $Next_of_kin_FName."  ".$Next_of_kin_LName;}else{}?><br>
            <strong><b>Tel 1: </b></strong>  <?php echo $Nok_phone; ?><br>
            <strong><b>Blood Group: </b></strong>  <?php if(isset($blood_group)){ echo $blood_group; }else{}?>            
          </address>
        </div>
        <!-- /.col -->
       <!--  <div class="col-sm-4 invoice-col">
          <b>Invoice #007612</b><br>
          <br>
          <b>Order ID:</b> 4F3S8J<br>
          <b>Payment Due:</b> 2/22/2014<br>
          <b>Account:</b> 968-34567
        </div> -->
        <!-- /.col -->
      </div>
      <!-- /.row -->

       <!-- /.box-header -->
         <div class="box-body">
              <div class="box-body table-responsive no-padding">
              <table class="table table-hover" id="example1"><!-- 
              <table  class="table table-bordered table-striped table-responsive"> -->
                <thead>
                <tr>
                  <th>S/N</th>
                  <th>Date Treated</th>
                  <th>Treatment</th>
                  <th>Doctor In charge</th>
                  
                  <th>Cost(N)</th>
                  <th>Paid(N)</th>
                  <th>Balance(N)</th>
                </tr>
                </thead>
                <tbody>
                  <?php

$me = "SELECT patients.* , treatments.id AS treatID,treatments.treatment_name,treatments.date_of_treatement,treatments.Cost,
treatments.Amount_paid,treatments.Amount_balance,treatments.doctor FROM patients 
INNER JOIN treatments ON treatments.patient_ID = patients.patient_ID
WHERE patients.id = '$idp' ORDER BY treatID DESC";
$ok = mysqli_query($link,$me);
                  $p = 1; 
                  while($yes = mysqli_fetch_assoc($ok)){
                    extract($yes);
                    // var_dump($yes);
                    ?>
                      <tr>
                  <td><?php echo $p++; ?></td>
                  <td><?php echo $date_of_treatement; ?>
                  </td>
                  <td><?php echo $treatment_name; ?></td>
                  <td><?php echo $doctor; ?></td>
                  <td><?php echo $Cost;?></td>
                  <td><?php echo $Amount_paid; ?></td>
                  <td><?php echo $Amount_balance; ?></td>
                  </tr>

                    <?php
                  };
               
                ?>
 
                </tbody>
                
              </table>
              </div>
            </div>


      <div class="row">
       
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
     
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->
  <?php include"footer_table.php";?>