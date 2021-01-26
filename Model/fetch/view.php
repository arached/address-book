<?php
	include('../../include/config.php');
	function fetchAllContacts($userId){
		$url = 'http://localhost:5000/getContacts?userId='.$userId;
		$options = array(
			'http' => array(
				'header'  => "Content-type: application/json",
				'method'  => 'GET'
			)
		);
		$context  = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		
		return json_decode($result, true);
	}
	
	function fetchContact($userId,$name){
		$name = str_replace(' ', '%20', $name);
		$url = 'http://localhost:5000/getContacts?userId='.$userId.'&name='.$name;
		$options = array(
			'http' => array(
				'header'  => "Content-type: application/json",
				'method'  => 'GET'
			)
		);
		$context  = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		
		return json_decode($result, true);
	}
?>
