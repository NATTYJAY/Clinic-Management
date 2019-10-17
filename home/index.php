 <?php session_start();?>
 <?php include"includes/header.php";?>
  <?php include"includes/side.php";?>
  <?php include"db/db_con.php";?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      
      <!-- Small boxes (Stat box) -->
    

       <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="/home/patients">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
               <?php 
              $yes = "SELECT * FROM patients WHERE 1";
              $hmm = mysqli_query($link,$yes);
              $leave = mysqli_num_rows($hmm);
              ?>
                    <h3><?php echo $leave; ?></h3>
              <?php

              ?>
              <p><b>Registered Patients</b></p>
            </div>
            <!-- /.info-box-content -->
          </div>
        </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href='/home/sdate'>
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

            <div class="info-box-content">
              <b>Search Patient Treatment</b>
            
            </div>
            <!-- /.info-box-content -->
          </div>
        </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="/home/ourusers">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <?php 
              $king = "SELECT * FROM admin WHERE 1";
              $mme = mysqli_query($link,$king);
              $p = mysqli_num_rows($mme);
              ?>
                    <h3><?php echo $p; ?></h3>
              <?php

              ?>
                <b>Admin</b>
            </div>
            <!-- /.info-box-content -->
          </div>
          </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <a href="logout.php">
          <div class="small-box bg-orange">
            <div class="inner">
              <h3></h3>

              <p><h4>LogOut</h4><br/><br/></p>
            </div>
            <div class="icon">
              <i class="ion ion-hand-o-right"></i>
            </div>
          </div>
          </a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

  
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-4">
        </div>
        <div class="col-md-4">
           

<div class="col-md-4 col-sm-4 col-xs-4">
      </div>
    </div>
     

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php include"includes/footer.php";?>