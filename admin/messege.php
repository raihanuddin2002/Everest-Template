<?php include "header.php"; 
  if($_SESSION['user_role'] == 0){
    header("location:index.php");
  }
?>
<style type="text/css">
	.table-message {
	    width: 100%;
	    padding: 10px 50px;
	    background: #9fcc9a;
	    margin-top: 20px;
	    margin-bottom: 100px;
	}	
</style>
<div class="container">
	<div class="row">
		<h1>All Messeges</h1>
		<div class="table-message" id="table-message">
  
</div>
	</div>
</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		function loadTable(){
			$.ajax({
				url:"ajax/message-ajax.php",
				type:"POST",
				success: function(data){
					$("#table-message").html(data);
				}
			})
		}
		loadTable();
	});
</script>

