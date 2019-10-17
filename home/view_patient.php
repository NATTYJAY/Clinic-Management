 <?php include"includes/header.php";?>
  <?php include"includes/side.php";?>
  <?php include"db/db_con.php";?>

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <!--  <h1>
        Invoice
        <small>#007612</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Invoice</li>
      </ol> -->
    </section>

    <div class="pad margin no-print">
     
    </div>

    <!-- Main content -->
    <section class="invoice">
      <!-- <div class="pad margin no-print">
      <div class="alert alert-warning" role="alert"><i class="fa fa-info"></i>
  This is a warning alert—check it out!
    </div>
    </div> -->
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
     
      <!-- info row -->
      <!-- <div class="row invoice-info"> -->
        <!-- <div class="col-sm-4 invoice-col">
          <address>
            <strong><b>Full Name:</b></strong>  Joshua Israel<br>
            <strong><b>Address:</b></strong> 795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            <strong><b>Tel 1:</b></strong>(+234) 123-5432<br>
            <strong><b>Tel 2:</b></strong>(+234) 123-5432<br>
            <strong><b>Reg ID:</b></strong>DEN-090
          </address>
        </div> -->
        <!-- /.col -->
        <!-- <div class="col-sm-4 invoice-col">
         <address>
            <strong><b>Age: </b></strong> 30<br>
            <strong><b>Gender: </b></strong> Male<br>
            <strong><b>Next Of Kin: </b></strong> Okon Udoh Archibong<br>
            <strong><b>Tel 1: </b></strong> (+234) 123-5432<br>
            <strong><b>Blood Group: </b></strong> A+
            
          </address>
        </div> -->
        <!-- /.col -->
       <!--  <div class="col-sm-4 invoice-col">
          <b>Invoice #007612</b><br>
          <br>
          <b>Order ID:</b> 4F3S8J<br>
          <b>Payment Due:</b> 2/22/2014<br>
          <b>Account:</b> 968-34567
        </div> -->
        <!-- /.col -->
      <!-- </div> -->
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
              <?php
                if (isset($_GET['id'])){
                  $id = $_GET['id'];
$query = "SELECT * FROM patients WHERE id = '$id' ";
                  $result = mysqli_query($link,$query);
                  $row = mysqli_fetch_assoc($result);
                  extract($row);
                 }else{
                  header("location:./");
                 }
              ?>
           <!--  <tr>
              <th>Date treated</th>
              <th>Treatment</th>
              <th>Doctor Treated</th>
              <th>Cost(N)</th>
              <th>Paid(N)</th>
              <th>Balance(N)</th>
            </tr> -->
            </thead>
            <tbody>
            <tr>
              <td><b>Patient ID :</b></td>
              <td><?php echo $patient_ID;?></td>
              
            </tr>
            
            <tr>
              <td><b>Name:-</b></td>
              <td><?php echo $fname."  ".$mname." ".$lname  ?></td>
              
            </tr> <tr>
              <td><b>Date Created</b></td>
              <td><?php echo $date_created;?></td>
            </tr>
            <tr>
              <td><b>Age:-</b></td>
              <td><?php echo $age;?></td>
            </tr>
            <tr>
              <td><b>Gender:-</b></td>
              <td><?php echo $gender;?></td>
            </tr>
            <tr>
              <td><b>Address</b></td>
              <td><?php echo $address;?></td>
            </tr>
            <tr>
              <td><b>Tel 1</b></td>
              <td><?php echo $phone_one;?></td>
            </tr>
            <tr>
              <td><b>Tel 2:-</b></td>
              <td><?php echo $phone_two;?></td>
            </tr>

             <tr>
              <td><b>Blood Group</b></td>
              <td><?php echo $blood_group; ?></td>
            </tr>
            <tr>
              <td><b>Next of kin</b></td>
              <td><?php echo $Next_of_kin_FName."  ".$Next_of_kin_LName ; ?></td>
            </tr>
            <tr>
              <td><b>Next of kin Tel</b></td>
              <td><?php echo $Nok_phone; ?></td>
            </tr>

             <tr>
              <td><b>Treatment Case:</b></td>
              <td></td>
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