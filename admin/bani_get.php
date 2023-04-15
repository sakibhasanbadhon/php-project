<?php 

include "lib/database.php";

$db = new database();

$bani = $_POST['bani'];
$surah = $_POST['surah'];


	$y ="UPDATE bani
			SET 
				bani_name='$bani',
				sura='$surah'";

// $x = "INSERT into bani(bani_name,sura) values('$bani','$surah')";

	$result = $db->edit($y);

		if ($result) {

				 	
			echo "Success";
			// echo "<script> window.location='home.php'; </script>";	

	 } else{
			echo "insert faild";

		 }






 ?>