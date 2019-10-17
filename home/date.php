
<?php include"includes/header.php";?>
  <?php include"includes/side.php";?>
  <?php include"db/db_con.php";?>
    
  <script src="js/date.js"></script>
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>
       Lagos Hospital management system<br/>
        <small>Sort Patient symptoms</small>
      </h3>

      <div class="row">
      <br/><br/>
        <div class="col-sm-6 col-md-6 col-xs-6 col-lg-6">
          <div class="box-body">
              <form role="form">
                 <label>Search patient symptoms and preferrable treatment:</label>

                 <div class="form-group">

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right datepick" id="symptoms">
                   <span class="input-group-btn">
                      <input type="button" class="btn btn-danger btn-flat" id="checker" value="Check">
                    </span>
                </div>
                <!-- /.input group -->
              </div>
               
              </form>
          </div>
        </div>

<div class="col-sm-6 col-md-6 col-xs-6">

        </div>


        
     </div>
    </section>
    <hr>

  
          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
</div>
<!-- ./wrapper -->
<?php include"footer_date.php";?>