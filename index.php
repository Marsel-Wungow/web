<?php 
require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <nav>
    <h1>Welcome to My Website</h1>
    <div class="container-nav">
      <div class="menu">Home</div>
      <div class="flex-container">
        <div><a href="#About Me">About Me</a></div>
        <div><a href="#Gallery">Gallery</a></div>
        <div><a href="#blog">Blog</a></div>
        <div><a href="contact.php">Contact</a></div>
      </div>
    </div>
  </nav>
  <section>
    <header>
      <main>
        <h3 id="About Me">About Me</h3>
        <p>Hello, I'm Marsel Wungow</p>
        <p>Studying at the Engineering Faculty at Sam Ratulangi University | Informatics</p>
        <hr>
        <p>Don't make a reason to make a progress</p>
        <br>
        <h3 id="Gallery">Gallery</h3>
        <div class="slider">
          <div class="slide"><img src="img/Foto1.jpeg" alt="Foto1" class="responsive-image"></div>
          <div class="slide"><img src="img/Foto3.jpg" alt="Foto2" class="responsive-image"></div>
          <div class="slide"><img src="img/Foto2.jpg" alt="Foto3" class="responsive-image"></div>
        </div>
        <div class="slider-nav">
          <button id="prevSlide">&lt;</button>
          <button id="nextSlide">&gt;</button>
        </div>
        <br>
        <h3>Blog</h3>
        <div id="blog">
    <div class="blog-item">
        <img src="img/jagat_review_logo.png" alt="jagat_review">
        <p>Jagat Review adalah website yang membahas seputar perkembangan dan berita tentang gadget atau teknologi terbaru</p>
        <button><a href="https://www.jagatreview.com/" style="text-decoration: none; color: inherit;">More</a></button>
    </div>
    <div class="blog-item">
        <img src="https://nanoreview.net/favicon-32x32.png" alt="nano_review">
        <p>Nano review adalah website yang membahas mengenai perbandingan smartphone, laptop, cpu, dan menyediakan data terbaru mengenai urutan processor</p>
        <button><a href="https://nanoreview.net/" style="text-decoration: none; color: inherit;">More</a></button>
    </div>
    <div class="blog-item">
        <img src="img/gsm_arena.webp" alt="gsm_arena">
        <p>GSM Arena adalah website untuk membandingkan suatu smartphone berdasarkan spesifikasi lengkap yang dimiliki smartphone tersebut dan menyediakan berita terbaru mengenai smartphone yang akan rilis</p>
        <button><a href="https://www.gsmarena.com/" style="text-decoration: none; color: inherit;">More</a></button>
    </div>
</div>

        <br>
      </main>
    </header>
  </section>
  <button id="scrollToTopButton" title="UP">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
      <path fill="#42c8f5" d="M12 3L4 11h5v10h6V11h5z" />
    </svg>
  </button>
  <footer>
    <p> &#169; 2024 | Marsel Wungow</p>
  </footer>
  <script src="script.js"></script>
</body>

</html>