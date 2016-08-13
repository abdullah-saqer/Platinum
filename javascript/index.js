$(document).ready(function(){
	 navFlag=0;
	$(document).scroll(function(){
		var scrollVal=$(document).scrollTop();
		
		if(scrollVal>=100 && !navFlag){
			$("#navbar").animate({"height":"50px"},'fast');
			$("#logo_logo_logo").fadeOut("fast");
			$("#logo_logo").fadeIn("fast");
			$("#nav_down_section").css({"display":"none"});
			$("#cart").animate({"left":"15%","top":"10px","fontSize":"25px"});
			$(".scroll_to_top").fadeIn();
			$("#arabic_label").fadeOut();
			$(".cart_info").css({"left":"5px"});
			$("#search").fadeIn('fast');
			$("#middle_search").animate({"top":"-40px"});
			navFlag=!navFlag;
		}
		else if(scrollVal<100 && navFlag){
				$("#navbar").animate({"height":"160px"},'fast');
				$("#logo_logo").fadeOut("fast");
				$("#logo_logo_logo").fadeIn("fast");
				$("#nav_down_section").css({"display":"block"});
				$("#cart").animate({"left":"96%","top":"110px","fontSize":"35px"});
				$(".scroll_to_top").fadeOut();
				$("#arabic_label").fadeIn();
				$(".cart_info").css({"left":"-200px"});
				$("#search").fadeOut();
				$("#search_query").fadeOut('fast');
				$("#middle_search").animate({"top":"-30px"});
				navFlag=!navFlag;
				
			}
			
	});
	

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


 //.on
 function checkSearch(){
 	var s=$("#middle_search_query").val();
 	if(!s.length)return;
 	alert(s);
 }

window.onkeydown=function(e){
		if(e.keyCode==13)
			checkSearch();
};
 $(".fa-search").click(function(){
 	checkSearch();
 });

$(".scroll_to_top").click(function(){
	$("html,body").animate({scrollTop:0},'normal');
});



});