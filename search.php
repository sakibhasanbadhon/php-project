
<?php 

include 'inc/header.php';

 ?>






<div class="container">



<h1 style="font-size: 25px; font-size: 25px;
    font-weight: bold;
    border-bottom: 2px solid #3498db;
    padding-bottom: 10px;
    width: 280px;
    color: #3498db;">Search Result

</h1>

	<div class="row">



                    <?php 

                    if (isset($_POST['search'])) {
                        $search = $_POST['search'];

                        $post= "SELECT * from post WHERE title like '%$search%' or details like '%$search%'";

                                 $rpost_res = $db->read($post);

                            if ($rpost_res) {

                    		 while ($data = $rpost_res->fetch_assoc()) {
                               	
                             
                     ?>



    <div id="col" class=" card col-sm-4 pb-2 border" style="min-height: 250px;">
      <img class="card-img pt-3" style="height: 200px;" src="img/<?php echo $data['img'] ?>">
      <h4 class="font-weight-bold"><?php echo $data['title'] ?></h4>
      <p> <?php echo $db->shortText($data['details'],80) ?></p>

      <a href="single.php?proid=<?php echo $data['id']; ?>" class="btn btn-outline-success border">view</a>

    </div>  


<?php
  }
 }else{
 	echo '<span class="alert alert-info mt-3" style="width:500px;">  Sorry Search not found  </span>  ';
 }

}


 ?>




	</div>
</div>




<?php 

include 'inc/footer.php';

 ?>
