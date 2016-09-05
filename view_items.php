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
    <script type="text/javascript" src="javascript/view_items.js"></script>
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
            <?php
              printCategoriesLeftBox();
              printFilterBrandLeftBox();
              printMoreFilterLeftBox();
            ?>
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
                      <!--
                      <div id="display_items_as">
                         <div id="dal_btn">
                           <img src="img/list_icon.png">
                         </div>
                          <div id="dag_btn">
                            <img src="img/grid_icon.png">
                          </div>
                      </div>-->

                      <div id="order_items_by">
                         <button id="order_items_by_button">Order By</button>
                         <div id="oib_menu" > <!--oib stand for order items by-->
                           <div>Manufacture</div>
                           <div>Price</div>
                           <div>Fuck me</div>
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
                                From the Manufacturer http://www.kingston.com/en/hyperx/
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
             
             
             </div>
        </div>
      </div>
    </div>

<?php printFooter();?>

</body>
</html>
