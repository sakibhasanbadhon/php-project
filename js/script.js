	
// slider------------------------
	// var counter = 1;
 //    setInterval(function(){
 //      document.getElementById('radio' + counter).checked = true;
 //      counter++;
 //      if(counter > 4){
 //        counter = 1;
 //      }
 //    }, 5000);






// Dropdown menu 


function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}




//  Scroll Top -----------------------
 
	
	jQuery("#backtotop").click(function(){
	jQuery("body,html").animate({
		scrollTop:0
	},600);
});

jQuery(window).scroll(function(){
	if(jQuery(window).scrollTop() > 500)
	{
		jQuery("#backtotop").addClass("visible");
	}
	else
	{
		jQuery("#backtotop").removeClass("visible");
	}
});


//  Loader -------------


// setTimeout(function(){
// 	$('.loader_bg').fadeToggle();
// },1500);