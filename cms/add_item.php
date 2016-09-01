<?php
  require("../functions/connect.php");
  require("../functions/engine.php");
?>
<link rel="stylesheet" type="text/css" href="../css/additem.css">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<script type="text/javascript" src="../javascript/jquery.js"></script>
<script type="text/javascript" src="../javascript/add_item.js"></script>
 	<div id="adder">
			<div id="paragraph_box">
				<p>These are the items you have , <u>add/edit/delete</u> the items you want.</p>
			</div>
	</div>

<div id="option_bar">
<form class="pure-form">
   <label id="search_label">Search</label>
   <input id="search" class="pure-input-rounded" type="text" placeholder="Type Something">
   &nbsp;&nbsp;&nbsp;

   <label id="select_label">
   Select Category
   &nbsp;&nbsp;
   </label>
    <select class="select_item_category" id="state">
    	<option id="select_item" value="0">ALL</option>
     <?php
      $cat=getCategories();
       foreach ($cat as $key => $value) 
       echo'<option id="select_item" value="'.$key.'">'.$value.'</option>'; 		
     ?>
   </select>
</form>

</div>

<i title="Add new item" id="add_item_icon" class="fa fa-cart-plus"></i>

<div id="add_item_box">
	<i id="close_add_item_window" class="fa fa-close"></i>
	<div id="add_item_form">
		<form id="add_item_form_styling" class="pure-form pure-form-stacked">
			<table id="table_add_item" border="0">
				<tr>
					<legend><strong>Adding New Item</strong></legend>
				</tr>

				<tr>
					<td width="55px">Name:</td>
					<td width="320px" >
						<input id="item_name_field" class="pure-u-23-24" type="text">
					</td>
					<td width="55px">Price:</td>
					<td width="120px">
						<input id="item_price_field" class="pure-u-23-24" type="text">
					</td>
					<td width="75px">
					Quantity
					</td>
					<td>
						<input id="form_number" type="number" />
					</td>
				</tr>

				<tr>
					<td width="0%">
						<br>
					</td>
				</tr>

				<tr>
					<td>Category:</td>

					<td>
					<select id="category_list" class="pure-input-1-2">
                    <?php
                   	  $cat=getCategories();
                   		foreach ($cat as $key => $value) 
                   			echo'<option value="'.$key.'">'.$value.'</option>';
                   		
                    ?>
               		 </select>
					</td>
					<td>Offer</td>
					<td>
						<select id="offer_list" class="pure-input-1-2">
						<option value="0">NO</option>
	                    <option value="1">YES</option>
	               		</select>
					</td>
						<td>
							New Price:
						</td>
						<td>
						  <input id="new_price" class="pure-u-23-24" type="text" disabled>
						</td>
				</tr>
				<tr>
					<td>Brand</td>
					<td>
					  <input id="brand" type="text">
					</td>

					<td>Product Code </td>
					<td><input id="productCode" type="text"></td>
				</tr>
			</table>
			<!--    -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../wysiwyg/css/froala_editor.css">
  <link rel="stylesheet" href="../wysiwyg/css/froala_style.css">
  <link rel="stylesheet" href="../wysiwyg/css/plugins/code_view.css">
  <link rel="stylesheet" href="../wysiwyg/css/plugins/colors.css">
  <link rel="stylesheet" href="../wysiwyg/css/plugins/emoticons.css">
  <link rel="stylesheet" href="../wysiwyg/css/plugins/image_manager.css">
  <link rel="stylesheet" href="../wysiwyg/css/plugins/image.css">
  <link rel="stylesheet" href="../wysiwyg/css/plugins/line_breaker.css">
  <link rel="stylesheet" href="../wysiwyg/css/plugins/table.css">
  <link rel="stylesheet" href="../wysiwyg/css/plugins/char_counter.css">
  <link rel="stylesheet" href="../wysiwyg/css/plugins/video.css">
  <link rel="stylesheet" href="../wysiwyg/css/plugins/fullscreen.css">
  <link rel="stylesheet" href="../wysiwyg/css/plugins/file.css">
  <link rel="stylesheet" href="../wysiwyg/css/plugins/quick_insert.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
  <link rel="stylesheet" type="text/css" href="../css/addtopic.css">
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
  <link rel="stylesheet" type="text/css" href="../css/animate_css.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/froala_editor.min.js" ></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/align.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/char_counter.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/code_beautifier.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/code_view.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/colors.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/draggable.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/emoticons.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/entities.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/file.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/font_size.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/font_family.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/fullscreen.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/image.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/image_manager.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/line_breaker.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/inline_style.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/link.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/lists.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/paragraph_format.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/paragraph_style.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/quick_insert.min.js"></script>
  
  <script type="text/javascript" src="../wysiwyg/js/plugins/table.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/save.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/url.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/video.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/quote.min.js"></script>
			<div id="text_editor">
				<strong>Description</strong>
			  <div id="editor">
    			  <div id='edit' style="margin-top: 30px;">
    			  	</div>
 				 </div>
				
			</div>
			<script type="text/javascript">
				 $(function(){
     				 $('#edit').froalaEditor();
   				 });
				</script>
		</form>
		<button id="add_item_submit_button" class="pure-button pure-button-primary">Submit</button>
	</div>

</div>

<div id="view_item_box">
<?php print_Items(); ?>
</div>

<div id="edit_item_box">
<i id="close_edit_item_window" class="fa fa-close"></i>
<i id="item_images_icon" class="fa fa-image"></i>
<i id="item_window_back" class="fa fa-toggle-left"></i>

<div id="item_photo_adder">
<?php
	if(!empty($_FILES['file'])){
	   foreach ($_FILES['file']['name'] as $key => $name) {
		  $val=substr($name, -3);
		   strtolower($val);
		 if($val!='jpg' && $val!='png' && $val!='gif')//complex
			   die(print("0"));

			$query="SELECT * FROM photos";
			$result=$GLOBALS['conn']->query($query);
			$num=mysqli_num_rows($result);
			$name=$num+1;
			$name.=".".$val;
		if(!(empty($_POST['primary_key'])) && $_FILES['file']['error'][$key]==0 && move_uploaded_file($_FILES['file']['tmp_name'][$key],'../items_photos/'.$name)){
			$uploaded[]=$name;
			$key=$_POST['primary_key'];
			$path='items_photos/'.$name;
			$query="INSERT INTO `photos`(`id`, `item_id`, `photo_path`, `photo_name`) VALUES ('','$key','$path','$name')";
			$GLOBALS['conn']->query($query);
		}
	}
	if(!empty($_POST['ajax']))
		die(json_encode($uploaded));
	}
?>
	<div id="bottom_div2">
		<form action="" method="POST" enctype="multipart/form-data">
                    <div class="myLabel">
                        <input type="file" id="file" name="file[]" multiple="multiple" />
                        <span>Choose photo</span>
                    </div>
                    <input type="submit" id="submit2" name="submit_button" value="Upload" />
         </form>

         <div id="item_images_viewer"><!-- images for specific item displays here -->
        	
         </div>

	</div>
</div>

<div id="window_wrapper">
<div id="add_item_form">
		<form id="add_item_form_styling" class="pure-form pure-form-stacked">
			<table id="table_add_item" border="0">
				<tr>
					<legend><strong>Edit Item</strong></legend>
				</tr>

				<tr>
					<td width="55px">Name:</td>
					<td width="320px" >
						<input id="item_name_field2" class="pure-u-23-24" type="text">
					</td>
					<td width="55px">Price:</td>
					<td width="120px">
						<input id="item_price_field2" class="pure-u-23-24" type="text">
					</td>
					<td width="75px">
					Quantity
					</td>
					<td>
						<input id="form_number2" type="number" />
					</td>
				</tr>

				<tr>
					<td width="0%">
						<br>
					</td>
				</tr>

				<tr>
					<td>Category:</td>

					<td>
					<select id="category_list2" class="pure-input-1-2">
                    <?php
                   	  $cat=getCategories();
                   		foreach ($cat as $key => $value) 
                   			echo'<option value="'.$key.'">'.$value.'</option>';
                   		
                    ?>
               		 </select>
					</td>
					<td>Offer</td>
					<td>
						<select class="edit_offer_list" id="offer_list" class="pure-input-1-2">
						<option value="0">NO</option>
	                    <option value="1">YES</option>
	               		</select>
					</td>
						<td>
							New Price:
						</td>
						<td>
						  <input id="new_price2" class="pure-u-23-24" type="text" disabled>
						</td>
				</tr>
				<tr>
					<td>Brand</td>
					<td><input id="Brand2" type="text"></td>

					<td>Product Code </td>
					<td><input id="productCode2" type="text"></td>
				</tr>
			</table>


			<div id="text_editor">
				<strong>Description</strong>
			  <div id="editor">
    			  <div id='edit2' style="margin-top: 30px;">
    			  	</div>
 				 </div>
				
			</div>
			<script type="text/javascript">
				 $(function(){
     				 $('#edit2').froalaEditor();
   				 });
				</script>
		</form>
		<span style="display:none;" id="key_holder"></span>
		<button id="add_item_submit_button2" class="pure-button pure-button-primary">Update</button>
	</div>
</div>
</div>