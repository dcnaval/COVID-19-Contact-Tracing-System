<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Covid Tracer System</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
   <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/fav.jpg">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style_index.css" />
</head>
   <body>
    <div class="container-fluid">
        <div class="container">
            <div class="col-xl-9 col-lg-10 mx-auto login-container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 img-box">
                        <img src="assets/images/logo.png" alt="">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="login-box">

                            <h5>Welcome Back!</h5>
							<?php if(isset($_GET['error'])){?>
							<center>
								<font color="red"> LOGIN ERROR ! </font>
							</center>
							<?php } ?>
							<form action="login-user" method="post">
                            <div class="login-row row no-margin">
                                <label for=""><i class="fas fa-envelope"></i> User Name : </label>
                                <input type="text" name="user_name" class="form-control form-control-sm" style="text-align:center;" required>
                            </div>

                             <div class="login-row row no-margin">
                                <label for=""><i class="fas fa-unlock-alt"></i> Password : </label>
                                <input type="password" name="password" class="form-control form-control-sm" style="text-align:center;" required>
                            </div>
                            <small> * Please Log-In using your Valid User Account </small>
							<br><br><br>
                             <div class="login-row btnroo row no-margin">
                               <button type="submit" class="btn btn-primary btn-sm"> Sign In</button>
                            </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
</body>

<script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/script.js"></script>

</html>