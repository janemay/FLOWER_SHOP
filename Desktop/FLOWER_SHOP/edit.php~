<?php

	include 'DAO/FlowerDAO.php';
	session_start();
   
   $username = $_SESSION['username'];
	$id = $_POST['id'];

	$action = new FlowerDAO();
	$action -> retrieve($username, $id);

?>
