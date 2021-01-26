<?php

	function deleteContact($id){
		$url = 'http://localhost:5000/deleteContacts';
		$data = json_encode(array('id' => $id));

		$options = array(
			'http' => array(
				'header'  => "Content-type: application/json",
				'method'  => 'POST',
				'content' => $data
			)
		);
		$context  = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		if ($result === 'Success'){
			return '<p style="color: #4F8A10;font-weight: bold;">Person Removed Successfully!</p>';
		}
		else{
			return '<p style="color: #D8000C;font-weight: bold;">Something Went Wrong, Try Again.</p>';
		}
	}
?>