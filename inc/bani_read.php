
<?php 




    $bani= "SELECT * from bani";

    $ref = $db->read($bani);

    if ($ref) {
        $data = $ref->fetch_assoc();

    }



 ?>



<div style="background:#dddd" class="container-fluid bg-#ddd text-center bani">
	<div class="container">
		<h3 class=" p-4"><?php echo $data['bani_name']; ?> <br> <small><i><?php echo $data['sura']; ?></i></small></h3>
	</div>
</div>