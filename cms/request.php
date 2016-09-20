<?php
require("../functions/connect.php");
require("../functions/engine.php");
checklogin();
?>
<link rel="stylesheet" type="text/css" href="../css/request.css">
<script type="text/javascript" src="../javascript/request.js"></script>


	<div id="item_request_box">
			<table id="table_box">
				<tr> 
                    <td style="border-left:none;">Customer Name</td>
                    <td>Mobile</td>
                    <td>Location</td>
				</tr>
			</table>

			<div id="Content_Box">
				 
				<center><div id="top_bar"></div></center>

				 <div id="Customer_Request_Box_Background">
				 	
				 	<section id="Customer_Request_inner_Box">
				 		
				 		<img src="../items_photos/2.jpg" />
				 		
				 		<div id="img_bottom_text">
				 		  	
				 		  	<table id="img_bottom_table">
				 		  	   <tr>
				 		  	     <td id="item_name">Item Name </td>
				 		  	     <td id="Quantity">3</td>
				 		  	   </tr>
				 		  	</table>
				 		</div>

				 		<span id="request_date">Request Date (20/12/2016)</span>

				 		
				 			<i class="fa fa-check" id="confirm" onclick="alert('confirm')"></i>
				 			<i class="fa fa-close" id="refuse" onclick="alert('refuse')"></i>
				 	    
				 	
				 	</section>

				 </div>

				 <section id="Customer_Request_Box_Background">
				 	
				 	<section id="Customer_Request_inner_Box">
				 		
				 		<img src="../items_photos/1.jpg" />
				 		
				 		<div id="img_bottom_text">
				 		  	
				 		  	<table id="img_bottom_table">
				 		  	   <tr>
				 		  	     <td id="item_name">Item Name </td>
				 		  	     <td id="Quantity">3</td>
				 		  	   </tr>
				 		  	</table>
				 		</div>

				 		<span id="request_date">Request Date (20/12/2016)</span>

				 		
				 			<i class="fa fa-check" id="confirm" onclick="alert('confirm')"></i>
				 			<i class="fa fa-close" id="refuse" onclick="alert('refuse')"></i>
				 	    
				 	
				 	</section>

				 </section>
            </div>
		
		</div>

		<!--  -->
		<!--  -->

