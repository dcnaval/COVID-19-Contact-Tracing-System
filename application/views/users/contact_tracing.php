	<div class="main-content">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>CONTACT TRACING DATA</h4></a>
					<div class="card-header-action">
                      <a href="#" data-toggle="modal" data-target="#addnewdata" class="btn btn-primary">
                       <i class="fas fa-address-card"></i> ADD NEW TRACING DATA
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
				  <?php if(isset($_GET['updated'])){ echo '<div class="alert alert-success"> Password successfully change !</div>';}?>
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered" id="covid-data">
                        <thead>
                          <tr>
                            <th class="text-center"> FULL NAME</th>
                            <th class="text-center"> EMAIL ADDRESS</th>
                            <th class="text-center"> CONTACT #</th>
                            <th class="text-center"> ADDRESS</th>
                            <th class="text-center"> DATE ADDED</th>
                          </tr>
                        </thead>
						<tbody>
						<?php foreach($information as $row=>$val){?>
							<tr> 
								<td  class="text-center"> <?php echo $val->firstname . ' '. $val->lastname;?> </td>
								<td  class="text-center"> <?php echo $val->emailaddress ;?> </td>
								<td  class="text-center"> <?php echo $val->contactnumber ;?> </td>
								<td  class="text-center"> <?php echo $val->address ;?> </td>
								<td  class="text-center"> <?php echo $val->date_added ;?> </td>
							</tr>
						<?php } ?>
						</tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         </div>
      </div>  
	  <!-- ADD NEW DATA MODAL -->
	   <div class="modal fade" id="addnewdata" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Add New Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
						<form  method="post" action="<?php echo site_url('add-new-tracing-data');?>">
											<div class="form-row">
											  <div class="form-group col-md-12">
												<label>First Name : </label>
												<div class="input-group">
												  <input type="hidden" class="form-control" name="listID"  value="<?php echo $_GET['id'];?>" required>
												  <input type="text" class="form-control" name="firstname" required>
												</div>
											  </div> 
											  <div class="form-group col-md-12">
												<label>Last Name : </label>
												<div class="input-group">
												  <input type="text" class="form-control" name="lastname" required>
												</div>
											  </div>
											  	<div class="form-group col-md-12">
												<label>Contact Number: </label>
												<div class="input-group">
												  <input type="text" class="form-control" name="contactnumber" required>
												</div>
											  </div>
											  <div class="form-group col-md-12">
												<label>Email Address: </label>
												<div class="input-group">
												  <input type="text" class="form-control" name="emailaddress" required>
												</div>
											  </div>
											  <div class="form-group col-md-12">
												<label>  Address : </label>
												<div class="input-group ">
												  <textarea class="form-control" name="address" required></textarea>
												</div>
											  </div>  
											 
											</div> 
										
								
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
			  </form>
            </div>
          </div>
        </div>
	  
	  <!-- END -->
	 