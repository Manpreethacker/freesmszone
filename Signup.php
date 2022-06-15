<?php

	$fname=$_REQUEST['fname'];
	$lname=$_REQUEST['lname'];
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	$city=$_REQUEST['city'];
	$mobile=$_REQUEST['mobile'];
	$name=$fname.' '.$lname;
	
	mysql_connect("localhost","root","");
	mysql_select_db('freesmszone');
	
	$query=mysql_query("insert into signup values('$name','$email','$password','$city','$mobile')");
	if($query>0)
	{
		?>
		       <script>
		            alert("account created");
		            document.location='index.html';
		       </script>
	   <?php
	}
	else
	{
		?>
		       <script>
		            alert("problem occoured");
		            document.location='index.html';
		       </script>
		  <?php
	}         
			?>
			
		
	