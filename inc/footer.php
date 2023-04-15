



        <?php 

        //     $a = "SELECT * FROM total_page_view WHERE id='1'";

        // $b = $db->read($a);

        //     if ($b) {
        //         $c = $b->fetch_assoc();
        //         //echo "<h2>total pageview ".$c['view']."</h2>";


        //         $oldv = $c['view'];

        //         $newv = ($oldv+1);

        //         $u = "UPDATE total_page_view SET 
        //                     view ='$newv'
        //                     WHERE id='1'";

        //             $p = $db->edit($u);
        //     }

         ?>






<!--<footer class="container-fluid bg-dark text-white" style="">-->


<!--	<div class="col" style="width: 400px;text-align: center;margin:3% auto;">-->
		
<!--		<P> copyright@ 2021  <b> Sakib </b></P>-->

<!--	</div>-->



<!--</footer>-->

<br>

   <footer>
      <div class="art">
        <div class="content">
          <section>
            <header>Company</header>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact US</a>
            <a href="privicy.php">Privicy</a>
            <a href="cat.php">Categorys</a>
          </section>
          <section>
            <header>Islamic Book</header>
            <a href="https://islamteams.com/cat.php?cat=Harassment%20of%20Islam"> Inside Islam</a>
            <a href="https://islamteams.com/cat.php?cat=History">Islamic History</a>
            <a href="https://islamteams.com/cat.php?cat=Quran">Quran</a>
          </section>
          <section>
            <header>Weekly Newsletter</header>
            <form action="">
              <input type="email" placeholder="Your Email here" id="" />
              <input type="submit" value="Subscribe Now" />
            </form>
            <div class="social">
              <a style="font-size:30px;margin-top:-10px" class="fab fa-facebook-f" href="https://www.facebook.com/islamteams">  </a>
              <a style="font-size:30px;margin-top:-10px" class="fab fa-youtube" href="https://www.youtube.com/channel/UCBjVpuDsSTJN-Z5u662OcPQ">  </a>
              <a style="font-size:30px;margin-top:-10px" class="fab fa-instagram" href="https://www.instagram.com/islamteams1">  </a>
              <i class="fab fa-telegram-plane"></i>
            </div>
          </section>
        </div>
        <div class="notice">
          Copyright Protected &copy;
          <strong>Sakib</strong>
        </div>
      </div>
    </footer>






<a id="backtotop"><i class="fa fa-chevron-up"></i></a>


<script>
    
     function __(id){

        return document.getElementById(id);
    }

 
    var sld = __('sld');
    var service = __('service');
    

    function myAjax(url,id){

        var Ajax = new XMLHttpRequest();

        Ajax.onreadystatechange = function(){

                if (this.readyState === 4 && this.status === 200) {

                    id.innerHTML = this.responseText;
            }
        }

        Ajax.open('GET',url,true);
        Ajax.send();
    }

    myAjax("inc/top_slider.php",sld)
    myAjax("inc/service.php",service)
    
        setInterval(function(){

   
         myAjax("inc/top_slider.php",sld)
         


    },8000);
    
    
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="js/script.js"></script>







</body>
</html>
