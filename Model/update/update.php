<?php

	function updateContact($id,$userId,$name,$email,$mobile,$permanant,$temporary){
		$url = 'http://localhost:5000/updateContacts';
		$data = json_encode(array('id'=>$id,'userid' => $userId,'name'=>$name,'email' => $email,'permanantAddress'=>$permanant,'mobile' => $mobile,'temporaryAddress'=>$temporary));
		$options = array(
			'http' => array(
				'header'  => "Content-type: application/json",
				'method'  => 'POST',
				'content' => $data
			)
		);
		$context  = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		if($result === 'Success'){
			return '<p style="color: #4F8A10;font-weight: bold;">Person Updated Successfully!</p>';
		}
		else{
			return '<p style="color: #D8000C;font-weight: bold;">Something Went Wrong, Try Again.</p>';
		}
	}				
?>