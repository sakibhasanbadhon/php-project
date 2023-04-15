







<div class="container">

<div class="s_side1 mb-3">
  <h2 style="letter-spacing: 1px;">history of muhamma (sw.)</h2>
</div>
  

  <div class="row">

<?php 

  $x="man is morten";



    $post = "SELECT * FROM post order by ID desc limit 9";

      $post_re = $db->read($post);
  if ($post_re) {
    while($post_print = $post_re->fetch_assoc()) {

    $mycat = $post_print['cat'];

     if ($mycat != $x) {
       // echo "sorry Unsuccess;";
     }else{
      echo "";

 ?>

    <div class="col-sm-4 mb-4">
      <a href="single.php?proid=<?php echo $post_print['id']; ?>"><?php echo $post_print['title']; ?></a>
    </div>

 <?php 


  }

}}


  ?>



  </div>


<h3 class="text-right"><a href="#"><i>more </i><b>web news <i class="fas fa-arrow-right"></i></b></a></h3>

</div>

<br>
