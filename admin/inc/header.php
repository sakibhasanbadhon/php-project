           
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Sidebar Dashboard Template With Sub Menu</title>
        <link rel="stylesheet" href="style.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

        <script type="text/javascript" src="js/script.js"></script>
        
    </head>
    <body>



<?php 

include './lib/database.php';
$db = new database();

include './lib/session.php';



            session::chklogin();

            if (isset ($_GET['action']) && $_GET['action'] == 'logout'){

                session::destroy();
            }




 ?>





        <!--wrapper start-->
        <div class="wrapper">
            <div class="header">
                <div class="header-menu">
                    <div class="title">Admin <span>Panel</span></div>
                    <div class="sidebar-btn">
                        <i class="fas fa-bars"></i>
                    </div>
                    <ul>
                        <li><a href="#"><i class="fas fa-search"></i></a></li>
                        <li><a href="#"><i class="fas fa-bell"></i></a></li>
                        <li><a href="?action=logout"><i class="fas fa-power-off"></i></a></li>
                    </ul>
                </div>
            </div>
