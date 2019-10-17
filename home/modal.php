<div class="modal fade" tabindex="-1" role="dialog" id="edit_patient">
  <br><br><br>
  <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Update Patient Here</h4>
            </div>
                  <div class="modal-body">
                         <!-- This is for error or success messages-->
                         <!-- <div class="alert alert-danger" role="alert">
                                  <p><h4>Failed</h4></p>
                            </div>
                            <div class="alert alert-success" role="alert">
                                  <p><h4>Successfully added.<br></h4>Patient ID:<h5>DEN-090984</h5></p>
                            </div> -->
                            <!-- error or success messages ends here-->
                  <div class="well" style="background-color:#d6e0c9;color:black;">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="box-body">
                                    <form action="" method="post">
                                      <div class="form-group col-md-6 col-sm-6 col-xs-6" hidden="">
                                        <label>patient ID</label>
                                        <input type="text" class="form-control" id="edpat" placeholder="First Name">
                                      </div>
                                      <div class="form-group col-md-6 col-sm-6 col-xs-6" hidden="">
                                        <label>patient ID</label>
                                        <input type="text" class="form-control" id="idrr" placeholder="First Name">
                                      </div>
                                      <div class="form-group col-md-6 col-sm-6 col-xs-6" hidden="">
                                        <label>patient ID</label>
                                        <input type="text" class="form-control" id="dte" placeholder="First Name">
                                      </div>
                                      <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" id="efname" placeholder="First Name">
                                      </div>
                                      <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>Middle Name</label>
                                        <input type="text" class="form-control" id="emname" placeholder="Middle Name">
                                      </div>
                                      <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" id="elname" placeholder="Last_Name">
                                      </div>
                                      <div  class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>Blood Group</label>
                                        <select class="form-control" name="sex" id="ebg">
                                          <option>A<sup>+</sup></option>
                                          <option>A<sup>-</sup></option>
                                          <option>B<sup>+</sup></option>
                                          <option>B<sup>-</sup></option>
                                          <option>AB<sup>+</sup></option>
                                          <option>AB<sup>-</sup></option>
                                          <option>O<sup>+</sup></option>
                                          <option>O<sup>-</sup></option>
                                        </select>
                                      </div>
                                      <div class="form-group">
                                        <label>Age</label>
                                        <input type="text" class="form-control" id="eage" placeholder="Age">
                                      </div>

                                       <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>Phone Number 1</label>
                                        <input type="text" class="form-control" id="ephone1" placeholder="Phone Number 1">
                                      </div>
                                      <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>Phone Number 2</label>
                                        <input type="text" class="form-control" id="ephone2" placeholder="Phone Number 2">
                                      </div>
                                      
                                      <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>NOK First Name</label>
                                        <input type="text" class="form-control" id="efirst_name" placeholder=" NOK First Name">
                                      </div>
                                      <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>NOk Last Name</label>
                                        <input type="text" class="form-control" id="elast_name" placeholder=" NOK Last Name">
                                      </div>
                                      <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>NOk Phone Number</label>
                                        <input type="text" class="form-control" id="enlast_name" placeholder="NOK phone Number">
                                      </div>
                                      <div  class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>Sex</label>
                                        <select class="form-control" name="sex" id="gen">
                                          <option>Male</option>
                                          <option>Female</option>
                                        </select>
                                      </div>
                                      <div>
                                      <label>Address</label>
                                        <textarea class="textarea" placeholder="Message"
                                                  style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="emessage"></textarea>
                                      </div><br/>
                                      <div class="row">
                                        <div class="col-md-6">
                                      <div>
                    <input type="button" class="btn btn-sm btn-success" style="float:left;" id="ebtX_btn" value="Update Patient">
              
                                      </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div id="error_pati">
                                          </div>
                                      </div>
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



<div class="modal fade" tabindex="-1" role="dialog" id="add_treatment">
  <br><br><br>
  <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Add treatment Here</h4>
            </div>
                  <div class="modal-body">
                    <div role="alert" id="display_message">
                                  
                            </div>
                         <!-- This is for error or success messages-->
                         <!-- <div class="alert alert-danger" role="alert">
                                  <p><h4>Failed</h4></p>
                            </div>
                            <div class="alert alert-success" role="alert">
                                  <p><h4>Successfully added.<br></h4>Patient ID:<h5>DEN-090984</h5></p>
                            </div> -->
                            <!-- error or success messages ends here-->
                  <div class="well" style="background-color:#d6e0c9;color:black;">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="box-body">
                                    <form action="" method="post" id="myform">
                                       <div class="form-group col-md-6 col-sm-6 col-xs-6" hidden="">
                                        <label>Patient ID</label>
                                        <input type="text" class="form-control" id="pati_ID" placeholder="Patient ID">
                                      </div>
                                      <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>Symptoms:</label>
                                        <input type="text" class="form-control"  id="sym" placeholder="Symptoms">
                                       
                                      </div>
                                      <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                      <label>Treatment Case</label>
                                            <textarea class="textarea" placeholder=" Treatment Case"
                                                      style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="treatment_case"></textarea>
                                                      <span class="help-inline" id='treatment_case_e'></span>
                                                      
                                      </div>
                                      <!--  <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label>Date Treated:</label>
                                        <input type="text" class="form-control" name="date" placeholder="Date Treated">
                                      </div> -->
                                      
                                      
                                       <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>Cost(N):</label>
                                        <input type="text" class="form-control"  id="costy" placeholder="Amount Cost">
                                        <span class="help-inline" id='costy_e'></span>
                                      </div>
                                      <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>Amount Paid(N):</label>
                                        <input type="text" class="form-control" placeholder="Amount Paid" id="amt_paid">
                                        <span class="help-inline" id='amt_paid_e'></span>
                                      </div>

                                       <div  class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label>Doctor</label>
                                         <input type="text" class="form-control" placeholder="Provide Doctor Name responsible for the treatment Here" id="doctor">
                                       
                                        <span class="help-inline" id='doctor_e'></span>
                                      </div>
                                      
                                      <br/>
                                      <div>
               <input type="button" class="btn btn-sm btn-success" style="float:right;" id="btX_btn" value="Add Treatment">
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
                        <!--  <div class="alert alert-danger" role="alert">
                                  <p><h4>Failed</h4></p>
                            </div>
                            <div class="alert alert-success" role="alert">
                                  <p><h4>Successfully added.<br></h4>Patient ID:<h5>DEN-090984</h5></p>
                            </div> -->
                            <!-- error or success messages ends here-->
                  <div class="well" style="background-color:#d6e0c9;color:black;">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="load"></div>
                            <div class="box-body" id="loader">
                                    <form id="myform10">
                                        <div class="row">
                                      <div class="form-group col-md-6 col-sm-6 col-xs-6">

                                        <label>First Name</label>
                                        <input type="text" class="form-control" placeholder="First Name" id="pfname">
                                        <span class="help-inline" id='patient_fname_e'></span>
                                      </div>

                                      <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>Middle Name</label>
                                        <input type="text" class="form-control" placeholder="Middle Name" id="pmname">
                                         <span class="help-inline" id='pmname_e'></span>
                                      </div>
                                      </div>
                                                  <div class="row">
                                      <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" placeholder="Last_Name" id="plname">
                                         <span class="help-inline" id='plname_e'></span>
                                      </div>
                                      <div  class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>Blood Group</label>
                                        <select class="form-control" id="pblood">
                                          <option>Select Blood Group</option>
                                          <option>A<sup>+</sup></option>
                                          <option>A<sup>-</sup></option>
                                          <option>B<sup>+</sup></option>
                                          <option>B<sup>-</sup></option>
                                          <option>AB<sup>+</sup></option>
                                          <option>AB<sup>-</sup></option>
                                          <option>O<sup>+</sup></option>
                                          <option>O<sup>-</sup></option>
                                        </select>
                                         <span class="help-inline" id='pblood_e'></span>
                                      </div>
                                              </div>
                                                <div class="row">
                                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                      <div class="form-group">
                                        <label>Age</label>
                                        <input type="text" class="form-control" placeholder="Age" id="page">
                                         <span class="help-inline" id='page_er'></span>
                                      </div>
                                                    </div>
                                                </div>
                                                  <div class="row">
                                       <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>Phone Number 1</label>
                                        <input type="text" class="form-control" placeholder="Phone Number 1" id="telo1">
                                         <span class="help-inline" id='telo1_e'></span>
                                      </div>
                                      <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>Phone Number 2</label>
                                        <input type="text" class="form-control" placeholder="Phone Number 2" id="telo2">
                                         <span class="help-inline" id='telo2_e'></span>
                                      </div>
                                              </div>
                                              <div class="row">
                                      <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>NOK First Name</label>
                                      <input type="text" class="form-control" placeholder=" NOK First Name" id="nkoname">
                                       <span class="help-inline" id='nkonam_e'></span>
                                      </div>
                                      <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>NOk Last Name</label>
                                      <input type="text" class="form-control" placeholder=" NOK Last Name" id="nkolname">
                                      <span class="help-inline" id='nkolnam_e'></span>
                                      </div>
                                              </div>
                                                <div class="row">
                                      <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>NOk Phone Number</label>
                                      <input type="text" class="form-control" placeholder="NOK phone Number" id="ntel">
                                       <span class="help-inline" id='ntel_e'></span>
                                      </div>
                                      <div  class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>Sex</label>
                                        <select class="form-control" id="psex">
                                          <option>Select Sex</option>
                                          <option>Male</option>
                                          <option>Female</option>
                                        </select>
                                         <span class="help-inline" id='psex_e'></span>
                                      </div>
                                            </div>
                                      <div>
                                      <label>Address</label>
                                        <textarea class="textarea" placeholder="Message"
                                                  style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="pmessage"></textarea>
                                                   <span class="help-inline" id='pmessage_e'></span>
                                      </div><br/>
                                      <div>
                      <input type="button" class="btn btn-sm btn-primary"  id="btn_patient" value="Add Patient">
            </div>
                                    </form>
                                    <br/>
                                     <div id="error_patient">
                                  
                            </div>
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











<div class="modal fade" tabindex="-1" role="dialog" id="edit_treatment">
  <br><br><br>
  <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Add treatment Here</h4>
            </div>
                  <div class="modal-body">
                    <div role="alert" id="error_edit">
                            </div>
                         <!-- This is for error or success messages-->
                         <!-- <div class="alert alert-danger" role="alert">
                                  <p><h4>Failed</h4></p>
                            </div>
                            <div class="alert alert-success" role="alert">
                                  <p><h4>Successfully added.<br></h4>Patient ID:<h5>DEN-090984</h5></p>
                            </div> -->
                            <!-- error or success messages ends here-->
                  <div class="well" style="background-color:#d6e0c9;color:black;">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="box-body">
                                    <form id="myform12">
                                       <div class="form-group col-md-6 col-sm-6 col-xs-6" hidden="" >
                                        <label>Patient ID</label>
                                        <input type="text" class="form-control" id="edit_pat" placeholder="Patient ID" readonly="">
                                      </div>
                                      <div class="form-group col-md-6 col-sm-6 col-xs-6" hidden="">
                                        <label>ID</label>
                                        <input type="text" class="form-control" id="edit_id" placeholder="Patient ID" readonly="">
                                      </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>Symptoms:</label>
                                        <input type="text" class="form-control"  id="esym" placeholder="Symptoms">
                                       
                                      </div>
                                      <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                      <label>Treatment Case</label>
                                            <textarea class="textarea" placeholder=" Treatment Case"
                                                      style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="edit_treat"></textarea>
                                      </div>

                                      <div class="form-group col-md-6 col-sm-6 col-xs-6" hidden="">
                                        <label>Date Created:</label>
                                        <input type="text" class="form-control" name="phone1" placeholder="" id="edit_date">
                                      </div>
                                      
                                       <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>Cost(N):</label>
                                        <input type="text" class="form-control" name="phone1" placeholder="" id="edit_cost">
                                      </div>
                                      <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                        <label>Amount Paid(N):</label>
                                        <input type="text" class="form-control" name="phone2" placeholder="" id="edit_amt">
                                      </div>
                                     
                                       <div  class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label>Doctor</label>
                                         <input type="text" class="form-control" name="phone2" placeholder="" id="edit_doctor">
                                       
                                      </div>
                                      
                                      <br/>
                                      <div>
              <input type="button" class="btn btn-sm btn-success"  id="editNow" value="Edit Treatment" style="float:right;">
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


<div class="modal fade bs-example-modal-default" tabindex="-1" role="dialog"  aria-labelledby="myDefaultModalLabel" id="updatedit_">
  <br><br><br>
  <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <!--  <h4 class="modal-title">Add treatment Here</h4> -->
            </div>
                  <div class="modal-body">
                    <div role="alert" id="eerror_admin_">
                                 
                            </div>
                       
                  <div class="well" style="background-color:#d6e0c9;color:black;">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="box-body">
                                     <form action="" method="post" id="myform" >
                <div class="form-group col-md-6 col-sm-6 col-xs-6">
                  <label>First Name</label>
                  <input type="text" class="form-control" name="first_name" placeholder="First Name" id="ffname">
                   <span class="help-inline" id='ss_fname'></span>
                  
                </div>

                <div class="form-group col-md-6 col-sm-6 col-xs-6">
                  <label>Last Name</label>
                  <input type="text" class="form-control" name="last_name" placeholder="Last Name" id="llname">
                   <span class="help-inline" id='ss_lname'></span>
                </div>

                 <div class="form-group col-md-6 col-sm-6 col-xs-6">
                  <label>Phone Number 1</label>
                  <input type="text" class="form-control" name="phone1" placeholder="Phone Number 1" id="ttel1">
                   <span class="help-inline" id='ss_tel1'></span>
                </div>
                <div class="form-group col-md-6 col-sm-6 col-xs-6">
                  <label>Phone Number 2</label>
                  <input type="text" class="form-control" name="phone2" placeholder="Phone Number 2" id="ttel2">
                   <span class="help-inline" id='ss_tel2'></span>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Email" id="eemail">
                  <span class="help-inline" id='ss_mail'></span>
                </div>
                 <div class="form-group" hidden="">
                  <label>id</label>
                  <input type="text" class="form-control" name="id" placeholder="id" id="id" readonly="">
                  
                </div>
                <div>
                <label>Address</label>
                  <textarea class="textarea" placeholder="Message"
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="aaddress"></textarea>
                            <span class="help-inline" id='ss_address'></span>
                </div>
              </form>
                              </div>

                        </div>

                    </div>
                     <div>
              <input type="button" class="btn btn-sm btn-warning"  id="edit_doctor1" value="Edit Doctor">
            <!--   <button type="button" class="pull-right btn btn-default" id="sendEmail">Add Doctor
                <i class="fa fa-arrow-circle-right"></i></button> -->
            </div>
                  </div>
              </div>
                    <div class="modal-footer">
                      <button type="button" class=" btn btn-sm-warning" data-dismiss="modal">Close</button>
                    </div>
         </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<div class="modal fade bs-example-modal-default" tabindex="-1" role="dialog"  aria-labelledby="myDefaultModalLabel" id="updateadmin_">
  <br><br><br>
  <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <!--  <h4 class="modal-title">Add treatment Here</h4> -->
            </div>
                  <div class="modal-body">
                    <div role="alert" id="e_admin_">
                                 
                            </div>
                       
                  <div class="well" style="background-color:#d6e0c9;color:black;">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="box-body">
                                    <form action="" method="post" id="myform" >
                <div class="form-group col-md-6 col-sm-6 col-xs-6">
                  <label>First Name</label>
                  <input type="text" class="form-control" name="first_name" placeholder="First Name" id="e_name">
                   
                  
                </div>

                <div class="form-group col-md-6 col-sm-6 col-xs-6">
                  <label>Last Name</label>
                  <input type="text" class="form-control" name="last_name" placeholder="Last Name" id="e_lname">
                   
                </div>
                <div class="form-group">
                  <label>Phone Number</label>
                  <input type="text" class="form-control" name="phone" placeholder="Phone Number" id="e_phone">
                  
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Email" id="e_email">
                  
                </div>
                 <div class="form-group col-md-6 col-sm-6 col-xs-6">
                  <label>Password</label>
                  <input type="text" class="form-control" name="password" placeholder="Password" id="e_pass">
                   
                </div>
                <div class="form-group col-md-6 col-sm-6 col-xs-6" hidden="">
                  <label>id</label>
                  <input type="text" class="form-control" name="id" placeholder="Password" id="idp">
                   
                </div>
                
              </form>
                              </div>

                        </div>

                    </div>
                     <div>
              <input type="button" class="btn btn-sm btn-warning"  id="edit_adminn" value="Edit Admin">
            <!--   <button type="button" class="pull-right btn btn-default" id="sendEmail">Add Doctor
                <i class="fa fa-arrow-circle-right"></i></button> -->
            </div>
                  </div>
              </div>
                    <div class="modal-footer">
                      <button type="button" class=" btn btn-sm-warning" data-dismiss="modal">Close</button>
                    </div>
         </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

















