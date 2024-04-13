<?php 

  session_start();
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true) {
    header("location:admin-login.php");
    exit;
  }

?>

<?php
require '../partials/_dbconnect.php';
if(isset($_POST["submit"])){
    $category = $_POST['category'];
  $name = $_POST["name"];
  if($_FILES["image"]["error"] == 4){
    echo
    "<script> alert('Image Does Not Exist'); </script>"
    ;
  }
  else{
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo
      "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
    }
    else if($fileSize > 1000000){
      echo
      "
      <script>
        alert('Image Size Is Too Large');
      </script>
      ";
    }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'gallery/subcatimg/' . $newImageName);
      $query = "INSERT INTO subcategory VALUES('','$category','$name', '$newImageName')";
      mysqli_query($conn, $query);
      echo
      "
      <script>
        alert('Successfully Added');
      
      </script>
      ";
	//   document.location.href = 'data.php';
    }
  }
}
?>



<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Dashboard - Atrana</title>

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="assets/modules/bootstrap-5.1.3/css/bootstrap.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- FontAwesome CSS-->
	<link rel="stylesheet" href="assets/modules/fontawesome6.1.1/css/all.css">
	<!-- Boxicons CSS-->
	<link rel="stylesheet" href="assets/modules/boxicons/css/boxicons.min.css">
</head>
<body>
  
 <?php include "side-menubar.php"; ?>

	<div class="sidebar-overlay"></div>


	<!--Content Start-->
	<div class="content-start transition">
		<div class="container-fluid dashboard">
			<div class="content-header">
				<h1>Add Sub Category</h1>
				<p></p>
			</div>
		  
			<div class="row">
				<div class="col-12">

					<div class="card">
						<div class="card-body"> 
						<!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
							Qui excepturi similique quisquam a repellendus molestias, 
							quaerat quod, optio commodi animi eos earum eum odio? Quas 
							architecto voluptas facere enim dolore!
						</p> -->






                        <!-- feteching category from db  -->
                        <?php 
                            include "../partials/_dbconnect.php";
                            $sql = "SELECT catname,id from category";
                            $result = mysqli_query($conn,$sql);
                            $num = mysqli_num_rows($result);
                            // echo $num;
                        ?>

						<!-- add subcategory form  -->
						<div class="row d-flex align-items-center justify-content-center">
  <div class="col-12 col-md-6 col-lg-6">
    <div class="card">

    <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
                      <div class="card-header">
                        <h4>Add Sub Category</h4>
                      </div>
                      <div class="card-body">
                      <div class="mb-3">
                          <label>Select Category </label>
                            <select  class="form-control" required name="category"> 
                                <?php  $i=0; while($i<$num) {$row = mysqli_fetch_assoc($result); echo "<option value='".$row['id']."'>".$row['catname']." </option>";  $i++;} ?>
                            </select>
                        </div>
                        <div class="mb-3">
                          <label>Sub Category Name</label>
						  <input type="text" name="name" id = "name" required value="" class="form-control" > <br>

                        </div>
                        <div class="mb-3">
                          <label>Category Image</label>
						  <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" class="form-control" value=""> <br> <br>

                        </div>
                        <!-- <div class="mb-3">
                          <label>Subject</label>
                          <input type="email" class="form-control">
                        </div>
                        <div class="form-group mb-0">
                          <label>Message</label>
                          <textarea class="form-control" required=""></textarea>
                        </div>-->
                      </div> 
                      <div class="card-footer text-right">
                        <!-- <button class="btn btn-primary" type="submit" name="upload">Submit</button> -->
						<!-- <input type='submit' value='Save name' name='but_upload'> -->
						<button class="btn btn-primary" type = "submit" name = "submit">Submit</button>

                      </div>
                    </form>
</div></div> </div>

					</div>
				</div>

				</div>
			</div>

		</div> <!-- End Container -->
	</div><!-- End Content -->


	<!-- Footer -->				
	<footer>
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
	</footer>


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
 
    <!-- Template JS File -->
	<script src="assets/js/script.js"></script>
	<script src="assets/js/custom.js"></script>
 </body>
</html>
