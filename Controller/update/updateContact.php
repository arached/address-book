<?php
	include('../../Model/update/update.php');
	$firstName = trim($_POST['updatefn']);
	$lastName = trim($_POST['updateln']);		
	$name = $firstName.' '.$lastName;
	$email = trim($_POST['email']);		
	$mobile = trim($_POST['updatemobile']);
	$permanant = trim($_POST['updatepermanant']);
	$temporary = trim($_POST['updatetemporary']);
	$userId = trim($_POST['userId']);
	$id = trim($_POST['id']);
	if(strlen($firstName) > 0 && strlen($lastName) > 0 && strlen($mobile) > 0 && strlen($email) > 0 && strlen($permanant) > 0 && strlen($temporary) > 0){		
		echo 'alert('.updateContact($id,$userId,$name,$email,$mobile,$permanant,$temporary).')';
	}
	else{
		echo 'alert(<p style="color: #D8000C;font-weight: bold;">Please Fill All The Details.</p>)';
	}		
	header("Location: ../../View/tab_contents/");
	exit();	
?>