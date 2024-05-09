/**
 * https://swiperjs.com/get-started(Documentacion)
 * 
 * Esto es para inicializar Swiper que es lo que hace que el slider funcione 
 * 
 * https://swiperjs.com/demos#navigation
 * En esta pagina hay muchos ejemplos de y te da el codigo para que puedar crear diferentes slider
 * y que cada uno sea mas personalisable
 * 
 */
// Initialize Swiper
 
const swiper = new Swiper('.swiper', { /* Slider menu principal */
    // Optional parameters
    //direction: 'vertical',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    mousewheel: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });


    var swiperCards = new Swiper(".mySwiperCards", {
      effect: "cards",
      grabCursor: true,
    });
