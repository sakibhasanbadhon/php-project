
<?php 

include 'inc/header.php';

include 'inc/sidebar.php';


 ?>






<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="main-container">


		<div class="title_div">
			<h2>ADD POST CATEGORIES</h2>
		</div>


	<div style="background: #ff000029;padding-top:30px;" class="insert_div1">

		<div id="show"></div>

	<form id="frm">
		<table id="table1">
			<tr>
				<td>Add Categories</td>
				<td><input type="text" name="first" placeholder="Add post Categories.." id="first"></td>
			</tr>


			<tr>
				<td><input type="button" value="Send" name="send" id="send"></td>
			</tr>
		</table>
	</form>





	</div>

</div>





<script type="text/javascript">
    
    $(document).ready(function(){
    	$("#send").click(function(){

    		let first = $('#first').val();


    		if (first == ''){
    			$('#show').html("<i class='fas fa-frown'></i> Sorry SAKIB empty not allow");


    			setTimeout(function(){

    				$('#show').html('');
    			},2000);

    		}else{
    			$('#show').html('');
    		

    		$.ajax({
    			url:"allpage_get/page_get.php",
    			type:"post",
    			data:$("#frm").serialize(),
    			success:function(d){
    				$('#show').html("success");

    				setTimeout(function(){
    					$('#show').html('');
    				},2000);


    				$("#frm")[0].reset();

    			}

    		});

				}

    	});
    });




</script>




</body>
</html>