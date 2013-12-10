<?php 
	include"config.php";
	/*
	* building connection to config.php
	* creating new object
	*/
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];	
 	/*
	* Declaring new object of Message class
	*/

	$message = new Message($config);
		$name = $message->getname();
		$email = $message->getemail();
		$message = $message->getmessage();
	/*
	* Creating a new message
	*/
	$insert = MessageDAO::createMessage($name, $email, $message);
		if($insert){
			echo "<script>alert('Message Sent!!');window.location.href='index.php'</script>";
			
		}else{
			echo 'Error';
		}

 ?>





 