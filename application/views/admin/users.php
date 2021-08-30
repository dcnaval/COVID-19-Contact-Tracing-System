	<div class="main-content">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>SYSTEM USERS INFORMATION </h4>
					<div class="card-header-action">
                      <a href="#" data-toggle="modal" data-target="#adduseraccount" class="btn btn-primary">
                       <i class="fas fa-address-card"></i> ADD USER ACCOUNT
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
				  <?php if(isset($_GET['updated'])){ echo '<div class="alert alert-success"> User Account Updated !</div>';}?>
				  <?php if(isset($_GET['added']))  { echo '<div class="alert alert-info"> New User Account Added !</div>';}?>
				  <?php if(isset($_GET['deleted'])){ echo '<div class="alert alert-warning"> User Account Removed !</div>';}?>
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered" id="covid-data">
                        <thead>
                          <tr>
                            <th class="text-center"> FULL NAME</th>
                            <th class="text-center"> USER NAME</th>
                            <th class="text-center"> ACCOUNT LEVEL </th>
                            <th class="text-center"> DATE ADDED </th>
                            <th class="text-center"></th>
                          </tr>
                        </thead>
						<tbody>
						<?php foreach($information as $row=>$val){?>
							<tr> 
								<td class="text-center"> <?php echo $val->first_name . ' '. $val->last_name;?> </td>
								<td class="text-center"> <?php echo $val->user_name ;?> </td>
								<td class="text-center"> <?php if($val->userLevel==1){ echo 'Administrator'; } else { echo 'Users'; } ?> </td>
								<td class="text-center"> <?php echo $val->dateadded ;?> </td>
								<td class="text-center"> 
								<button class="btn btn-primary btn-md"  data-toggle="modal" data-target="#updateuseraccount<?php echo $val->accountID ;?>"> UPDATE </button>
								<button class="btn btn-warning btn-md"  data-toggle="modal" data-target="#removeuseaccount<?php echo $val->accountID ;?>"> REMOVE </button>
								</td>
							</tr>
							<!-- UPDATE USER ACCOUNT--->
								   <div class="modal fade" id="updateuseraccount<?php echo $val->accountID ;?>" tabindex="-1" role="dialog"
									  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									  <div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
										  <div class="modal-header">
											<h5 class="modal-title" id="exampleModalCenterTitle">Update Account</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true">&times;</span>
											</button>
										  </div>
										  <div class="modal-body">
													<form  method="post" action="<?php echo site_url('update-user');?>">
																		<div class="form-row">
																		  <div class="form-group col-md-12">
																			<label>First Name : </label>
																			<div class="input-group">
																			  <input type="hidden" class="form-control" name="accountID" value="<?php echo $val->accountID ;?>" required>
																			  <input type="text" class="form-control" name="first_name" value="<?php echo $val->first_name ;?>" required>
																			</div>
																		  </div> 
																		  <div class="form-group col-md-12">
																			<label>Last Name : </label>
																			<div class="input-group">
																			  <input type="text" class="form-control" name="last_name" value="<?php echo $val->last_name ;?>" required>
																			</div>
																		  </div>
																			<div class="form-group col-md-12">
																			<label>User Name: </label>
																			<div class="input-group">
																			  <input type="text" class="form-control" name="user_name" value="<?php echo $val->user_name ;?>" required>
																			</div>
																		  </div>
																		  <div class="form-group col-md-12">
																			<label>  Password : </label>
																			<div class="input-group ">
																			  <input type="password" class="form-control" name="password" value="<?php echo $val->password ;?>" required>
																			</div>
																		  </div>  
																		  <div class="form-group col-md-12">
																			<label>  User Level : </label>
																			<div class="input-group ">
																			  <select class="form-control" name="userLevel" required>
																				<?php if( $val->userLevel==1) {?>
																				<option value="1" selected> Administrator </option>
																				<option value="2"> User Only </option>
																				<?php } else { ?>
																				<option value="1" > Administrator </option>
																				<option value="2" selected> User Only </option>
																				<?php } ?>
																			 </select>
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
							<!--END-->
							<!-- REMOVE USER ACCOUNT -->
								<div class="modal fade" id="removeuseaccount<?php echo $val->accountID ;?>" tabindex="-1" role="dialog"
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
											<form  method="post" action="<?php echo site_url('remove-user');?>">
											 <input type="hidden" class="form-control" name="accountID" value="<?php echo $val->accountID ;?>" required>
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
	  <!-- ADD USER ACCOUNT MODAL -->
	   <div class="modal fade" id="adduseraccount" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Add New Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
						<form  method="post" action="<?php echo site_url('add-new-user');?>">
											<div class="form-row">
											  <div class="form-group col-md-12">
												<label>First Name : </label>
												<div class="input-group">
												  <input type="text" class="form-control" name="first_name" required>
												</div>
											  </div> 
											  <div class="form-group col-md-12">
												<label>Last Name : </label>
												<div class="input-group">
												  <input type="text" class="form-control" name="last_name" required>
												</div>
											  </div>
											  	<div class="form-group col-md-12">
												<label>User Name: </label>
												<div class="input-group">
												  <input type="text" class="form-control" name="user_name" required>
												</div>
											  </div>
											  <div class="form-group col-md-12">
												<label>  Password : </label>
												<div class="input-group ">
												  <input type="password" class="form-control" name="password" required>
												</div>
											  </div>  
											  <div class="form-group col-md-12">
												<label>  User Level : </label>
												<div class="input-group ">
												  <select class="form-control" name="userLevel" required>
													<option value=""> Select User Level </option>
													<option value="1"> Administrator </option>
													<option value="2"> User Only </option>
												 </select>
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
	 