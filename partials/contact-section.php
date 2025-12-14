<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Compaq Brass Industries</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Optional gradient text styling */
    .gradient-text {
      background-image: linear-gradient(to right, #d97706, #b45309, #d97706);
      -webkit-text-fill-color: transparent;
    }
  </style>
</head>
<body class="bg-white">

  <!-- Contact Us Section -->
  <section id="contact" class="py-20 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <!-- Heading -->
      <div class="text-center mb-14">
        <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900">
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

      <!-- Contact Info + Form -->
     <!-- Contact Info + Form -->
<div class="contact-section mt-4 w-full px-2 py-12 grid grid-cols-1 md:grid-cols-2 gap-6">


        <!-- Left: Contact Info -->
        <div
  class="bg-[#fdf8f2] p-10 rounded-xl shadow-xl border border-amber-300 backdrop-blur-md hover:scale-[1.02] transition duration-300">

  <h3 class="text-2xl font-semibold text-gray-800 mb-8">📍 Our Office</h3>

  <ul class="space-y-6 text-gray-800 text-base md:text-lg leading-relaxed">
    <li class="border-b border-amber-200 pb-4">
      <strong class="block text-gray-900">Address:</strong>
      <span class="mt-1 block">
        PLOT NO: 3527 ROAD NO.G, <br>
        GIDC, PHASE-III, DARED, <br>
        JAMNAGAR - 361005, <br>
        GUJARAT, INDIA
      </span>
    </li>

    <li class="border-b border-amber-200 pb-4">
      <strong class="block text-gray-900">Contact us:</strong>
      <a href="tel:+917863016909"
        class="mt-1 block hover:text-blue-900 transition-colors duration-200">
        +91 78630 16909
      </a>
    </li>

    <li>
      <strong class="block text-gray-900">Email:</strong>
      <a href="mailto:info@compaqbrass.com"
        class="mt-1 block hover:text-blue-900 transition-colors duration-200">
        info@compaqbrass.com
      </a>
    </li>
  </ul>
</div>


        <!-- Right: Contact Form -->
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

</body>
</html>
