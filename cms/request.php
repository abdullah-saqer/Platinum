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
   	   
   	   <div id="customer_request_box">
   
   	   	   <div id="customer_request_box_top_bar">Customer Request 1 <span style="float:right;margin-right:10px;" id="item_qunt_top_bar">Items requested(5)</span></div>
   
           <div id="crcb_bottom_section">
           	    
           	    <table id="customer_data_table">
           	    	<tr> 
                      <th colspan="3">Customer Data</th>
           	    	</tr>
           	    	<tr>
           	    		<th>Customer Name</th>
           	    		<th>Customer Mobile</th>
           	    		<th>Customer Location</th>
           	    	</tr>
           	    	<tr>
           	    		<td>Nadeem Abu Khader</td>
           	    		<td>0780086927</td>
           	    		<td>Az Zarqa Rusifah</td>
           	    	</tr>
           	    </table>

           	    <hr />

           	    <div id="cutsomer_requested_items_table_bottom">
           	    	 <div id="critb_top_bar">Customer Requested Items</div>
           	    	 <table id="requested_items_table">
           	    	 	 <tr>
           	    	 	 	<th>#</th>
           	    	 	 	<th>Item image</th>
           	    	 	 	<th>Item Name</th>
           	    	 	 	<th>Item Price</th>
           	    	 	 	<th>Quantity</th>
           	    	 	 	<th>description</th>
           	    	 	 </tr>
           	    	 </table>
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
	



