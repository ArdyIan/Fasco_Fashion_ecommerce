// CAROUSEL SLIDER

let currentSlide = 0;
const slides = document.querySelectorAll('.slider img');
const totalSlides = slides.length;

function showNextSlide() {
  currentSlide = (currentSlide + 1) % totalSlides;
  slides[currentSlide].scrollIntoView({ behavior: 'smooth'});
}

setInterval(showNextSlide, 3000);
