<?php
session_start();
ob_start();
function get_topics_subjects(){
	$query="SELECT Subject from main_topics";
	//$result=mysql_query($query);
	$result = $GLOBALS['conn']->query($query);
	$subjects= array();
	while($r = $result->fetch_assoc())
		$subjects[]=$r['Subject'];
	return $subjects;
}

function get_topics_bodies(){
	$query="SELECT Body from main_topics";
	//$result=mysql_query($query);
	$result = $GLOBALS['conn']->query($query);
	$bodies= array();
	while($r = $result->fetch_assoc())
		 $bodies[]=$r['Body'];
	return $bodies;
}

function get_topics_ids(){
$query="SELECT id from main_topics";
	//$result=mysql_query($query);
	$result = $GLOBALS['conn']->query($query);
	$ids= array();
	while($r=$result->fetch_assoc())
		 $ids[]=$r['id'];

	return $ids;
}

function print_all_topics(){
	$query="SELECT * from main_topics order by id desc";
	$result=$GLOBALS['conn']->query($query);
	echo'<div id="view_topics">';
	while($r=$result->fetch_assoc()){
		echo'
		<div id="view_token">
			<span id="subject"><p>'.$r["Subject"].'</p></span>
			<div id="topic_info">  Added by <strong>'.$r["added_by"].'</strong>   | since '.$r["Date"].'</div>
			<div id="token_body">
			'.$r["Body"].'
			  <p id="primary">'.$r["id"].'</p>
			     <i id="trash_can" class="fa fa-trash" style="font-size:40px;color:red"></i>
				 </div>
			  </div>';
	}
	echo'</div>';
}

function checklogin(){
if(!isset($_SESSION['user_id']))
	header("location:../login.php");
}

function getUsername(){
 if(isset($_SESSION['user_id'])){
	$key=$_SESSION['user_id'];
	$query="SELECT username FROM users WHERE id='$key'";
	$result=$GLOBALS['conn']->query($query);
	while($r=$result->fetch_assoc())
		return $r["username"];
}
}

function Print_Category_table(){
	$query="SELECT * FROM categories";
	$result=$GLOBALS['conn']->query($query);
	echo'<table border="1" cellpadding="6" id="categories_table">';
	echo '<tr>
           <th>ID</th>
           <th>Category</th>
           <th># of items</th>
           <th>Action</th>
          </tr>';
          $i=1;
	while($row=$result->fetch_assoc()){
		echo'<tr>';
		echo'<td>'.$i.'</td>';
		echo'<td>'.$row["Name"].'</td>';
		echo'<td>5</td>';//here's another query done with relation to another table(items)
		echo'<td id="delete_cat" alt="'.$row["id"].'">delete</td>';
		echo'</tr>';
		$i++;
	}
}
//-return categories

function getCategories(){
	$cat = array();
	$query="SELECT * FROM categories";
	$result=$GLOBALS['conn']->query($query);
	while($row=$result->fetch_assoc())
		$cat[$row["id"]]=$row["Name"];
	return $cat;
}

//--Print all Items
function print_Items(){
	$query="SELECT name,id FROM items";
	$result=$GLOBALS['conn']->query($query);
	while($row=$result->fetch_assoc()){
		$id=$row["id"];
		$query2="SELECT * FROM photos WHERE (item_id='$id' AND primary_photo=true)";
		$result2=$GLOBALS['conn']->query($query2);
		$photo='<img src="../images/placeholder.jpg"/>';
		//<img src="../images/placeholder.jpg"/>
		if(mysqli_num_rows($result2)==true){
			$photo='<img src="../';
		 while($row2=$result2->fetch_assoc())
		 	$photo.=$row2["photo_path"];
		 $photo.='"/>';
		}
		echo'<div id="item_token">
			<div id="item_photo">'.$photo
	  		.'</div>
	  		<div id="bottom_container">
	  			<div id="item_name">
		';
		echo '<p>'.$row['name'].'</p>
		</div>
		<div id="item_buttons">
	  		<i alt="'.$row['id'].'" title="Edit this item" id="edit_item" class="fa fa-gear"></i><br>
	  		<i alt="'.$row['id'].'" title="Delete this item" id="delete_item" class="fa fa-trash"></i>
	    </div>
	    </div>
	    </div>
		';
	}
}
function printNavBar(){
	$cat=getCategories();
	echo'<nav id="navbar" class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="index.php">
      <img id="logo_logo_logo" src="images/full_logo.png"/>
      <span style="display:none;" id="logo_logo">Platinum</span>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home">HOME</a></li>
        <li><a href="#band">ITEMS</a></li>
        <li><a href="#tour">POSTS</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MERCHANDISE
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">';
            foreach ($cat as $key => $value) 
            	echo'<li><a href="#">'.$value.'</a></li>';
            
      echo'</ul>
        </li>
        <li>
            <a class="search_list">
            <span id="search" class="glyphicon glyphicon-search"></span>

        	</a>
        </li>
      </ul>

    </div>
  </div>
  <i title="Cart" id="cart" class="fa fa-shopping-cart">
  <div class="cart_info">(0)Items | 00.00JD</div>
  </i>
  <span id="arabic_label"><a href="#">Arabic</a></span>
  <div id="middle_search">
  <input placeholder="Search.." id="middle_search_query" type="text"/>
  <i style="font-size:15px;position:relative;left:-25px;color:rgba(180,180,180,1);" class="fa fa-search"></i></div>
  <div id="nav_down_section">
  </div>
  
  
</nav>';
}
?>