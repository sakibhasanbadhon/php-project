<html>
	<head>
		<link rel="stylesheet" type="text/css" href="login_style.css">
		<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans" rel="stylesheet">
	</head>
	<body>
	    
	    

<script type="text/javascript">
      

      function sakib(){
        setTimeout(function(){

          window.location="index.php";

        },2000);
      }


</script>    
	    
	    
	    
	    
    <?php 



include 'lib/session.php';
session::chksession();

include "lib/database.php";
$db = new database();




$text="";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  

  $u = $_POST['username'];
  $p = $_POST['password'];


  if (empty($u) || empty($p)) {
  
    $text = "empty not allow";

}else{
  $s = "SELECT * FROM admin WHERE user= '$u' and pass='$p'";


    $r =$db->read($s);

    if (!$r) {
      
    $text ="wrong user password";

    }else{
      $text = "<span style='color:green'> success </span>";

      session::set("login",true);
      echo "<script> sakib(); </script>";
    }




}

}


     ?>
	    
	    
	    <!-- sign Up -->
	    
		<div class="login-form">
		    <input type="radio" name="tab" class="tab" id="sign-up-tab">
			<label for="sign-up-tab" class="tab-header">SIGN UP</label>	
			<input type="radio" name="tab" class="tab" id="sign-in-tab" checked>
			<label for="sign-in-tab" class="tab-header">SIGN IN</label>
				
			<form method="post" action="" id="form1">
				<div class="header">Sign up for free</div>
				<div class="form-input">
					<input type="text" class="input" id="new-username" placeholder="User Name" required/>
				</div>
				<div class="form-input">
					<input type="email" class="input" id="email" placeholder="Email Address" required/>
				</div>
				<div class="form-input">
					<input type="password" class="input" id="new-password" placeholder="Password" required/>
				</div>
				<input type="submit" id="sign-up" class="submit-button" value="SIGN UP">
			</form>
			
			<!-- sign in -->
			<form method="post" action="" id="form2">
				<div class="header"><?php echo $text; ?></div>
				<div class="form-input">
					<input type="text" name="username" class="input" id="username" placeholder="User Name" required/>
				</div>
				<div class="form-input">
					<input type="password" name="password" class="input" id="password" placeholder="Password" required/>
				</div>
				<input type="checkbox"><span id="check">Keep me signed in</span><br>
				<input type="submit" name="submit" id="sign-in" class="submit-button" value="SIGN IN">
			</form>
			</div>
	</body>
</html>