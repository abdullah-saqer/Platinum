$(document).ready(function(){
  displayFlag=1;

    $('.list-grid-toggle').click(function() {
    	if(!displayFlag){
    		$('#display_items_box').removeClass('display_as_grid');
   	   		$('#display_items_box').addClass('display_as_list');
    	}
    	else{
    		$('#display_items_box').removeClass('display_as_list');
   	   		$('#display_items_box').addClass('display_as_grid');
    	}

		  var txt = $(".icon").hasClass('icon-grid') ? 'List' : 'Grid';
		  $('.icon').toggleClass('icon-grid');
		  $(".label").text(txt);

		  displayFlag=!displayFlag;
	});
  

});