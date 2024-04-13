<?php 

  session_start();
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true) {
    header("location:admin-login.php");
    exit;
  }

?>

<?php  
 if($_SERVER["REQUEST_METHOD"] == "POST") { 
    require '../partials/_dbconnect.php';

    $id = $_GET['id'];
    echo $id;
    if(!empty($_FILES["image"]["name"])) {
        //if file is selected then update all three fields
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
            // $query = "INSERT INTO subcategory VALUES('','$category','$name', '$newImageName')";
            
            $query = "UPDATE subcategory SET name='$name', img='$newImageName' WHERE id='$id'";
            mysqli_query($conn, $query);

            $query = "UPDATE subcategory SET cat_id= $category where id=$id";
            mysqli_query($conn,$query);

            echo
            "
            <script>
              alert('Successfully Updated');
            
            </script>
            ";
        
            
          }
        }
    
    }

    else {
        $category = $_POST['category'];
        $name = $_POST["name"];
        $query = "UPDATE subcategory SET name='$name', cat_id='$category' WHERE id='$id'";
        mysqli_query($conn, $query);
        echo
        "
        <script>
          alert('Successfully Updated');
        
        </script>
        ";
        
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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!----===== Iconscout CSS ===== -->
    <!-- <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	 <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet">


	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->


 
</head>

<body>

    <?php include "side-menubar.php"; ?>


    <div class="sidebar-overlay"></div>


    <!--Content Start-->
    <div class="content-start transition">
        <div class="container-fluid dashboard">
            <div class="content-header">
                <h1>Sub Category List</h1>
                <p></p>
            </div>

            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            <!-- <p>The horizontal menu will be coming soon, we will update it as soon as everything is finished.

                            <br> <br>
                            <strong>~Thank you
                            <br>
                            #atranatheme</strong>
						</p> -->










                            <!-- category list table -->
                            <table id="myTable">
                                <thead>
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th>Category</th>
                                        <th>Sub Category</th>
                                        <th>Sub Category Image</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php  

                    // $uname = $_SESSION['username'];
            include "../partials/_dbconnect.php";

                    $i = 1;
                    $rows = mysqli_query($conn, "SELECT category.catname,category.id AS categoryid,subcategory.name,subcategory.id AS subcategoryid,subcategory.img from category join subcategory on category.id = subcategory.cat_id ORDER BY category.catname");
                    
                    $result = mysqli_query($conn,"SELECT catname,id from category");
                    $num = mysqli_num_rows($result);

                    foreach ($rows as $row) :
                    echo "<tr> 
                    <b> <td style='color:black;'>".$i++."</td> <b>
                    <b> <td style='color:black;'>". $row['catname']."</td> <b>
                    <b> <td style='color:black;'>". $row['name']."</td> <b>
                    <td> <img style='height:100px;width:100px;' src='gallery/subcatimg/".$row['img']."'</td>
                    <td> 

                    <span style='           background-color: #171766;

                    border-radius: 6px;
                    color: var(--title-icon-color);
                    width: 19px;
                    justify-content: center;
                    align-items: center;
                    text-align: center;  margin-left: 6px; padding: 4px;'> <a style='color: white;' class='edit' title='Edit'  data-toggle='modal' data-target='#myEditModal".$i."'> <i class='fa-solid fa-pen-to-square'></i> </a> </span>


                    <span style='        background-color: #171766;

                    border-radius: 6px;
                    color: var(--title-icon-color);
                    width: 19px;
                    justify-content: center;
                    align-items: center;
                    text-align: center;  margin-left: 36px; padding: 5px;'> <a title='Delete' href='delete-process.php?id=".$row['subcategoryid']."' style='color: white;' ><i class='fa-solid fa-trash'></i> </a> </span>


                    </td>
                    </tr>";




                    // <!--login form Modal -->
                    
                    echo "<div class='modal fade' id='myEditModal".$i."' role='dialog'>
                    <div class='modal-dialog modal-lg'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                        
                        <h4 class='modal-title' style='color:black;'>".$row['name']."</h4>
                        </div>
                        <div class='modal-body'>";
?>

                        <?php $id1=$row['subcategoryid'];  ?>
<form class="" action="<?php  echo "../admin/sub-category-list.php?id=$id1";  ?>" method="post" autocomplete="off" enctype="multipart/form-data">
<div class="card-header">
  <h4>Edit Sub Category</h4>
</div>
<div class="card-body">
<div class="mb-3">
    <label>Select Category </label>
      <select  class="form-control" required name="category"> 
        <option value="   <?php  echo $row['categoryid'];   ?>" selected>     <?php  echo $row['catname'] ; ?> </option>
       <b> <?php   $j=0; while($j<$num) { $ro=mysqli_fetch_assoc($result);  echo " <option style='color:black;' value='".$ro['id']."'>".$ro['catname']."</option>";  $j++;}?>  </b>
            
      </select>
  </div>
  <div class="mb-3">
    <label>Sub Category Name</label>
    <input type="text" name="name" id = "name" required value="<?php echo $row['name'];  ?>" class="form-control" > <br>

  </div>
  <div class="mb-3">
    <label>Category Image</label>
    <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" class="form-control" value=""> <br> <br>
  </div>

  <div class="mb-3">

  <img style='height:100px;width:100px;' src=" <?php echo "gallery/subcatimg/".$row['img'];?>"> 
                    </div>

</div> 
<div class="card-footer text-right">

  <button class="btn btn-primary" type = "submit" name = "submit">Submit</button>

</div>
</form>

<?php
                        echo "</div>
                        <div class='modal-footer'>
                        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>";      

                    
                    endforeach;

                        ?>




                                </tbody>
                            </table>












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






    <!-- for data table  -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <script src=" //cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js  "></script>
    <script src="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"></script>

    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>
</body>

</html>