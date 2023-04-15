

<?php 

include 'inc/header.php';

$textShow="";

 ?>







<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>







<div class="contact-img1">
	
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d163749.50699570394!2d89.28097999630161!3d24.918879932580133!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc54e48a038d3b%3A0x580d27bfb557a530!2sSathmatha%2C%20Bogura!5e0!3m2!1sen!2sbd!4v1609599848589!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


</div>


<h1 style="text-align: center;">Contact Us</h1>


    <div class="contact-section">

      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>Mohasthan, Bogura, Bangladesh </div>
        <div><i class="fas fa-envelope"></i>shahebulislammd@gmail.com</div>
        <div><i class="fas fa-phone"></i>+880 18 83 45 32 22</div>
        <div><i class="fas fa-clock"></i>24 Hours</div>
      </div>
      <div class="contact-form">
        <h2>Contact Us</h2>




<?php 


  if (isset($_POST["submit"])) {
    
    $name = $db->validate($_POST['name']);
    $email = $db->validate($_POST['email']);
    $message = $db->validate($_POST['message']);


  if (empty($name)||empty($email)||empty($message)){
  
    $textShow= "<span style='color:red'>  empty Not alowed  </span>";

  }else{

 $x= "INSERT INTO contact (name,mail,msg) values ('$name','$email','$message')";
    $x = $db->insert($x);

    if ($x) {
        $textShow = "<span style='color:green'>  Send Successfull  </span>";
    }else{
        $textShow = "insert faild";
    }
  
}


  }

 ?>


 <p style="color: red;"> <?php echo $textShow; ?> </p>

        <form method="post" class="contact" id="frm">
          <input id="name" type="text" name="name" class="text-box" placeholder="Your Name" >
          <input id="mail" type="email" name="email" class="text-box" placeholder="Your Email" >
          <textarea id="msg" name="message" rows="5" placeholder="Your Message" ></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send" id="send">
        </form>

      </div>
    </div>






</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




</body>
</html>





<?php 

include 'inc/footer.php';

 ?>

