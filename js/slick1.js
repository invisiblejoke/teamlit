$('.slider').slick({
  dots: true
});

$('.next').click(function(){
  $(this).prev().slick('slickNext');
});