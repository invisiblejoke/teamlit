$('.slider').slick({
  dots: true
});


$('.prev').click(function(){
  $(this).next().slick('slickPrev');
});