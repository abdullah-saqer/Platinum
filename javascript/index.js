$(document).ready(function(){

$('.center').slick({
  dots: false,
  infinite: false,
  speed:300,
  slidesToShow: 3,
  slidesToScroll: 4,
  autoplay:true,
  autoplaySpeed: 5000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false,
        slickPrev:false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        slickPrev:false
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        slickPrev:false
      }
    }
  ]
});


$(".slick-prev").css({
	"display":"block",
	"position":"relative",
	"top":"200px",
	"left":"-85px"

});
$(".slick-next").css({
	"display":"block",
	"position":"relative",
	"top":"-320px",
	"left":"1140px"

});
$(".slick-next").html("");
$(".slick-next").html('<i class="fa fa-angle-right" ></i>');
$(".slick-prev").html("");
$(".slick-prev").html('<i class="fa fa-angle-left" ></i>');

});


