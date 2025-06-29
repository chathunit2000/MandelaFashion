<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Women's Collection - Mandela Fashion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>


<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Women Clothing Page</title>








<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />



<style>











 .swiper-button-next, .swiper-button-prev {
      color: #fff;
    }










   






  body {
    margin: 0;
    font-family: Arial, sans-serif;
  }

  .banner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-image: url('https://images.unsplash.com/photo-1549924231-f129b911e442?ixlib=rb-4.0.3&auto=format&fit=crop&w=1500&q=80'); /* Example background from Unsplash */
    background-size: cover;
    background-position: center;
    height: 50vh;
    padding: 20px;
    color: #fff;
    position: relative;
  }

  .content-box {
    background: rgba(0, 0, 0, 0.5);
    padding: 30px;
    max-width: 500px;
    border-radius: 10px;
  }

  h1 {
    font-size: 2.5em;
    margin-bottom: 20px;
  }

  p {
    font-size: 1.2em;
  }

  .shop-now {
    display: inline-block;
    margin-top: 25px;
    padding: 15px 30px;
    background-color: #fff;
    color: #000;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
  }

  .model-image {
    position: absolute;
    right: 20px;
    bottom: 20px;
    width: 300px;
    height: auto;
    border-radius: 10px;
    border: 3px solid #fff;
  }

  @media(max-width: 768px) {
    .banner {
      flex-direction: column;
      height: auto;
    }
    .model-image {
      position: static;
      width: 100%;
      max-width: 90%;
      margin-top: 20px;
    }
  }
</style>

  </head>
































  <body class="bg-[#faf7f2] text-sm text-gray-800">
    <!-- HEADER (same as homepage) -->
<!-- HEADER -->
    <header class="w-full bg-white shadow-sm">
      <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        <div class="flex items-center space-x-8">
          <img
            src="https://uploadthingy.s3.us-west-1.amazonaws.com/3MSMKntcjufZLnq8YEb33f/logo.png"
            alt="Mandela Logo"
            class="h-10"
          />
          <nav class="hidden md:flex space-x-6">
            <a href="/ClothingWeb/index.php" class="text-black font-medium hover:text-gray-600">Home</a>
            <a href="/ClothingWeb/women_dress/women.php" class="text-black font-medium hover:text-gray-600">Women</a>
            <a href="#" class="text-black font-medium hover:text-gray-600">Men</a>
            <a href="#" class="text-black font-medium hover:text-gray-600">Kids</a>
            <a href="#" class="text-black font-medium hover:text-gray-600">Others</a>
          </nav>
        </div>
        <div class="flex items-center space-x-4">
          <button class="p-2 hover:bg-gray-100 rounded-full"><i data-lucide="search" class="w-5 h-5"></i></button>
          <button class="p-2 hover:bg-gray-100 rounded-full"><i data-lucide="heart" class="w-5 h-5"></i></button>
          <button class="p-2 hover:bg-gray-100 rounded-full"><i data-lucide="shopping-cart" class="w-5 h-5"></i></button>
          <a href="login.php"><button class="flex items-center gap-1 px-3 py-2 border border-gray-200 rounded-md hover:bg-gray-100" >
            <i data-lucide="user" class="w-5 h-5"></i>
            <span class="hidden md:inline">Sign In</span>
          </button></a>
        </div>
      </div>
      <div class="container mx-auto px-4 py-2 border-t border-gray-100 flex flex-col md:flex-row justify-between items-center text-sm">
        <div class="flex items-center space-x-4">
          <select class="border border-gray-300 px-3 py-1 rounded-md text-sm">
            <option selected disabled>Select Country</option>
            <option>Sri Lanka</option>
            <option>United States</option>
            <option>India</option>
            <option>Japan</option>
          </select>
          <a href="#" class="hover:text-gray-600">Sales & Offers</a>
          <a href="#" class="hover:text-gray-600">Gift Card</a>
        </div>
      </div>
    </header>





   




















  <!-- *****upper moving banner second time-->
   <body class="bg-gray-50">

  <!-- Banner Slider -->
  <div class="relative w-full h-[500px]">
    <div class="swiper mySwiper h-full">
      <div class="swiper-wrapper">

        <!-- Slide 1 -->

        <div class="swiper-slide relative">
          <img src="\ClothingWeb\images\women\bagmain.png" alt="Moon Child 2" class="w-full h-full object-cover" />
          <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center text-white text-center px-4">
            <h2 class="text-4xl font-bold mb-2">Mandela</h2>
            <p class="text-lg">Elegance in Bloom — Style for Every Young Moment.</p>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide relative">
          <img src="\ClothingWeb\images\women\women.png" alt="Moon Child 2" class="w-full h-full object-cover" />
          <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center text-white text-center px-4">
            <h2 class="text-4xl font-bold mb-2">Mandela</h2>
            <p class="text-lg">Flourish in Feminine Elegance.</p>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide relative">
          <img src="\ClothingWeb\images\women\home-decor.png" alt="Moon Child 3" class="w-full h-full object-cover" />
          <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center text-white text-center px-4">
            <h2 class="text-4xl font-bold mb-2">Mandela</h2>
            <p class="text-lg">Confidence in Every Stitch.</p>
          </div>
        </div>

      </div>

      <!-- Swiper Controls -->
      <div class="swiper-pagination"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>

  <!-- Categories -->
  <div class="flex justify-center mt-8 gap-6 text-lg font-semibold">
    <a href="/women/dresses" class="text-pink-600 hover:underline">Dresses</a>
    <a href="/women/tops" class="text-pink-600 hover:underline">Tops</a>
    <a href="/women/trousers" class="text-pink-600 hover:underline">Trousers</a>
    <a href="/women/skirts" class="text-pink-600 hover:underline">Skirts</a>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper(".mySwiper", {
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>

<!--upper moving banner second time closed>




















    <!-You can reuse the entire header from your homepage here -->

    <!-- first-PAGE BANNER with description-->
    <section class="relative bg-pink-100 py-16 md:py-24">
      <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-serif mb-4">Women's Collection</h1>
        <p class="text-gray-700 max-w-2xl mx-auto">
          Discover the elegance and comfort in our hand-picked styles for modern women. Curated with care, crafted for confidence.
        </p>
      </div>
    </section>











    


    <!-- PRODUCTS -->
   <!-- PRODUCTS -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-4">
    <h2 class="text-2xl font-serif mb-8 text-center">Featured Products</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

      <!-- Product 1 -->
<a href="category.php?category=dresses" class="block h-full">
  <div class="bg-white shadow-sm rounded-lg overflow-hidden hover:shadow-md transition h-full">
    <img src="../images/women/main%20category%201-dresses.....jpeg" alt="Dresses" class="w-full h-72 object-cover" />
    <div class="p-4">
      <h3 class="font-medium text-lg">Dresses</h3>
      <p class="text-gray-500 text-sm mb-2">Flowy, chic, and summer-ready</p>
    </div>
  </div>
</a>


<!-- Product 2 -->
<a href="category.php?category=tops" class="block h-full">
<div class="bg-white shadow-sm rounded-lg overflow-hidden hover:shadow-md transition">
  <img src="../images/women/main%20category%202-top.....jpeg" alt="Top" class="w-full h-72 object-cover" />
  <div class="p-4">
    <h3 class="font-medium text-lg">Top</h3>
    <p class="text-gray-500 text-sm mb-2">Soft fabric with a modern cut</p>
  </div>
</div>
</a>

<!-- Product 3 -->
 <a href="category.php?category=trousers" class="block h-full">
<div class="bg-white shadow-sm rounded-lg overflow-hidden hover:shadow-md transition">
  <img src="../images/women/main%20category%203-trousers.....jpeg" alt="Trousers" class="w-full h-72 object-cover" />
  <div class="p-4">
    <h3 class="font-medium text-lg">Trousers</h3>
    <p class="text-gray-500 text-sm mb-2">Comfort meets everyday style</p>
  </div>
</div>
</a>

<!-- Product 4 -->
 <a href="category.php?category=skirts" class="block h-full">
<div class="bg-white shadow-sm rounded-lg overflow-hidden hover:shadow-md transition">
  <img src="../images/women/main%20category%204-skirts.....jpeg" alt="Skirts" class="w-full h-72 object-cover" />
  <div class="p-4">
    <h3 class="font-medium text-lg">Skirts</h3>
    <p class="text-gray-500 text-sm mb-2">Flirty, feminine, and easy to wear</p>
  </div>
</div>
</a>

    </div>
  </div>
</section>




<!-- CUSTOMER FEEDBACK SECTION -->
<section class="bg-black text-white py-20">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl md:text-4xl font-serif text-center mb-12">DELIGHTED CUSTOMERS WITH FEEDBACK</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

      <!-- Testimonial 1 -->
      <div class="bg-white text-black p-6 rounded-md shadow-lg text-center">
        <div class="text-lg mb-4">★★★★★</div>
        <p class="mb-6">“I ordered a pair of trousers today. And these awesome guys deliver it today itself. And it was so good. The material was so good and comfy. Thank you so much guys. You guys have done a great job. Keep it up ❤️.”</p>
        <p class="font-semibold">Chathushki Tahani</p>
        <p class="text-sm text-gray-600">Sri Lanka</p>
      </div>

      <!-- Testimonial 2 -->
      <div class="bg-white text-black p-6 rounded-md shadow-lg text-center scale-105 z-10">
        <div class="text-lg mb-4">★★★★★</div>
        <p class="mb-6">“This is very beautiful. There are no words to describe the quality of its clothes. Since then it is the only place that has given customers a good place. This dress is very beautiful. Always keep that virtue and move forward. We say this is the place to buy a dress for you and yours. And the only place where there are clothes for those who want to dress well. Thank you Mandela ❤️🥰.”</p>
        <p class="font-semibold">Reshmi Divyanjalee</p>
        <p class="text-sm text-gray-600">Sri Lanka</p>
      </div>

      <!-- Testimonial 3 -->
      <div class="bg-white text-black p-6 rounded-md shadow-lg text-center">
        <div class="text-lg mb-4">★★★★★</div>
        <p class="mb-6">“Really love Lurrelí collection and very uncommon designs. Reasonable prices and very friendly staff. Highly recommended for every girl. 👍”</p>
        <p class="font-semibold">Isuri Ramanayaka</p>
        <p class="text-sm text-gray-600">Sri Lanka</p>
      </div>

    </div>
  </div>
</section>





<!--last-shop now banner-->
<div class="banner">
  <div class="content-box">
    <h1>Discover Our Latest Women's Collection</h1>
    <p>Stylish, trendy, and comfortable clothing for every woman. Shop now and elevate your style!</p>
    <a href="#" class="shop-now">Shop Now</a>
  </div>

  <img src="\ClothingWeb\images\women\under banner.jpg" alt="Model" class="model-image" />
</div>












    <!-- FOOTER (same as homepage) -->
<!-- FOOTER -->
    <footer class="bg-gray-900 text-white pt-12 pb-6">
      <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Customer Service -->
          <div>
            <h3 class="text-lg font-medium mb-4">Customer Service</h3>
            <ul class="space-y-2 text-sm text-gray-300">
              <li><a href="#" class="hover:text-white">Contact Us</a></li>
              <li><a href="#" class="hover:text-white">Delivery</a></li>
              <li><a href="#" class="hover:text-white">Return & Exchange</a></li>
              <li><a href="#" class="hover:text-white">Size Guide</a></li>
              <li><a href="#" class="hover:text-white">Privacy Policy</a></li>
              <li><a href="#" class="hover:text-white">Shipping Policy</a></li>
              <li><a href="#" class="hover:text-white">Fashionable Feedback</a></li>
            </ul>
          </div>
          <!-- Discover -->
          <div>
            <h3 class="text-lg font-medium mb-4">Discover</h3>
            <ul class="space-y-2 text-sm text-gray-300">
              <li><a href="#" class="hover:text-white">The Company</a></li>
              <li><a href="#" class="hover:text-white">Our Story</a></li>
              <li><a href="#" class="hover:text-white">Sustainability</a></li>
              <li><a href="#" class="hover:text-white">Careers</a></li>
            </ul>
          </div>
          <!-- Follow Us -->
          <div>
            <h3 class="text-lg font-medium mb-4">Follow Us On</h3>
            <div class="flex space-x-4 mb-6 text-gray-300">
              <i data-lucide="facebook" class="w-5 h-5 hover:text-white"></i>
              <i data-lucide="instagram" class="w-5 h-5 hover:text-white"></i>
              <i data-lucide="mail" class="w-5 h-5 hover:text-white"></i>
            </div>
            <div>
              <h4 class="text-sm font-medium mb-3">Subscribe to our newsletter</h4>
              <div class="flex">
                <input type="email" placeholder="Your email" class="bg-gray-800 text-white px-4 py-2 text-sm flex-grow" />
                <button class="bg-white text-gray-900 px-4 py-2 text-sm font-medium">Subscribe</button>
              </div>
            </div>
          </div>
        </div>
        <div class="border-t border-gray-800 mt-10 pt-6 flex flex-col md:flex-row justify-between items-center">
          <img
            src="https://uploadthingy.s3.us-west-1.amazonaws.com/3MSMKntcjufZLnq8YEb33f/logo.png"
            class="h-8 invert mb-4 md:mb-0"
          />
          <p class="text-gray-400 text-sm">© Mandela. All rights reserved.</p>
        </div>
      </div>
    </footer>
    <!-- You can reuse the entire footer from your homepage here -->

    <!-- Lucide init -->
    <script>
      lucide.createIcons();
    </script>
  </body>
</html>
