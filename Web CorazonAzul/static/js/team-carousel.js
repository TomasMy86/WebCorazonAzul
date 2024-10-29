let currentIndex = 0; // Inicializa el índice en 0

function moveCarousel(direction) {
    console.log("Función moveCarousel llamada con dirección:", direction);

    const carouselItems = document.querySelector('.carousel-items');
    const itemWidth = document.querySelector('.team-card').offsetWidth; // Ancho de una tarjeta
    const items = document.querySelectorAll('.team-card');
    const totalItems = items.length;

    // Actualiza currentIndex de acuerdo a la dirección
    currentIndex += direction;

    // Corrige el índice si está fuera del rango total de elementos
    if (currentIndex < 0) {
        currentIndex = totalItems - 3;
    } else if (currentIndex > totalItems - 3) {
        currentIndex = 0;
    }

    // Calcula el desplazamiento en píxeles
    const offset = currentIndex * -itemWidth; // Desplaza según el ancho de cada tarjeta
    console.log("Offset calculado en píxeles:", offset);

    // Aplica el desplazamiento a .carousel-items
    carouselItems.style.transform = `translateX(${offset}px)`;

    // Ajusta opacidad y escala para centrar la tarjeta deseada
    items.forEach((item, index) => {
        item.style.opacity = "0.5";
        item.style.transform = "scale(0.9)";
    });

    // Resalta la tarjeta central
    const centerIndex = currentIndex + 1; // La tarjeta central es la segunda en vista
    if (items[centerIndex]) {
        items[centerIndex].style.opacity = "1";
        items[centerIndex].style.transform = "scale(1)";
    }
}