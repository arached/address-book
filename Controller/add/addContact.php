<?php
	include('../../Model/add/addContact.php');
	$firstName = trim($_POST['fn']);
	$lastName = trim($_POST['ln']);		
	$name = $firstName.' '.$lastName;
	$mobile = trim($_POST['mobile']);		
	$email = trim($_POST['email']);
	$permanant = trim($_POST['permanant']);
	$temporary = trim($_POST['temporary']);
	$userId = trim($_POST['userId']);
	if(strlen($firstName) > 0 && strlen($lastName) > 0 && strlen($mobile) > 0 && strlen($email) > 0 && strlen($permanant) > 0 && strlen($temporary) > 0){
		if(addContact($userId,$name,$mobile,$email,$permanant,$temporary)=='Success'){
			header("Location: ../../View/tab_contents/");
			exit();
		}else{
			echo 'alert(Error while adding the contact, please follow up with the administrator)';
		}
	}
	else{
		echo 'alert(<p style="color: #D8000C;font-weight: bold;">Please Fill All The Details.</p>)';
	}
	header("Location: ../../View/tab_contents/");
	exit();	
?>