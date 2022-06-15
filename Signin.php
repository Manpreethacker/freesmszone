<?php


	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	
	$password=trim($password);
	mysql_connect("localhost","root","");
	mysql_select_db('freesmszone');
	
	$query=mysql_query("select * from signup where Email='$email' and Password='$password'");
	
	$count=mysql_num_rows($query);
	if($count>0)
	{
		session_start();
		$_SESSION['user']=$email;
		header('location:home.php');
	}
	else
	{
		?>
		       <script>
		            alert("Wrong Credentials");
		            document.location='index.html';
		       </script>
		  <?php
	}         
			?>
			
		
	