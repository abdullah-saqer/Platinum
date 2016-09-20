<!DOCTYPE html>
<?php
require("functions/connect.php");
require("functions/engine.php");
?>
<html lang="en">  
<head>
    <meta charset="utf-8">
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="javascript/header_bar.js"></script>
   
    
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate_css.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.imageLens.js"></script>
    <script type="text/javascript" src="javascript/view_item.js"></script>
    <!-- #endregion Jssor Slider End -->
    <title>Platinum</title>
    <link rel="stylesheet" type="text/css" href="css/view_item.css">
    <link rel="stylesheet" type="text/css" href="css/header_bar.css">
</head>
<body>
     <?php printNavBar();?>
     <span><br><br><br><br><br><br><br><br></span>
    
 <div id="body"><!--this body insted of the real body ,, for any reasons-->

<span id="share_flag">Share</span>

   <div id="share_item_section">
      <img id="share_icon" src="images/share.png" />
      <img id="facebook_icon" src="images/facebook.png" />
   </div>

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
             </div>

             <div id="content_section">

                  <div id="item_title_bar">
                    Lenovo Ideapad Flex 15
                  </div>
              
                  <div id="content_box">
                     <div id="item_picture_boxes">
                          <table><!-- Master photo -->
                                 <tr>
                                  <td colspan="3">
                                    <img src="nadeem.png" id="primary_photo" >
                                    <script type="text/javascript">
                                      $('#primary_photo').imageLens({
                                        lensSize:200,
                                        borderColor:"#b3b3ff"
                                      });
                                    </script>
                                  </td>
                                </tr>
                                <!-- -->
                             <tr>
                               <td id="photo_clickable"><img src="nadeem.png"></td>
                                <td id="photo_clickable"><img src="nadeem.png"></td>
                                 <td id="photo_clickable"><img src="nadeem.png"></td>
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
                     
                        <div id="add_to_cart_button_section">
                          <div></div>
                          <button title="add this item to cart" type="submit" onclick="alert('added to the cart')">Add To Cart</button>
                         
                        </div>
                        <!--
                        
                       -->
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
         
               
  

<?php printFooter();?>

</body>
</html>

