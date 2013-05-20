<?php

		include 'DAO/FlowerDAO.php';
        session_start();
   
           $username = $_SESSION['username'];
		   $type_of_flower = $_POST['type_of_flower'];
		   $pieces = $_POST['pieces'];
		   $price = $_POST['price'];
		   $deliver = $_POST['deliver'];
		   $date = $_POST['date'];



		$action = new FlowerDAO();
		$action->add($username, $type_of_flower, $pieces, $price, $deliver, $date);

?>
