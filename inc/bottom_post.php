
<div class="container-fluid mt-5" style="background: #ECECEC;">
  <div class="container">

      <h1>Life & Society</h1>
		<div class="row pb-5"> 




<?php 




$total_post = $db->selectTable('post');
$total_post = $total_post->num_rows;
$total_post = ($total_post-6);
$rand = rand(0,$total_post);

$post = "SELECT * FROM post order by ID desc limit $rand,6";
$post_re = $db->read($post);
if ($post_re) {
  while ($post_print = $post_re->fetch_assoc()) {
    


 ?>


    <div id="col" class=" card col-sm-4 pb-2 border" style="min-height: 250px;">
      <a href="single.php?proid=<?php echo $post_print['id']; ?>"> <img class="card-img pt-3" style="height: 200px;" src="img/<?php echo $post_print['img'] ?>"> </a>
      <h4 class="font-weight-bold"><?php echo $post_print['title'] ?></h4>
      <p> <?php echo $db->shortText($post_print['details'],100) ?></p>

      <a style="background: #63c763;color: white;" href="single.php?proid=<?php echo $post_print['id']; ?>" class="btn btn-outline-success border">view</a>

    </div>  




<?php 



  }
}


 ?>






		</div>


        <div class="highlight_more">
          <a class="highlight_more_a" href=""> <i style="padding-right: 4px;"> more</i><b>HIGHLIGHT <i class="fas fa-arrow-right"></i></b> </a>
        
        </div>

	</div>
</div>






</div>

