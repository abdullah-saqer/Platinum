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
	$query="SELECT First_name FROM users WHERE id='$key'";
	$result=$GLOBALS['conn']->query($query);
	while($r=$result->fetch_assoc())
		return $r["First_name"];
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
        <li><a href="index.php">HOME</a></li>
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
      </ul>

    </div>
  </div>
  <i title="Cart" id="cart" class="fa fa-shopping-cart">
  <div class="cart_info">(0)Items | 00.00JD</div>
  </i>

  <a>
    <i title="My Account" id="my_account_header_icon" class="fa fa-user"></i>
  </a>

  <div id="login_header">
  		<span class="login_information_holder">
        <button class="login_header_button">Login</button>
      	<input placeholder="Username" type="text" class="form-control" id="usr">
		  	<input placeholder="Password" type="password" class="form-control" id="pwd">
		 </span>
  </div>
	 <a href="#">
      <i title="Login" id="login_header_bar_icon" class="fa fa-unlock-alt"></i>
   </a>

  <span id="arabic_label">
  <a href="#">
  <img title="Arabic" src="images/jordan_flag.png" />
  </a>
  </span>

  <span id="middle_search">
  <input placeholder="Search.." id="middle_search_query" type="text"/>
  <i style="font-size:15px;position:relative;left:-25px;color:rgba(180,180,180,1);" class="fa fa-search"></i></span>
  <div id="nav_down_section">
  </div>
  
  
</nav>';
}

function printFooter(){
echo'
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
    ';
}


function printCategoriesLeftBox(){
  $query="SELECT * FROM categories";
  $result=$GLOBALS['conn']->query($query);

	echo'<div id="ctgs_box">
               <div id="title">Categories</div>
               <table id="ctgs_box_table">';
                while($row=$result->fetch_assoc())
                  echo'<tr><td><a href="view_items.php?filterByCategory=1&id='.$row['id'].'"><div>'.$row['Name'].'</div></a></td></tr>';
               
                 echo'
               </table>
            </div>';

}

function printFilterBrandLeftBox(){
	echo '
            <div id="fbb_box">
              <div id="title">Filter By Brand</div>
              <table id="fbb_box_table">';
              $query="SELECT DISTINCT Brand FROM `items`";
              $result=$GLOBALS['conn']->query($query);
              while($row=$result->fetch_assoc())
                echo'<tr><td><a href="view_items.php?filterByBrand=1&id='.$row['Brand'].'"><div>'.$row['Brand'].'</div></a></td></tr>';
              

                 echo'
               </table>
            </div>';    
        
}

function printMoreFilterLeftBox(){
echo '<div id="mf_box">
               <div id="title">More Filters</div>
              <table id="mf_box_table">
                 <tr><td><a href=""><div>item1</div></a></td></tr>
                 <tr><td><a href=""><div>item1</div></a></td></tr>
                 <tr><td><a href=""><div>item1</div></a></td></tr>
               </table>
            </div>';

}


function printLastTenItems(){
  
  $query="SELECT * FROM `items` ORDER BY id DESC LIMIT 12";
  $result=$GLOBALS['conn']->query($query);
  $s = array();
  $i=0;
  while($r=$result->fetch_assoc()){
      $s[$i]["id"]=$r["id"];
      $s[$i]["name"]=$r["name"];
      $s[$i]["price"]=$r["price"];
      $s[$i]["new_price"]=$r["new_price"];
      $id=$r["id"];
      $query2="SELECT * FROM photos WHERE (item_id='$id' AND primary_photo='1')";
      $result2=$GLOBALS['conn']->query($query2);
        while($r2=$result2->fetch_assoc())
          $s[$i]["path"]=$r2["photo_path"];

        $i++;
  }


  echo '<div id="latest_item_div_title"> Latest Items</div>
         <div id="latest_items_box">
           <table id="latest_items_table">';


  echo '<tr>
  <td rowspan="2">
    <div id="td_content">
         <img id="item_box_img" src="'.$s[0]["path"].'" />
             <div id="item_box_data"></div>
             <div id="item_box_data">'.$s[0]["name"].'</div>
            <button id="item_box_button" type="button">View Item</button>
     </div>
  </td>
  ';
  for($j=1;$j<4;$j++)
    echo'
      <td >
       <div id="td_content">
          <img id="item_box_img" src="'.$s[$j]["path"].'" />
            <div id="item_box_data">'.$s[$j]["name"].'</div>
             <button id="item_box_button" type="button">View Item</button>
                 </div>
       </td>
    ';
   
     echo "</tr><tr>";



     
     for($j=4;$j<7;$j++)
      echo '
          <td >
            <div id="td_content">
               <img id="item_box_img" src="'.$s[$j]["path"].'" />
                 <div id="item_box_data">'.$s[$j]["name"].'</div>
                  <button id="item_box_button" type="button">View Item</button>
                </div>
              </td>
      ';
      echo '</tr>
      </table>
<table id="latest_items_table">
             <tr>
      ';

  for($j=7;$j<12;$j++)
    echo'<td >
          <div id="td_content">
              <img id="item_box_img" src="'.$s[$j]["path"].'" />
               <div id="item_box_data">'.$s[$j]["name"].'</div>
                  <button id="item_box_button" type="button">View Item</button>
               </div>
        </td>';


echo' </tr>
       </table>
      </div>';
    
}


function printScroller(){

}

?>