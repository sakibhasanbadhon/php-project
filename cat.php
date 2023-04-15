
<?php 

include 'inc/header.php';

 ?>

<style>
.pagination {
    display: inline-block;
    margin-left:30%;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    border: 1px solid #ddd;
}

.pagination a.active {
    background-color: #4CAF50;
    color: white;
    border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}

.pagination a:first-child {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}

.pagination a:last-child {
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}
</style>



<div class="container">

	<h1 style="font-family: sans-serif;">All categorys</h1>

	<div class="faith_div1">


<?php 

     $cat_title= "SELECT DISTINCT cat from post ORDER By id ASC";

      $cat_title_read = $db->read($cat_title);

      if ($cat_title_read) {

      $i = 0;
      while ($ab = $cat_title_read->fetch_assoc()) {
        $i++;


 ?>



      <a class="font-weight-bold cat" id="<?php 

          if ($i==1 or $i==4){
            echo"a1";
          }elseif ($i==2 or $i==5){
            echo"a2";
          }elseif ($i==3 or $i==6){
            echo"a3";
          }elseif ($i==4 or $i==7){
            echo"a1";
          }elseif ($i==8 or $i==11){
            echo"a2";
          }elseif ($i==9 or $i==12){
            echo"a3";
          }elseif ($i==10 or $i==13){
            echo"a1";
          }elseif ($i==14 or $i==17){
            echo"a2";
          }elseif ($i==15 or $i==18){
            echo"a3";
          }elseif ($i==16 or $i==19){
            echo"a1";
          }

      ?>" href="cat.php?cat=<?php echo $ab['cat']; ?>"><?php  echo $ab['cat']; ?> |</a>


<?php

 }}

 ?>

	
	</div>




<?php 


        $cat = 'cat not found';

        if (isset($_GET['cat']) && $_GET['cat']!= null) {
            
            $cat = $_GET['cat'];
        }



 ?>


        <div class="s_side1">
          <h2>All post</h2>
        </div>

  
  <h3 style="border-bottom: 2px solid #A6E22C;padding-bottom: 5px;width: 300px;color: #47bcfa;"><?php echo $cat; ?></h3>


<div class="row">



 

  <?php

      $data = $db->selectTable('post',$cat,100);

      while ($y = $data->fetch_assoc()) {
    
  ?>



    <div id="col" class=" card col-sm-4 pb-2 border" style="min-height: 250px;">
      <img class="card-img pt-3" style="height: 200px;" src="img/<?php echo $y['img'] ?>">
      <h4 class="font-weight-bold"><?php echo $y['title'] ?></h4>
      <p> <?php echo $db->shortText($y['details'],80) ?></p>

      <a href="single.php?proid=<?php echo $y['id']; ?>" class="btn btn-outline-success border">view</a>

    </div>  


        <?php 

            }
        ?>



</div>


<div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#">1</a>
  <a class="active" href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>



</div>



















	</div>













<?php 

include 'inc/footer.php';

 ?>
