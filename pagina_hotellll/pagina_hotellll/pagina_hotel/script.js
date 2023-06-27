
  //carrousel

const carouselSlide = document.querySelector(".carousel-slide");
const carouselImages = document.querySelectorAll(".carousel-slide img");
const prevButton = document.querySelector(".carousel-prev");
const nextButton = document.querySelector(".carousel-next");

let counter = 0;
const interval = 4000; // Cambiar cada 4 segundos

// Configurar el ancho del carrusel
carouselSlide.style.width = `${carouselImages.length * 70}%`;

// Función para cambiar a la siguiente imagen
const nextSlide = () => {
  if (counter === carouselImages.length - 1) {
    counter = 0;
  } else {
    counter++;
  }
  carouselSlide.style.transform = `translateX(-${counter * 33.33}%)`;
};

// Función para cambiar a la imagen anterior
const prevSlide = () => {
  if (counter === 0) {
    counter = carouselImages.length - 1;
  } else {
    counter--;
  }
  carouselSlide.style.transform = `translateX(-${counter * 33.33}%)`;
};

// Event listeners para los botones de flecha
nextButton.addEventListener("click", nextSlide);
prevButton.addEventListener("click", prevSlide);

// Intervalo para cambiar automáticamente las imágenes
setInterval(nextSlide, interval);











 
