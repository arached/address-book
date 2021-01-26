<?php
	include('../../Model/fetch/view.php');
	$name = $_POST['name'];
	$userId = $_POST['userId'];
	echo fetchContact($userId,$name);
?>