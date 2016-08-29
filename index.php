<!DOCTYPE html>
<?php
require("functions/connect.php");
require("functions/engine.php");
?>
<html>  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" href="css/animate_css.css">
    <script type="text/javascript" src="javascript/header_bar.js"></script>
    <title>Platinum</title>
</head>
<body style="padding:0px; margin:0px;font-family:Arial, sans-serif">
    <?php printNavBar();?>
    <span><br><br><br><br><br><br><br><br></span>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideoTransitions = [
              [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
              [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
              [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
              [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
              [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
        });
    </script>

    <style>
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>


    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/red.jpg" />
                <div style="position: absolute; top: 30px; left: 30px; width: 480px; height: 120px; font-size: 50px; color: #ffffff; line-height: 60px;"><br>TOUCH SWIPE SLIDER</div>
                <div style="position: absolute; top: 300px; left: 30px; width: 480px; height: 120px; font-size: 30px; color: #ffffff; line-height: 38px;">Build your slider with anything, includes image, content, text, html, photo, picture</div>
                <div data-u="caption" data-t="0" style="position: absolute; top: 100px; left: 600px; width: 445px; height: 300px;">
                    <img style="position: absolute; top: 0px; left: 0px; width: 445px; height: 300px;" src="img/c-phone.png" />
                    <img data-u="caption" data-t="1" style="position: absolute; top: 70px; left: 130px; width: 102px; height: 78px;" src="img/c-jssor-slider.png" />
                    <img data-u="caption" data-t="2" style="position: absolute; top: 153px; left: 163px; width: 80px; height: 53px;" src="img/c-text.png" />
                    <img data-u="caption" data-t="3" style="position: absolute; top: 60px; left: 220px; width: 140px; height: 90px;" src="img/c-fruit.png" />
                    <img data-u="caption" data-t="4" style="position: absolute; top: -123px; left: 121px; width: 200px; height: 155px;" src="img/c-navigator.png" />
                </div>
                <div data-u="caption" data-t="5" style="position: absolute; top: 120px; left: 650px; width: 470px; height: 220px;">
                    <img style="position: absolute; top: 0px; left: 0px; width: 470px; height: 220px;" src="img/c-phone-horizontal.png" />
                    <div style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px; overflow: hidden;">
                        <img data-u="caption" data-t="6" style="position: absolute; top: 0px; left: 0px; width: 379px; height: 213px;" src="img/c-slide-1.jpg" />
                        <img data-u="caption" data-t="7" style="position: absolute; top: 0px; left: 379px; width: 379px; height: 213px;" src="img/c-slide-3.jpg" />
                    </div>
                    <img style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px;" src="img/c-navigator-horizontal.png" />
                  <img data-u="caption" data-t="8" style="position: absolute; top: 740px; left: 1600px; width: 257px; height: 300px;" src="img/c-finger-pointing.png" />
                </div>
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/purple.jpg" />
            </div>
            <div data-p="225.00" data-po="80% 55%" style="display: none;">
                <img data-u="image" src="img/blue.jpg" />
            </div>
            <a data-u="add" href="http://www.jssor.com" style="display:none">Jssor Slider</a>
        
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
    <script type="text/javascript" src="javascript/index.js"></script>
    <!-- #endregion Jssor Slider End -->
    <br><br>
 
    <div class="container text-center">

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>


<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script> 
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
          
               
            <div id="wide">Offers List</div>
            <div class="row text-center center">

             <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="img/mac.png" alt="San Francisco">
                        <p><strong>Mac Book-Air</strong></p>
                            <p style="color:red;"><del>600JD</del></p>
                            <p>500JD</p>
                                 <button class="btn">View Item</button>
                         </div>
                </div>
                <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="img/nadeem.png" alt="San Francisco">
                        <p><strong>Mac Book-Air</strong></p>
                            <p style="color:red;"><del>600JD</del></p>
                            <p>500JD</p>
                                 <button class="btn">View Item</button>
                         </div>
                </div>
                <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="img/mac.png" alt="San Francisco">
                        <p><strong>Mac Book-Air</strong></p>
                            <p style="color:red;"><del>600JD</del></p>
                            <p>500JD</p>
                                 <button class="btn">View Item</button>
                         </div>
                </div>
                <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="img/mac.png" alt="San Francisco">
                        <p><strong>Mac Book-Air</strong></p>
                            <p style="color:red;"><del>600JD</del></p>
                            <p>500JD</p>
                                 <button class="btn">View Item</button>
                         </div>
                </div>

                <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="img/mac.png" alt="San Francisco">
                        <p><strong>Mac Book-Air</strong></p>
                            <p style="color:red;"><del>600JD</del></p>
                            <p>500JD</p>
                                 <button class="btn">View Item</button>
                         </div>
                </div>
               


            </div>
          
      <hr>
      <hr>
      <!--  put here the box of the last update thing -->
    <div id="latest_item_div_title"> Latest Items</div>
       <div id="latest_items_box">
         <table id="latest_items_table">
          <tr>
                  <td rowspan="2">
                    <div id="td_content">
                      <img id="item_box_img" src="nadeem.png" />
                      <div id="item_box_data">- Our New Item -</div>
                      <div id="item_box_data">New Item</div>
                      <button id="item_box_button" type="button">View Item</button>
                    </div>
                  </td>
                  <td >
                    <div id="td_content">
                      <img id="item_box_img" src="nadeem.png" />
                      <div id="item_box_data">New Item</div>
                      <button id="item_box_button" type="button">View Item</button>
                    </div>
                  </td>
                  <td >
                    <div id="td_content">
                      <img id="item_box_img" src="nadeem.png" />
                      <div id="item_box_data">New Item</div>
                      <button id="item_box_button" type="button">View Item</button>
                    </div>
                  </td>
                  <td >
                    <div id="td_content">
                      <img id="item_box_img" src="nadeem.png" />
                      <div id="item_box_data">New Item</div>
                      <button id="item_box_button" type="button">View Item</button>
                    </div>
                  </td>
               </tr>
               <tr>
                  <td >
                  <div id="td_content">
                      <img id="item_box_img" src="nadeem.png" />
                      <div id="item_box_data">New Item</div>
                      <button id="item_box_button" type="button">View Item</button>
                  </div>
                  </td>
                   <td >
                   <div id="td_content">
                      <img id="item_box_img" src="nadeem.png" />
                      <div id="item_box_data">New Item</div>
                      <button id="item_box_button" type="button">View Item</button>
                    </div>
                  </td>
                   <td >
                   <div id="td_content">
                      <img id="item_box_img" src="nadeem.png" />
                      <div id="item_box_data">New Item</div>
                      <button id="item_box_button" type="button">View Item</button>
                    </div>
                  </td>
               </tr>
         </table>

           <table id="latest_items_table">
             <tr>
                <td >
                   <div id="td_content">
                      <img id="item_box_img" src="nadeem.png" />
                      <div id="item_box_data">New Item</div>
                      <button id="item_box_button" type="button">View Item</button>
                    </div>
                  </td>
                  <td >
                   <div id="td_content">
                      <img id="item_box_img" src="nadeem.png" />
                      <div id="item_box_data">New Item</div>
                      <button id="item_box_button" type="button">View Item</button>
                    </div>
                  </td>
                  <td >
                   <div id="td_content">
                      <img id="item_box_img" src="nadeem.png" />
                      <div id="item_box_data">New Item</div>
                      <button id="item_box_button" type="button">View Item</button>
                    </div>
                  </td>
                  <td >
                   <div id="td_content">
                      <img id="item_box_img" src="nadeem.png" />
                      <div id="item_box_data">New Item</div>
                      <button id="item_box_button" type="button">View Item</button>
                    </div>
                  </td>
                  <td >
                   <div id="td_content">
                      <img id="item_box_img" src="nadeem.png" />
                      <div id="item_box_data">New Item</div>
                      <button id="item_box_button" type="button">View Item</button>
                    </div>
                  </td>
             </tr>
           </table>
        </div>

    </div>


      <div class="scroll_to_top">
        <span id="up_arrow" class="glyphicon glyphicon-menu-up">
      </div>
      





    
    <br><br><br>
    <br><br><br>
        <footer id="bottom_footer"> 
     
      <table id="footer_lists_table">
        <tr>
          <td>
            <ul> <span>Nadeem Salah</span>
                <li><a href="">List item 1 wewewewew</a></li>
                <li><a href="">List item 2wewewewew</a></li>
                <li><a href="">List item 3wewewewewe</a></li>
                <li><a href="">List item 4wewewewe</a></li>
            </ul>
          </td>
           <td>
            <ul>  <span>Montaser Qasem</span>
                <li><a href="">List item 1ewewewewe</a></li>
                <li><a href="">List item 2wewewewe</a></li>
                <li><a href="">List item 3wewewewewe</a></li>
                <li><a href="">List item 4wewewewewewewe</a></li>
            </ul>
          </td>
            <td>
            <ul> <span>Ahmad Wewewe</span>
                <li><a href="">List item 1wewewewewewewe</a></li>
                <li><a href="">List item 2wewewewewe</a></li>
                <li><a href="">List item 3wewewewewewe</a></li>
                <li><a href="">List item 4ewewewewewewe</a></li>
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

     <div id="copy_right">All Rights Reserved &copy; Platinum-jo 2016 .</div>

    </footer>

</body>
</html>
