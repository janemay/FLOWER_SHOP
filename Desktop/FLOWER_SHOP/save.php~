<?php
	
	include 'DAO/FlowerDAO.php';
	session_start();
   
   $username = $_SESSION['username'];
	$id = $_POST['id'];
	$type = $_POST['type'];
	$pieces = $_POST['pieces'];
	$price = $_POST['price'];
	$deliver = $_POST['deliver'];
	$date = $_POST['date'];

	
	$action = new FlowerDAO();	
	$action->edit($username, $id, $type, $pieces, $price, $deliver, $date);

?>
