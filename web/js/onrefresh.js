
$(document).ready(function(){
if ($(".bar2") != null) {
  $('.bar2').slick({
	slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    infinite: true,
    speed: 1500,
   	autoplay: true,
 	autoplaySpeed: 2000,
});
}
});


$(window).bind('beforeunload', function(){
$('body').fadeTo(100, 0.9);
});