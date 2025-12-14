(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('#back-to-top').fadeIn('slow');
        } else {
            $('#back-to-top').fadeOut('slow');
        }
    });
    $('#back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Portfolio isotope and filter
    var portfolioIsotope = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });
    $('#portfolio-flters li').on('click', function () {
        $("#portfolio-flters li").removeClass('active');
        $(this).addClass('active');

        portfolioIsotope.isotope({filter: $(this).data('filter')});
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: false,
        loop: true,
        nav: true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });

    
})(jQuery);


// JS from all <script> tags in your HTML

// WOW.js initialization
new WOW().init();

// Mobile menu toggle
document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menuToggle');
    const menu = document.getElementById('menu');
    if (menuToggle && menu) {
        menuToggle.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    }})

    // Hero slider
    const slides = document.querySelectorAll('.slide');
    let currentSlide = 0;
    function showSlide(n) {
        slides.forEach(slide => {
            slide.style.transform = `translateX(-${n * 100}%)`;
        });
    }
    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }
    const prevBtn = document.querySelector('button[class*="left-4"]');
    const nextBtn = document.querySelector('button[class*="right-4"]');
    if (prevBtn && nextBtn) {
        prevBtn.addEventListener('click', () => {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        });
        nextBtn.addEventListener('click', () => {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        });
    }
    let slideInterval = setInterval(nextSlide, 5000);
    const slider = document.querySelector('.group');
    if (slider) {
        slider.addEventListener('mouseenter', () => clearInterval(slideInterval));
        slider.addEventListener('mouseleave', () => {
            slideInterval = setInterval(nextSlide, 5000);
        });
    }

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Back to top button
    var backToTopButton = document.getElementById('back-to-top');
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTopButton.classList.remove('hidden');
        } else {
            backToTopButton.classList.add('hidden');
        }
    });
    if (backToTopButton) {
        backToTopButton.addEventListener('click', function() {
            window.scrollTo({top: 0, behavior: 'smooth'});
        });
    }

