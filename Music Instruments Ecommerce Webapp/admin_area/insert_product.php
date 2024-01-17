<?php 
	
	if(!isset($_SESSION['admin_email']))
	{
		echo "<script>window.open('login.php','_self')</script>";
	}
	else
	{

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert product</title>
</head>
<body>
<div class="row"><!--- row starts -->
	<div class="col-lg-12"><!--- row starts -->
		<ol class="breadcrumb"><!--- breadcrumb starts -->
			<li class="active">
				<i class="fa fa-dashboard"></i> Dashboard / Insert products
			</li>
		</ol><!--- breadcrumb ends -->
	</div><!--- row ends-->
</div><!--- row ends-->

<div class="row"><!--- 2 row starts -->
	<div class="col-lg-12"><!--- col-lg-12 starts -->
		<div class="panel panel-default"><!--- panel panel-default starts -->
			<div class="panel-heading"><!--- panel-heading starts -->
				<h3 class="panel-title">
					<i class="fa fa-level-down fa-fw"></i> Insert products
				</h3>
			</div><!--- panel-heading ends-->
			<div class="panel-body"><!--- panel-body starts -->
				<form class="form-horizontal" method="post" enctype="multipart/form-data"><!---form-horizontal starts -->

					<div class="form-group"><!---form-group starts -->
						<label class="col-md-3 control-label"> Product Title </label>
							<div class="col-md-6">
								<input type="text" name="product_title" class="form-control" required>
							</div>
					</div><!---form-group ends -->


					<div class="form-group"><!---form-group starts -->
						<label class="col-md-3 control-label"> Product Category </label>
							<div class="col-md-6">
								<select name="product_cat" class="form-control">
									 <option>Select a Product Category</option>

									 <?php 
									 // dynamicaly pull product categories form database

									 	$get_p_cats = "select * from product_categories";
									 	$run_p_cats = mysqli_query($con,$get_p_cats);

									 	while ($row_p_cats=mysqli_fetch_array($run_p_cats)) {
									 		$p_cat_id = $row_p_cats['p_cat_id'];
									 		$p_cat_title = $row_p_cats['p_cat_title'];

									 		echo "<option value = '$p_cat_id'> $p_cat_title </option>"; //display cats using their id
								
									 	}
									  ?>

								</select>
							</div>
					</div><!---form-group ends -->


					<div class="form-group"><!---form-group starts -->
						<label class="col-md-3 control-label"> Category </label>
							<div class="col-md-6">
								<select name="cat" class="form-control">
									<option>Select a Category</option>
										<?php
										$get_cat = " select * from categories ";
										$run_cat = mysqli_query($con, $get_cat);

										while ($row_cat= mysqli_fetch_array($run_cat))
										{
											$cat_id = $row_cat['cat_id'];

											$cat_title = $row_cat['cat_title'];

											echo "<option value='$cat_id'> $cat_title </option>";
										}
										?>
								</select>
							</div>
					</div><!---form-group ends -->


					<div class="form-group"><!---form-group starts -->
						<label class="col-md-3 control-label"> Product Image 1 </label>
							<div class="col-md-6">
								<input type="file" name="product_img1" class="form-control" required>
							</div>
					</div><!---form-group ends -->


					<div class="form-group"><!---form-group starts -->
						<label class="col-md-3 control-label"> Product image 2</label>
							<div class="col-md-6">
								<input type="file" name="product_img2" class="form-control" required>
							</div>
					</div><!---form-group ends -->


					<div class="form-group"><!---form-group starts -->
						<label class="col-md-3 control-label"> Product Price</label>
							<div class="col-md-6">
								<input type="text" name="product_price" class="form-control" required>
							</div>
					</div><!---form-group ends -->


					<div class="form-group"><!---form-group starts -->
						<label class="col-md-3 control-label"> Product Keywords </label>
							<div class="col-md-6">
								<input type="text" name="product_keywords" class="form-control" required>
							</div>
					</div><!---form-group ends -->


					<div class="form-group"><!---form-group starts -->
						<label class="col-md-3 control-label"> Product Description</label>
							<div class="col-md-6">
								<textarea name="product_desc" class="form-control" rows="6" cols="19"></textarea>
							</div>
					</div><!---form-group ends -->


					<div class="form-group"><!---form-group starts -->
						<label class="col-md-3 control-label">  </label>
							<div class="col-md-6">
								<input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control" >
							</div>
					</div><!---form-group ends -->


				</form><!---form-horizontal ends -->
			</div><!--- panel-body ends-->
		</div><!--- panel panel-default ends -->
	</div><!--- col-lg-12 ends -->
</div><!--- 2 row end -->
</body>
</html>


<?php 
	
	if(isset($_POST['submit'])) // if submit button is clicked then ....
	{
		$product_title = $_POST['product_title'];
		$product_cat = $_POST['product_cat'];
		$cat = $_POST['cat'];
		$product_price = $_POST['product_price'];
		$product_desc = $_POST['product_desc'];
		$product_keywords = $_POST['product_keywords'];
		
		//funciton for image upload
		$product_img1 = $_FILES['product_img1']['name'];
		$product_img2 = $_FILES['product_img2']['name'];

		$temp_name1 = $_FILES['product_img1']['tmp_name'];
		$temp_name2 = $_FILES['product_img2']['tmp_name'];

		move_uploaded_file($temp_name1,"product_images/$product_img1");
		move_uploaded_file($temp_name2,"product_images/$product_img2");

		//product insertion querys

		$insert_product = "insert into products (p_cat_id,cat_id,date,product_title,product_img1,product_img2,product_price,product_desc,product_keywords) values('$product_cat','$cat',NOW(),'$product_title','$product_img1','$product_img2','$product_price','$product_desc','$product_keywords')";

		//run query above

		$run_product = mysqli_query($con,$insert_product);

		if($run_product)
		{
			echo "<script>alert('Products have been insterted successfully')</script>";
			echo "<script>window.open('index.php?view_products','_self')</script>";
		}
	}

 ?>

 <?php } ?>