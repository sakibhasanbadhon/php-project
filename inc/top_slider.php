

<div class="container">




<?php 

include '../admin/lib/database.php';
$db = new database();



$total_post = $db->selectTable('post');
$total_post = $total_post->num_rows;
$total_post = ($total_post-4);
$rand = rand(0,$total_post);

$post = "SELECT * FROM post order by ID desc limit $rand,4";
$post_re = $db->read($post);
if ($post_re) {

$pn = 0;


  while ($post_print = $post_re->fetch_assoc()) {
    $pn++;


 ?>


<?php 
	
	if ($pn==1) {

		?>


		<div class="fast_section_div1">
			<a href="single.php?proid=<?php echo $post_print['id']; ?>"> <img src="img/<?php echo $post_print['img'] ?>"> </a>

			<h2> <a style="color:#14F522" href="single.php?proid=<?php echo $post_print['id']; ?>"> <?php echo $post_print['title'] ?> </a> </h2>

			<div class="text_area">
				<p><?php echo $db->shortText($post_print['details'],80) ?></p>

			</div>

		</div>




	<?php
	}

 ?>


<?php 
	
	if ($pn==2) {

		?>


		<div class="fast_section_div2">
			<a href="single.php?proid=<?php echo $post_print['id']; ?>"> <img src="img/<?php echo $post_print['img'] ?>"> </a>

			<h2> <a style="color:#14F522" href="single.php?proid=<?php echo $post_print['id']; ?>"> <?php echo $post_print['title'] ?> </a></h2>

			<div class="text_area">
				<p><?php echo $db->shortText($post_print['details'],80) ?></p>

			</div>

		</div>




	<?php
	}

 ?>




<?php 
	
	if ($pn==3 or $pn==4) {

		?>


	<div class="second_2">

		<div class="<?php 
			if($pn==3){
				echo "fast_section_div3";
			}else{
				echo "fast_section_div4";
			}

		 ?>">
			<a href="single.php?proid=<?php echo $post_print['id']; ?>"><img src="img/<?php echo $post_print['img'] ?>"></a> 

				<div class="text_area">
				<p> <a style="color:#14F522" href="single.php?proid=<?php echo $post_print['id']; ?>"> <?php echo $db->shortText($post_print['details'],80) ?> </a></p>

			</div>
		</div>

	</div>




	<?php
	}

 ?>





<?php 

}
}


?>




	
</div>
