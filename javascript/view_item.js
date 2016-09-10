$(document).ready(function(){
 	
	$("#share_icon").hover(function(){
		$("#share_flag").fadeIn();
		$("#share_flag").removeClass("animated rotateOut");
		$("#share_flag").addClass("animated rotateIn");
	});	

	$("#share_icon").mouseout(function(){
		$("#share_flag").fadeOut();
		$("#share_flag").removeClass("animated rotateIn");
		$("#share_flag").addClass("animated rotateOut");
	});	

});