<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services - Compaq Brass Industries</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

    <!-- Favicon (basic browsers) -->
    <link rel="icon" href="favicon/favicon.ico" type="image/x-icon">

    <!-- Modern browsers -->
    <link rel="icon" href="favicon/favicon.ico" sizes="any">
    <link rel="icon" type="image/svg+xml" href="favicon/favicon.svg">

    <!-- Apple devices -->
    <link rel="apple-touch-icon" href="favicon/apple-touch-icon.png">

    <!-- Android / PWA -->
    <link rel="manifest" href="favicon/site.webmanifest">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">  

  <!-- Font Awesome & Bootstrap Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Animation Libraries -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script> new WOW().init(); </script>

  <!-- Custom Styles -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/service.css" rel="stylesheet">
  <link href="assets/css/detail.css" rel="stylesheet">
  <link href="assets/css/loader.css" rel="stylesheet">
</head>

<body>
  <!-- Header -->
  <header class="sticky top-0 z-50">
    <?php include 'assets/includes/header.php'; ?>
  </header>

  <!-- Loader -->
  <?php include 'loader.php'; ?>

  <!-- 🖼️ Banner -->
 
<div class="w-full h-auto sm:h-80 bg-white">
  <img src="assets/img/sv1.jpg" alt="Compaq Brass" class="w-full h-auto object-contain"/>
</div>

  

  <!-- Quality Assurance Section -->
  <section id="quality" class="py-16 md:py-24 relative overflow-hidden">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900 relative">
        Uncompromising <span class="gradient-text text-transparent bg-clip-text">Quality Standards</span>
        <span class="absolute -bottom-1 left-0 w-full h-1 bg-gradient-to-r from-amber-400 via-amber-600 to-amber-400 rounded-full"></span>
      </h2>
    </div>
    <div class="bg-gradient-to-b from-gray-100 to-gray-50 pt-20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 lg:grid lg:grid-cols-2 lg:gap-16 items-center">
        
        <!-- Left -->
        <div class="space-y-6">
          <p class="text-gray-600 mb-6 leading-relaxed">
            At Compaq Brass Industries, quality isn’t just an obligation — it’s our commitment, our culture, and our core principle across all operations.
          </p>

          <!-- Card -->
          <div class="quality-card bg-white p-6 rounded-xl shadow-md flex items-start hover:shadow-lg transition">
            <div class="bg-amber-100 rounded-full p-2 mr-4 mt-1 flex-shrink-0">
              <i class="fas fa-check text-amber-600 text-lg"></i>
            </div>
            <div>
              <h4 class="font-bold text-gray-900 mb-1">Certified Excellence</h4>
              <p class="text-gray-600 text-sm leading-relaxed">
                ISO 9001:2015 (TUV Nord), RoHS Compliance, and SE2A rating by ONICRA—demonstrating our global-quality benchmarks.
              </p>
            </div>
          </div>

          <div class="quality-card bg-white p-6 rounded-xl shadow-md flex items-start hover:shadow-lg transition">
            <div class="bg-amber-100 rounded-full p-2 mr-4 mt-1 flex-shrink-0">
              <i class="fas fa-check text-amber-600 text-lg"></i>
            </div>
            <div>
              <h4 class="font-bold text-gray-900 mb-1">Process Control</h4>
              <p class="text-gray-600 text-sm leading-relaxed">
                CNC & VMC precision, strict inspection protocols, technical customization, timely delivery, ethical practices, and continuous R&D.
              </p>
            </div>
          </div>

          <div class="quality-card bg-white p-6 rounded-xl shadow-md flex items-start hover:shadow-lg transition">
            <div class="bg-amber-100 rounded-full p-2 mr-4 mt-1 flex-shrink-0">
              <i class="fas fa-check text-amber-600 text-lg"></i>
            </div>
            <div>
              <h4 class="font-bold text-gray-900 mb-1">Final Inspection</h4>
              <p class="text-gray-600 text-sm leading-relaxed">
                Every brass component undergoes 100% inspection—both visually and dimensionally—to ensure defect-free delivery.
              </p>
            </div>
          </div>
        </div>

        <!-- Right Image -->
        <div class="mb-12 lg:mb-0">
          <img src="assets/img/quality2.jpeg" alt="Quality Control" class="rounded-lg shadow-xl w-full">
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="pt-16 pb-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900 relative">
          Our <span class="gradient-text text-transparent bg-clip-text">Exclusive Brass</span> Services
          <span class="absolute -bottom-1 left-0 w-full h-1 bg-gradient-to-r from-amber-400 via-amber-600 to-amber-400 rounded-full"></span>
        </h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
          Discover our extensive range of brass products engineered for excellence and durability.
        </p>
      </div>

      <!-- Service Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- Service 1 -->
        <div class="relative group rounded-xl overflow-hidden shadow-lg hover:scale-105 transition-transform duration-300 bg-cover bg-center" style="background-image: url('assets/img/service01.jpg'); min-height: 300px;">
          <div class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-6 flex flex-col justify-center">
            <h3 class="text-xl font-extrabold text-white mb-3 tracking-wide">Brass Surface Finishing</h3>
            <ul class="text-gray-100 text-sm space-y-2 list-disc list-inside">
              <li>Mirror polishing & satin finishes</li>
              <li>Custom brass textures</li>
              <li>Anti-tarnish coating services</li>
            </ul>
          </div>
        </div>

        <!-- Service 2 -->
        <div class="relative group rounded-xl overflow-hidden shadow-lg hover:scale-105 transition-transform duration-300 bg-cover bg-center" style="background-image: url('assets/img/service2.jpg'); min-height: 300px;">
          <div class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-6 flex flex-col justify-center">
            <h3 class="text-xl font-extrabold text-white mb-3 tracking-wide">Precision Component Production</h3>
            <ul class="text-gray-100 text-sm space-y-2 list-disc list-inside">
              <li>High-accuracy CNC/VMC machining</li>
              <li>Complex brass part manufacturing</li>
              <li>Custom tolerances as per drawing</li>
            </ul>
          </div>
        </div>

        <!-- Service 3 -->
        <div class="relative group rounded-xl overflow-hidden shadow-lg hover:scale-105 transition-transform duration-300 bg-cover bg-center" style="background-image: url('assets/img/service3.PNG'); min-height: 300px;">
          <div class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-6 flex flex-col justify-center">
            <h3 class="text-xl font-extrabold text-white mb-3 tracking-wide">Efficient Brass Furnaces</h3>
            <ul class="text-gray-100 text-sm space-y-2 list-disc list-inside">
              <li>High-yield brass melting</li>
              <li>Eco-friendly furnace design</li>
              <li>Energy-efficient operations</li>
            </ul>
          </div>
        </div>

        <!-- Service 4 -->
        <div class="relative group rounded-xl overflow-hidden shadow-lg hover:scale-105 transition-transform duration-300 bg-cover bg-center" style="background-image: url('assets/img/service4.jpg'); min-height: 300px;">
          <div class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-6 flex flex-col justify-center">
            <h3 class="text-xl font-extrabold text-white mb-3 tracking-wide">Tailored Brass Solutions</h3>
            <ul class="text-gray-100 text-sm space-y-2 list-disc list-inside">
              <li>Design-to-delivery support</li>
              <li>Made-to-order brass items</li>
              <li>Prototype to bulk scale</li>
            </ul>
          </div>
        </div>

        <!-- Service 5 -->
        <div class="relative group rounded-xl overflow-hidden shadow-lg hover:scale-105 transition-transform duration-300 bg-cover bg-center" style="background-image: url('assets/img/service5.jpg'); min-height: 300px;">
          <div class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-6 flex flex-col justify-center">
            <h3 class="text-xl font-extrabold text-white mb-3 tracking-wide">Brass Fabrication Works</h3>
            <ul class="text-gray-100 text-sm space-y-2 list-disc list-inside">
              <li>Cutting, bending & assembling</li>
              <li>Custom brass sheet works</li>
              <li>Perfect for architecture & décor</li>
            </ul>
          </div>
        </div>

        <!-- Service 6 -->
        <div class="relative group rounded-xl overflow-hidden shadow-lg hover:scale-105 transition-transform duration-300 bg-cover bg-center" style="background-image: url('assets/img/service6.jpg'); min-height: 300px;">
          <div class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-6 flex flex-col justify-center">
            <h3 class="text-xl font-extrabold text-white mb-3 tracking-wide">Luxury Brass Bath Fittings</h3>
            <ul class="text-gray-100 text-sm space-y-2 list-disc list-inside">
              <li>Designer brass taps & showers</li>
              <li>Scratch & rust-resistant polish</li>
              <li>Customizable modern fittings</li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <?php include 'assets/includes/footer.php'; ?>
  </footer>
</body>
</html>
