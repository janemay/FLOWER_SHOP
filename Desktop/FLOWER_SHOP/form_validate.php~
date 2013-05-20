<?php

	include 'DAO/UserDAO.php';
	
	$action = new UserDAO();
	
	if(isset($_REQUEST['firstname']) && isset($_REQUEST['lastname']) && isset($_REQUEST['address']) && isset($_REQUEST['age']) && isset($_REQUEST['contact_number']) && isset($_REQUEST['username']) && isset($_REQUEST['password']) && isset($_REQUEST['password2'])){	
			
			$action = new UserDAO();
	
			
			$verrify = $action->registere_buyer($_REQUEST['firstname'], $_REQUEST['lastname'], $_REQUEST['address'], $_REQUEST['age'], $_REQUEST['contact_number'], $_REQUEST['username'], $_REQUEST['password'], $_REQUEST['password2']);
		
		header('Location: register.php'); 
			
		}/*else{
					$verMsg = "<div id = 'mySuc'><img id = 'suc' src = 'icons/success.png'>Successfully Registered</div>";
		}
		*/
?>

