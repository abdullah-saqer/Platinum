<?php
include('connect.php');
include('engine.php');

//---Deleting photo from the photo slider section
if(isset($_POST['delete_photo']) && !empty($_POST['delete_photo'])){
$name=$_POST['delete_photo'];
unlink("../slider_img/".$name);
echo "1";
}

//----adding new topic request
if(isset($_POST['add_topic']) && !empty($_POST['add_topic'])){
	$subject=$_POST['subject'];
	$body=$_POST['body'];
	$admin=getUsername();
	$query="INSERT INTO `main_topics`(`id`, `Subject`, `Body`, `Date`, `added_by`) VALUES ('','$subject','$body',NOW(),'$admin')";
	if($GLOBALS['conn']->query($query))
		echo "The topic added Successfully";
	else mysql_error();
}

//--Deleting a specific Topic
if(isset($_POST['delete_topic']) && !empty($_POST['delete_topic'])){
$key=$_POST['key'];
$query="DELETE FROM main_topics WHERE id='$key'";
	if($GLOBALS['conn']->query($query))
		echo "Topic is removed";
	 else mysql_error();
}

//----Check if the user name and the password is correct
if(isset($_POST['validate_login']) && !empty($_POST['validate_login'])){

	if(!empty($_POST["username"]) && !empty($_POST["password"])){

		//$username=mysql_real_escape_string($_POST["username"]);
		//$password=mysql_real_escape_string($_POST["password"]);
		$username=mysqli_real_escape_string($GLOBALS['conn'], $_POST['username']);
		$password=mysqli_real_escape_string($GLOBALS['conn'], $_POST['password']);

		$username=htmlentities($username);
		$password=htmlentities($password);
		$password=openssl_digest($password, 'sha512');
		$query="SELECT id,username,password FROM users WHERE username='$username' and password='$password'";
 		$result=$GLOBALS['conn']->query($query);

		if(mysqli_num_rows($result)==1){
			while($r=$result->fetch_assoc())
			$_SESSION['user_id']=$r['id'];
			echo "1";
		}
		else  echo "0";
	
}
else echo"0";

}
//---Checking The name of the typed category is exist or not
if(isset($_POST['check_category_name']) && !empty($_POST['check_category_name'])){
	$name=strtolower($_POST['name']);
	$query="SELECT * FROM categories where Name='$name'";
	$result=$GLOBALS['conn']->query($query);
	if(mysqli_num_rows($result))
		echo "0";
	else echo"1";
}
//---Adding new Category
if(isset($_POST['add_cat']) && !empty($_POST['add_cat'])){
	$name=strtolower($_POST['name']);
	$query="INSERT INTO `categories`(`id`, `Name`) VALUES ('','$name')";
	if($GLOBALS['conn']->query($query))
		echo "Category ".$name." has been added";
	else echo mysql_error();
}
//Delete specific category
if(isset($_POST['delete_cat']) && ($_POST['delete_cat'])){
$key=$_POST['key'];
$query="DELETE FROM categories WHERE id='$key'";
$query2="DELETE FROM items WHERE cat_id='$key'";
if($GLOBALS['conn']->query($query) && $GLOBALS['conn']->query($query2))
	echo "Category has been deleted";
}

//Add new Item

if(isset($_POST['addNewItem']) && ($_POST['addNewItem'])){
$name=$_POST['item_name'];
$price=$_POST['item_price'];
$quantity=$_POST['quantity'];
$category=$_POST['category'];
$offer=$_POST['item_offer'];
$new_price=$_POST['item_new_price'];
$description=$_POST['description'];
$brand=$_POST['brand'];
$admin=getUsername();
$query="INSERT INTO `items`(`id`, `name`, `cat_id`, `price`, `new_price`, `offer`, `description`, `added_by`, `quantity`, `brand`) VALUES ('','$name','$category','$price','$new_price','$offer','$description','$admin','$quantity','$brand')";
	if($GLOBALS['conn']->query($query))
		echo "1";
	else echo mysql_error();

}
//Deleting specific item
if(isset($_POST['deleteItem']) && ($_POST['deleteItem'])){
	$key=$_POST['key'];
	$query="DELETE FROM items WHERE id='$key'";
	if($GLOBALS['conn']->query($query))
		echo "Item deleted";
	else  mysql_error();
}
//--Getting item information
if(isset($_POST['getItemData']) && ($_POST['getItemData'])){
	$key=$_POST['key'];
	$query="SELECT * FROM items WHERE id='$key'";
	$result=$GLOBALS['conn']->query($query);
	$info = array();
	while($r=$result->fetch_assoc()){
		$info[]=$r["name"];
		$info[]=$r["cat_id"];
		$info[]=$r["price"];
		$info[]=$r["new_price"];
		$info[]=$r["offer"];
		$info[]=$r["description"];
		$info[]=$r["quantity"];
		$info[]=$r["brand"];
	}
	echo json_encode($info);
}
//-Update Item information
if(isset($_POST['updatItem']) && ($_POST['updatItem'])){
$name=$_POST['name'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$category=$_POST['category'];
$offer=$_POST['offer'];
$new_price=$_POST['new_price'];
$description=$_POST['description'];
$brand=$_POST['brand'];
$key=$_POST['key'];
$query="UPDATE `items` SET `name`='$name',`cat_id`='$category',`price`='$price',`new_price`='$new_price',`offer`='$offer',`description`='$description',`quantity`='$quantity',`brand`='$brand' WHERE id='$key'";
	if($GLOBALS['conn']->query($query))
		echo "Item Updated";
	else mysql_error();
}

if(isset($_POST['getItemPhotos']) && ($_POST['getItemPhotos'])){
	$key=$_POST['key'];
	$query="SELECT * FROM photos where item_id='$key'";
	$result=$GLOBALS['conn']->query($query);
	$photos=array();
	while($row=$result->fetch_assoc()){
		$photos[]=$row["id"];
		$photos[]=$row["photo_path"];
	}

	echo json_encode($photos);
}
//----

if(isset($_GET['delete_item_photo']) && ($_GET['delete_item_photo'])){
$key=$_GET['key'];
$query="DELETE FROM photos where id='$key'";
if($GLOBALS['conn']->query($query))
	echo "Photo Deleted";
else mysql_error();
}
//makePrimary

if(isset($_GET['makePrimary']) && ($_GET['makePrimary'])){
	$key=$_GET['key'];
	$photo_key=$_GET['photo_key'];
	$query0="UPDATE `photos` SET `primary_photo`=false WHERE item_id='$photo_key'";
	$GLOBALS['conn']->query($query0);
	$query="UPDATE `photos` SET `primary_photo`=true WHERE id='$key'";
	if($GLOBALS['conn']->query($query))
		echo "Done";
	else mysql_error();
}
//--- get items by category
if(isset($_POST['getItemsWithCategory']) && ($_POST['getItemsWithCategory'])){
$key=$_POST['key'];
	if($key==0)
	   $query="SELECT * FROM items";
	   else
			$query="SELECT * FROM items WHERE cat_id='$key'";
$result=$GLOBALS['conn']->query($query);
$data='';
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
		$data.='<div id="item_token">
			<div id="item_photo">'.$photo
	  		.'</div>
	  		<div id="bottom_container">
	  			<div id="item_name">
		';
		$data.= '<p>'.$row['name'].'</p>
		</div>
		<div id="item_buttons">
	  		<i alt="'.$row['id'].'" title="Edit this item" id="edit_item" class="fa fa-gear"></i><br>
	  		<i alt="'.$row['id'].'" title="Delete this item" id="delete_item" class="fa fa-trash"></i>
	    </div>
	    </div>
	    </div>
		';
	}
	echo $data;
}
//--get items by search query

if(isset($_POST['getItemsByquery']) && ($_POST['getItemsByquery'])){
$phrase=$_POST['query'];
$query='SELECT * FROM items WHERE name like "%'.$phrase.'%"';
$result=$GLOBALS['conn']->query($query);
$data='';
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
		$data.='<div id="item_token">
			<div id="item_photo">'.$photo
	  		.'</div>
	  		<div id="bottom_container">
	  			<div id="item_name">
		';
		$data.= '<p>'.$row['name'].'</p>
		</div>
		<div id="item_buttons">
	  		<i alt="'.$row['id'].'" title="Edit this item" id="edit_item" class="fa fa-gear"></i><br>
	  		<i alt="'.$row['id'].'" title="Delete this item" id="delete_item" class="fa fa-trash"></i>
	    </div>
	    </div>
	    </div>
		';
	}
	echo $data;
}

?>