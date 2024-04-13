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
				<h1>User Feedback</h1>
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






            <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">srno</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
<!-- displaying title n desc in table -->
  <?php 
  $srno=1;
    $sql = "select * from contact";
    $result = mysqli_query ($conn , $sql);
    while($row = mysqli_fetch_assoc($result)) {
      echo " <tr>
      <th scope='row'>". $srno ."</th>
      <td>". $row['name']. "</td>
      <td>". $row['email'] ."</td>
      <td>". $row['phone'] ."</td>
      <td>". $row['message'] ."</td>
     
    </tr> ";     
      $srno+=1;
    }
    
  ?>  
   

  </tbody>
</table>







































				<!-- <div class="col-md-6 col-lg-3">
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
				</div> -->

				






















		</div>
	</div>



 















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










    <!-- for data table  -->
 <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
      
      <script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>
  
    <script src=" //cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js  "></script>
  <script src="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"></script>
    
    <script>
      $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>

 </body>
</html>
