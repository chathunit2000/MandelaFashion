<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mandela Fashion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
  </head>
  <body class="flex flex-col min-h-screen w-full bg-[#faf7f2] text-sm text-gray-800">
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

        <?php
        include 'login.php';
        ?>

        <div class="flex items-center space-x-4">
          <button class="p-2 hover:bg-gray-100 rounded-full"><i data-lucide="search" class="w-5 h-5"></i></button>
          <button class="p-2 hover:bg-gray-100 rounded-full"><i data-lucide="heart" class="w-5 h-5"></i></button>
          <button class="p-2 hover:bg-gray-100 rounded-full"><i data-lucide="shopping-cart" class="w-5 h-5"></i></button>
          <button onclick="document.getElementById('login').style.display='block'" class="flex items-center gap-1 px-3 py-2 border border-gray-200 rounded-md hover:bg-gray-100" >
            <i data-lucide="user" class="w-5 h-5"></i>
            <span class="hidden md:inline">Sign In</span>
          </button>
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

    <!-- BANNER -->
  <section class="relative bg-gray-900 py-16 md:py-24">
      <div class="absolute inset-0 overflow-hidden">
        <img
          src="https://images.unsplash.com/photo-1445205170230-053b83016050?auto=format&fit=crop&w=1920&q=80"
          alt="Fashion background"
          class="w-full h-full object-cover opacity-30"
        />
      </div>
  

      <div class="container mx-auto px-4 relative">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
          <div class="text-white">
            <h1 class="text-4xl md:text-5xl font-serif mb-4">Be Perfect with Mandela</h1>
            <p class="text-gray-300 mb-8">
              Discover our exclusive collection featuring premium fabrics and timeless designs. Elevate your style with Mandela's latest fashion trends.
            </p>
            <button class="bg-white text-gray-900 px-8 py-3 font-medium hover:bg-gray-100 transition">Shop Now</button>
          </div>
          <div class="relative">
            <div class="grid grid-cols-2 gap-4">
              <div class="relative mt-10">
                <div class="bg-white/10 backdrop-blur-sm rounded-full p-2 overflow-hidden">
                  <img
                    src="https://images.unsplash.com/photo-1485230895905-ec40ba36b9bc?auto=format&fit=crop&w=600&q=80"
                    alt="Fashion model"
                    class="rounded-full w-full h-auto"
                  />
                </div>
              </div>
              <div class="relative -mt-6">
                <div class="bg-white/10 backdrop-blur-sm rounded-full p-2 overflow-hidden">
                  <img
                    src="https://images.unsplash.com/photo-1492707892479-7bc8d5a4ee93?auto=format&fit=crop&w=600&q=80"
                    alt="Fashion model"
                    class="rounded-full w-full h-auto"
                  />
                </div>
              </div>
              <div class="relative -mt-12 col-span-2 mx-auto max-w-[60%]">
                <div class="bg-white/10 backdrop-blur-sm rounded-full p-2 overflow-hidden">
                  <img
                    src="https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&w=600&q=80"
                    alt="Fashion model"
                    class="rounded-full w-full h-auto"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    

    <!-- CATEGORIES -->
    <section class="py-16 bg-white">
      <div class="container mx-auto px-4">
        <h2 class="text-3xl font-serif mb-2 text-center">Our Categories</h2>
        <p class="text-gray-600 mb-10 text-center">Shop by Categories</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          <!-- Repeat this block per category -->
           <a href="/ClothingWeb/women_dress/women.php">
          <div class="group relative overflow-hidden cursor-pointer">
            <img src="https://images.unsplash.com/photo-1618244972963-dbee1a7edc95?auto=format&fit=crop&w=600&q=80" class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-105" />
            <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-90 py-3 px-4">
              <h3 class="text-center font-medium text-lg">Women</h3>
            </div>
          </div>
          </a>

          <div class="group relative overflow-hidden cursor-pointer">
            <img src="https://images.unsplash.com/photo-1617137968427-85924c800a22?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-500" />
            <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-90 py-3 px-4">
              <h3 class="text-center font-medium text-lg">Men</h3>
            </div>
          </div>

          <div class="group relative overflow-hidden cursor-pointer">
            <img src="https://images.unsplash.com/photo-1621452773781-0f992fd1f5cb?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-500" />
            <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-90 py-3 px-4">
              <h3 class="text-center font-medium text-lg">Kids</h3>
            </div>
          </div>
          <div class="group relative overflow-hidden cursor-pointer">
            <img src="https://images.unsplash.com/photo-1492707892479-7bc8d5a4ee93?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-500" />
            <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-90 py-3 px-4">
              <h3 class="text-center font-medium text-lg">Others</h3>
            </div>
          </div>
        </div>

        <!-- Sales banner -->
        <div class="mt-16 bg-[#e6f0f9] rounded-lg overflow-hidden">
          <div class="grid grid-cols-1 md:grid-cols-2 items-center">
            <div class="p-8 md:p-12">
              <h3 class="text-xl mb-2">Just for you</h3>
              <p class="text-4xl font-serif mb-6">20% Sale</p>
              <button class="bg-black text-white px-6 py-2 font-medium hover:bg-gray-800 transition">Shop now</button>
            </div>
            <div class="hidden md:block">
              <img
                src="sale banner.jpg"
                alt="Sale promotion"
                class="w-full h-80 object-cover"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

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

    <!-- Lucide init -->
    <script>
      lucide.createIcons();
    </script>
  </body>
</html>

