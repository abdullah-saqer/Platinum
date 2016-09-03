<!DOCTYPE html>
<?php
require("functions/connect.php");
require("functions/engine.php");
?>
<html lang="en">  
<head>
    <meta charset="utf-8">
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/header_bar.js"></script>

    <link rel="stylesheet" href="css/animate_css.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/view_item.css">
    <!--link rel="stylesheet" type="text/css" href="css/index.css">-->
    <link rel="stylesheet" type="text/css" href="css/header_bar.css">
    <!-- #endregion Jssor Slider End -->
    <title>Platinum</title>
    
    
</head>
<body>
  <?php printNavBar();?>
    
     <span><br><br><br><br><br><br><br><br></span>
    
 <div id="body"><!--this body insted of the real body ,, for any reasons-->
     <div id="container">
        
        <div id="left_side">
            
            <div id="ctgs_box">
               <div id="title">categories</div>
               <table id="ctgs_box_table">
                 <tr><td><a href="#">Laptops</a></td></tr>
                 <tr><td><a href="#">Mobiles</a></td></tr>
               </table>
            </div>
            
            <div id="fbb_box">
              <div id="title">Filter By Brand</div>
              <table id="fbb_box_table">
                 <tr><td><a href="#">item1</a></td></tr>
                 <tr><td><a href="#">item3</a></td></tr>
                 <tr><td><a href="#">item4</a></td></tr>
                 <tr><td><a href="#">item5</a></td></tr>
                 <tr><td><a href="#">item6</a></td></tr>
                 <tr><td><a href="#">item7</a></td></tr>
                 <tr><td><a href="#">item8</a></td></tr>
                 <tr><td><a href="#">item9</a></td></tr>
                 <tr><td><a href="#">item10</a></td></tr>
               </table>
            </div>
            
            <div id="mf_box">
               <div id="title">More Filters</div>
              <table id="mf_box_table">
                 <tr><td><a href="#">item1</a></td></tr>
                 <tr><td><a href="#">item3</a></td></tr>
                 <tr><td><a href="#">item4</a></td></tr>
                 <tr><td><a href="#"></a></td></tr>
               </table>
            </div>
        
        </div> 
        
        <div id="right_side">
          
             <div id="top_nav_bar">
              
               <nav id="directory">
                 <a href="#">Home</a> >
                 <a href="#">Laptops</a> >
                 <a href="#">Lenovo ideapad</a> >
                 <a href="#">Flex 15</a>
               </nav>
                 
              <div id="search_field">
                   <i class="fa fa-search" style="font-size:13px"></i>
                   <input type="search" placeholder="search item .." />
              </div>
             
             
              
             </div>

             <div id="items_display_section">
               
                <div id="top_control_section">
                      
                      <div id="display_items_as">
                         <button id="order_items_by_button">Display As</button>
                         <div id="oib_menu" > <!--oib stand for order items by-->
                           <a id="display_as_list_btn">List</a>
                           <a id="display_as_grid_btn">Gird</a>
                         </div>
                      </div>

                      <div id="order_items_by">
                         <button id="order_items_by_button">Order By</button>
                         <div id="oib_menu" > <!--oib stand for order items by-->
                           <a href="#">Manufacture</a>
                           <a href="#">Price</a>
                           <a href="#">Fuck me</a>
                         </div>
                      </div>
                    
                </div>
                <div id="display_items_box" class="display_as_list">
                    <div id="item_box_rec">
                       <div id="item_box_rec_name">Lenovo Ideapad Flex 15</div>
                       
                       <div id="item_box_rec_content">
                       
                          <div id="item_box_rec_img">
                            <img src="nadeem.png" />
                          </div>

                          <div id="item_box_rec_desc">
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                 From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                 From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                          </div>

                          <div id="item_box_rec_price">
                             <div>Price</div>
                             35.000 JOD
                          </div>

                          <div id="item_box_rec_atc">
                              <button id="item_atc_btn" title="Add item to cart">
                                <i class="fa fa-cart-plus" style="font-size:24px"></i>
                              </button>
                          </div>
                       </div>
                    </div>
                    <div id="item_box_rec">
                       <div id="item_box_rec_name">Lenovo Ideapad Flex 15</div>
                       
                       <div id="item_box_rec_content">
                       
                          <div id="item_box_rec_img">
                            <img src="nadeem.png" />
                          </div>

                          <div id="item_box_rec_desc">
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                 From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                 From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                          </div>

                          <div id="item_box_rec_price">
                             <div>Price</div>
                             35.000 JOD
                          </div>

                          <div id="item_box_rec_atc">
                              <button id="item_atc_btn" title="Add item to cart">
                                <i class="fa fa-cart-plus" style="font-size:24px"></i>
                              </button>
                          </div>
                       </div>
                    </div>
                    <div id="item_box_rec">
                       <div id="item_box_rec_name">Lenovo Ideapad Flex 15</div>
                       
                       <div id="item_box_rec_content">
                       
                          <div id="item_box_rec_img">
                            <img src="nadeem.png" />
                          </div>

                          <div id="item_box_rec_desc">
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                 From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                 From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                          </div>

                          <div id="item_box_rec_price">
                             <div>Price</div>
                             35.000 JOD
                          </div>

                          <div id="item_box_rec_atc">
                              <button id="item_atc_btn" title="Add item to cart">
                                <i class="fa fa-cart-plus" style="font-size:24px"></i>
                              </button>
                          </div>
                       </div>
                    </div>
                    <div id="item_box_rec">
                       <div id="item_box_rec_name">Lenovo Ideapad Flex 15</div>
                       
                       <div id="item_box_rec_content">
                       
                          <div id="item_box_rec_img">
                            <img src="nadeem.png" />
                          </div>

                          <div id="item_box_rec_desc">
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                 From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                 From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                          </div>

                          <div id="item_box_rec_price">
                             <div>Price</div>
                             35.000 JOD
                          </div>

                          <div id="item_box_rec_atc">
                              <button id="item_atc_btn" title="Add item to cart">
                                <i class="fa fa-cart-plus" style="font-size:24px"></i>
                              </button>
                          </div>
                       </div>
                    </div>
                    <div id="item_box_rec">
                       <div id="item_box_rec_name">Lenovo Ideapad Flex 15</div>
                       
                       <div id="item_box_rec_content">
                       
                          <div id="item_box_rec_img">
                            <img src="nadeem.png" />
                          </div>

                          <div id="item_box_rec_desc">
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                 From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                 From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                          </div>

                          <div id="item_box_rec_price">
                             <div>Price</div>
                             35.000 JOD
                          </div>

                          <div id="item_box_rec_atc">
                              <button id="item_atc_btn" title="Add item to cart">
                                <i class="fa fa-cart-plus" style="font-size:24px"></i>
                              </button>
                          </div>
                       </div>
                    </div>
                    <div id="item_box_rec">
                       <div id="item_box_rec_name">Lenovo Ideapad Flex 15</div>
                       
                       <div id="item_box_rec_content">
                       
                          <div id="item_box_rec_img">
                            <img src="nadeem.png" />
                          </div>

                          <div id="item_box_rec_desc">
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                 From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                 From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                          </div>

                          <div id="item_box_rec_price">
                             <div>Price</div>
                             35.000 JOD
                          </div>

                          <div id="item_box_rec_atc">
                              <button id="item_atc_btn" title="Add item to cart">
                                <i class="fa fa-cart-plus" style="font-size:24px"></i>
                              </button>
                          </div>
                       </div>
                    </div>
                    <div id="item_box_rec">
                       <div id="item_box_rec_name">Lenovo Ideapad Flex 15</div>
                       
                       <div id="item_box_rec_content">
                       
                          <div id="item_box_rec_img">
                            <img src="nadeem.png" />
                          </div>

                          <div id="item_box_rec_desc">
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                 From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                 From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                          </div>

                          <div id="item_box_rec_price">
                             <div>Price</div>
                             35.000 JOD
                          </div>

                          <div id="item_box_rec_atc">
                              <button id="item_atc_btn" title="Add item to cart">
                                <i class="fa fa-cart-plus" style="font-size:24px"></i>
                              </button>
                          </div>
                       </div>
                    </div>
                    <div id="item_box_rec">
                       <div id="item_box_rec_name">Lenovo Ideapad Flex 15</div>
                       
                       <div id="item_box_rec_content">
                       
                          <div id="item_box_rec_img">
                            <img src="nadeem.png" />
                          </div>

                          <div id="item_box_rec_desc">
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                 From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                 From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                          </div>

                          <div id="item_box_rec_price">
                             <div>Price</div>
                             35.000 JOD
                          </div>

                          <div id="item_box_rec_atc">
                              <button id="item_atc_btn" title="Add item to cart">
                                <i class="fa fa-cart-plus" style="font-size:24px"></i>
                              </button>
                          </div>
                       </div>
                    </div>
                    <div id="item_box_rec">
                       <div id="item_box_rec_name">Lenovo Ideapad Flex 15</div>
                       
                       <div id="item_box_rec_content">
                       
                          <div id="item_box_rec_img">
                            <img src="nadeem.png" />
                          </div>

                          <div id="item_box_rec_desc">
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                 From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                 From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                          </div>

                          <div id="item_box_rec_price">
                             <div>Price</div>
                             35.000 JOD
                          </div>

                          <div id="item_box_rec_atc">
                              <button id="item_atc_btn" title="Add item to cart">
                                <i class="fa fa-cart-plus" style="font-size:24px"></i>
                              </button>
                          </div>
                       </div>
                    </div>
                    <div id="item_box_rec">
                       <div id="item_box_rec_name">Lenovo Ideapad Flex 15</div>
                       
                       <div id="item_box_rec_content">
                       
                          <div id="item_box_rec_img">
                            <img src="nadeem.png" />
                          </div>

                          <div id="item_box_rec_desc">
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                 From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                 From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                          </div>

                          <div id="item_box_rec_price">
                             <div>Price</div>
                             35.000 JOD
                          </div>

                          <div id="item_box_rec_atc">
                              <button id="item_atc_btn" title="Add item to cart">
                                <i class="fa fa-cart-plus" style="font-size:24px"></i>
                              </button>
                          </div>
                       </div>
                    </div>
                    <div id="item_box_rec">
                       <div id="item_box_rec_name">Lenovo Ideapad Flex 15</div>
                       
                       <div id="item_box_rec_content">
                       
                          <div id="item_box_rec_img">
                            <img src="nadeem.png" />
                          </div>

                          <div id="item_box_rec_desc">
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                 From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                 From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                          </div>

                          <div id="item_box_rec_price">
                             <div>Price</div>
                             35.000 JOD
                          </div>

                          <div id="item_box_rec_atc">
                              <button id="item_atc_btn" title="Add item to cart">
                                <i class="fa fa-cart-plus" style="font-size:24px"></i>
                              </button>
                          </div>
                       </div>
                    </div>
                    <div id="item_box_rec">
                       <div id="item_box_rec_name">Lenovo Ideapad Flex 15</div>
                       
                       <div id="item_box_rec_content">
                       
                          <div id="item_box_rec_img">
                            <img src="nadeem.png" />
                          </div>

                          <div id="item_box_rec_desc">
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                 From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                                 From the Manufacturer http://www.kingston.com/en/hyperx/cloud#hscc .
                          </div>

                          <div id="item_box_rec_price">
                             <div>Price</div>
                             35.000 JOD
                          </div>

                          <div id="item_box_rec_atc">
                              <button id="item_atc_btn" title="Add item to cart">
                                <i class="fa fa-cart-plus" style="font-size:24px"></i>
                              </button>
                          </div>
                       </div>
                    </div>
                </div> 
             
                <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
                <script type="text/javascript">
                  $(document).ready(function(){
                    $('#display_as_list_btn').click(function(){
                       $('#display_items_box').removeClass('display_as_grid');
                       $('#display_items_box').addClass('display_as_list');
                    });
                     $('#display_as_grid_btn').click(function(){
                       $('#display_items_box').removeClass('display_as_list');
                       $('#display_items_box').addClass('display_as_grid');
                    });
                  });
                </script>  
             
             </div>
        </div>
      </div>
    </div>

<?php printFooter();?>

</body>
</html>
