 <!-- /.content-wrapper -->
  <div class="modal fade" tabindex="-1" role="dialog" id="add_patient">
  <br><br><br>
  <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Add Patient Here</h4>
            </div>
                  <div class="modal-body">
                         <!-- This is for error or success messages-->
                         <div class="alert alert-danger" role="alert">
                                  <p><h4>Failed</h4></p>
                            </div>
                            <div class="alert alert-success" role="alert">
                     
                            </div>
                            <!-- error or success messages ends here-->
                  <div class="well" style="background-color:#d6e0c9;color:black;">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="box-body">
                                    <form action="#" method="post">
                                      <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" name="first_name" placeholder="First Name">
                                      </div>
                                      <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                                      </div>

                                       <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>Phone Number 1</label>
                                        <input type="text" class="form-control" name="phone1" placeholder="Phone Number 1">
                                      </div>
                                      <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>Phone Number 2</label>
                                        <input type="text" class="form-control" name="phone2" placeholder="Phone Number 2">
                                      </div>
                                      <div class="form-group">
                                        <label>Age</label>
                                        <input type="text" class="form-control" name="age" placeholder="Age">
                                      </div>
                                      <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>NOK First Name</label>
                                        <input type="text" class="form-control" name="first_name" placeholder=" NOK First Name">
                                      </div>
                                      <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>NOk Last Name</label>
                                        <input type="text" class="form-control" name="last_name" placeholder=" NOK Last Name">
                                      </div>
                                      <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>NOk Phone Number</label>
                                        <input type="text" class="form-control" name="last_name" placeholder="NOK phone Number">
                                      </div>
                                      <div  class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>Sex</label>
                                        <select class="form-control" name="sex" id="sex">
                                          <option>Male</option>
                                          <option>Female</option>
                                        </select>
                                      </div>
                                      <div>
                                      <label>Address</label>
                                        <textarea class="textarea" placeholder="Message"
                                                  style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                      </div><br/>
                                      <div>
              <button type="button" class="pull-right btn btn-default" id="sendEmail">Add Patient
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
                                    </form>
                              </div>
                        </div>
                    </div>
                  </div>
              </div>
                    <div class="modal-footer">
                      <button type="button" class=" btn btn-sm-warning" data-dismiss="modal">Close</button>
                    </div>
         </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
