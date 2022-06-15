<?php

      $id=$_REQUEST['id'];
	  
	  
	   mysql_connect("localhost","root","");
	   mysql_select_db('freesmszone');
	
	   
	   $dataset=mysql_query("delete from contact where id='$id'");
	   if($dataset>0)
	{
		?>
		       <script>
		            alert("data deleted");
		            document.location='home.php';
		       </script>
	   <?php
	}
	else
	{
		?>
		       <script>
		            alert("problem occoured");
		           document.location='home.php';
		       </script>
	
?>	

          <?php
	}         
			?>
   