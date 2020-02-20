<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Site Metas -->
    <title>Add Products</title>  
    <!-- Site Icons -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../assets/images/apple-touch-icon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">    
    <!-- Responsive CSS -->
    <!-- <link rel="stylesheet" href="../assets/css/responsive.css"> -->
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/custom.css">
</head>
<body>
	<!-- Start header -->
	<header class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="../assets/images/logo.png" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food"
                    aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbars-rs-food">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item active"><a class="nav-link active" href="products.php">Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="userAll.php">Users</a></li>
                        <li class="nav-item "><a class="nav-link" href="orders.php">Orders</a></li>
                        <li class="nav-item"><a class="nav-link" href="checks.php">Checks</a></li>
    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Naguib</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="userAdd.php">Add User</a>
                                <a class="dropdown-item" href="productAdd.php">Add Product</a>
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </div>
                        </li>
    
                    </ul>
                    &nbsp;
                    <img src="../assets/images/users/user.png" width="5%" alt="Admin">
    
                </div>
            </div>
        </nav>
    </header>
	<!-- End header -->
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Add Products</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
		<!-- Start Contact -->
        <div class="contact-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading-title text-center">
                            <h2>Products</h2>
                            <p>Here you can add new products and their details </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h2>Product</h2>
                                        <input type="text" class="form-control" id="product" name="naproductme" placeholder="Product Name" required data-error="Please enter product Name">
                                        <div class="help-block with-errors"></div>
                                    </div>                                 
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h2>Price</h2>
                                        <div class="div" style="display: flex;">
                                            <input type="number" step="0.01" placeholder="Price" style="width: 10%;" class="form-control" name="price" required data-error="Please enter price">
                                            <h1 style="margin-left: 10px; margin-top: 10px;">EGP</h1>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div> 
                                </div>
                                <div class="col-md-12">
                                    <h2>Category</h2>
                                    <div style="display: flex;">
                                        <div class="form-group" style="flex-basis: 87%;">
                                            <select class="custom-select d-block form-control" id="category" required data-error="Please Select Category">
                                            <option disabled selected>Please Select Category*</option>
                                            <option value="Hot Drinks">Hot Drinks</option>
                                            <option value="Cold Drinks">Cold Drinks</option>
                                            <option value="Meals">Meals</option>
                                            <option value="Fruits">Fruits</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <a href="#" style="margin-left: 10px; margin-top: 10px;font-size: larger;flex-basis: 13%;">Add New Category</a> 
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"> 
                                        <h2>Profile Picture</h2>
                                        <input class="input100" type="file" name="profile" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center" style="display: flex;">
                                        <button class="btn btn-common" id="reset" type="reset">Reset</button>
                                        <button class="btn btn-common"id="submit" type="submit" style="opacity: 1;margin-left: 5px;">Save</button>
                                        <div id="msgSubmit" style="margin-left: 50px;margin-top: 10px;" class="h3 text-center hidden"></div> 
                                        <div class="clearfix"></div> 
                                        
                                    </div>
                                </div>
                            </div>            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact -->
	

	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

<!--===============================================================================================-->
<script src="../assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/vendor/bootstrap/js/popper.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="../assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
   
    <script src="../assets/js/TemplateJS/form-validator.min.js"></script>
    <script src="../assets/js/TemplateJS/contact-form-script.js"></script>
    
    <!--===============================================================================================-->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/admin/addUser.js"></script>
</html>