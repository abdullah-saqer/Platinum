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

 // this line of code for setting the attribute (title) for latest items boxes..
 $('#latest_items_table tr td[rowspan="2"] , #latest_items_table tr td').attr('title',
  'Click to view this item');

 //.......
     var first_box = $('#item_box_data_first_box');
     var first_box_text = first_box.text().trim();
     var first_box_text_length = first_box_text.length;

     if(first_box_text_length >= 160){
        var new_text = (first_box_text.substr(0,140)+'...');
        first_box.text(new_text);
     }

     var boxes = $('#item_box_data*');

     boxes.each(function(){
           if($(this).text().trim().length >= 60){
              var box_text = $(this).text().trim();
              var new_text = (box_text.substr(0,60)+'...');
              $(this).text(new_text);
           }
     });

});


