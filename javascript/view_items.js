$(document).ready(function(){
   
   //this code bellow to change the display of the items boxes list or grid
   $('#dal_btn').click(function(){
   	   $('#display_items_box').removeClass('display_as_grid');
   	   $('#display_items_box').addClass('display_as_list');
   });

    $('#dag_btn').click(function(){
       $('#display_items_box').removeClass('display_as_list');
   	   $('#display_items_box').addClass('display_as_grid');
   });
  

});