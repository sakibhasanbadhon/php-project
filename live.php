


                    <?php 


                include "admin/lib/database.php";;

                $db = new database;





                    if (isset($_GET['search'])) {
                        $search = $_GET['search'];

                        $post= "SELECT * from post WHERE title like '$search%' or details like '$search%' limit 4";

                                 $rpost_res = $db->read($post);

                            if ($rpost_res) {

                                echo '<span style="float:right;font-size:25px;color:red;cursor:pointer;" id="close" onclick="closeSearch()"> x </span> <br><br>';
                        
                        while ($data = $rpost_res->fetch_assoc()) {
                            
                        

                     ?>
                    
                                         
                        <p> <a href="single.php?proid=<?php echo $data['id']; ?>"><?php echo $data['title']; ?></a> </p>
                        
                    </div>


                    <?php 

                             }
                           }else{

                            echo "nothing found";
                           }
                         }
                     ?>

        			