<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AID OF ANGELS</title>
    <link rel="icon" type="image/x-icon" href="/img/logo.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/css/seemore.css">
       
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <a class="navbar-brand" href="#">
          <img src="/img/logo.png" alt="Brand Logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav" style="color: white;">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Services</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
              </li>
          </ul>
      </div>
  </nav>
  

  <!-- Hero Section -->
<section id="home" class="relative hero-bg hero-container">
    <div class="hero-overlay flex flex-col justify-center items-center text-white">
        <h1 class="hero-title">Our Story<br> 
            <p>Our Journey, Mission and Vision</p></h1> 
        <button class="arrow arrow-left" onclick="prevSlide()">&#9664;</button>
        <div class="carousel-container">
            
            <div class="carousel" id="carousel">
              <img src="/img/pic2.png" alt="Image 1">
              <img src="/img/pic3.png" alt="Image 2">
              <img src="/img/pic4.png" alt="Image 3">
              <img src="/img/pic2.png" alt="Image 4">
              <img src="/img/pic3.png" alt="Image 5">
              <img src="https://via.placeholder.com/300?text=Image+6" alt="Image 6">
            </div>
          
            
          </div>
          <button class="arrow arrow-right" onclick="nextSlide()">&#9654;</button>
        </div>
        
    </div>
</section>


<div class="container">
    <div class="mission-vision">
      <div class="mission">
        <h2>Mission</h2>
        <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Vitae eget porttitor egestas; senectus fusce sapien. Nam fusce proin fames et nascetur lobortis curabitur. Aornare ipsum mauris id eros. Lorem ipsum odor amet, consectetuer adipiscing elit. Vitae eget porttitor egestas; senectus fusce sapien. Nam fusce proin fames et nascetur lobortis curabitur. Aornare ipsum mauris id eros.</p>
      </div>
      <div class="vision">
        <h2>Vision</h2>
        <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Vitae eget porttitor egestas; senectus fusce sapien. Nam fusce proin fames et nascetur lobortis curabitur. Aornare ipsum mauris id eros. Lorem ipsum odor amet, consectetuer adipiscing elit. Vitae eget porttitor egestas; senectus fusce sapien. Nam fusce proin fames et nascetur lobortis curabitur. Aornare ipsum mauris id eros.</p>
      </div>
    </div>

    <div class="pictures">
      <h2>Documentary Pictures</h2>
      <div class="picture-grid">
        <img src="/img/pic2.png" alt="Documentary Picture 1" class="large">
        <img src="/img/pic3.png" alt="Documentary Picture 2" class="medium">
        <img src="/img/pic2.png  " alt="Documentary Picture 3" class="small">
        <img src="/img/pic2.png" alt="Documentary Picture 4" class="small">
        <img src="/img/pic4.png" alt="Documentary Picture 6" class="medium">
        <img src="/img/pic3.png" alt="Documentary Picture 5" class="small">
        <img src="/img/pic3.png" alt="Documentary Picture 6" class="medium">
        
      </div>
    </div>
  </div>


<section class="py-12 bg-white process-container">
    <div class="container mx-auto flex flex-col lg:flex-row items-center">
        <div class="lg:w-1/2 text-content2">
            <h2 class="process-heading">Philosophy</h2>
            <p class="process-text">Lorem ipsum odor amet, consectetuer adipiscing elit. Vitae eget porttitor egestas; senectus fusce sapien. Nam fusce proin fames et nascetur lobortis curabitur. Aornare ipsum mauris id eros. Lorem ipsum odor amet, consectetuer adipiscing elit. Vitae eget porttitor egestas; senectus fusce sapien. Nam fusce proin fames et nascetur lobortis curabitur. Aornare ipsum mauris id eros.</p>
        </div>
        <div class="lg:w-1/2 image-wrapper lg:pl-12 mt-8 lg:mt-0">
            <img src="/img/pic3.png" alt="Educational toys and diagnostic tools" class="process-image">
        </div>
    </div>
</section>
<!-- Footer -->
<footer>
    <div class="footer-container">
        <div class="footer-logo">
            <img src="/img/logo.png" alt="Aid of Angels Logo" />
            <p>&copy; 2024 Aid of Angels, Inc. All rights reserved.</p>
        </div>

        <div class="footer-links">
            <div class="footer-column">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3>Resources</h3>
                <ul>
                    <li><a href="#">Autism Information</a></li>
                    <li><a href="#">Therapy Guides</a></li>
                    <li><a href="#">Location & Directions</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3>Connect With Us</h3>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

 

<script>
  $(window).scroll(function() {
    if ($(this).scrollTop() > 50) {
        $('.navbar').addClass('scrolled');
    } else {
        $('.navbar').removeClass('scrolled');
    }
});

    const carousel = document.getElementById('carousel');
  const totalImages = carousel.children.length;
  let currentIndex = 3; 

  function updateCarousel() {
    const offset = -currentIndex * (300 + 20);
  }

  function nextSlide() {
    currentIndex++;
    if (currentIndex >= totalImages - 2) {
      // Move the first image to the end
      carousel.appendChild(carousel.firstElementChild);
      currentIndex--; // Stay on the current image
    }
    updateCarousel();
  }

  function prevSlide() {
    currentIndex--;
    if (currentIndex < 1) {
      // Move the last image to the front
      carousel.insertBefore(carousel.lastElementChild, carousel.firstElementChild);
      currentIndex++; // Stay on the current image
    }
    updateCarousel();
  }
  updateCarousel(); 
</script>
</body>
</html>