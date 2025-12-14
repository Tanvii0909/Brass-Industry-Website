<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>

<body>
    
<!-- Loader -->
<div id="loader-overlay">
  <div class="loader-logo">
    <img src="assets/img/compaqLOGO.jpg" alt="Logo">
    <div class="gold-ring"></div>
    <div class="sparkle"></div>
    <div class="sparkle"></div>
    <div class="sparkle"></div>
    <div class="sparkle"></div>
  </div>
  <div class="shine-text">Loading...</div>
</div>

<script>
  // Hide loader after page loads
  window.addEventListener("load", function() {
    setTimeout(function() {
      document.getElementById("loader-overlay").classList.add("hidden");
    }, 1000); // 1 seconds delay
  });
</script>

</body>
</html>
