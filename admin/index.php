<?php 

  session_start();
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true) {
    header("location:admin-login.php");
    exit;
  }

?>
<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Dashboard - SkySpices</title>

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="assets/modules/bootstrap-5.1.3/css/bootstrap.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- FontAwesome CSS-->
	<link rel="stylesheet" href="assets/modules/fontawesome6.1.1/css/all.css">
	<!-- Boxicons CSS-->
	<link rel="stylesheet" href="assets/modules/boxicons/css/boxicons.min.css">
	<!-- Apexcharts  CSS -->
	<link rel="stylesheet" href="assets/modules/apexcharts/apexcharts.css">

	<!-- fontawesome 
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->

</head>
<body>
  <?php   include "side-menubar.php"; ?>


	<div class="sidebar-overlay"></div>


	<!--Content Start-->
	<div class="content-start transition">
		<div class="container-fluid dashboard">
			<div class="content-header">
				<h1>Dashboard</h1>
				<p></p>
			</div>
			




			<?php 
			include "../partials/_dbconnect.php";
			$sql1="SELECT COUNT(*) FROM category";
			$result1=mysqli_query($conn,$sql1);
			  $row1 = mysqli_fetch_assoc($result1);

			  $sql2="SELECT COUNT(*) FROM subcategory";
			  $result2=mysqli_query($conn,$sql2);
				$row2 = mysqli_fetch_assoc($result2);

				$sql3="SELECT COUNT(*) FROM product";
			  $result3=mysqli_query($conn,$sql3);
				$row3 = mysqli_fetch_assoc($result3);

			?>


			<div class="row">

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="fas fa-inbox icon-home bg-primary text-light"></i>
								</div>
								<div class="col-8">
									<p>Total Category</p>
									<h5><?php echo $row1['COUNT(*)'];  ?> </h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="fas fa-clipboard-list icon-home bg-success text-light"></i>
								</div>
								<div class="col-8">
									<p>Total SubCategory</p>
									<h5><?php echo $row2['COUNT(*)'];  ?> </h5>
								</div>
							</div>
						</div>
					</div>
				</div>


			
				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="fas fa-chart-bar  icon-home bg-info text-light"></i>
								</div>
								<div class="col-8">
									<p>Total Product</p>
									<h5>     <?php  echo $row3['COUNT(*)'];  ?>  </h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				











				<!-- <div class="row">

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="fas fa-inbox icon-home bg-primary text-light"></i>
								</div>
								<div class="col-8">
									<p>Revenue</p>
									<h5>$65</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="fas fa-clipboard-list icon-home bg-success text-light"></i>
								</div>
								<div class="col-8">
									<p>Orders</p>
									<h5>3000</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="fas fa-chart-bar  icon-home bg-info text-light"></i>
								</div>
								<div class="col-8">
									<p>Sales</p>
									<h5>5500</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="fas fa-id-card  icon-home bg-warning text-light"></i>
									<i class="fa fa-id-card green-color"></i> -->
									<!-- <i class="fas fa-camera-retro"></i>
									<i class="fa-solid fa-bars"></i>
								</div>
								<div class="col-8">
									<p>Employes</p>
									<h5>256</h5>
								</div>
							</div>
						</div>
					</div>

				</div> -->
		
				<!-- <div class="col-md-6">
					<div class="card">
						<div class="card-header">
						</div>
						<div class="card-body">
							<div id="columnchart"></div>
						</div>
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="card">
						<div class="card-header">
							<h4>Recent Messages</h4>
						</div>
						<div class="card-body pb-4">
							<div class="recent-message d-flex px-4 py-3">
								<div class="avatar avatar-lg">
									<img src="assets/images/message/4.jpg">
								</div>
								<div class="name ms-4">
									<h5 class="mb-1">Hank Schrader</h5>
									<h6 class="text-muted mb-0">@johnducky</h6>
								</div>
							</div>
							<div class="recent-message d-flex px-4 py-3">
								<div class="avatar avatar-lg">
									<img src="assets/images/message/5.jpg">
								</div>
								<div class="name ms-4">
									<h5 class="mb-1">Dean Winchester</h5>
									<h6 class="text-muted mb-0">@imdean</h6>
								</div>
							</div>
							<div class="recent-message d-flex px-4 py-3">
								<div class="avatar avatar-lg">
									<img src="assets/images/message/1.jpg">
								</div>
								<div class="name ms-4">
									<h5 class="mb-1">John Doe</h5>
									<h6 class="text-muted mb-0">@Doejohn</h6>
								</div>
							</div>
							<div class="px-4">
								<button class='btn btn-block btn-xl btn-primary font-bold mt-3'>Start
									Conversation</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h4>Latest Transaction</h4>
						</div>
						<div class="card-body"> 
						<div class="table-responsive"> 
						<table class="table table-striped">
							<thead>
							  <tr>
								<th scope="col">Order Id</th>
								<th scope="col">Billing Name</th>
								<th scope="col">Date</th>
								<th scope="col">Total</th>
								<th scope="col">Payment Status</th>
								<th scope="col">Payment Method</th>
								<th scope="col">View Details</th>
							  </tr>
							</thead>
							<tbody>
							  <tr>
								<th scope="row">#SK2548	</th>
								<td>Neal Matthews</td>
								<td>07 Oct, 2022</td>
								<td>$400</td>
								<td><span class="text-success">Paid</span></td>
								<td>Mastercard</td>
								<td><button class="btn btn-primary">View Details</button></td>
							  </tr>

							  <tr>
								<th scope="row">#SK2548	</th>
								<td>Neal Matthews</td>
								<td>07 Oct, 2022</td>
								<td>$400</td>
								<td><span class="text-success">Paid</span></td>
								<td>Visa</td>
								<td><button class="btn btn-primary">View Details</button></td>
							  </tr>

							  <tr>
								<th scope="row">#SK2548	</th>
								<td>Neal Matthews</td>
								<td>07 Oct, 2022</td>
								<td>$400</td>
								<td><span class="text-danger">Chargeback</span></td>
								<td>Paypal</td>
								<td><button class="btn btn-primary">View Details</button></td>
							  </tr>

							  <tr>
								<th scope="row">#SK2548	</th>
								<td>Neal Matthews</td>
								<td>07 Oct, 2022</td>
								<td>$400</td>
								<td><span class="text-warning">Refund</span></td>
								<td>Visa</td>
								<td><button class="btn btn-primary">View Details</button></td>
							  </tr>
							</tbody>
						  </table>
						  </div>
						</div>
					</div>
				</div>

		   </div> -->
		</div>
	</div>


	<!-- Footer -->				
	<!-- <footer>
		<div class="footer">
			<div class="float-start">
				<p>2022 &copy; Atrana</p>
			</div>
				<div class="float-end">
					<p>Crafted with 
						<span class="text-danger">
							<i class="fa fa-heart"></i> by 
							<a href="https://www.facebook.com/andreew.co.id/" class="author-footer">Andre Tri Ramadana</a>
						</span> 
					</p>
			</div>
		</div>
	</footer> -->


	<!-- Preloader -->
	<div class="loader">
		<div class="spinner-border text-light" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>
	
	<!-- Loader -->
	<div class="loader-overlay"></div>

	<!-- General JS Scripts -->
	<script src="assets/js/atrana.js"></script>

	<!-- JS Libraies -->
	<script src="assets/modules/jquery/jquery.min.js"></script>
	<script src="assets/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
	<script src="assets/modules/popper/popper.min.js"></script>

	<!-- Chart Js -->
	<script src="assets/modules/apexcharts/apexcharts.js"></script>
	<script src="assets/js/ui-apexcharts.js"></script>

    <!-- Template JS File -->
	<script src="assets/js/script.js"></script>
	<script src="assets/js/custom.js"></script>
 </body>
</html>
