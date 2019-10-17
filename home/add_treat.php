
 <?php include"includes/header.php";?>
  <?php include"includes/side.php";?>
  <?php include"db/db_con.php";?>
 
  <script src="js/add_treatment.js"></script>
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
    <hr>
     <?php
                  if(isset($_GET['id'])){
                            $id = $_GET['id'];
                            $query = "SELECT * FROM patients WHERE id = '".$id."' ";
                            $result = mysqli_query($link,$query);
                            $row = mysqli_fetch_assoc($result);
                            $id = $row['id'];
                            $patient_id = $row['patient_ID'];
                            $fname = $row['fname'];
                            $check = "SELECT t1.*, t3.id AS patientId FROM treatments AS t1,patients AS t3 WHERE t1.patient_ID = '$patient_id' AND t3.patient_ID=t1.patient_ID ORDER BY t1.id DESC";
                            $result2 = mysqli_query($link,$check);
                            if(mysqli_num_rows($result2)>=1){
                              $rows = mysqli_fetch_assoc($result2);
                              $patientIdr = $rows['patientId'];
                              extract($rows);
$data =<<<DATA
         <tr>
                  <td>$patient_ID</td>
                  <td>$date_of_treatement
                  </td>
                  <td>$treatment_name</td>
                  <td>$doctor</td>
                  <td>$Cost</td>
                  <td>$Amount_paid</td>
                  <td>$Amount_balance</td>
                  <td> <div class="btn-group">
                  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu" style="float:left; margin-right:0px;">
                    <li><input type="button" class="btn btn-sm btn-success edit_treat" id="$id" value="Edit"> <input type="button" class="btn btn-sm btn-warning view_particular" value="View">  <input type="button" class="btn btn-sm btn-primary view_all" id="$patientId" value="All" ></li>
                    <li></li>
                    <li class="divider"></li>
                    <li><input type="button" class="btn btn-sm btn-danger delete_treat" id="$patientId" value="Delete" ></li>
                  </ul>
                </div></td>
                </tr>       
DATA;

                            }else{

$nodata =<<<DATA
                

             <div class="alert alert-danger" role="alert">
          No treatment added to <b>$fname.</b> Please click on the "add treatment button to add treatment to <b>$fname</b>"
            </div> 
DATA;
           
                          
                            }
                  }else{
                    echo "data is  not set";
                  }



                ?>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
          <div class="box-header" style="float:right; ">
            <div class="input-group margin">
                <div class="input-group-btn">
                  <input type="button" name="add_btn" class="btn btn-sm btn-success add_btn " value="Add Treatment" id="<?php echo $patient_id;?>" >
                 
                </div>
                
              </div>

              <form id="myform12">

                                       <div class="form-group col-md-6 col-sm-6 col-xs-6" hidden="">
                                        <label>PaID</label>
                                        <input type="text" class="form-control"  placeholder="" id="patient_tbl_id" value="<?php echo $patientIdr;?>" >
                                      </div>

                                       <div class="form-group col-md-6 col-sm-6 col-xs-6" hidden="">
                                        <label>Patient treatment id</label>
                                        <input type="text" class="form-control"  placeholder="" id="id_pati" value="<?php echo $id;?>" >
                                      </div>

                                       <div class="form-group col-md-6 col-sm-6 col-xs-6" hidden="">
                                        <label>Patient ID</label>
                          <input type="text" class="form-control" placeholder="" id="pati_id" value="<?php echo $patient_id;?>" >
                                      </div>


              </form>
              <?php include"modal.php"; ?>
              <?php include"delete_modal.php";?>
          </div>
            <div class="box-header">
              <h3 class="box-title">Registered Patients </h3>
            </div>
             
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-body table-responsive no-padding">
              <table class="table table-hover table-bordered table-striped" id="example1">
              
                <thead>
                     
                <tr>
                  <th>Patient ID</th>
                  <th>Date treated</th>
                  <th>Treatment</th>
                  <th>Doctor</th>
                  <th>Cost Fee</th>
                  <th>Paid</th>
                  <th>Balance</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
               <?php if(isset($data)){ echo $data;} ?>

               <?php if(isset($nodata)){echo $nodata;} ?>
                </tbody>
                
              </table>
              </div>
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