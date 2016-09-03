$(document).ready(function(){
    //this code bellow for display the dropdown menues <3 Meow :() 
    $('#order_items_by_button*').focusin(function(){
    	
    	var index = $('#order_items_by_button*').index(this);
         
        if(!index){
           $('#oib_menu*').eq(0).css('display','block');
        } 
        if(index){
           $('#oib_menu*').eq(1).css('display','block');
        } 
    }).focusout(function(){
    	$('#oib_menu*').css('display','none');
    });


    //display as list or grid code bellow .. :D <3 
    $('#dal_btn').on(function(){
        
          $('#display_items_box').removeClass('display_as_grid');
          $('#display_items_box').addClass('display_as_list');
          
      });
      $('#dag_btn').hover(function(){
          
          $('#display_items_box').removeClass('display_as_list');
          $('#display_items_box').addClass('display_as_grid');
          
      });
           
});



