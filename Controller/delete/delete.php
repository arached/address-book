<?php
	include('../../Model/delete/delete.php');
	$id = trim($_POST['id']);
	echo deleteContact($id);
?>