<?php
	
	include 'DAO/FlowerDAO.php';
	 session_start();
	  $username = $_SESSION['username'];
	$action = new FlowerDAO();

	$action->view(  $username);


?>
	
