// JavaScript for the background image slideshow
const slides = document.querySelectorAll('.mySlides');
let currentSlide = 0;

function showSlide() {
    slides.forEach(slide => {
        slide.style.opacity = 0;
    });
    slides[currentSlide].style.opacity = 1;

    currentSlide = (currentSlide + 1) % slides.length;
}

setInterval(showSlide, 2000); // Change slide every 2 seconds
