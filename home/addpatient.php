
 <?php include"includes/header.php";?>
  <?php include"includes/side.php";?>
     <?php include"db/db_con.php";?>
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->
       
            <div class="box-header with-border">
              <h3 class="box-title">Registered Patients </h3>

              <div class="box-tools pull-right">
                <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> -->
<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="modal" data-target="#add_patient">Add Patient
                    </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
          <div class="box">

<br/>

            <div class="box-body table-responsive no-padding">
              <table class="table table-hover" id="example1"><!-- 
              <table  class="table table-bordered table-striped table-responsive"> -->
                <thead>
                <tr>
                  <th>S/N</th>
                  <th>Patient-ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Phone Number</th>
                  <th>Sex</th>
                  <th>Age</th>
                  <th>Date Created</th>
                  <th>Add Treatment</th>
                  
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  <?php $sql = "SELECT * FROM Patients  ORDER BY id DESC";
                    $query = mysqli_query($link,$sql);
                      $r = 1;
                    while($row = mysqli_fetch_assoc($query)):
                          extract($row);
                  ?>
                <tr>
                  <td><?php echo $r++;?></td>
                  <td><?php echo $patient_ID;?></td>
                  <td><?php echo $fname; ?>
                  </td>
                  <td><?php echo $lname; ?>
                  </td>
                  <td><?php echo $phone_one;?></td>
                  <td><?php echo $gender;?></td>
                  <td><?php echo $age;?></td>
                  <td><?php echo $date_created;?></td>
                  <td><input type="button" name="edit" class="btn btn-sm btn-success treatment" id="<?php echo $id;?>" value="Add / View Treatment" style ="float:left; width:100%" ></td>
                  
                  <td> <div class="btn-group">
                  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu" style="float:left; margin-right:0px;">
                    <li><input type="button" name="edit" class="btn btn-sm btn-info edit_p" id="<?php echo $id;?>" value="Edit" style ="float:left;" ></li><br/><br/>
                     <li><input type="button" name="view" class="btn btn-sm btn-success view_p" id="<?php echo $id;?>" value="View"></li>
                    <li class="divider"></li>
                     <li><input type="button" name="delete" class="btn btn-sm btn-danger delete_pati" id="<?php echo $id;?>" value="Del"></li>
                  </ul>
                </div></td>
                </tr>
                <?php endwhile;
                ?>

                </tbody>
                
              </table>
              </div>
           
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
  <?php include"modal.php";?>
  <?php include"delete_modal.php";?>
  
<?php include"footer_table.php";?>