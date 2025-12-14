<link href="assets/css/style.css" rel="stylesheet">

<!-- Contact CTA Section -->
<div class="contact-cta" style="background-color:#0d6efd; padding: 30px 15px;">

            <div class="contact-cta-container">
                <h2>Compaq Brass</h2>
                <p>If you have any questions regarding our products or services, please contact us</p>
                <a href="contact.php" class="contact-button">Get Quote</a>
            </div>
    </div>
</div>

<footer class="contact">
  <div class="footer-container max-w-7xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-3 gap-8">
    
    <!-- Logo & Tagline -->
    <div class="footer-logo space-y-4 text-center md:text-left">
      <div class="logo-container flex items-center justify-center md:justify-start space-x-6">
        <img src="assets/img/compaqLOGO.jpg"
          class="rounded-full border-2 border-white shadow-2xl"
          style="width: 72px; height: 70px; object-fit: cover;">
        <span class="company-name font-bold text-3xl tracking-wide">
          Compaq Brass
        </span>
      </div>
      <p class="company-tagline text-md font-medium opacity-90">
        Leading manufacturer of high-quality brass products since 1998.
        Manufacture and export Brass, Bathroom Fitting, Precision Part, Brass CP Fitting Parts &  Specialist of Sanitary Parts.
      </p>
    </div>

    <!-- Quick Links -->
    <div class="footer-links text-center md:text-left">
      <h3 class="font-semibold text-lg mb-4 border-b border-yellow-600 pb-2">Quick Links</h3>
      <ul class="space-y-2">
        <li><a href="index.php" class="hover:underline">Home</a></li>
        <li><a href="about.php" class="hover:underline">About Us</a></li>
        <li><a href="product.php" class="hover:underline">Products</a></li>
        <li><a href="service.php" class="hover:underline">Quality</a></li>
        <li><a href="contact.php" class="hover:underline">Contact</a></li>
      </ul>
    </div>

    <!-- Contact Info -->
    <div class="footer-contact text-center md:text-left">
      <h3 class="font-semibold text-lg mb-4 border-b border-yellow-600 pb-2">Our Office</h3>
      <div class="contact-info space-y-3">
        
        <div class="contact-item flex items-start space-x-3 justify-center md:justify-start">
          <span class="text-2xl">📍</span>
          <div class="text-sm">
            <p>Plot No.3527, Road No.G, GIDC</p>
            <p>Phase-3, Dared, Jamnagar-04</p>
          </div>
        </div>

        <div class="contact-item flex items-center space-x-3">
          <span class="text-2xl">📞</span>
          <div class="flex flex-col">
            <a href="tel:+91 9824457054" 
              class="hover:underline hover:text-yellow-300 transition-colors duration-200">
              +91 98244 57054
            </a>
            <a href="tel:+91 7863016909" 
              class="hover:underline hover:text-yellow-300 transition-colors duration-200">
              +91 78630 16909
            </a>
          </div>
        </div>



        <div class="contact-item flex items-center space-x-3 justify-center md:justify-start">
          <span class="text-2xl">✉️</span>
          <a href="mailto:info@compaqbrass.com" 
              class="hover:underline hover:text-yellow-300 transition-colors duration-200">
              info@compaqbrass.com
          </a>
        </div>

      </div>
    </div>
  </div>

  <!-- Bottom Bar -->
  <div class="contact-cta text-center" style="padding: 5px;">
    <p class="text-sm">&copy; Compaq Brass – 2025</p>
  </div>
</footer>

<!-- Back to Top Button -->
<button id="back-to-top" 
    class="hidden fixed bottom-8 right-8 bg-amber-600 text-white p-3 rounded-full shadow-lg transition duration-300 hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
    style="position: fixed; z-index: 100;">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
    </svg>
</button>

<script>
    // Show/Hide Back to Top Button
    window.addEventListener('scroll', function() {
        const backToTopButton = document.getElementById('back-to-top');
        if (window.pageYOffset > 300) {
            backToTopButton.classList.remove('hidden');
        } else {
            backToTopButton.classList.add('hidden');
        }
    });

    // Scroll Smooth to Top
    document.getElementById('back-to-top').addEventListener('click', function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>
