<?php
require("../functions/connect.php");
require("../functions/engine.php");
checklogin();
?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/request.css">
    <script type="text/javascript" src="../javascript/request.js"></script>
</head>
<body>
    
   <div id="body">
   	   
   	   <div id="top_title_bar">Customers Requests</div>
   	   
   	     <div id="customers_requests_box">
   	      	
   	      	<div id="customer_box_top_bar">Customer Reuqest</div>
   	      	<div id="customer_bottom_content_box">
   	      		
   	      		<div id="customer_data">
   	      			
   	      			<div id="customer_data_top_bar">Customer data</div>
   	      			
   	      			<div id="customer_data_bottom_box">
   	      				<table id="customer_data_table" border="1">
   	      				   <tr>
   	      					<th>Customer Name</th>
   	      					<td>Nadeem Abu Khader</td>
   	      				   </tr>
   	      				   <tr>
   	      					<th>Customer Phone Number</th>
   	      					<td>+(962)786875133</td>
   	      				   </tr>
   	      				   <tr>
   	      					<th>Customer Location</th>
   	      					<td>Rusifah Az Zarqa</td>
   	      				   </tr>
   	      				</table>
   	      			</div>

   	      			<div id="customer_requested_items_box">
   	      			      
   	      			      <div id="customer_requested_item_title_bar">Cusotmer Reuested Items</div>
                          <div id="customer_requested_items_section">
                          	<div id="requested_item_box">
                          		<img src="" id="requested_item_image"/>
                          		<table id="requested_item_table_data" border=1>
                          			<tr>
                          			  <td>Item Name</td>
                          			  <td>name</td>	
                          			</tr> 
                          			<tr>
                          			  <td>Item Quantity</td>
                          			  <td>qun</td>	
                          			</tr> 
                          			<tr>
                          			  <td>Item describtion</td>
                          			  <td></td>	
                          			</tr>                          			
                          		</table>
                          	</div>
                          </div>
   	      			</div>

   	      		</div>

   	        </div>

   	    </div>

   </div>
  

</body>
</html>







<!--
 

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

		  -->
	



