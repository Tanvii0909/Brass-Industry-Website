<head>
   <meta charset="UTF-8">
   <title>Compaq Brass Industries - Leading Brass Components Manufacturer in India</title>
</head>
<header>

 
   <!-- Navbar -->
    <div class="bg-gray-50">
      <div class="w-full px-4 py-2 bg-white shadow-md">
        <div class="flex items-center justify-between flex-wrap max-w-9xl mx-auto">

          <!-- LEFT: Logo + Brand -->
          <a href="index.php">

            <div class="flex items-center space-x-6 flex-shrink-0">
              <img src="assets/img/compaqLOGO.jpg" class="h-12 w-12" alt="Compaq Logo" />
              <span class="text-2xl font-bold bg-gradient-to-r from-[#1A237E] to-[#B71C1C] 
              bg-clip-text text-transparent font-montserrat">
              COMPAQ BRASS
            </span>
          </div>
        </a>

          <!-- Mobile Toggle Button -->
          <div class="md:hidden">
            <button id="menuToggle" class="text-3xl text-gray-800 focus:outline-none">
              &#9776;
            </button>
          </div>

          <!-- RIGHT: Navigation Links -->
          <div id="menu" 
               class="hidden md:flex flex-col md:flex-row md:space-x-6 items-start md:items-center 
                      w-full md:w-auto mt-2 md:mt-0">
            <a href="index.php" class="nav-link text-gray-800 hover:text-blue-800 font-medium font-montserrat">Home</a>
            <a href="about.php" class="nav-link text-gray-800 hover:text-blue-800 font-medium font-montserrat">About Us</a>
            <a href="service.php" class="nav-link text-gray-800 hover:text-blue-800 font-medium font-montserrat">Quality</a>

            <!-- Products Dropdown -->
            <div class="relative group">
              <a href="product.php" class="nav-link text-gray-800 hover:text-blue-800 font-medium font-montserrat">Products</a>
              <div class="dropdown-menu absolute hidden group-hover:block bg-white shadow-lg rounded-md 
                          mt-1 py-2 w-48 z-50 border-t-4 border-blue-600">
                <a id="showSpecs" class="block px-4 py-2 hover:bg-gray-100" onclick="openModal('nippleModal')">Brass Nipple</a>
                <a id="showSpecs2" class="block px-4 py-2 hover:bg-gray-100" onclick="openModal('valveModal')">Brass Valve</a>
                <a id="showSpecs3" class="block px-4 py-2 hover:bg-gray-100" onclick="openModal('cockModal')">Brass Cock</a>
                <a id="showSpecs4" class="block px-4 py-2 hover:bg-gray-100" onclick="openModal('connectorModal')">Brass Connector</a>
                <a id="showSpecs5" class="block px-4 py-2 hover:bg-gray-100"  onclick="openModal('faucetsModal')">Health Faucets</a>
                <a id="showSpecs6" class="block px-4 py-2 hover:bg-gray-100" onclick="openModal('otherItemsModal')">Other Items</a>
              </div>
            </div>

            <!-- Our Brand Dropdown -->
            <div class="relative group" x-data="{ open: false }" @mouseenter="open=true" @mouseleave="open=false">
              <button @click="open = !open" 
                      class="nav-link text-gray-800 hover:text-blue-800 font-medium font-montserrat flex items-center gap-1">
                Our Brand
                <svg class="w-4 h-4 transition-transform duration-200 group-hover:rotate-180" 
                     fill="none" stroke="currentColor" stroke-width="2" 
                     viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>

              <div class="absolute left-0 mt-3 w-72 bg-white shadow-lg rounded-xl border border-amber-300 
                          transform scale-95 opacity-0 invisible transition-all duration-300 
                          group-hover:visible group-hover:opacity-100 group-hover:scale-100 z-50"
                   :class="{ 'opacity-100 scale-100 visible': open, 'opacity-0 scale-95 invisible': !open }">
                <div class="flex items-center py-2 px-3 bg-gradient-to-r from-amber-50 to-white rounded-t-xl">
                    <img src="assets/img/cr.jpg" alt="Brand Logo" class="w-36 h-16 border-2 border-blue-900 shadow-md">
                    <div class="ml-2">
                        <h3 class="text-lg font-bold text-blue-900">COMPAQ</h3>
                        <p class="text-sm text-gray-600">Luxurious Fitting.</p>
                    </div>
                </div>
                <div class="flex items-center py-2 px-3 bg-gradient-to-r from-amber-50 to-white rounded-t-xl">
                    <img src="assets/img/of.jpg" alt="Brand Logo" class="w-36 h-16 border-2 border-blue-900 shadow-md">
                    <div class="ml-2">
                        <h3 class="text-lg font-bold text-blue-900">OXFORD</h3>
                        <p class="text-sm text-gray-600">Premium Quality.</p>
                    </div>
                </div>
                <div class="border-t border-gray-200">
                  <a href="about.php" class="block text-center py-3 text-red-600 font-semibold hover:text-blue-900 bg-amber-200 transition">
                    Know More
                  </a>
                </div>
              </div>
            </div>

            <!-- Contact + Quote -->
            <a href="contact.php" class="nav-link text-gray-800 hover:text-blue-800 font-medium font-montserrat">Contact</a>
           



          <a href="login.php" class="px-3 py-2 bg-gradient-to-r from-[#1A237E] to-[#B71C1C] text-white rounded-full hover:opacity-90 transition duration-300 font-medium flex items-center">
    <span>Get Quote</span>
    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
    </svg>
  </a>
   <a href="login.php" class="brass-effect text-white px-3 py-2 rounded-full font-medium font-montserrat inline-flex items-center">
         Log in
         <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
    </svg>
        </a>





            <div class="flex space-x-4 mt-4 md:hidden">
    <a href="https://www.facebook.com/share/1RjjXY3cwZ/" class="text-blue-600 text-xl"><i class="fab fa-facebook-f"></i></a>
    <a href="https://www.instagram.com/compaq_brass_industries?igsh=ZHVpMDUxZjZrd2Fs" 
       class="text-pink-600 text-xl"><i class="fab fa-instagram"></i></a>
  </div>


  
          </div>
        </div>
      </div>
    </div>
  </div>  

</header>

<!-- Alpine.js -->
<script src="https://unpkg.com/alpinejs" defer></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const menuToggle = document.getElementById('menuToggle');
  const menu = document.getElementById('menu');
  if (menuToggle && menu) {
      menuToggle.addEventListener('click', () => {
          menu.classList.toggle('hidden');
      });
  }
});
</script>
