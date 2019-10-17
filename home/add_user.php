 <?php include"includes/header.php";?>
  <?php include"includes/side.php";?>
   <?php include"db/db_con.php";?>
  
   <script src="js/admin.js"></script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-5 connectedSortable">

           <div class="box box-success box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Add Admin</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <div class="box-body">
             <div  role="alert" id="error_amessages_">
                                 
                          </div>
              <form action="" method="post" id="myform" >
                <div class="form-group col-md-6 col-sm-6 col-xs-6">
                  <label>First Name</label>
                  <input type="text" class="form-control" name="first_name" placeholder="First Name" id="afkname">
                   <span class="help-inline" id='a_fname'></span>
                  
                </div>

                <div class="form-group col-md-6 col-sm-6 col-xs-6">
                  <label>Last Name</label>
                  <input type="text" class="form-control" name="last_name" placeholder="Last Name" id="alname">
                   <span class="help-inline" id='a_lname'></span>
                </div>
                <div class="form-group">
                  <label>Phone Number</label>
                  <input type="text" class="form-control" name="phone" placeholder="Phone Number" id="aphone">
                  <span class="help-inline" id='a_tel1'></span>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Email" id="aemail">
                  <span class="help-inline" id='a_mail'></span>
                </div>
                 <div class="form-group col-md-6 col-sm-6 col-xs-6">
                  <label>Password</label>
                  <input type="text" class="form-control" name="password" placeholder="Password" id="pass">
                   <span class="help-inline" id='a_pass1'></span>
                </div>
                <div class="form-group col-md-6 col-sm-6 col-xs-6">
                  <label>confirm passsword</label>
                  <input type="text" class="form-control" name="password1" placeholder="Password" id="pass2">
                   <span class="help-inline" id='a_pass2'></span>
                </div>
                
              </form>
            </div>
             <div class="box-footer clearfix">
              <input type="button" class="btn btn-sm btn-success"  id="btn_admin" value="Add Admin">
            <!--   <button type="button" class="pull-right btn btn-default" id="sendEmail">Add Doctor
                <i class="fa fa-arrow-circle-right"></i></button> -->
            </div>
            </div>
            <!-- /.box-body -->
          </div>

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-7 connectedSortable">
         <?php include"modal.php";?>
              <?php include"delete_modal.php";?>

               <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Admin details</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
             <div class="box-body">
              <div class="box-body table-responsive no-padding">
              <table class="table table-hover" id="example1"><!-- 
              <table  class="table table-bordered table-striped table-responsive"> -->
                <thead>
                <tr>
                  <th>S/N</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Tel 1</th>
                  
                  <th>Email</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $sql = "SELECT * FROM admin WHERE 1";
                    $query = mysqli_query($link,$sql);
                      $r = 1;
                    while($row = mysqli_fetch_assoc($query)):
                          extract($row);
                  ?>
                <tr>
                  <td><?php echo $r++;?></td>
                  <td><?php echo $fname; ?>
                  </td>
                  <td><?php echo $lname; ?>
                  </td>
                  <td><?php echo $phone;?></td>
                  <td><?php echo $email;?></td>
                  
                  <td> <div class="btn-group">
                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu" style="float:left; margin-right:0px;">
                    <li><input type="button" name="edit" class="btn btn-sm btn-info edit_admin" id="<?php echo $id;?>" value="Edit">   <input type="button" name="delete" class="btn btn-sm btn-danger delete_admin" id="<?php echo $id;?>" value="Del"></li>
                    <li></li>
                    <li class="divider"></li>
                     <li></li>
            <li></li>
                  </ul>
                </div></td>
                </tr>
                <?php endwhile;
                ?>

                </tbody>
                
              </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>

          <!-- Map box -->
          
         
          <!-- /.box -->

         


        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> <footer class="main-footer">
     <div class="pull-right hidden-xs">
     
    </div>
    <strong>PoweredBy &copy;<a href="https://www.facebook.com/orackel" target="_blank">Israel Honcho</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs"> 
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>


