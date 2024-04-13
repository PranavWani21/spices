<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {  
        $login = false;
        $showError =false; 
        $num = 0;
        include '../partials/_dbconnect.php';
        $username = $_POST['username'];
        $password = $_POST['password'];
       
        // $sql = "SELECT * FROM `user` WHERE `username` = '$username' AND  `password` = '$password' ";
        $sql = "SELECT * FROM `user` WHERE `username` = '$username' ";

        $result = mysqli_query($conn , $sql);
        $num = mysqli_num_rows($result);
            if($num==1){

              while($row = mysqli_fetch_assoc($result)){
                //verifying the password by checking hash of password
                if(password_verify($password , $row['password'])){
                   $login = true;
                      // on successful login start the session 
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;
                     header("location:../admin/index.php");
                }   
                else{
                     $showError = "Incorrect Password";

                }           
              }
                  
            }
        
        else{
          $showError = "Invalid Credentials";
        }
}
?>


<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Forms  &rsaquo; Validation &mdash; Atrana</title>

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
  <br> <br><br> <br><br> <br>
  <div class="row d-flex align-items-center justify-content-center">
  <div class="col-12 col-md-6 col-lg-6">
    <div class="card">
<form action="../admin/admin-login.php" method="POST">
                      <div class="card-header">
                        <h4>Admin Login</h4>
                      </div>
                      <div class="card-body">
                        <div class="mb-3">
                          <label>Username</label>
                          <input type="text" name="username" class="form-control" required="">
                        </div>
                        <div class="mb-3">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control" required="">
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
                        <button class="btn btn-primary">Submit</button>
                      </div>
                    </form>
</div></div> </div>
</body>
</html>