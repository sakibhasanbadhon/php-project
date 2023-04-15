
<?php 


include 'admin/lib/database.php';
$db = new database();


			$title ="Islam teams | Peaceful islam | sunnah ";
			$article = "peaceful of islam,
			            beautiful islam,
			            Islam place of worship,
			            marriage in islam,
			            zakir nayek,
			            islamic topic,
			            Muslims believe in God,
			            Muslims believe in Idolatry!!,
			            Arabian Peninsula in Islam,
			            islam teach,
			            Cultural pluralism in Islam,
			            Miracles of Quran,
			            Scientific Facts of Quran";
			
			$tags = "Muslims believe in God,marriage in islam,Muslims believe in God,Scientific Facts of Quran,muslim,Muslims believe in Idolatry,jakirnayek,Idolatry,Ummah,Islamic,Arabs";


 if (isset($_GET['proid']) && $_GET['proid'] != null) {

                 $id = $_GET['proid'];




	$post = "SELECT * from post WHERE id='$id'";

	$post_re = $db->read($post);

	if ($post_re) {


		$post_print = $post_re->fetch_assoc();

			$title = $post_print['title'];
			$article = $post_print['details'];
			
			$tags = $post_print['key_word'];
			$imgName = $post_print['img'];
			
			
			
		

	}
		
	    
	}







 ?>


<!DOCTYPE html>
<html>
<head>


<html lang="en" dir="ltr">
<meta charset="utf-8">
<meta name='viewport' content='width=device-width,initial-scale=1.0' />

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4427102253653394"
     crossorigin="anonymous"></script>


<meta name="google-site-verification" content="4fm-JuizHdogj0LcVr2M7QqYwXan7jKcwZd4vJ0ZCVg" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<link rel="preconnect" href="https://fonts.gstatic.com">

<link rel="icon" href="img/logo1.png" type="image/jpg" sizes="16x16">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  



	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	
	<meta name='keywords' content='<?php echo $tags?>' />
	 
	 <meta name='description' content='<?php echo $db->shortText($article,200)?>' />
	 
	 <title> Islam Teams </title>
	 
	 
	 <meta property="og:locale" content="en_US" />
     <meta property="og:type" content="article" />
     
     <meta property="og:title" content="<?php echo $title?>" />
     <meta property="og:description" content="<?php echo $db->shortText($article,200)?>" />
     <meta property="og:url" content="" />
     <meta property="og:image" content="<?php echo "http://islamteams.com/img/".$imgName?>" />
     <meta property="og:image:width" content="470" />
     <meta property="og:image:height" content="245" />
    
     <meta property="og:site_name" content="islamteams" />
    

    
    <meta name="twitter:card" content="summary_large_image" />
    
    <meta name="twitter:description" content="<?php echo $db->shortText($article,200)?>" />
    <meta name="twitter:title" content="<?php echo $title?>" />
    <meta name="twitter:image" content="<?php echo "http://islamteams.com/img/".$imgName?>" />
	

     <meta name="google-site-verification" content="XlTJHVJV7A-G6-XFW8ERYlbxB6T73aANtQtMol7PBd8"/>
	
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-226357570-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-226357570-1');
</script>






<meta name="p:domain_verify" content="26ef9d4f034d2de44407b2b47326f0d5"/>	
	
	
	
</head>
<body>

<?php 
    
    // include 'scroll.php';
 ?>
 
 
 
 
 


<div class="container-fluid" style="background: #525252">
	<div class="container">
		<div class="list-inline text-right up_menu">
			<li class="list-inline-item"><a href="https://www.facebook.com/islamteams"><i class="fab fa-facebook"></i></a></li>
			<li class="list-inline-item"><a href="https://www.instagram.com/islamteams1/"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCBjVpuDsSTJN-Z5u662OcPQ"><i class="fab fa-youtube"></i></a></li>
			<li class="list-inline-item"><a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
			<li class="list-inline-item"><a href="https://www.skype.com/"><i class="fab fa-skype"></i></a></li>
            
            <!-- <li id="log" class="list-inline-item"><a href=""><i class="fas fa-user-tie"></i> login</a></li> -->

		</div>
		
	</div>
</div>

<div class="container-fluid sticky-top mb-4" style="box-shadow: -1px 3px 8px 0px #828080;background:white;min-height:90px;">

    <div class="container pt-3">


        <div class="dropdown">
          <button onclick="myFunction()" class="dropbtn"><i class="fas fa-bars"></i></button>
          <div id="myDropdown" class="dropdown-content">
            <a href="index.php">HOME</a>
            <a href="contact.php">Contact</a>
            <a href="about.php">About us</a>
            <a href="privicy.php">Privacy policy</a>
            <a class="bg-info text-white" href="contact.php">CATEGORIES</a>



<?php 

     $cat_title= "SELECT DISTINCT cat from post ORDER By id DESC";

      $cat_title_read = $db->read($cat_title);

      if ($cat_title_read) {

      $i = 0;
      while ($ab = $cat_title_read->fetch_assoc()) {
        $i++;


 ?>



            <a class="ml-3 text-info" href="cat.php?cat=<?php echo $ab['cat']; ?>"><?php  echo $ab['cat']; ?></a>
            


<?php 

    }
        }
 ?>


          </div>
        </div>


<div class="logo">
    <a href="index.php"><img src="img/logo1.png"></a>
</div>


		<div class="menu" style="cursor: pointer;"> 
            <li><a href="index.php">Home</a></li>

            <ul class="dropdown">

                <li class="dropdown-toggle" data-toggle="dropdown" style="font-family:sans-serif;font-weight: bold;color:#68a710;" >CATEGORYS</li>

                  <div class="dropdown-menu">


                    <?php 

     $cat_title= "SELECT DISTINCT cat from post ORDER By id DESC";

      $cat_title_read = $db->read($cat_title);

      if ($cat_title_read) {

      $i = 0;
      while ($ab = $cat_title_read->fetch_assoc()) {
        $i++;


 ?>



                    <li><a class="ml-3 text-info" href="cat.php?cat=<?php echo $ab['cat']; ?>"><?php  echo $ab['cat']; ?></a></li>


            <?php 

                }
                    }
             ?>

                  </div>

            </ul>

            <li><a href="contact.php">Contact </a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="privicy.php">Privicy policy</a></li>

        </div>


<div class="search">
	<div style=" margin-left: 20px;">

        		<form action="search.php" method="post" class="search-box">
              		<input style="" class="search-in" type="text" name="search" onkeyup="lami(this.value)" placeholder="Search">
                    <span> <i class="fas fa-search"></i></span>

            	</form>

            </div>
        </div>
    </div>
</div>


    <p id="content" class="search_show">

                    
    </p>

 
                <script type="text/javascript">
                    var content = document.getElementById('content');

                    function lami(x){


                        if (x.length == 0) {

                            content.style.transform="display:none;";

                            content.innerHTML = 'epmty ....';
                            // content.style.transform="rotateX(90deg)";

                        }else{
                            var xml = new XMLHttpRequest();
                            xml.onreadystatechange = function(){
                                if (xml.readyState === 4 && xml.status === 200) {
                                    content.innerHTML = xml.responseText;
                                    content.style.transform="rotateY(0deg)";
                                }
                            };

                            xml.open('GET','live.php?search='+x,true);
                            xml.send();
                        }
                    }


                    function closeSearch() {

                        content.innerHTML = '';
                        content.style.display="none";
                    }
                </script>






 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>






<style type="text/css">
    .search-show{

    }
</style>