<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us - Compaq Brass Industries</title>

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

<!-- Icon Fonts -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheets -->
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

<!-- Bootstrap CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="assets/css/detail.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/about.css" rel="stylesheet">
<link href="assets/css/loader.css" rel="stylesheet">

<!-- Animate.css & WOW.js -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>new WOW().init();</script>

<style>
/* Footer fonts stay original */
footer, .footer, .footer * { font-family: inherit !important; }
</style>
</head>

<body>

<header class="sticky top-0 z-50">
<?php include 'assets/includes/header.php'; ?>
</header>

<?php include 'loader.php'; ?>

<div class="w-full h-auto sm:h-80 bg-white">
  <img src="assets/img/ab.jpg" alt="Compaq Brass" class="w-full h-auto object-contain"/>
</div>


<!-- About Section -->
<section id="about" class="pt-16 md:pt-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
      <div class="mb-12 lg:mb-0">
        <img src="assets/img/ind.jpg" alt="Compaq Brass Industries facility exterior" class="rounded-lg shadow-xl w-full">
      </div>
      <div>
        <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900">
          <span class="relative">
            About <span class="bg-gradient-to-r from-[#1A237E] to-[#B71C1C] bg-clip-text text-transparent font-montserrat">Compaq Brass</span>
            <span class="absolute -bottom-1 left-0 w-full h-1 bg-gradient-to-r from-amber-400 via-amber-600 to-amber-400 rounded-full"></span>
          </span>
        </h2>
        <p class="text-gray-600 mb-6">Compaq Brass Industries is an Indian based company founded by Mr. Rasik Patel in 1998, manufacturing and exporting Brass, Bathroom Fittings, Precision Parts, Brass CP Fitting Parts.</p>
        <p class="text-gray-600 mb-6">Our manufacturing capabilities rely on our legacy of expertise in crafting Brass bathroom sanitary units integrated with state-of-the-art units spread over 10,000 Sq. ft., engaged in manufacturing high quality products from forging, casting, and extrusion rods. Our strength lies in hand crafting surfacing for luxurious plating for perfect Polishes, Antique, Rustic, or Aged Brass finish.</p>
        <div class="flex flex-wrap gap-4">
          <div class="flex items-center">
            <div class="bg-amber-100 rounded-full p-3 mr-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <span class="text-gray-700 font-medium">ISO Certified</span>
          </div>
          <div class="flex items-center">
            <div class="bg-amber-100 rounded-full p-3 mr-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <span class="text-gray-700 font-medium">Udhyam Registration Certified</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Counter Section -->
<section class="relative py-16 bg-fixed bg-center bg-cover mt-12" style="background-image: url('assets/img/s11.jpg');">
  <div class="absolute inset-0 bg-black bg-opacity-40"></div>
  <div class="relative max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 text-center text-white">
    <div>
      <span class="text-4xl font-bold counter" data-target="25">0</span><span class="text-4xl font-bold">+</span>
      <p class="mt-2">Years of Experience</p>
    </div>
    <div>
      <span class="text-4xl font-bold counter" data-target="150">0</span><span class="text-4xl font-bold">+</span>
      <p class="mt-2">Products</p>
    </div>
    <div>
      <span class="text-4xl font-bold counter" data-target="500">0</span><span class="text-4xl font-bold">+</span>
      <p class="mt-2">Happy Clients</p>
    </div>
    <div>
      <span class="text-4xl font-bold counter" data-target="120">0</span><span class="text-4xl font-bold">+</span>
      <p class="mt-2">Projects Completed</p>
    </div>
  </div>
</section>

<!-- Certificates Section -->
<div class="text-center mb-16 mt-11">
  <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900">
    <span class="relative">
      Product & Quality <span class="gradient-text text-transparent bg-clip-text">Certificates</span>
      <span class="absolute -bottom-1 left-0 w-full h-1 bg-gradient-to-r from-amber-400 via-amber-600 to-amber-400 rounded-full"></span>
    </span>
  </h2>
  <div class="mt-10 flex flex-col md:flex-row justify-center items-center gap-8">
    <div class="w-64 shadow-lg rounded-xl overflow-hidden border border-gray-200">
      <img src="assets/img/certificate1.jpg" alt="Certificate 1" class="w-full h-auto object-cover">
    </div>
    <div class="w-64 shadow-lg rounded-xl overflow-hidden border border-gray-200">
      <img src="assets/img/certificate2.jpg" alt="Certificate 2" class="w-full h-auto object-cover">
    </div>
  </div>
</div>

<!-- Footer -->
<footer>
<?php include 'assets/includes/footer.php'; ?>
</footer>

<!-- Counter JS -->
<script>
const counters = document.querySelectorAll('.counter');
const options = { root: null, threshold: 0.5 };

const startCounting = entry => {
  const counter = entry.target;
  const target = +counter.getAttribute('data-target');
  const duration = 2000;
  const increment = target / (duration / 16);
  let count = 0;

  const update = () => {
    count += increment;
    if(count < target) { counter.innerText = Math.ceil(count); requestAnimationFrame(update); }
    else counter.innerText = target;
  };
  update();
};

const observer = new IntersectionObserver((entries, obs) => {
  entries.forEach(entry => { if(entry.isIntersecting){ startCounting(entry); obs.unobserve(entry.target); } });
}, options);

counters.forEach(counter =>{
    observer.observe(counter);
  });


      </script>
     
      </body>
      </html>
    



