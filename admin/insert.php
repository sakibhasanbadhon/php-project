
<?php 

include 'inc/header.php';

include 'inc/sidebar.php';


 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<style>



.button {
   text-shadow: 4px -1px 7px #21282a;
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}



</style>



<div class="main-container">

    <a class="button" style="" href="post.php"> View Post</a>

<div class="insert_div1">
	


<div class="title_div">
	<h2>POST SAVE DATABASE</h2>
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



	if (empty($postTitle)||empty($firstDetails)||empty($lastDetails)||empty($cat)){
	
		echo "<script> alert('empty Not alowed'); </script>";
	

	}else{


		$y = move_uploaded_file($img_tname,"../img/$img_name");

if ($y == true) {


 $x= "INSERT INTO post (img,title,details,last_details,cat) values ('$img_name','$postTitle','$firstDetails','$lastDetails','$cat')";


    $x = $db->insert($x);

    if ($x) {
        echo "<script> alert('Data Save Successfull'); </script>";
        echo "<script> log(); </script>";
    }else{
        echo "insert faild";
    }
	
}


	}


	}

 ?>


<form action="" method="post" enctype="multipart/form-data">


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

						<option value="<?php echo $data1['cat']; ?>"> <?php echo $data1['cat']; ?> </option>

				<?php

					}
					}
				 ?>

				</select>
			</td>
		</tr>		

		<tr>
			<td>Post Image</td> 
			<td><input type="file" name="img"></td>  <br>

		</tr>

		<tr>
			<td>Post Title:</td>
			<td><input id="p_title" type="text" name="postTitle" placeholder="title"></td><br>
		
		</tr>

		<tr>
			<td>First Details:</td>
			<td><textarea id="f_details" name="firstDetails" placeholder="leave a first details" cols="70" rows="7"></textarea></td><br>

		</tr>

		<tr>
			<td>Last Details:</td>
			<td><textarea id="f_ldetails" name="lastDetails" placeholder="leave a last details"></textarea></td>

		</tr>

		<tr>
			<td><input id="submit" type="submit" name="submit" value="send"> </td>
		</tr>
		
	</table>	
	
</form>


<br><br><br><br>



<div class="title_div">
	<h2> Verses of the Quran</h2>
</div>

<br>


<style type="text/css">
	

#table2 tr td textarea {

  border: none;
  background: #faebd7e0;
  width: 500px;
  height: 110px;
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



<div style="font-size: 18px;" id="show"></div>


<form id="frm">
		<table id="table2">
			<tr>
				<td>God's Word</td>
				<td><textarea type="text" name="bani" placeholder="write somethings.." id="bani" cols="70" rows="7"></textarea></td>
			</tr>
			<tr>
				<td>Surah and Verses</td>
				<td><input type="text" name="surah" placeholder="Add Verses.." id="surah"></td>
			</tr>
				
			<tr>
				<td><input type="button" value="Send" name="send" id="send"></td>
			</tr>
		</table>
</form>




<script type="text/javascript">
    
    $(document).ready(function(){
    	$("#send").click(function(){

    		let bani = $('#bani').val();
    		let surah = $('#surah').val();


    		if (bani == '' || surah == ''){
    			$('#show').html("<i class='fas fa-frown'></i> Sorry SAKIB empty not allow");


    			setTimeout(function(){

    				$('#show').html('');
    			},2000);

    		}else{
    			$('#show').html('');
    		

    		$.ajax({
    			url:"allpage_get/bani_get.php",
    			type:"post",
    			data:$("#frm").serialize(),
    			success:function(d){
    				$('#show').html("success");

    				setTimeout(function(){
    					$('#show').html('');
    				},2000);


    				$("#frm")[0].reset();

    			}

    		});

				}

    	});
    });




</script>










</div>


<hr>



Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetu <br><br> r adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, cons<br><br>ectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. E<br><br>xcepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui off<br><br>icia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, su<br><br>nt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut a<br><br>liquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nul<br><br>la pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetu<br><br>magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetu<br><br>r adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in rep<br><br>rehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia dese<br><br>runt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco <br><br>laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur a<br><br>dipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deseru<br><br>nt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in repre<br><br>henderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.




</div>


<!-- <script type="text/javascript">
    
    $(document).ready(function(){
    	$("#send").click(function(){

    		let first = $('#first').val();
    		let last = $('#last').val();

    		if (first == '' || last == ''){
    			$('#show').html("empty");


    			setTimeout(function(){

    				$('#show').html('');
    			},2000);

    		}else{
    			$('#show').html('');
    		

    		$.ajax({
    			url:"insert_get.php",
    			type:"post",
    			data:$("#frm").serialize(),
    			success:function(d){
    				alert(d);
    				$("#frm")[0].reset();

    			}

    		});

				}

    	});
    });




</script> -->







</body>
</html>