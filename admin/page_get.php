<?php 

include "lib/database.php";

$db = new database();


$first = $_POST['first'];




$x = "INSERT into all_cat(cat) values('$first')";

if ($y = $db->insert($x)) {
    
     echo "Done";
}





 ?>