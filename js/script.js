let menu = document.querySelector('.fa-bars');
menu.style.color = "white";
menu.onclick = () => {
   menu.classList.toggle('fa-times');
};




// Disable hover animation on scroll!

(function () {
   let body = document.body,
      timer;

   if (!window.addEventListener || !body.classList) return;
   window.addEventListener('scroll', () => {
      clearTimeout(timer);
      if (!body.classList.contains('disable-hover')) {
         body.classList.add('disable-hover');
      }
      timer = setTimeout(function () {
         body.classList.remove('disable-hover');
      }, 250);
   }, false);
}());



// pop-overs
const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
// tooltip
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))




// Slider
const swiper = new Swiper(".slide-content", {
   slidesPerView: 3,
   spaceBetween: 25,
   loop: true,
   centerSlide: 'true',
   fade: 'true',
   grabCursor: 'true',
   mousewheel: true,
   pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
   },
   navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
   },

   breakpoints: {
      0: {
         slidesPerView: 1,
      },
      520: {
         slidesPerView: 2,
      },
      950: {
         slidesPerView: 3,
      },
   },
});
