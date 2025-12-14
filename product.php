<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Compaq Brass Industries</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="assets/css/detail.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- WOW.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <!-- Favicon (basic browsers) -->
    <link rel="icon" href="favicon/favicon.ico" type="image/x-icon">

    <!-- Modern browsers -->
    <link rel="icon" href="favicon/favicon.ico" sizes="any">
    <link rel="icon" type="image/svg+xml" href="favicon/favicon.svg">

    <!-- Apple devices -->
    <link rel="apple-touch-icon" href="favicon/apple-touch-icon.png">

    <!-- Android / PWA -->
    <link rel="manifest" href="favicon/site.webmanifest">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/product.css" rel="stylesheet">
    <link href="assets/css/loader.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
  <header class="sticky top-0 z-50">

    <?php include 'assets/includes/header.php'; ?>
  </header>
    <?php include 'loader.php'; ?>

    <?php include 'assets/includes/products/popbox-nipple.php'; ?>
    <?php include 'assets/includes/products/popbox-cock.php'; ?>
    <?php include 'assets/includes/products/popbox-valve.php'; ?>
    <?php include 'assets/includes/products/popbox-connector.php'; ?>
    <?php include 'assets/includes/products/health-faucets.php'; ?>
    <?php include 'assets/includes/products/popbox-otheritems.php'; ?>

    <script src="assets/js/popup.js"></script>

    <div class="w-full h-auto sm:h-80 bg-white">
      <img src="assets/img/p.jpg" alt="Compaq Brass" class="w-full h-auto object-contain"/>
    </div>

    <section id="products" class="pt-16 md:pt-16 bg-gray-100">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900">
            <span class="relative">
              Our <span class="bg-gradient-to-r from-[#1A237E] to-[#B71C1C] bg-clip-text text-transparent font-montserrat">Wonderfull</span> Products
              <span class="absolute -bottom-1 left-0 w-full h-1 bg-gradient-to-r from-amber-400 via-amber-600 to-amber-400 rounded-full"></span>
            </span>
          </h2>
          <p class="text-gray-600 max-w-2xl mx-auto">
            Discover our extensive range of brass products engineered for excellence and durability.
          </p>
        </div>

        <!-- Product Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
          <!-- Product 1 (Best Seller) -->
          <div class="group relative bg-gradient-to-br from-yellow-50 to-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border-2 border-amber-400 hover:border-amber-500 overflow-hidden">
            <div class="overflow-hidden h-52 bg-white flex items-center justify-center relative">
              <span class="absolute top-3 left-3 z-20 bg-gradient-to-r from-amber-400 to-yellow-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-md animate-pulse">
                ★ Best Seller
              </span>
              <img src="assets/img/PRODUCTS/1.jpg" alt="Brass Nipple" class="w-full h-full object-contain transform group-hover:scale-110 transition duration-500 relative z-10">
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-900 mb-2">Brass Nipple</h3>
              <p class="text-gray-600 mb-4">Premium-grade brass nipples, polished for durability and elegance.</p>
              <div class="flex justify-between items-center">
                <span class="font-semibold text-amber-700">From 35gm</span>
                <button onclick="openModal('nippleModal')" class="relative inline-block px-4 py-1 font-medium text-amber-600 hover:text-amber-700 transition">
                  <span class="absolute inset-0 bg-gradient-to-r from-amber-400 to-amber-600 rounded-full opacity-0 group-hover:opacity-20 transition"></span>
                  Details →
                </button>
              </div>
            </div>
          </div>
          <!-- Product 2 (Best Seller) -->
          <div class="group relative bg-gradient-to-br from-yellow-50 to-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border-2 border-amber-400 hover:border-amber-500 overflow-hidden">
            <div class="overflow-hidden h-52 bg-white flex items-center justify-center relative">
              <span class="absolute top-3 left-3 z-20 bg-gradient-to-r from-amber-400 to-yellow-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-md animate-pulse">
                ★ Best Seller
              </span>
              <img src="assets/img/PRODUCTS/15.jpg" alt="Brass Valve" class="w-full h-full object-contain transform group-hover:scale-110 transition duration-500 relative z-10">
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-900 mb-2">Brass Valve</h3>
              <p class="text-gray-600 mb-4">Heavy-duty brass valves ensuring long-lasting performance.</p>
              <div class="flex justify-between items-center">
                <span class="font-semibold text-amber-700">From 160gm</span>
                <button onclick="openModal('valveModal')" class="relative inline-block px-4 py-1 font-medium text-amber-600 hover:text-amber-700 transition">
                  <span class="absolute inset-0 bg-gradient-to-r from-amber-400 to-amber-600 rounded-full opacity-0 group-hover:opacity-20 transition"></span>
                  Details →
                </button>
              </div>
            </div>
          </div>
          <!-- Product 3 -->
          <div class="group relative bg-gradient-to-br from-yellow-50 to-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border-2 border-amber-400 hover:border-amber-500 overflow-hidden">
            <div class="overflow-hidden h-52 bg-white flex items-center justify-center relative">
              <span class="absolute top-3 left-3 z-20 bg-gradient-to-r from-amber-400 to-yellow-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-md animate-pulse">
                ★ Best Seller
              </span>
              <img src="assets/img/PRODUCTS/4.jpg" alt="Brass Cock" class="w-full h-full object-contain transform group-hover:scale-110 transition duration-500">
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-900 mb-2">Brass Cock</h3>
              <p class="text-gray-600 mb-4">Reliable cock valves built with solid brass for long-lasting use.</p>
              <div class="flex justify-between items-center">
                <span class="font-semibold text-amber-700">From 160gm</span>
                <button onclick="openModal('cockModal')" class="relative inline-block px-4 py-1 font-medium text-amber-600 hover:text-amber-700 transition">
                  <span class="absolute inset-0 bg-gradient-to-r from-amber-400 to-amber-600 rounded-full opacity-0 group-hover:opacity-20 transition"></span>
                  Details →
                </button>
              </div>
            </div>
          </div>
          <!-- Product 4 -->
          <div class="group relative bg-gradient-to-br from-yellow-50 to-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border-2 border-amber-200 hover:border-amber-400 overflow-hidden">
            <div class="overflow-hidden h-52 bg-white flex items-center justify-center">
              <img src="assets/img/PRODUCTS/9.jpg" alt="Brass Connector" class="w-full h-full object-contain transform group-hover:scale-110 transition duration-500">
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-900 mb-2">Brass Connector</h3>
              <p class="text-gray-600 mb-4">Strong connectors built to last with anti-rust brass finishing.</p>
              <div class="flex justify-between items-center">
                <span class="font-semibold text-amber-700">From 90gm</span>
                <button onclick="openModal('connectorModal')" class="relative inline-block px-4 py-1 font-medium text-amber-600 hover:text-amber-700 transition">
                  <span class="absolute inset-0 bg-gradient-to-r from-amber-400 to-amber-600 rounded-full opacity-0 group-hover:opacity-20 transition"></span>
                  Details →
                </button>
              </div>
            </div>
          </div>
          <!-- Product 5 -->
          <div class="group relative bg-gradient-to-br from-yellow-50 to-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border-2 border-amber-200 hover:border-amber-400 overflow-hidden">
            <div class="overflow-hidden h-52 bg-white flex items-center justify-center">
              <img src="assets/img/PRODUCTS/28.jpg" alt="Health Faucets" class="w-full h-full object-contain transform group-hover:scale-110 transition duration-500">
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-900 mb-2">Health Faucets</h3>
              <p class="text-gray-600 mb-4">Premium brass faucets designed for hygiene and style.</p>
              <div class="flex justify-between items-center">
                <span class="font-semibold text-amber-700">From 125gm</span>
                <button onclick="openModal('faucetsModal')" class="relative inline-block px-4 py-1 font-medium text-amber-600 hover:text-amber-700 transition">
                  <span class="absolute inset-0 bg-gradient-to-r from-amber-400 to-amber-600 rounded-full opacity-0 group-hover:opacity-20 transition"></span>
                  Details →
                </button>
              </div>
            </div>
          </div>
          <!-- Product 6 -->
          <div class="group relative bg-gradient-to-br from-yellow-50 to-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border-2 border-amber-200 hover:border-amber-400 overflow-hidden">
            <div class="overflow-hidden h-52 bg-white flex items-center justify-center">
              <img src="assets/img/PRODUCTS/26.jpg" alt="Other Items" class="w-full h-full object-contain transform group-hover:scale-110 transition duration-500">
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-900 mb-2">Other Items</h3>
              <p class="text-gray-600 mb-4">Custom brass components available for diverse requirements.</p>
              <div class="flex justify-between items-center">
                <span class="font-semibold text-amber-700">From 80gm</span>
                <button onclick="openModal('otherItemsModal')" class="relative inline-block px-4 py-1 font-medium text-amber-600 hover:text-amber-700 transition">
                  <span class="absolute inset-0 bg-gradient-to-r from-amber-400 to-amber-600 rounded-full opacity-0 group-hover:opacity-20 transition"></span>
                  Details →
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center mt-12 mb-12">
          <a href="assets/img/catalog/CompaqBrassCatalog.pdf" id="catalogLink" class="brass-effect text-white px-8 py-3 rounded-full font-medium font-montserrat inline-flex items-center">
            Request Full Catalog
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </section>

    <footer>
      <?php include 'assets/includes/footer.php'; ?>
    </footer>

    <script>
      // Detect if the user is on a mobile device
      function isMobileDevice() {
        return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
      }

      // Handle catalog link click
      document.getElementById('catalogLink').addEventListener('click', async function(event) {
        const pdfUrl = this.href;
        if (isMobileDevice()) {
          event.preventDefault(); // Prevent default link behavior
          try {
            // Fetch the PDF file as a blob
            const response = await fetch(pdfUrl);
            if (!response.ok) throw new Error('Failed to fetch PDF');
            const blob = await response.blob();
            // Create a blob URL
            const blobUrl = window.URL.createObjectURL(blob);
            // Open the PDF in a new tab
            window.open(blobUrl, '_blank');
            // Create a temporary anchor element to trigger download
            const link = document.createElement('a');
            link.href = blobUrl;
            link.download = 'CompaqBrassCatalog.pdf';
            document.body.appendChild(link);
            link.click();
            // Clean up
            document.body.removeChild(link);
            window.URL.revokeObjectURL(blobUrl);
          } catch (error) {
            console.error('Error downloading PDF:', error);
            // Fallback: open PDF in new tab without download
            window.open(pdfUrl, '_blank');
          }
        }
        // On non-mobile devices, the link will behave as usual (open PDF in browser)
      });
    </script>
</body>
</html>