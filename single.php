
<?php  

include 'inc/header.php';

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<style type="text/css">

#cat_show{
	width: 50%;
	border-left:5px solid red;
	background: #72AB4E;
	border-top-right-radius: 8px;
	border-bottom-right-radius:8px;
	padding: 10px;
	color: white;
}

.single_pic{
	max-height: 400px;
}


.d_1::first-letter{
	color: red;
	font-size: 50px;
	text-transform: uppercase;

}

.d_1,.lh-1{
	line-height: 0.3in;
}

</style>


<div class="container">


<?php 



 if (isset($_GET['proid']) && $_GET['proid'] != null) {

                 $id = $_GET['proid'];




	$post = "SELECT * from post WHERE id='$id'";

	$post_re = $db->read($post);

	if ($post_re) {


		while($post_print = $post_re->fetch_assoc()){

			$details = htmlspecialchars_decode($post_print['details']);
			$last_details = htmlspecialchars_decode($post_print['last_details']);
			$mycat = $post_print['cat'];
			$myview = $post_print['view'];
            $newview = ($myview+1);

            $milon =" UPDATE post SET view='$newview' WHERE id='$id'";

            $milon = $db->edit($milon);


 ?>


		<div class="col-sm-8 mt-5">

			<img class="single_pic" src="img/<?php echo $post_print['img'] ?>" style="width: 100%;">



			<h3 class="font-weight-bold sin_t"><?php echo $post_print['title'] ?></h3> <br>

			<p style="font-size:1.6rem;" class="d_1"> <?php echo $details; ?> </p>
			<p style="font-family: var(--ff-two);font-size:1.6rem;" class="lh-1"> <?php echo $last_details; ?> </p>

<!-- 			<div id="ad">
				<img src="img/service10.jpg">
			</div> -->

			
		</div>



<?php 


		}
	}




 ?>

<!-- 
<script type="text/javascript">

	let aa ='badhon';
	console.log(
		aa[0].toUpperCase()
		);


</script> -->


		<div class="col-sm-4 mt-2">
			
			<div class="single_sidebar_div1">

				<div class="s_side1 mb-3">
					<h2>All CATEGORIES</h2>
				</div>	

				<div class="s_side2">



		<?php 



           $post_cat= "SELECT DISTINCT cat from post ORDER By id DESC";

            $cat_read = $db->read($post_cat);

            if ($cat_read) {

            $i = 0;
            while ($a = $cat_read->fetch_assoc()) {

            $alu = $a['cat'];
             
             $apple  = "SELECT * FROM post WHERE cat='$alu'";

             $komola = $db->read($apple); 

                if($komola){
                    $cro = $komola->num_rows;
                }

            
		 ?>



<li><a href="cat.php?cat=<?php echo $a['cat']; ?>"> <?php echo $a['cat']; ?></a> <sup> <span class="badge badge-light bg-info"> <?php echo $cro;?> </span></sup></li>

<?php 

	}
  }
}

 ?>


				</div>
				
			</div>


        <div class="s_side1 mb-4">
          <h2>SIMILAR POST</h2>
        </div>



    <?php 

        $total_similar_post= "SELECT * from post WHERE cat='$mycat' ORDER By id DESC limit 5";

            $similar_read = $db->read($total_similar_post);

                if ($similar_read) {
                	$i = 0;
                	while ($similar_print= $similar_read->fetch_assoc()) {
                    	$i++;

         ?>


    <div id="col" class=" card col-sm-12 pb-2 border" style="min-height: 250px;">
      <img class="card-img pt-3" style="height: 200px;" src="img/<?php echo $similar_print['img'] ?>">
      <h4 class="font-weight-bold"><?php echo $similar_print['title'] ?></h4>
      <p> <?php echo $db->shortText($similar_print['details'],80) ?></p>

      <a href="single.php?proid=<?php echo $similar_print['id']; ?>" class="btn btn-outline-success border">view</a>

    </div>  



<?php 


	}
}

 ?>





		</div>


</div>
























</body>
</html>


<?php  

include 'inc/footer.php';

?>