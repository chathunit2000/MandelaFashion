<?php

$categories = [
  'dresses' => [
    'title' => "Dresses",
    'folder' => "1.0category dress",
    'images' => array_map(fn($i) => "dress.$i.jpg", range(1, 12))
  ],
  'tops' => [
    'title' => "Top",
    'folder' => "2.0category tops",
    'images' => array_map(fn($i) => "top.$i.jpg", range(1, 12))
  ],
  'trousers' => [
    'title' => "Trousers",
    'folder' => "3.0category trosers",
    'images' => array_map(fn($i) => "trouser.$i.jpg", range(1, 12))
  ],
  'skirts' => [
    'title' => "Skirts",
    'folder' => "4.0category skirts",
    'images' => array_map(fn($i) => "skirt.$i.jpg", range(1, 8))
  ]
];

// Get selected category
$category = $_GET['category'] ?? '';
$data = $categories[$category] ?? null;

if (!$data) {
  echo "<h2 style='text-align:center;margin-top:50px;'>Invalid category.</h2>";
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $data['title']; ?> - Mandela Fashion</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-[#faf7f2] text-sm text-gray-800">

<!-- HEADER -->
<header class="w-full bg-white shadow-sm">
  <div class="container mx-auto px-4 py-4 flex items-center justify-between">
    <div class="flex items-center space-x-8">
      <img src="https://uploadthingy.s3.us-west-1.amazonaws.com/3MSMKntcjufZLnq8YEb33f/logo.png" alt="Mandela Logo" class="h-10" />
      <nav class="hidden md:flex space-x-6">
        <a href="/Clothing-Web-Application-Development/index.php" class="text-black font-medium hover:text-gray-600">Home</a>
        <a href="/Clothing-Web-Application-Development/women_dress/women.php" class="text-black font-medium hover:text-gray-600">Women</a>
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

<!-- PRODUCTS -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-4">
    <h2 class="text-2xl font-serif mb-8 text-center"><?php echo $data['title']; ?> Products</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

      <?php
      foreach ($data['images'] as $image) {
        echo '
        <div class="bg-white shadow-sm rounded-lg overflow-hidden hover:shadow-md transition">
          <img src="/ClothingWeb/images/women/'.$data['folder'].'/'.$image.'" alt="'.$data['title'].'" class="w-full h-72 object-cover" />
          <div class="p-4">
            <div class="flex justify-between items-center mb-3">
              <span class="text-black font-semibold">$54.99</span>
              <button class="p-2 hover:bg-gray-100 rounded-full">
                <i data-lucide="heart" class="w-5 h-5"></i>
              </button>
            </div>
            <button class="w-full bg-black text-white py-2 text-sm font-medium rounded-md hover:bg-gray-800 transition">
              Add to Cart
            </button>
          </div>
        </div>';
      }
      ?>

    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="bg-gray-900 text-white pt-12 pb-6">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
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
      <div>
        <h3 class="text-lg font-medium mb-4">Discover</h3>
        <ul class="space-y-2 text-sm text-gray-300">
          <li><a href="#" class="hover:text-white">The Company</a></li>
          <li><a href="#" class="hover:text-white">Our Story</a></li>
          <li><a href="#" class="hover:text-white">Sustainability</a></li>
          <li><a href="#" class="hover:text-white">Careers</a></li>
        </ul>
      </div>
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
      <img src="https://uploadthingy.s3.us-west-1.amazonaws.com/3MSMKntcjufZLnq8YEb33f/logo.png" class="h-8 invert mb-4 md:mb-0" />
      <p class="text-gray-400 text-sm">© Mandela. All rights reserved.</p>
    </div>
  </div>
</footer>

<script>
  lucide.createIcons();
</script>
</body>
</html>
