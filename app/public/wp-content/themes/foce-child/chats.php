
<!-- Swiper -->
<div class="main-character">
    <h3>Les personnages</h3>
    </div>
    <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
      <img src="<?php echo get_stylesheet_directory_uri() . '/media/images/Kawaneko1.png'; ?>"> 
      </div>
      <div class="swiper-slide">
      <img src="<?php echo get_stylesheet_directory_uri() . '/media/images/Orenjiiro2.png'; ?>"> 
      </div>
      <div class="swiper-slide">
      <img src="<?php echo get_stylesheet_directory_uri() . '/media/images/Pinku3.png'; ?>"> 
      </div>
      <div class="swiper-slide">
      <img src="<?php echo get_stylesheet_directory_uri() . '/media/images/Tenshi4.png'; ?>"> 
      </div>
      <div class="swiper-slide">
      <img src="<?php echo get_stylesheet_directory_uri() . '/media/images/Jaakuna5.png'; ?>"> 
      </div>
    </div>
    </div>

    <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>