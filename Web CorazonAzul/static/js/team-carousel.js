// team-carousel.js

document.addEventListener('DOMContentLoaded', function() {
    var swiper = new Swiper('.custom-swiper-container', {
        slidesPerView: 3, // Número de tarjetas visibles
        spaceBetween: 60, // Espacio entre tarjetas en píxeles
        loop: true, // Habilitar loop infinito
        centeredSlides: true, // Centrar la tarjeta activa
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 5000, // Tiempo entre transiciones en milisegundos
            disableOnInteraction: false,
        },
        effect: 'coverflow', // Efecto de transición para destacar la tarjeta central
        coverflowEffect: {
            rotate: 0, // Rotación de las tarjetas laterales
            stretch: 0, // Estiramiento de las tarjetas
            depth: 100, // Profundidad de la perspectiva 3D
            modifier: 1, // Multiplicador para efectos
            slideShadows: false, // Deshabilitar sombras
        },
        keyboard: {
            enabled: true, // Habilitar navegación por teclado
            onlyInViewport: false,
        },
        lazy: {
            loadPrevNext: true, // Carga las imágenes previas y siguientes
        },
        breakpoints: {
            // Ajustes para pantallas grandes
            1200: {
                slidesPerView: 3,
                spaceBetween: 40,
                coverflowEffect: {
                    depth: 150,
                },
            },
            // Ajustes para pantallas medianas
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
                coverflowEffect: {
                    depth: 100,
                },
            },
            // Ajustes para pantallas pequeñas
            576: {
                slidesPerView: 1,
                spaceBetween: 10,
                coverflowEffect: {
                    depth: 50,
                },
            },
        },
    });
});


















