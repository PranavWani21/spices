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
        $subcategory = $_POST['subcategory'];
        $name = $_POST["pname"];
        $price = $_POST["price"];

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
      
            move_uploaded_file($tmpName, 'gallery/pimg/' . $newImageName);
            // $query = "INSERT INTO subcategory VALUES('','$category','$name', '$newImageName')";
            
            $query = "UPDATE product SET pname='$name', pimg='$newImageName',price='$price' WHERE id='$id'";
            mysqli_query($conn, $query);

            $query = "UPDATE product SET cat_id= $category ,subcat_id=$subcategory where id=$id";
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
        $subcategory = $_POST['subcategory'];
        $name = $_POST["pname"];
        $price = $_POST["price"];
        $query = "UPDATE product SET pname='$name', cat_id='$category',subcat_id='$subcategory', price='$price' WHERE id='$id'";
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
                <h1>Product List</h1>
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
                                        <th>Product</th>
                                        <th>Product Image</th>
                                        <th>Product Price</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php  

                    // $uname = $_SESSION['username'];
            include "../partials/_dbconnect.php";


//for edit
$ro = mysqli_query($conn, "SELECT *,id as cat_id from category");
$no = mysqli_num_rows($ro);

$r = mysqli_query($conn, "SELECT * from subcategory");
$n = mysqli_num_rows($r);


                    $i = 0;
                    $rows = mysqli_query($conn, "SELECT * from product");
                       
                    $num = mysqli_num_rows($rows);
                    while($i<$num) {
                        $row = mysqli_fetch_assoc($rows);
                        $productid = $row['id'];
                        echo $productid;
                        $query1 = "select catname from category join product WHERE category.id = product.cat_id and product.id=$productid";
                        $result1 = mysqli_query($conn,$query1);
                        $row1=mysqli_fetch_assoc($result1);

                        $query2 = "select name from subcategory join product WHERE subcategory.id = product.subcat_id and product.id=$productid";
                        $result2 = mysqli_query($conn,$query2);
                        $row2=mysqli_fetch_assoc($result2);

                    echo "<tr> 
                    <b> <td style='color:black;'>".$i++."</td> <b>
                    <b> <td style='color:black;'>". $row1['catname']."</td> <b>
                    <b> <td style='color:black;'>". $row2['name']."</td> <b>
                    <b> <td style='color:black;'>". $row['pname']."</td> <b>
                    <td> <img style='height:100px;width:100px;' src='gallery/pimg/".$row['pimg']."'</td>
                    <b> <td style='color:black;'>". $row['price']."</td> <b>

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
                    text-align: center;  margin-left: 36px; padding: 5px;'> <a title='Delete' href='delete-process3.php?id=".$productid ."' style='color: white;' ><i class='fa-solid fa-trash'></i> </a> </span>


                    </td>
                    </tr>";


   




















// edit modal
echo "<div class='modal fade' id='myEditModal".$i."' role='dialog'>
<div class='modal-dialog modal-lg'>
<div class='modal-content'>
    <div class='modal-header'>
    
    <h4 class='modal-title' style='color:black;'>".$row['pname']."</h4>
    </div>
    <div class='modal-body'>";





     

echo "
<form class='' action='../admin/product-list.php?id=".$productid." ' method='post' autocomplete='off' enctype='multipart/form-data'>
  <div class='card-header'>
    <h4>Edit Product</h4>
  </div>
  <div class='card-body'>
  
  <div class='mb-3'>
        <label>Product Name</label>
        <input type='text' name='pname' id = 'name' required value='". $row['pname']."' class='form-control' > <br>
      </div>



      
      <div class='mb-3'>
      <label>Product category</label>
      <select  class='form-control' required name='category'> 
      <option value='15' selected>".$row1['catname'] ."</option>
     <b>";


      $j=0; 
      while($j<$no) 
      { 
        $ro=mysqli_fetch_assoc($ro);  
        echo "<option style='color:black;' value='".$ro['id']."'>".$ro['catname']."</option>";        
     $j++;}
      
    echo " </b>  </select> </div>";





   echo " <div class='mb-3'>
      <label>Product Sub category</label>
      <select  class='form-control' required name='subcategory'> 
      <option value='18' selected>".$row2['name'] ."</option>
     <b>";


      $k=0; 
      while($k<$n) 
      { 
        $r=mysqli_fetch_assoc($r);  
        echo "<option style='color:black;' value='".$r['id']."'>".$r['name']."</option>";        
     $k++;}
      
    echo " </b>  </select> </div>";

    




    echo "<div class='mb-3'>
    <label>Product Price</label>
    <input type='text' name='price' id = 'price' required value='". $row['price']."' class='form-control' > <br>
  </div>";





  echo "<div class='mb-3'>
  <label>Product Image</label>
  <input type='file' name='image' id = 'name' accept='.jpg, .jpeg, .png' value='' class='form-control' > <br>
</div>";




echo "<br> 
<img style='height:100px;width:100px;' src='gallery/pimg/".$row['pimg']."  '>

<br>  <br> <br> <br>
";

















    





    echo "<div class='card-footer text-right'>
    
    <button class='btn btn-primary' type = 'submit' name = 'submit'>Submit</button>
  
  </div>
  </form>
  
  
                       </div>
                          <div class='modal-footer'>
                          <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                          </div>
                      </div>
                      </div>
                      </div>
                      </div>    ";





                   }

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