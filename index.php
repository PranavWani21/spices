<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/skyspices.jpg">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->

        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> -->

  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
       
  
  <style>
  .navbar{
    /* position: sticky;
    top: 0;
    background-color:black; */
  }
  </style>

    <title>SkySpices</title>
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
          <a class="mr-5 text-white " style="cursor:pointer" href="#">Home</a>
          <a class="mr-5 text-white"  style="cursor:pointer" href='about.html'>About Us</a>
        <a class="mr-5 text-white "  style="cursor:pointer" href="product.php">Product Category</a>
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
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
          <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Buy Before they sold out
              <br class="hidden lg:inline-block">
            </h1>
            <p class="mb-8 leading-relaxed">MASALA GIFT BOX to Any Dish Makes It A Much More Invigorating And Warming Experience. You Can Add It To Soups, Stews, Meat Dishes And Vegetarian Dishes. In Reality, The Options Are Endless Because You Can Sprinkle It On Whatever You Like..</p>
            <div class="flex justify-center">
             <a href="view-product.php?id=17"> <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Buy Now</button>  </a>
              <!-- <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button> -->
            </div>
          </div>
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="images/garam-masala-home.jpg">
          </div>
        </div>
      </section>







      <!-- hot products  -->
<?php  
include "partials/_dbconnect.php";

$sql = "SELECT * from product where cat_id IN ( select id from category where catname='Premium Spices')";
$result = mysqli_query($conn, $sql);

?>  

      <section class="text-gray-600 body-font">
        <div class="container  mx-auto">
          <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-gray-900 mb-20">Hot Products!
          </h1>
        </div>

        <div class="container mx-auto">
            <div class="flex flex-wrap -m-4">


<?php
        $i=0;
        while($i < 4)  {
          $row = mysqli_fetch_assoc($result);
              echo "<div class='lg:w-1/4 md:w-1/2 p-4 w-full'>
              <a class='block relative h-48 rounded overflow-hidden' href='view-product.php?id=".$row['id']."'>
                <img alt='ecommerce' class='object-cover object-center w-full h-full block' src='admin/gallery/pimg/".$row['pimg']."'>
              </a>
              <div class='mt-4'>
                <h3 class='text-gray-500 text-xs tracking-widest title-font mb-1'>Premium</h3>
               <a href='view-product.php?id=".$row['id']."'> <h2 class='text-gray-900 title-font text-lg font-medium'>".$row['pname']."</h2>  <a>
                <p class='mt-1'>₹".$row['price']."</p>
              </div>
            </div>";
            $i=$i+1;
        }
?>


            </div>
          </div>
      </section>








      <!-- our best selling products  -->

      <?php
      $sql="SELECT *,product_id As id,COUNT(*) FROM `customer_order` group by product_id order by count(*) desc";
      $result = mysqli_query($conn,$sql);
      ?>


<section class="text-gray-600 px-5 py-24 body-font">
    <div class="container  mx-auto">
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-gray-900 mb-20">Our Best Selling Products!
      </h1>
    </div>

    <div class="container  mx-auto">
        <div class="flex flex-wrap -m-4">


        <?php
$i=0;
                  while($i<4) {
                    $row=mysqli_fetch_assoc($result);
          echo " <div class='lg:w-1/4 md:w-1/2 p-4 w-full'>
            <a class='block relative h-48 rounded overflow-hidden' href='view-product.php?id=".$row['id']."'>
              <img alt='ecommerce' class='object-cover object-center w-full h-full block' src='admin/gallery/pimg/".$row['pimg']."'>
            </a>
            <div class='mt-4'>
            
           <a href='view-product.php?id=".$row['id']."'>   <h2 class='text-gray-900 title-font text-lg font-medium'>".$row['productName']."</h2>  </a>
              <p class='mt-1'>₹".$row['price']."</p>
            </div>
          </div>";

         $i=$i+1;
                  }

?>

        </div>
      </div>
  </section>







  <!-- our latest products  -->
<?php 
$sql = "SELECT * FROM `product` order by id desc limit 4";
$result = mysqli_query($conn, $sql);
?>

<section class="text-gray-600 px-5  body-font">
    <div class="container  mx-auto">
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-gray-900 mb-20">Our latest Products!
      </h1>
    </div>

    <div class="container  mx-auto">
        <div class="flex flex-wrap -m-4">

<?php
  $i=0;
  while($i<4){
    $row = mysqli_fetch_assoc($result);
      echo " <div class='lg:w-1/4 md:w-1/2 p-4 w-full'>
    <a class='block relative h-48 rounded overflow-hidden' href='view-product.php?id=".$row['id']."'>
      <img alt='ecommerce' class='object-cover object-center w-full h-full block' src='admin/gallery/pimg/".$row['pimg']."'>
    </a>
    <div class='mt-4'>
      <h3 class='text-gray-500 text-xs tracking-widest title-font mb-1'>Spices</h3>
     <a href='view-product.php?id=".$row['id']."'> <h2 class='text-gray-900 title-font text-lg font-medium'>".$row['pname']."</h2>   </a>
      <p class='mt-1'>₹".$row['price']."</p>
    </div>
  </div>";
  $i=$i+1;
  }
?>

        </div>
      </div>
  </section>

  <!-- why choose us  -->
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="text-center mb-20">
        <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Why Shop With Us</h1>
        <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">We sell authentic and high-quality spices at an affordable rate. SkySpices.com is the best and top online seller of spices and herbs based on ratings and reviews by customers of SkySpices.com .</p>
        <div class="flex mt-6 justify-center">
          <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
        </div>
      </div>
      <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
        <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
          <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
        
                 <img src="https://www.keralaspicesonline.com/wp-content/uploads/2022/02/shopping-cart-sketch-large.png"> 
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Fast Delivery and Easy Payment</h2>
            <p class="leading-relaxed text-base">Option to choose Payment via Internet banking, debit card, credit card, Paytm, Paypal for International customers. Wherever you are, we offer timely deliver and International delivery..</p>
          </div>
        </div>
        <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
          <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
            <img src="https://www.keralaspicesonline.com/wp-content/uploads/2022/02/chatting-speech-bubbles-hand-drawn-bubbles-couple-large.png">
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Outstanding Support</h2>
            <p class="leading-relaxed text-base">Our customer support is 24/7 – users rave about how we don’t rest until every issue is solved to their satisfaction.</p>
          
          </div>
        </div>

        <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
          <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
            <img src="https://www.keralaspicesonline.com/wp-content/uploads/2022/02/light-bulb-outlined-hand-drawn-tool-large.png">
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Amazing Reviews</h2>
            <p class="leading-relaxed text-base">Check our reviews to know what our customer experiences..</p>
          </div>
        </div>


    <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
          <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
            <img src="https://www.keralaspicesonline.com/wp-content/uploads/2022/06/trustworthy.png">
        </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Trustworthy</h2>
            <p class="leading-relaxed text-base">Starting our journey from 2015 and our business venture is focused on providing aromatic quality spices to customers all over the world..</p>
          </div>
        </div>

        <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
            <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
              <img src="https://www.keralaspicesonline.com/wp-content/uploads/2022/06/quality.png">
          </div>
            <div class="flex-grow">
              <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Quality</h2>
              <p class="leading-relaxed text-base">Our team, who are passionate about spreading the pure spice essence, handpick the best of the best only for you..</p>
            </div>
          </div>

          <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
            <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
              <img src="https://www.keralaspicesonline.com/wp-content/uploads/2022/06/android-app.png">
          </div>
            <div class="flex-grow">
              <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Android and IOS App</h2>
              <p class="leading-relaxed text-base">Sky Spices Online has an Android  and iOS App for customers to place order fast and easy. Download it Now!.</p>
            </div>
          </div>

      </div>
      <button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Read More</button>
    </div>
  </section>

<!-- reviews  -->
<section class="text-gray-600 py-3 body-font">
    <div class="text-center mb-20">
        <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Reviews</h1>
        <div class="flex mt-6 justify-center">
          <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
        </div>
      </div>
    <div class="container px-5 mx-auto">
      <div class="flex flex-wrap -m-4">
        <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
          <div class="h-full text-center">
            <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://dummyimage.com/302x302">
            <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
            <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
            <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">HOLDEN CAULFIELD</h2>
            <p class="text-gray-500">Senior Product Designer</p>
          </div>
        </div>
        <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
          <div class="h-full text-center">
            <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://dummyimage.com/300x300">
            <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
            <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
            <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">ALPER KAMU</h2>
            <p class="text-gray-500">UI Develeoper</p>
          </div>
        </div>
        <div class="lg:w-1/3 lg:mb-0 p-4">
          <div class="h-full text-center">
            <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://dummyimage.com/305x305">
            <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
            <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
            <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">HENRY LETHAM</h2>
            <p class="text-gray-500">CTO</p>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- best quality  -->
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-col">
      <div class="lg:w-4/6 mx-auto">
        <div class="rounded-lg text-center overflow-hidden">
        <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Buy Best Quality Spices Online</h1>
        <div class="flex mt-6 justify-center">
            <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
          </div>
            <!-- <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1200x500"> -->
        </div>
        <div class="flex flex-col sm:flex-row mt-10">
          <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
            <div class="w-77 h-158  rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
              <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg> -->
              <img src="https://www.keralaspicesonline.com/wp-content/uploads/2023/03/Cloves-.jpg" class="height:50px; width:80px;">
            </div>
           
          </div>
          <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
            <p class="leading-relaxed text-lg mb-4">Sky Spices, the most trusted and best spice store from the land of spices,Kerala. We offer a wide range of authentic, best quality spices like cardamom, black pepper, clove, cinnamon, poppy seeds, bay leaves, turmeric, ginger, star anise, nutmeg, among others.

                Kerala is blessed with abundant natural wealth in spice valleys. Since Kerala is home to some of the most valuable spices in the world, Kerala owns the spice market. We offer the best hand-picked spices from the spice belt of Kerala such as Udumbumchola Taluk and Peermadu Taluk in the Idukki district. Sky Spices Online with over 25,000 buyers from all over the world is the best place to  buy spices online.
                
                Sky Spices online is India’s first and best online spice store with a wide range of products from spices, masala powders,  ayurveda oils and Kerala special snacks..</p>
            
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



      <!-- <section class="text-gray-600 body-font">
      
      </section> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script> -->

</body>
</html>