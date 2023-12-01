const carousel = document.querySelector('.carousel');
let slideIndex = 0;
function nextSlide() {
    slideIndex++;
    if (slideIndex >= carousel.children.length) {
        slideIndex = 0;
    }
    updateCarousel();
}

function updateCarousel() {
    const slideWidth = carousel.children[0].offsetWidth;
    const offsetX = -slideIndex * slideWidth;
    carousel.style.transform = `translateX(${offsetX}px)`;
}

setInterval(nextSlide, 3000); // Change de diapositive toutes les 3 secondes