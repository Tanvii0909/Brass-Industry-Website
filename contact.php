<?php
session_start();
$success = false;

if (isset($_SESSION['sent']) && $_SESSION['sent'] === true) {
    $success = true;
    unset($_SESSION['sent']); // message ek hi baar dikhega
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Compaq Brass Industries</title>

      <!-- Favicon (basic browsers) -->
      <link rel="icon" href="favicon/favicon.ico" type="image/x-icon">

      <!-- Modern browsers -->
      <link rel="icon" href="favicon/favicon.ico" sizes="any">
      <link rel="icon" type="image/svg+xml" href="favicon/favicon.svg">

      <!-- Apple devices -->
      <link rel="apple-touch-icon" href="favicon/apple-touch-icon.png">

      <!-- Android / PWA -->
      <link rel="manifest" href="favicon/site.webmanifest">

    <!-- Tailwind -->
   <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Page Specific CSS -->
    <!-- Page Specific / Custom CSS (Bootstrap के बाद) -->
    <link href="assets/css/contact.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <link href="assets/css/loader.css" rel="stylesheet">
</head>

<header class="sticky top-0 z-50">
  <?php include 'assets/includes/header.php'; ?>
</header>
<body>

<?php include 'loader.php'; ?>

<!-- 🖼️ Full Width Responsive Image (No Cropping) -->

<div class="w-full h-auto sm:h-70 bg-white">
  <img src="assets/img/cus.jpg" alt="Compaq Brass" class="w-full h-auto object-contain"/>
</div>

      <!-- Heading -->
      <div class="text-center mt-12">
        <h2 class="text-3xl md:text-4xl font-bold mb-8 text-gray-900">
          <span class="relative">
            Get in <span class="bg-gradient-to-r from-[#1A237E] to-[#B71C1C] bg-clip-text text-transparent font-montserrat">Touch With Us</span>
            <span
              class="absolute -bottom-1 left-0 w-full h-1 bg-gradient-to-r from-amber-400 via-amber-600 to-amber-400 rounded-full"></span>
          </span>
        </h2>
        <p class="mt-4 text-lg text-gray-600 max-w-xl mx-auto">
          We are always here to help you. Contact us for product inquiries, custom solutions or support.
        </p>
      </div>

<!-- Main Contact Section -->
<section class="contact-section mt-4 w-full px-4 py-12 grid grid-cols-1 md:grid-cols-2 gap-8">
    <!-- Left Panel -->
    <div class="contact-in mx-auto w-full p-8 rounded-xl shadow-xl" data-aos="fade-right">
        <h2 class="text-3xl font-bold mb-6 text-white">Contact Information</h2>
        <p class="mb-4 flex items-center"><i class="fas fa-map-marker-alt mr-3"></i>PLOT NO: 3527 ROAD NO.G, GIDC, PHASE-III, DARED, JAMNAGAR - 361005 , GUJARAT, INDIA </p>
        <p class="mb-4 flex items-center"><i class="fas fa-envelope mr-3"></i>  <a href="mailto:info@compaqbrass.com" 
              class=" hover:text-blue-900 transition-colors duration-200">
              info@compaqbrass.com
          </a></p>
        <p class="mb-4 flex items-center"><i class="fas fa-phone-alt mr-3"></i><a href="tel:+91 7863016909" 
              class=" hover:text-blue-900 transition-colors duration-200">
              +91 78630 16909
            </a></p>
        <p class="flex items-center"><i class="fas fa-globe mr-3"></i>www.compaqbrass.com</p>
    </div>

    <!-- Right Form Panel -->
    <div class="bg-[#fdf8f2] p-10 rounded-xl shadow-xl border border-amber-200 space-y-6" data-aos="fade-left">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Send Us a Message</h2>
  

<?php if ($success): ?>
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        ✅ Your message has been sent successfully!
    </div>
<?php endif; ?>

<form action="email/send-mail.php" method="POST">
    <div class="mb-4">
        <label for="name" class="block text-sm font-semibold">Name</label>
        <input type="text" id="name" name="name" required class="w-full mt-1 p-3 border border-gray-300 rounded-lg">
    </div>
    <div class="mb-4">
        <label for="email" class="block text-sm font-semibold">Email</label>
        <input type="email" id="email" name="email" required 
               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
               class="w-full mt-1 p-3 border border-gray-300 rounded-lg">
    </div>
    <div class="mb-4">
        <label for="subject" class="block text-sm font-semibold">Subject</label>
        <input type="text" id="subject" name="subject" required class="w-full mt-1 p-3 border border-gray-300 rounded-lg">
    </div>
    <div class="mb-6">
        <label for="message" class="block text-sm font-semibold">Message</label>
        <textarea id="message" name="message" rows="5" required class="w-full mt-1 p-3 border border-gray-300 rounded-lg"></textarea>
    </div>
    <button type="submit" name="submit"
            class="bg-gradient-to-r from-amber-300 to-yellow-500 text-white py-3 px-6 rounded-lg shadow-md hover:shadow-xl transition-transform transform hover:scale-105">
        Send Message
    </button>
</form>

    </div>
</section>

<!-- Map Section -->
<section class="map-section w-full mx-auto px-4 pb-12" data-aos="zoom-in">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3688.2989937394714!2d70.04608164368823!3d22.41776950319768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395714ca43948fd5%3A0xacf475bb78155429!2sCompaq%20Brass%20Industries!5e0!3m2!1sen!2sin!4v1755844575789!5m2!1sen!2sin"
        width="100%" height="400" 
        style="border:0; border-radius: 12px;" 
        allowfullscreen="" loading="lazy">
    </iframe>
</section>

<footer>
  <?php include 'assets/includes/footer.php'; ?>
</footer>


<script>AOS.init();</script>
</body>
</html>
