const swiper = new Swiper('.swiper', {
    loop: true,
    slidesPerView: 8,
    spaceBetween: 10,
    centeredSlides: true,
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    breakpoints: {
      1800: {
        slidesPerView: 6,
      },
      1000: {
          slidesPerView: 5,
      },
      600: {
        slidesPerView: 4,
      },
      240: {
        slidesPerView: 3,
      },
    },
});