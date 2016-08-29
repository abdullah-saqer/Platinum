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
    <link rel="stylesheet" type="text/css" href="css/index.css">
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
                 <!--
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
                -->
             </div>

             <div id="content_section">
                  <div id="item_title_bar">
                    Lenovo Ideapad Flex 15
                  </div>
                  <div id="content_box">
                     <div id="item_picture_boxes">
                          <table>
                             <tr><td colspan="3"><img src="nadeem.png"></td></tr>
                             <tr>
                               <td><img src="nadeem.png"></td>
                                <td><img src="nadeem.png"></td>
                                 <td><img src="nadeem.png"></td>
                             </tr>
                             <tr>
                               <td><img src="nadeem.png"></td>
                                <td><img src="nadeem.png"></td>
                                 <td><img src="nadeem.png"></td>
                             </tr>
                          </table>
                     </div>
                     <div id="item_info_box">
                        
                         <div id="item_info">
                            <table>
                               <tr>
                                 <th>Brand:</th>
                                 <td>Asus</td>
                               </tr>
                               <tr>
                                  <th>Product Code:</th>
                                  <td>G750JZ-T4004H</td>
                               </tr>
                               <tr>
                                  <th>Availability:</th>
                                  <td>Out Of Stock</td>
                               </tr>
                            </table>
                         </div>
                        
                         <div id="item_price_section"><span id="price">Price:</span> <del>1,970.00 JOD 1</del>,850.00 JOD </div>
                        
                         <div id="add_item_section">
                           <table>
                              <tr>
                                <th id="qunt">Quantity:</th>
                                <td><input type="number" value="1" min="1" max="100" id="quantity" /></td>
                              </tr>
                           </table>
                         </div>
                     
                        <div id="new_div">
                          <button type="submit" onclick="alert('wew')">Add To Cart</button>
                        </div>
                     
                     </div>
                  </div>
             </div>
                  
             <div id="description_section">
                  <div id="description_title_bar">Description</div>
                  <div id="description_box">
                    <table>
                      <tr>
                        <th>Mfr Part Number:</th>
                        <td>G750JZ-T4004H</td>
                      </tr>
                      <tr>
                        <th>Processor:</th>
                        <td>Intel Core i7-4700HQ Processor (2.4GHz Clock Speed, 3.4GHz Max Turbo, 6MB Intel Smart Cache, Quad-Core)</td>
                      </tr>
                      <tr>
                        <th>Chipset:</th>
                        <td> Intel HM87 Express</td>
                      </tr>
                      <tr>
                        <th>Memory:</th>
                        <td>32GB DDR3L-1600 SDRAM Memory, Max Capacity of 32GB</td>
                      </tr>
                      <tr>
                        <th>Display: </th>
                        <td>17.3" Full HD (1920 x 1080) Non-Glare Matte LCD Display w/ LED Backlight</td>
                      </tr>
                      <tr>
                        <th>Graphics Module: </th>
                        <td>NVIDIA GeForece GTX 880M w/ 4GB GDDR5 VRAM Video Memory</td>
                      </tr>
                      <tr>
                        <th>Hard Drive:</th>
                        <td>1.5TB 5400RPM Hard Drive + 256GB Solid State Drive (2x 128GB SSD RAID)</td>
                      </tr>
                      <tr>
                        <th>Optical Storage:</th>
                        <td>Integrated Blu-Ray Disc Reader</td>
                      </tr>
                      <tr>
                        <th>Audio: </th>
                        <td>Integrated Sound Card, Built-in Speakers, Subwoofer and Array Microphone</td>
                      </tr>
                      <tr>
                        <th>Connectivity:</th>
                        <td>Integrated Gigabit Ethernet; 802.11a/g/n (Killer LAN) Wireless LAN; Bluetooth 4.0</td>
                      </tr>
                    </table>
                  </div>           
             </div>        
        
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
=======
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
                 <!--
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
                -->
             </div>

             <div id="content_section">
                  <div id="item_title_bar">
                    Lenovo Ideapad Flex 15
                  </div>
                  <div id="content_box">
                     <div id="item_picture_boxes">
                          <table>
                             <tr><td colspan="3"><img src="nadeem.png"></td></tr>
                             <tr>
                               <td><img src="nadeem.png"></td>
                                <td><img src="nadeem.png"></td>
                                 <td><img src="nadeem.png"></td>
                             </tr>
                             <tr>
                               <td><img src="nadeem.png"></td>
                                <td><img src="nadeem.png"></td>
                                 <td><img src="nadeem.png"></td>
                             </tr>
                          </table>
                     </div>
                     <div id="item_info_box">
                        
                         <div id="item_info">
                            <table>
                               <tr>
                                 <th>Brand:</th>
                                 <td>Asus</td>
                               </tr>
                               <tr>
                                  <th>Product Code:</th>
                                  <td>G750JZ-T4004H</td>
                               </tr>
                               <tr>
                                  <th>Availability:</th>
                                  <td>Out Of Stock</td>
                               </tr>
                            </table>
                         </div>
                        
                         <div id="item_price_section"><span id="price">Price:</span> <del>1,970.00 JOD 1</del>,850.00 JOD </div>
                        
                         <div id="add_item_section">
                           <table>
                              <tr>
                                <th id="qunt">Quantity:</th>
                                <td><input type="number" value="1" min="1" max="100" id="quantity" /></td>
                              </tr>
                           </table>
                         </div>
                     
                        <div id="new_div">
                          <button type="submit" onclick="alert('wew')">Add To Cart</button>
                        </div>
                     
                     </div>
                  </div>
             </div>
                  
             <div id="description_section">
                  <div id="description_title_bar">Description</div>
                  <div id="description_box">
                    <table>
                      <tr>
                        <th>Mfr Part Number:</th>
                        <td>G750JZ-T4004H</td>
                      </tr>
                      <tr>
                        <th>Processor:</th>
                        <td>Intel Core i7-4700HQ Processor (2.4GHz Clock Speed, 3.4GHz Max Turbo, 6MB Intel Smart Cache, Quad-Core)</td>
                      </tr>
                      <tr>
                        <th>Chipset:</th>
                        <td> Intel HM87 Express</td>
                      </tr>
                      <tr>
                        <th>Memory:</th>
                        <td>32GB DDR3L-1600 SDRAM Memory, Max Capacity of 32GB</td>
                      </tr>
                      <tr>
                        <th>Display: </th>
                        <td>17.3" Full HD (1920 x 1080) Non-Glare Matte LCD Display w/ LED Backlight</td>
                      </tr>
                      <tr>
                        <th>Graphics Module: </th>
                        <td>NVIDIA GeForece GTX 880M w/ 4GB GDDR5 VRAM Video Memory</td>
                      </tr>
                      <tr>
                        <th>Hard Drive:</th>
                        <td>1.5TB 5400RPM Hard Drive + 256GB Solid State Drive (2x 128GB SSD RAID)</td>
                      </tr>
                      <tr>
                        <th>Optical Storage:</th>
                        <td>Integrated Blu-Ray Disc Reader</td>
                      </tr>
                      <tr>
                        <th>Audio: </th>
                        <td>Integrated Sound Card, Built-in Speakers, Subwoofer and Array Microphone</td>
                      </tr>
                      <tr>
                        <th>Connectivity:</th>
                        <td>Integrated Gigabit Ethernet; 802.11a/g/n (Killer LAN) Wireless LAN; Bluetooth 4.0</td>
                      </tr>
                    </table>
                  </div>           
             </div>        
        
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
>>>>>>> e966029305539973b0c7d48af86c79300d4b9d6e
