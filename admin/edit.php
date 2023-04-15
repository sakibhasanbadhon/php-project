
<?php 

include 'inc/header.php';

include 'inc/sidebar.php';


if (isset($_GET['editid'])) {

	$id = $_GET['editid'];

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>





<div class="main-container">


<div class="insert_div1">
	
<a style="width: 80px;height: 40px;background: tomato;color: white;padding:8px;margin-top:-10px" href="post.php">Edit Post</a>


<div class="title_div">
	<h2>POST UPDATE</h2>
</div>



<?php 


	if (isset($_POST["submit"])) { 
		
		$postTitle = $db->validate($_POST['postTitle']);
		$firstDetails = $db->validate($_POST['firstDetails']);
		$lastDetails = $db->validate($_POST['lastDetails']);
		$cat = $db->validate($_POST['cat']);


		$img_name = $_FILES['img']['name'];
		$img_tname = $_FILES['img']['tmp_name'];
		$img_size = $_FILES['img']['size'];

		$permit = array("jpg","jpeg","png");
		$x = explode('.', $img_name);
		$x = strtolower(end($x));


	if (empty($postTitle)||empty($firstDetails)||empty($lastDetails)||empty($cat)){
	
		echo "<script> alert('empty Not alowed'); </script>";
	

}else{

if (empty($img_name)) {

 $edit = "UPDATE post
 			set
 				img='$img_name',
 				title='$postTitle',
 				details='$firstDetails',
 				last_details='$lastDetails',
 				cat='$cat'

 				where id='$id'";

 				$result = $db->edit($edit);

	    if ($result) {
	        echo "<script> alert('Update without image'); </script>";
	        echo "<script> window.location='post.php'; </script>";	

	    }else{
	        echo "insert faild";
	    }
	
}else{
	$y = move_uploaded_file($img_tname,"../img/$img_name");
	if ($y == true) {

		 $edit = "UPDATE post
 			set
 				img='$img_name',
 				title='$postTitle',
 				details='$firstDetails',
 				last_details='$lastDetails',
 				cat='$cat',
 				img='$img_name'

 				where id='$id'";

 				$result = $db->edit($edit);

	    if ($result) {
	        echo "<script> alert('Update with img'); </script>";
	        echo "<script> window.location='post.php'; </script>";	

	    }else{
	        echo "insert faild";
	    }



	}

}

	}


	}

 ?>


<form action="" method="post" enctype="multipart/form-data">

<?php 

$qr = "select * from post where id='$id'";

$res = $db->read($qr);

if ($res) {
	
	$a = $res->fetch_assoc();


}



 ?>



	<table id="table1">
		<tr>


			<td>Post Categories</td>
			<td>
				<select name="cat">

				<?php



			    $cat1= "SELECT * from all_cat";

			    $cat1 = $db->read($cat1);


			    if ($cat1) {
			    	while($data1 = $cat1->fetch_assoc()) {
			    		
			
				?>

					<a>	<option  value="<?php echo $data1['cat']; ?>"> <?php echo $data1['cat']; ?>  </option> </a>

				<?php

					}
					}
				 ?>

				</select>
			</td>
		</tr>		

		<tr>
			<td>Post Image</td> 
				<td><input type="file" name="img" > 
				<img src="../img/<?php echo $a['img'] ?>" height="65px" width="65px"> 
				</td>
			<br>

		</tr>

		<tr>
			<td>Post Title:</td>
			<td><input id="p_title" type="text" name="postTitle" value="<?php  echo $a['title']; ?>"></td><br>
		
		</tr>

		<tr>
			<td>First Details:</td>
			<td><textarea id="f_details" name="firstDetails" value="" cols="70" rows="7"><?php  echo $a['details']; ?></textarea></td><br>

		</tr>

		<tr>
			<td>Last Details:</td>
			<td><textarea id="f_ldetails" name="lastDetails" value=""><?php  echo $a['last_details']; ?></textarea></td>

		</tr>

		<tr>
			<td><input id="submit" type="submit" name="submit" value="send"> </td>
		</tr>
		
	</table>	
	
</form>


<br><br><br><br>


<style type="text/css">
	

#table2 tr td textarea {

  border: none;
  background: #faebd7e0;
  width: 500px;
  height: 130px;
  font-size: 21px;
  padding: 12px 12px;
   margin-left: 10%;
   outline-color: #5f5e5e96;
}




#table2 tr td input[type="text"] {

  border: none;
  background: #faebd7e0;
  width: 500px;
  height: 34px;
  font-size: 21px;
  padding: 12px 12px;
   margin-left: 10%;
   outline-color: #5f5e5e96;
}





#table2 tr td input[type="file"]{
 width: 50%;
}




#table2 tr td input[type="button"] {
  border: none;
  background: red;
  width: 200px;
  height: 34px;
  font-size: 21px;
  padding: 1px 5px;
  color: white;
  margin-right: 50%;
  outline-color: #5f5e5e96;
}



</style>





</div>

<hr>

</div>



</body>
</html>