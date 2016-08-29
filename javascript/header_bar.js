$(document).ready(function(){
	 navFlag=0;
	$(document).scroll(function(){
		var scrollVal=$(document).scrollTop();
		
		if(scrollVal>=100 && !navFlag){
			$("#navbar").animate({"height":"50px"},'fast');
			$("#logo_logo_logo").fadeOut("fast");
			$("#logo_logo").fadeIn("fast");
			$("#nav_down_section").css({"display":"none"});
			var left_cart_animation="17%";
			  if($(window).width()<700)
			  		left_cart_animation="28%";

			$("#cart").animate({"left":left_cart_animation,"top":"10px","fontSize":"25px"});
			$(".scroll_to_top").fadeIn();
			$("#arabic_label").fadeOut();
			$(".cart_info").css({"left":"5px"});
			$("#search").fadeIn('fast');
			$("#middle_search").animate({"top":"-40px"});
			$("#login_header_bar_icon").animate({"left":"13%","top":"18%"});
			$("#login_header").css({"display":"none"});
			$("#login_header_bar_icon").css({"fontSize":"25px"});
			navFlag=!navFlag;
		}
		else if(scrollVal<100 && navFlag){
				$("#navbar").animate({"height":"160px"},'fast');
				$("#logo_logo").fadeOut("fast");
				$("#logo_logo_logo").fadeIn("fast");
				$("#nav_down_section").css({"display":"block"});
					if($(window).width()<700)
						$("#cart").animate({"left":"88%","top":"65%","fontSize":"35px"});
						else $("#cart").animate({"left":"96%","top":"65%","fontSize":"35px"});
				$(".scroll_to_top").fadeOut();
				$("#arabic_label").fadeIn();
				$(".cart_info").css({"left":"-255px"});
				$("#search").fadeOut();
				$("#search_query").fadeOut('fast');
				$("#middle_search").animate({"top":"-30px"});
				$("#login_header_bar_icon").animate({"left":"90%","top":"65%"});
				$("#login_header_bar_icon").css({"fontSize":"33px"});
				navFlag=!navFlag;
				
			}
			
	});
	
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


$("#cart").click(function(){
	alert($(window).width());
});

$("#login_header_bar_icon").hover(function(){
	$("#login_header_bar_icon").addClass("animated jello");
	setTimeout(function(){
	 $("#login_header_bar_icon").removeClass("animated jello");
		 },1000);
});

var flag_header_login=false;
$("#login_header_bar_icon").click(function(){
	
	var box=$("#login_header");
	if(!flag_header_login){
		$(function () {
		box.fadeIn();
		box.animate({"left":"55%"},{queue:false});
		});
	}
	else{
		$(function () {
		box.animate({"left":"70%"},{queue:false});
		box.fadeOut("slow");
		});
	}
	flag_header_login=!flag_header_login;
});


});

