<?php

	
	$name=$_REQUEST['name'];
	$contact=$_REQUEST['contact'];
			
	mysql_connect("localhost","root","");
	mysql_select_db('freesmszone');
	
	session_start();
	
	$email=$_SESSION['user'];
	
	$query=mysql_query("insert into contact(Name,Number,Email) values('$name','$contact','$email')");
	if($query>0)
	{
		?>
		       <script>
		            alert("data inserted");
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
		  <?php
	}         
			?>
