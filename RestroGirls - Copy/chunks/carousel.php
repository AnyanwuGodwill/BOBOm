<section class="hero-carousel">
  <!-- Carousel Container -->
  <div class="carousel-container">
    <!-- Slide 1 -->
    <div class="carousel-slide active" style="background-image: url('images/download.jpeg')">
      <div class="slide-overlay"></div>
      <div class="slide-content">
        <h2 class="slide-title">Authentic Regional Cuisine</h2>
        <p class="slide-description">Experience the rich flavors of our traditional northwest dishes</p>
        <a href="#" class="cta-button">Explore Menu</a>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-slide" style="background-image: url('images/banner3.jpg')">
      <div class="slide-overlay"></div>
      <div class="slide-content">
        <h2 class="slide-title">Coastal Specialties</h2>
        <p class="slide-description">Fresh seafood prepared with authentic littoral flavors</p>
        <a href="#" class="cta-button">View Specials</a>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-slide" style="background-image: url('images/fried_rice.jpeg')">
      <div class="slide-overlay"></div>
      <div class="slide-content">
        <h2 class="slide-title">Signature Dishes</h2>
        <p class="slide-description">Our chef's special creations you won't find anywhere else</p>
        <a href="#" class="cta-button">Chef's Selection</a>
      </div>
    </div>

    <!-- Slide 4 -->
    <div class="carousel-slide" style="background-image: url('images/banner1.png')">
      <div class="slide-overlay"></div>
      <div class="slide-content">
        <h2 class="slide-title">Seasonal Specials</h2>
        <p class="slide-description">Limited-time offerings featuring fresh, seasonal ingredients</p>
        <a href="#" class="cta-button">See What's New</a>
      </div>
    </div>

    <!-- Navigation Arrows -->
    <button class="carousel-arrow prev-arrow">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/>
      </svg>
    </button>
    <button class="carousel-arrow next-arrow">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
      </svg>
    </button>

    <!-- Indicators -->
    <div class="carousel-indicators">
      <span class="indicator active"></span>
      <span class="indicator"></span>
      <span class="indicator"></span>
      <span class="indicator"></span>
    </div>
  </div>
</section>

<style>
/* Base Styles */
.hero-carousel {
  position: relative;
  width: 100%;
  height: 80vh;
  max-height: 800px;
  overflow: hidden;
}

.carousel-container {
  position: relative;
  width: 100%;
  height: 100%;
}

.carousel-slide {
  position: absolute;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
  opacity: 0;
  transition: opacity 1s ease-in-out;
  display: flex;
  align-items: center;
  justify-content: center;
}

.carousel-slide.active {
  opacity: 1;
  z-index: 1;
}

.slide-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to bottom, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.6) 100%);
}

.slide-content {
  position: relative;
  z-index: 2;
  text-align: center;
  color: white;
  padding: 0 20px;
  max-width: 800px;
  transform: translateY(20px);
  transition: transform 0.5s ease;
}

.carousel-slide.active .slide-content {
  transform: translateY(0);
}

.slide-title {
  font-size: 3.5rem;
  font-weight: 700;
  margin-bottom: 1rem;
  text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
}

.slide-description {
  font-size: 1.5rem;
  margin-bottom: 2rem;
  text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
}

.cta-button {
  display: inline-block;
  padding: 12px 30px;
  background-color: #ee6e73;
  color: white;
  text-decoration: none;
  border-radius: 50px;
  font-weight: 600;
  transition: all 0.3s ease;
  box-shadow: 0 4px 15px rgba(0,0,0,0.2);
}

.cta-button:hover {
  background-color: #e53935;
  transform: translateY(-3px);
  box-shadow: 0 6px 20px rgba(0,0,0,0.3);
}

/* Navigation Arrows */
.carousel-arrow {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 50px;
  height: 50px;
  background: rgba(255,255,255,0.2);
  border: none;
  border-radius: 50%;
  cursor: pointer;
  z-index: 10;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
}

.carousel-arrow svg {
  width: 24px;
  height: 24px;
  fill: white;
}

.carousel-arrow:hover {
  background: rgba(255,255,255,0.4);
}

.prev-arrow {
  left: 30px;
}

.next-arrow {
  right: 30px;
}

/* Indicators */
.carousel-indicators {
  position: absolute;
  bottom: 30px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  gap: 10px;
  z-index: 10;
}

.indicator {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background: rgba(255,255,255,0.5);
  cursor: pointer;
  transition: all 0.3s ease;
}

.indicator.active {
  background: white;
  transform: scale(1.3);
}

/* Responsive Design */
@media (max-width: 768px) {
  .hero-carousel {
    height: 60vh;
  }
  
  .slide-title {
    font-size: 2.5rem;
  }
  
  .slide-description {
    font-size: 1.2rem;
  }
  
  .carousel-arrow {
    width: 40px;
    height: 40px;
  }
}

@media (max-width: 480px) {
  .hero-carousel {
    height: 50vh;
  }
  
  .slide-title {
    font-size: 2rem;
  }
  
  .carousel-arrow {
    display: none;
  }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const slides = document.querySelectorAll('.carousel-slide');
  const indicators = document.querySelectorAll('.indicator');
  const prevArrow = document.querySelector('.prev-arrow');
  const nextArrow = document.querySelector('.next-arrow');
  let currentIndex = 0;
  let intervalId;
  const slideInterval = 5000; // 5 seconds

  // Initialize carousel
  function showSlide(index) {
    slides.forEach(slide => slide.classList.remove('active'));
    indicators.forEach(indicator => indicator.classList.remove('active'));
    
    slides[index].classList.add('active');
    indicators[index].classList.add('active');
    currentIndex = index;
  }

  // Next slide
  function nextSlide() {
    let newIndex = (currentIndex + 1) % slides.length;
    showSlide(newIndex);
  }

  // Previous slide
  function prevSlide() {
    let newIndex = (currentIndex - 1 + slides.length) % slides.length;
    showSlide(newIndex);
  }

  // Start autoplay
  function startAutoplay() {
    intervalId = setInterval(nextSlide, slideInterval);
  }

  // Event listeners
  prevArrow.addEventListener('click', prevSlide);
  nextArrow.addEventListener('click', nextSlide);

  indicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
      clearInterval(intervalId);
      showSlide(index);
      startAutoplay();
    });
  });

  // Pause on hover
  const carousel = document.querySelector('.carousel-container');
  carousel.addEventListener('mouseenter', () => {
    clearInterval(intervalId);
  });

  carousel.addEventListener('mouseleave', startAutoplay);

  // Initialize
  showSlide(0);
  startAutoplay();
});
</script>