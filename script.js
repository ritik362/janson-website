document.addEventListener('DOMContentLoaded', () => {
    // 1. Mobile Menu Toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const navSearchContainer = document.querySelector('.nav-search-container');

    menuToggle.addEventListener('click', () => {
        navSearchContainer.classList.toggle('active');
        const icon = menuToggle.querySelector('i');
        // Toggle between bars and times icon
        if (navSearchContainer.classList.contains('active')) {
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-times');
        } else {
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        }
    });

    // 2. Hero Slider Functionality
    const slidesContainer = document.querySelector('.slides');
    const slides = document.querySelectorAll('.slide');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    const dots = document.querySelectorAll('.slider-dot');
    let currentIndex = 0;
    let slideInterval;

    const updateSlider = (index) => {
        slidesContainer.style.transform = `translateX(-${index * 100}%)`;
        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === index);
        });
        currentIndex = index;
    };

    const nextSlide = () => {
        currentIndex = (currentIndex + 1) % slides.length;
        updateSlider(currentIndex);
    };

    const prevSlide = () => {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        updateSlider(currentIndex);
    };

    // Event Listeners for controls
    nextBtn.addEventListener('click', () => {
        nextSlide();
        resetAutoSlide();
    });
    prevBtn.addEventListener('click', () => {
        prevSlide();
        resetAutoSlide();
    });
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            updateSlider(index);
            resetAutoSlide();
        });
    });

    // Auto Slide
    const startAutoSlide = () => {
        slideInterval = setInterval(nextSlide, 7000); // Change slide every 7 seconds
    };

    const resetAutoSlide = () => {
        clearInterval(slideInterval);
        startAutoSlide();
    };

    // Initialize Slider
    updateSlider(currentIndex);
    startAutoSlide();
});


document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".about-ganpati-counter");
  let counted = false;

  const counterSection = document.querySelector(".about-ganpati-stats");

  function runCounter() {
    counters.forEach((counter) => {
      const target = +counter.getAttribute("data-target");
      const increment = target / 200; // smooth animation
      let count = 0;

      const updateCounter = () => {
        count += increment;
        if (count < target) {
          counter.textContent = Math.ceil(count);
          requestAnimationFrame(updateCounter);
        } else {
          counter.textContent = target;
        }
      };
      updateCounter();
    });
  }

  function checkScroll() {
    const rect = counterSection.getBoundingClientRect();
    if (rect.top < window.innerHeight - 100 && !counted) {
      counted = true;
      runCounter();
    }
  }

  window.addEventListener("scroll", checkScroll);
});