<?php
include "partials/_dbconnect.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="images/skyspices.jpg">

    <title>Sky Spices</title>
</head>
<body>
    <!-- navbar  -->
<header class="text-gray-600 body-font bg-black navbar">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg> -->
        <!-- <svg xmlns="images/skyspices.jpg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
          </svg> -->
          <img src="images/skyspices.jpg" style="height: 50px; width: 50px;"> 
        <span class="ml-3 text-xl text-white">SkySpices</span>
      </a>
      <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
          <a class="mr-5 text-white " style="cursor:pointer" href="index.php">Home</a>
          <a class="mr-5 text-white"  style="cursor:pointer" href="about.html">About Us</a>
        <a class="mr-5 text-white "  style="cursor:pointer"  href="product.php">Product Category</a>
        <a class="mr-5 text-white "  style="cursor:pointer" href="contact.php">Contact</a>
      </nav>
      <!-- <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Login
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </button> -->
    </div>
  </header>




  <!-- hero section  -->
  <section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-8 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
      Spices, of course, are essential.
    </h1>
      <p class="mb-8 leading-relaxed">The secret of happiness is variety, but the secret of variety, like the secret of all spices, is knowing when to use it.
.</p>

<p class="mb-8 leading-relaxed"> - Daniel Gilbert </p>
      <div class="flex w-full md:justify-start justify-center items-end">
      
        <!-- <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button> -->
      </div>
      <div class="flex lg:flex-row md:flex-col">
        
      </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded" alt="hero" src="https://www.keralaspicesonline.com/wp-content/uploads/2020/09/Gourmet-Versand-fur-italienische-Lebensmittel.jpg">
    </div>
  </div>
</section>


  <!-- category buttons  -->
  <!-- <div class="container mx-auto flex px-5 py-12 md:flex-row flex-col items-center">
    <a href="category-product.php?id">
  <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 mx-2 focus:outline-none hover:bg-indigo-600 rounded text-lg ">Button</button>
</a>
</div> -->

<?php 
$sql = "select * from category";
$result=mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);


?>
<section class="text-gray-600 body-font">
 
  <div class="container px-5 py-24 mx-auto">
  <!-- <div class="p-4"> <p> Category </p> </div> -->
    <div class="flex flex-wrap -m-4">

    
<?php
      
$j=0;while($j<$num){
$row=mysqli_fetch_assoc($result);
echo "
  <div class='p-4 md:w-1/3'>
  <div class='h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden'>
    <img class='lg:h-48 md:h-36 w-full object-cover object-center' src='admin/gallery/catimg/".$row['catimg']."' alt='blog'>
    <div class='p-6'>
      <h2 class='tracking-widest text-xs title-font font-medium text-gray-400 mb-1'>CATEGORY</h2>
      <h1 class='title-font text-lg font-medium text-gray-900 mb-3'>".$row['catname']."</h1>
       <div class='flex items-center flex-wrap'>
        <a class='text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0' href='category-product.php?id=".$row['id']."'>View Category
          <svg class='w-4 h-4 ml-2' viewBox='0 0 24 24' stroke='currentColor' stroke-width='2' fill='none' stroke-linecap='round' stroke-linejoin='round'>
            <path d='M5 12h14'></path>
            <path d='M12 5l7 7-7 7'></path>
          </svg>
        </a>
        <span class='text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200'>
          <svg class='w-4 h-4 mr-1' stroke='currentColor' stroke-width='2' fill='none' stroke-linecap='round' stroke-linejoin='round' viewBox='0 0 24 24'>
            <path d='M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z'></path>
            <circle cx='12' cy='12' r='3'></circle>
          </svg>1.2K
        </span>
        <span class='text-gray-400 inline-flex items-center leading-none text-sm'>
          <svg class='w-4 h-4 mr-1' stroke='currentColor' stroke-width='2' fill='none' stroke-linecap='round' stroke-linejoin='round' viewBox='0 0 24 24'>
            <path d='M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z'></path>
          </svg>6
        </span>
      </div>
    </div>
  </div>
</div>
";


$j++;
}
?>
    
    </div>
  </div>
</section>










<!-- products  -->

<?php
include "partials/_dbconnect.php";
$sql = "select * from product";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
?>
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">


<?php

$i=0;
while ($i<$num){
    $row=mysqli_fetch_assoc($result);
   echo "   <div class='lg:w-1/4 md:w-1/2 p-4 w-full'>
    <a class='block relative h-48 rounded overflow-hidden' href='view-product.php?id=".$row['id']."'>
      <img alt='ecommerce' class='object-cover object-center w-full h-full block' src='admin/gallery/pimg/".$row['pimg']."'>
    </a>
    <div class='mt-4'>
      <h3 class='text-gray-500 text-xs tracking-widest title-font mb-1'></h3>
      <h2 class='text-gray-900 title-font text-lg font-medium'>".$row['pname']."</h2>
      <p class='mt-1'> ₹".$row['price']."</p>
    </div>
  </div>";
  $i++;
}
      ?>
  
    </div>
  </div>
</section>






    <!-- footer  -->
    <footer class="text-gray-600 body-font bg-black">
        <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
          <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
              <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
              </svg> -->
              <img src="images/skyspices.jpg" style="height: 50px; width: 50px;"> 
    
              <span class="ml-3 text-xl text-white">SkySpices</span>
            </a>
            <p class="mt-2 text-sm text-gray-500">Sky Spices is a first of its kind spice e-store conceived by a team of management professionals with decades of domain knowledge.</p>
          </div>
          <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
            <div class="lg:w-1/4 md:w-1/2 w-full px-4 ">
              <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3 ">CATEGORIES</h2>
              <nav class="list-none mb-10">
                <li>
                  <a class="text-gray-600 hover:text-gray-800 ">First Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800 ">Second Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800 ">Third Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800 ">Fourth Link</a>
                </li>
              </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">CATEGORIES</h2>
              <nav class="list-none mb-10">
                <li>
                  <a class="text-gray-600 hover:text-gray-800">First Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                </li>
              </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">Follow</h2>
              <nav class="list-none mb-10">
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Facebook</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Twitter</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Instagram</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Youtube</a>
                </li>
              </nav>
            </div>
            <!-- <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
              <nav class="list-none mb-10">
                <li>
                  <a class="text-gray-600 hover:text-gray-800">First Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                </li>
              </nav>
            </div> -->
          </div>
        </div>
        <div class="bg-gray-100">
          <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
            <p class="text-black text-sm text-center sm:text-left">© 2023 SkySpices —
              <a href="https://twitter.com/" rel="noopener noreferrer" class="text-black ml-1" target="_blank">@SkySpices</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
              <a class="text-black">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-3 text-black">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a class="ml-3 text-black">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                  <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
              </a>
              <a class="ml-3 text-black">
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                  <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                  <circle cx="4" cy="4" r="2" stroke="none"></circle>
                </svg>
              </a>
            </span>
          </div>
        </div>
      </footer>




</body>
</html>