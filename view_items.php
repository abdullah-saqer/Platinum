<!DOCTYPE html>
<?php
require("functions/connect.php");
require("functions/engine.php");
?>
<html lang="en">  
<head>
    <meta charset="utf-8">
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="javascript/index.js"></script>
     <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    <!-- #endregion Jssor Slider End -->
    <title>Platinum</title>
    <link rel="stylesheet" type="text/css" href="css/view_item.css">
    <?php printNavBar();?>
</head>
<body>
    
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
             
              <div id="order_section">
                     <button type="button" id="drop_dwon_button">Order By</button>
                     <div id="drop_donw_menu_content" >
                       <a href="#">Manufacture</a>
                       <a href="#">Price</a>
                       <a href="#">Fuck me</a>
                     </div>
              </div>
              
             </div>

             <div id="items_display_section">
                <div id="top_control_section">
                   
                   <div id="d_word">Display As : </div>
                   <div>
                     <table>
                       <tr>
                         <td>
                            <button type="button" id="display_as_list_btn">List</button>
                         </td>
                         <td>
                           <button type="button" id="display_as_grid_btn">Grid</button>
                         </td>
                       </tr>
                     </table>
                   </div>
                   
                   <div>
                     <span id="sb_word">Sort By</span>
                     <select id="sort_by_ops">
                       <option id="">-Default-</option>
                       <option id="">Name (A-Z)</option>
                       <option id="">Name (Z-A)</option>
                       <option id="">Price low < high </option>
                       <option id="">Price low > high</option>
                       <option id="">Model (A-Z)</option>
                       <option id="">Model (Z-A)</option>
                     </select>
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

<footer id="bottom_footer"> 
     
      <table id="footer_lists_table">
        <tr>
          <td>
            <ul> <span>Nadeem Salah</span>
                <li><a href="#">List item 1 wewewewew</a></li>
                <li><a href="#">List item 2wewewewew</a></li>
                <li><a href="#">List item 3wewewewewe</a></li>
                <li><a href="#">List item 4wewewewe</a></li>
            </ul>
          </td>
           <td>
            <ul>  <span>Montaser Qasem</span>
                <li><a href="#">List item 1ewewewewe</a></li>
                <li><a href="#">List item 2wewewewe</a></li>
                <li><a href="#">List item 3wewewewewe</a></li>
                <li><a href="#">List item 4wewewewewewewe</a></li>
            </ul>
          </td>
            <td>
            <ul> <span>Ahmad Wewewe</span>
                <li><a href="#">List item 1wewewewewewewe</a></li>
                <li><a href="#">List item 2wewewewewe</a></li>
                <li><a href="#">List item 3wewewewewewe</a></li>
                <li><a href="#">List item 4ewewewewewewe</a></li>
            </ul>
          </td>
        </tr>
      </table>

      <div id="subscribe_section">
         <p>Subscribe to the dark side</p>
        <form action="#" method="POST" id="subscribe_from">
               
          <input type="email" name="subscriber_email" id="subscriber_email" placeholder="put your E-mail to get our lastest offers.">
          <input type="submit" value="Subscribe">
            
        </form>
         
      </div>

     <div id="copy_right">All Rights Reserved &copy; Platinum-jo (2016) .</div>

    </footer>

</body>
</html>
