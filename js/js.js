$(document).ready(function(){
   $('.carousel').carousel();

   $('.carousel').carousel();
   setInterval(function() {
     $('.carousel').carousel('next');
   }, 4500);
});

$('.carousel.carousel-slider').carousel({
   fullWidth: true,
   autoplay: true
 });
