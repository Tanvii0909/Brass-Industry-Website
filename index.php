<?php
session_start();
$success = false;

if (isset($_SESSION['sent']) && $_SESSION['sent'] === true) {
    $success = true;
    unset($_SESSION['sent']); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Compaq Brass Industries - Leading Brass Components Manufacturer in India</title>

<!-- Favicon (basic browsers) -->
<link rel="icon" href="favicon/favicon.ico" type="image/x-icon">

<!-- Modern browsers -->
<link rel="icon" href="favicon/favicon.ico" sizes="any">
<link rel="icon" type="image/svg+xml" href="favicon/favicon.svg">

<!-- Apple devices -->
<link rel="apple-touch-icon" href="favicon/apple-touch-icon.png">

<!-- Android / PWA -->
<link rel="manifest" href="favicon/site.webmanifest">

<!-- Meta Description -->
<meta name="description" content="Compaq Brass Industries is a leading manufacturer of high-quality brass components and fittings in India. Exporting precision brass products worldwide.">

<!-- Meta Keywords -->
<meta name="keywords" content="brass components, brass fittings, brass parts manufacturer, brass industry India, brass exporters, precision brass parts">

<!-- Canonical URL -->
<link rel="canonical" href="https://www.compaqbrass.com/">

<!-- Tailwind -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

<!-- Icon Fonts -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheets -->
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

<!-- Bootstrap CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<!-- Custom CSS -->
<link href="assets/css/detail.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/custom.css" rel="stylesheet">
<link href="assets/css/loader.css" rel="stylesheet">

<!-- WOW.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>new WOW().init();</script>

<style>
body, header, section, .slide-container, .brass-effect { font-family: 'Poppins', sans-serif; }
/* Footer fonts stay original */
footer, .footer, .footer * { font-family: inherit !important; }
</style>
</head>
<body>

<header class="sticky top-0 z-50">
<?php include 'assets/includes/top-header.php'; ?> 
<?php include 'assets/includes/header.php'; ?>
</header>

<?php include 'loader.php'; ?>

<!-- Hero Section (EXACTLY PURANA STYLE, Mobile Content Adjusted) -->
<div class="relative overflow-hidden group font-[Poppins]">
  <div class="slide-container flex">
    <div class="slide min-w-full">
      <img src="assets/img/p.jpg" alt="Premium brass fittings and valves on display"
        class="w-full h-[160px] sm:h-[240px] md:h-[300px] lg:h-[380px] object-cover object-center">
    </div>
    <div class="slide min-w-full">
      <img src="assets/img/service6.jpg" alt="Industrial brass manufacturing process"
        class="w-full h-[160px] sm:h-[240px] md:h-[300px] lg:h-[380px] object-cover object-center">
    </div>
    <div class="slide min-w-full">
      <img src="assets/img/h1.jpg" alt="Quality control of brass components"
        class="w-full h-[160px] sm:h-[240px] md:h-[300px] lg:h-[380px] object-cover object-center ">
    </div>
  </div>

  <!-- Navigation arrows -->
  <button class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/30 hover:bg-white/50 rounded-full p-2 transition-all opacity-0 group-hover:opacity-100 z-10">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
  </button>
  <button class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/30 hover:bg-white/50 rounded-full p-2 transition-all opacity-0 group-hover:opacity-100 z-10">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
    </svg>
  </button>

  <!-- Text overlay -->
  <div class="absolute inset-0 bg-gradient-to-r from-gray-900/70 to-transparent flex items-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-16 py-4 sm:py-12 md:py-16 w-full">
      <!-- Heading -->
      <h1 class="text-xl sm:text-3xl md:text-5xl lg:text-6xl font-extrabold text-white mb-1 sm:mb-4 leading-snug tracking-tight">
        Precision Brass Components
      </h1>
      <!-- Paragraph -->
      <p class="text-[10px] sm:text-sm md:text-lg lg:text-xl text-gray-200 max-w-2xl mb-2 sm:mb-8 leading-relaxed">
        Industrial-strength brass solutions for demanding applications worldwide since 1998
      </p>
      <!-- Button -->
      <a href="product.php"
        class="brass-effect text-white px-4 py-3 sm:px-6 sm:py-3 rounded-md font-medium inline-flex items-center hover:scale-105 transition duration-300 text-xs sm:text-base">
        Explore Products
        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 sm:h-5 w-3 sm:w-5 ml-1 sm:ml-2" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
        </svg>
      </a>
    </div>
  </div>
</div>


<script>
document.addEventListener('DOMContentLoaded', function() {
  const slides = document.querySelectorAll('.slide');
  let currentSlide = 0;

  function showSlide(n) { slides.forEach(slide => slide.style.transform = `translateX(-${n*100}%)`); }

  function nextSlide() { currentSlide = (currentSlide+1) % slides.length; showSlide(currentSlide); }
  function prevSlide() { currentSlide = (currentSlide-1+slides.length)%slides.length; showSlide(currentSlide); }

  const prevBtn = document.querySelector('button[class*="left-4"]');
  const nextBtn = document.querySelector('button[class*="right-4"]');

  prevBtn.addEventListener('click', prevSlide);
  nextBtn.addEventListener('click', nextSlide);

  let interval = setInterval(nextSlide, 5000);
  const slider = document.querySelector('.group');
  slider.addEventListener('mouseenter', ()=>clearInterval(interval));
  slider.addEventListener('mouseleave', ()=>interval = setInterval(nextSlide,5000));
});
</script>

<!-- Sections -->
<?php include 'partials/about-section.php'; ?>

<section class="relative py-24 bg-fixed bg-center bg-cover" style="background-image: url('assets/img/quality.jpeg');">
  <!-- Overlay -->
  <div class="absolute inset-0 bg-black bg-opacity-50"></div>

  <!-- Content -->
  <div class="relative max-w-4xl mx-auto text-center text-white px-4">
    <h2 class="text-4xl md:text-5xl font-bold mb-4">
      Premium Quality Brass Products
    </h2>
    <p class="text-lg md:text-xl max-w-2xl mx-auto">
      We deliver top-notch brass fittings and accessories crafted with precision, 
      durability and unmatched excellence for every industry.
    </p>
  </div>
</section>

<?php include 'partials/products-section.php'; ?>
<?php include 'partials/services-section.php'; ?>
<?php include 'partials/quality-section.php'; ?>
<?php include 'partials/contact-section.php'; ?>

<!-- Assurance Section -->
<section class="bg-gradient-to-r from-gray-50 to-gray-200 py-16 mb-16">
<div class="max-w-6xl mx-auto px-4">
<h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800 tracking-wide">Our Assurance of Quality</h2>
<div class="grid grid-cols-2 md:grid-cols-4 gap-10 text-center">
  <div class="flex flex-col items-center bg-white rounded-2xl shadow-lg p-6 hover:shadow-2xl hover:-translate-y-2 transition duration-300">
    <img src="assets/img/q1.png" alt="Made in India" class="h-20 mb-4">
    <p class="text-lg text-gray-800 font-semibold">Made in India</p>
  </div>
  <div class="flex flex-col items-center bg-white rounded-2xl shadow-lg p-6 hover:shadow-2xl hover:-translate-y-2 transition duration-300">
    <img src="assets/img/q2.png" alt="ISO Certified" class="h-20 mb-4">
    <p class="text-lg text-gray-800 font-semibold">ISO Certified</p>
  </div>
  <div class="flex flex-col items-center bg-white rounded-2xl shadow-lg p-6 hover:shadow-2xl hover:-translate-y-2 transition duration-300">
    <img src="assets/img/q3.png" alt="Premium Quality" class="h-20 mb-4">
    <p class="text-lg text-gray-800 font-semibold">Premium Quality</p>
  </div>
  <div class="flex flex-col items-center bg-white rounded-2xl shadow-lg p-6 hover:shadow-2xl hover:-translate-y-2 transition duration-300">
    <img src="assets/img/q4.png" alt="Trusted Products" class="h-20 mb-4">
    <p class="text-lg text-gray-800 font-semibold">Trusted Worldwide</p>
  </div>
</div>
</div>
</section>

<!-- Footer -->
<?php include 'assets/includes/footer.php'; ?>

</body>
</html>
