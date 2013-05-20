<?php
	
	session_start();
	
	include 'DAO/UserDAO.php';
	
	$username = $_SESSION['username'];


	$action = new UserDAO();
	$action->getInfo($username);
?>
