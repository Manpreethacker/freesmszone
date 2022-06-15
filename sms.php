<?php
	
	require('textlocal.class.php');
	$sms=$_REQUEST['sms'];
	$contact= implode(',' , $_REQUEST['contact']);
	
	session_start();
	$email=$_SESSION['user'];
	
	mysql_connect("localhost","root","");
	mysql_select_db('freesmszone');
		
	$select = "select * from contact where id in($contact)";
	$exec = mysql_query($select);	
	$name = array();
	$numbers = array();
	while($result = mysql_fetch_assoc($exec))
	{
		$name[] = $result["Name"];
		$numbers[] = $result["Number"];
	}
	$contact = implode(',', $name);

	$Textlocal = new Textlocal(false, false, 'NTQzNjUxNTU2ZjYxNjczMjRlMzU2Zjc0Njc3OTYxMzU=');
 	$sender = 'TXTLCL';
	$message = $sms;
 	$response = $Textlocal->sendSms($numbers, $message, $sender);
		
	$query=mysql_query("insert into sms(email,Contact,Message) values('$email','$contact','$sms')");
	
	if($query>0)		
	{

	      ?>
		       <script>
		            alert("SMS Sent Sucessfully");
		           document.location='home.php';
		       </script>
	   <?php
	}
	else
	{
		?>
		       <script>
		            alert("Sorry some problem Occure");
		           document.location='home.php';
		       </script>
		  <?php
	}
?>
			
		
	