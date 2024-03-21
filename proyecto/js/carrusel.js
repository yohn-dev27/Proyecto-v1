document.addEventListener('DOMContentLoaded', function() {
    const masthead = document.querySelector('.masthead');
    const slides = document.createElement('div');
    slides.classList.add('masthead-slides');

    const images = ['carrusel1.png', 'carrusel2.png', '3.jpg']; // Lista de nombres de imágenes
    images.forEach(image => {
        const slide = document.createElement('div');
        slide.classList.add('masthead-slide');
        slide.style.backgroundImage = `url('assets/img/portfolio/${image}')`;
        slides.appendChild(slide);
    });

    masthead.appendChild(slides);
});
