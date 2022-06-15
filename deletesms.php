<?php

      $id=$_REQUEST['id'];
	    
	   mysql_connect("localhost","root","");
	   mysql_select_db('freesmszone');
	
	   $dataset=mysql_query("delete from sms where Id='$id'");
	   if($dataset>0)
		{
			?>
				   <script>
						alert("SMS Deleted");
						document.location='home.php';
				   </script>
		   <?php
		}
		else
		{
			?>
				   <script>
						alert("Sorry!!! Try later");
						document.location='home.php';
				   </script>
			<?php
		}
	?>
		  