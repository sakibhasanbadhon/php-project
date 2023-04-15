
<?php 

include 'inc/header.php';

include 'inc/sidebar.php';


 ?>


<style type="text/css">
    tr,th,td{
        border-bottom: 1px solid #BACFE4;
    }

    td{
        height: 80px;
        padding: 5px;
    }

    table{
        border-collapse: collapse;
        width: 1050px;
    }

    tr:nth-child(even){
        background-color: #f2f2f2;
    }
    tr{
        background: #ffffffab;
    }

    img{
        width: 70px;
        height: 70px;
    }

    #th_width{
        width: 500px;
    }


    #pg{
        color: black;
        margin: 28px 0;
        text-align: center;
    }

    #pg a {
        background: #438a0d;
        height: 25px;
        width: 40px;
        margin-right: 5px;
        display: inline-block;
        color: white;
        line-height: 28px;
        border-right: 8px solid #23ef23;
    } 

     #pg a:hover{
        background: #34690b;
        border-left: 12px solid #23ef23;
        transition: .3s;
        border-right: none;
        transform:rotateX(30deg);
     }

    .id_p{
        padding: 12px;
    }

    .del a,.ed a{
        padding: 11px;
        color: #9a13b3;
        
        border-radius: 10px;

    }    

    .del a:hover,.ed a:hover{
        color: gray;
        transition: .2s;
        border-radius: 10px;
        background: #8f828038;
    }

    .th{
        font-size: 20px;
        color: red;
        text-align: center;
    }
    .pv{
        background: #bacfe4;
        color: #173dca;
        padding: 10px;
    }
    .see_color a{
        color: #e21a1a;
        padding: 11px;
    }    
    .see_color a:hover{
        color: #6d6a6a;
        border-radius: 10px;
        background: #8f828038;
        transition: .2s;
    }





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


<div class="main-container"> <br>

<a class="button" style="" href="insert.php">Create view </a>


<table style="margin-top: 30px;">

    <tr>
        <th colspan="8"><h1 style="color: #e40a32;text-shadow: 2px 2px 0px #171515;font-family: cursive;"> View All Post</h1></th>
    </tr>

    <tr class="th">

       <th>S.N.</th>
        <th>img</th>
         <th id="th_width">Post</th>
         <th>p.v. <br><i class="fas fa-eye"></i> </th>
         <th>Categorys</th>
         <th>see</th>
         <th>Edit</th>
         <th>Delete</th>
         


    </tr>



<?php 

    $start = 0;
    $per_page = 5;
    $page_number = 0;

    if (isset($_GET['pg']) and $_GET['pg'] != NULL) {
        $page_number = $_GET['pg'];


    }

    $start = ($per_page * $page_number);

    $x ="select * from post ORDER BY id DESC limit $start,$per_page";

    $x = $db->read($x);

    if ($x) {

        $i =1;
        while ($a = $x->fetch_assoc()) {
        
            $i++;

?>

    <tr>
        <td class="id_p"><?php echo $a['id']  ?></td>
        <td><img src="../img/<?php echo $a['img']  ?>"></td>
        <td> <b> <?php echo $a['title']  ?> </b> <br>
            <small style="color: gray;"> <?php echo $db->shortText($a['details'],110) ?></small> <p>10.5.2022</p></td>

        <td class="pv"><?php echo $a['view']  ?></td>
        <td><?php echo $a['cat']  ?></td>
        <td class="see_color"><a href="../single.php?proid=<?php echo $a['id']; ?>"> <i class="fas fa-eye"></i> </a></td>
        <td class="ed"><a href="edit.php?editid=<?php echo $a['id']; ?>"> <i class="fas fa-edit"></i> </a></td>
        <td class="del"><a href="delete.php?delid=<?php echo $a['id']; ?>"> <i class="far fa-trash-alt"></i> </a></td>
        

    </tr>    

<?php 

    }
}

 ?>
    
</table>



    <div id="pg">

    <?php 

    $x ="select * from post";

    $x = $db->read($x);

    if ($x) {
        
        $total_post = $x->num_rows;
        $total_page =($total_post/$per_page);
        $total_page =floor($total_page);

    for ($i=0; $i < $total_page;$i++) {
        
        echo "<a href='?pg=$i'> $i </a>";

    }

        
    }

     ?>
        



    </div>

<br>


</div>



    </body>
</html>
                           