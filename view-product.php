<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="images/skyspices.jpg">

    <title>SkySpices Buy Online</title>
</head>
<body>
<?php 

include "partials/_dbconnect.php";
  $productId=$_GET['id'];

  $sql = "SELECT * FROM product WHERE id=$productId";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);
?>

<!-- navbar  -->
<header class="text-gray-600 body-font bg-black">
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
          <a class="mr-5 text-white"  style="cursor:pointer" href='about.html'>About Us</a>
        <a class="mr-5 text-white "  style="cursor:pointer"  href="product.php">Product Category</a>
        <a class="mr-5 text-white "  style="cursor:pointer"  href="contact.php">Contact</a>
      </nav>
      <!-- <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Login
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </button> -->
    </div>
  </header>



    <!-- product details   -->
    <section class='text-gray-600 body-font overflow-hidden'>
    <div class='container px-5 py-24 mx-auto'>
      <div class='lg:w-4/5 mx-auto flex flex-wrap'>
        <img alt='ecommerce' class='lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded' src='<?php echo "admin/gallery/pimg/".$row['pimg'];   ?>' style="height: 466px;
    width: 472px;">
        <div class='lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0'>
          <h2 class='text-sm title-font text-gray-500 tracking-widest'>Sky Spices</h2>
          <h1 class='text-gray-900 text-3xl title-font font-medium mb-1'>    <?php  echo $row['pname'];     ?></h1>
          <div class='flex mb-4'>
            <span class='flex items-center'>
              <svg fill='currentColor' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' class='w-4 h-4 text-indigo-500' viewBox='0 0 24 24'>
                <path d='M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z'></path>
              </svg>
              <svg fill='currentColor' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' class='w-4 h-4 text-indigo-500' viewBox='0 0 24 24'>
                <path d='M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z'></path>
              </svg>
              <svg fill='currentColor' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' class='w-4 h-4 text-indigo-500' viewBox='0 0 24 24'>
                <path d='M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z'></path>
              </svg>
              <svg fill='currentColor' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' class='w-4 h-4 text-indigo-500' viewBox='0 0 24 24'>
                <path d='M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z'></path>
              </svg>
              <svg fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' class='w-4 h-4 text-indigo-500' viewBox='0 0 24 24'>
                <path d='M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z'></path>
              </svg>
              <span class='text-gray-600 ml-3'>4 Reviews</span>
            </span>
            
          </div>
          <p class='leading-relaxed'> <?php echo $row['description']; ?>  </p>
       

            <br> 
            <div class='flex ml-6 items-center'>
              <span class='mr-3'>Quantity</span>
              <div class='relative'>
              
                <input type='number' value='1' class='rounded form-control border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10'> 
              
            </div> 
          </div>  <br> <br>
          <div class='flex'>
            <span class='title-font font-medium text-2xl text-gray-900'>₹<?php  echo $row['price'];  ?></span>
            <!-- <button class='flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded'>Add to cart</button> -->
            <button class='rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4'>
              <svg fill='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' class='w-5 h-5' viewBox='0 0 24 24'>
                <path d='M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z'></path>
              </svg>
            </button>
          </div>
        </div>
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