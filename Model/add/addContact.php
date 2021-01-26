<?php
	include('../../include/config.php');
	
	function addContact($userId,$name,$mobile,$email,$permanant,$temporary){
		$url = 'http://localhost:5000/addContacts';
		$data = json_encode(array('userid' => $userId,'name'=>$name,'email' => $email,'permanantAddress'=>$permanant,'mobile' => $mobile,'temporaryAddress'=>$temporary));

		$options = array(
			'http' => array(
				'header'  => "Content-type: application/json",
				'method'  => 'POST',
				'content' => $data
			)
		);
		$context  = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		
		return $result;	
	}				
?>