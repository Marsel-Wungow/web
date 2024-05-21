// Function to toggle navigation menu on mobile devices
function toggleMenu() {
  const menu = document.querySelector('.flex-container');
  menu.classList.toggle('show-menu');
}

// Add event listener to menu button to toggle navigation menu
document.querySelector('.menu').addEventListener('click', toggleMenu);

// Smooth scrolling effect for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();

    const target = document.querySelector(this.getAttribute('href'));
    target.scrollIntoView({
      behavior: 'smooth'
    });

    // Highlight the clicked menu item
    document.querySelectorAll('.flex-container a').forEach(link => {
      link.classList.remove('active');
    });
    this.classList.add('active');
  });
});

// Close navigation menu when clicking outside of it
document.addEventListener('click', function (e) {
  const menu = document.querySelector('.flex-container');
  if (!menu.contains(e.target) && !e.target.classList.contains('menu')) {
    menu.classList.remove('show-menu');
  }
});

// Scroll to top button functionality
const scrollToTopButton = document.getElementById('scrollToTopButton');

function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
}

scrollToTopButton.addEventListener('click', scrollToTop);

// Show scroll to top button when scrolling down, hide when at top
window.addEventListener('scroll', function () {
  if (window.scrollY > 500) {
    scrollToTopButton.classList.add('show');
  } else {
    scrollToTopButton.classList.remove('show');
  }
});

let slideIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

function showSlide(index) {
  if (index >= totalSlides) {
    slideIndex = 0;
  } else if (index < 0) {
    slideIndex = totalSlides - 1;
  } else {
    slideIndex = index;
  }

  slides.forEach((slide, i) => {
    slide.style.display = (i === slideIndex) ? 'block' : 'none';
  });
}

// Event listeners for buttons
document.getElementById('prevSlide').addEventListener('click', () => {
  showSlide(slideIndex - 1);
});

document.getElementById('nextSlide').addEventListener('click', () => {
  showSlide(slideIndex + 1);
});

// Initialize the slider to show the first slide
showSlide(slideIndex);
