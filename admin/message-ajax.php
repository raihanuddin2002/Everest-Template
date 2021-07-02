<?php 
	// if($_SESSION['user_role'] == 0){
 //    	header("location:index.php");
 //  }

  	include "config.php";
  	$sql = "SELECT * FROM contact_info" or die('SQL Failed!');
  	$result = mysqli_query($connection,$sql) or die('Query Failed!');
  	$output = "";


  	if(mysqli_num_rows($result) > 0){
  		$serial = 0;
  		$output .="<table border='5' class='table table-striped'>
  					<thead>
		  		    <tr>
		  		      <th scope='col'>Serial No.</th>
		  		      <th scope='col'>Name</th>
		  		      <th scope='col'>Email</th>
		  		      <th scope='col'>Subject</th>
		  		      <th scope='col'>Messege</th>
		  		      <th scope='col'>Date/Time</th>
		  		    </tr>
		  		  </thead>
		  		   <tbody>";
  			while($info = mysqli_fetch_assoc($result)){
  				$serial++;
  				$output .= "<tr>
				  		      <td>{$serial}</td>
				  		      <td>{$info['name']}</td>
				  		      <td>{$info['email']}</td>
				  		      <td>{$info['subject']}</td>
				  		      <td>{$info['massage']}</td>
				  		      <td>{$info['time']}</td>
		  		    		</tr> ";
  			}
		  
		$output .= "</tbody>
				</table>";
		
  	}
  	echo $output;
  	mysqli_close($connection);
?>