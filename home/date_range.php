
 <?php include"includes/header.php";?>
  <?php include"includes/side.php";?>
  <?php include"db/db_con.php";?>
   

 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    
    </section>
    <hr>
  
     <?php
     if(isset($_GET['pid'])){
                    $id = $_GET['pid'];

}

?>

                

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
         <?php if(isset($view)){ echo $view;}?>
          <?php if(isset($msg)){ echo $msg;}?>
              
             
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-body table-responsive no-padding">
              <table class="table table-hover table-bordered table-striped" id="example1">
              
                <thead>
                     
                <tr>
                <th>S/N</th>
                  <th>Patient ID</th>
                  <th>Date treated</th>
                  <th>Patient Names</th>
                  <th>Symptoms</th>
                  <th>Treatment</th>
                  <th>Cost Fee</th>
                  <th>Paid</th>
                  <th>Balance</th>
                </tr>
                </thead>
                <tbody>
                <?php
$query = "SELECT treatments.*,patients.fname,patients.lname,patients.patient_ID AS patID FROM treatments INNER JOIN patients ON patients.patient_ID = treatments.patient_ID WHERE treatments.symtoms LIKE '%$id%' ORDER by treatments.id DESC";
$result = mysqli_query($link,$query);
                        if($result){
                          if(mysqli_num_rows($result)>=1){
                            $y = 1;
                            while ($row = mysqli_fetch_assoc($result)){
                                      extract($row);
                                      ?>
                                             <tr>
                                                      <td><?php echo $y++;?></td>
                                                      <td><?php echo $patID;?></td>
                                                      <td><?php echo $date_of_treatement;?>
                                                      </td>
                                                      <td><?php echo $fname."  ".$lname; ?></td>
                                                      <td><?php echo $symtoms;?></td>
                                                      <td><?php echo $treatment_name?></td>
                                                      <td><?php echo $Cost;?></td>
                                                      <td><?php echo $Amount_paid;?></td>
                                                      <td><?php echo $Amount_balance;?></td>
                                                     
                                                    </tr> 
                                                    <?php      
             }
                        }else{
                            $nodata =<<<DATA
                

             <div class="alert alert-danger" role="alert">
          No record of treatment found on this day
            </div> 
DATA;
echo $nodata;
                          }
                      }else{
                        echo "data not set";
                      }
              

?>
                
              
                </tbody>
                
              </table>
              </div>
            </div>
          

            <!-- /.box-body -->
         
      <br/>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <div class="clearfix"></div>
  </div>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->
 <?php include"footer_table.php";?>