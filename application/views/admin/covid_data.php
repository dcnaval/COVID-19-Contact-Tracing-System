	<div class="main-content">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>COVID DATA INFORMATION </h4></a>
					<div class="card-header-action">
                      <a href="#" data-toggle="modal" data-target="#addnewdata" class="btn btn-primary">
                       <i class="fas fa-address-card"></i> ADD NEW DATA
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
                            <th class="text-center"> DATE COVID POSITIVE</th>
                            <th class="text-center"> DATE ADDED</th>
                            <th class="text-center"></th>
                          </tr>
                        </thead>
						<tbody>
						<?php foreach($information as $row=>$val){?>
							<tr> 
								<td class="text-center"> <?php echo $val->firstname . ' '. $val->lastname;?> </td>
								<td class="text-center"> <?php echo $val->emailaddress ;?> </td>
								<td class="text-center"> <?php echo $val->contactnumber ;?> </td>
								<td class="text-center"> <?php echo $val->address ;?> </td>
								<td class="text-center"> <?php echo $val->date_positive ;?> </td>
								<td class="text-center"> <?php echo $val->date_added ;?> </td>
								<td  class="text-center"> 
								<a href="<?php echo site_url("admin/coviddata/contact_tracing?id=".$val->listID);?>"><button class="btn btn-primary btn-md"> <i class="fas fa-user-friends"></i> CONTACT TRACING </button></a>
								<br>
								<br>
								<button class="btn btn-warning btn-md"  data-toggle="modal" data-target="#removedata<?php echo $val->listID ;?>"> REMOVE </button>
								</td>
							</tr>
							<!-- REMOVE USER ACCOUNT -->
								<div class="modal fade" id="removedata<?php echo $val->listID ;?>" tabindex="-1" role="dialog"
									  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									  <div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
										  <div class="modal-header">
											<h5 class="modal-title" id="exampleModalCenterTitle">Remove Account</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true">&times;</span>
											</button>
										  </div>
										  <div class="modal-body">
											<form  method="post" action="<?php echo site_url('remove-data');?>">
											 <input type="hidden" class="form-control" name="listID" value="<?php echo $val->listID;?>" required>
												ARE YOU SURE TO REMOVE THIS ACCOUNT DATA? 							  
															
										  </div>
										  <div class="modal-footer bg-whitesmoke br">
											<button type="submit" class="btn btn-warning">Remove</button>
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										  </div>
										  </form>
										</div>
									  </div>
									</div>
							<!-- END -->
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
	  <button class="btn btn-warning btn-sm" data-toggle="modal" id="membersinfo" data-target="#membersinfos" style="display:none;">  </button>
			<div class="modal fade" id="membersinfos" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
						  <div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="deleteModalLabel">Members Information </h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span></button>
							</div>
							<div class="modal-body">
							<hr>
									<form  method="post" action="<?php echo site_url('updatememberinfo');?>">
											<input type="hidden" name="memberid"  id="memberid" class="form-control" placeholder="">
											<div class="form-row">
											  <div class="form-group col-md-12">
												<label>Name : </label>
												<div class="input-group">
												  <div id="name" > </div>
												</div>
											  </div>
											  	<div class="form-group col-md-12">
												<label>Email Address : </label>
												<div class="input-group">
												  <div id="email" > </div>
												</div>
											  </div>
											  <div class="form-group col-md-12">
												<label> Change Password : </label>
												<div class="input-group ">
												  <input type="password" class="form-control" name="password" required>
												</div>
											  </div> 
											</div> 
											<div class="modal-footer">
											<button type="submit" class="btn btn-primary">UPDATE</button>
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											</div>
									</form>
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
						<form  method="post" action="<?php echo site_url('add-new-data-admin');?>">
											<div class="form-row">
											  <div class="form-group col-md-12">
												<label>First Name : </label>
												<div class="input-group">
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
											  <div class="form-group col-md-12">
												<label> Date Tested (Positive) : </label>
												<div class="input-group ">
												 <input type="date" class="form-control" name="date_positive" required>
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
	 