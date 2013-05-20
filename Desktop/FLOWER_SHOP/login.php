<?php
      
        session_start();
	include 'DAO/UserDAO.php';
	$action = new UserDAO();
	if(!isset($_SESSION['username'])){
	     if(isset($_POST['username'])){
	                            $username=$_POST['username'];
	                             $password=$_POST['password'];
	                           if($action->logIn($username,$password)){
	                           
	                                  $_SESSION['username']=$action->getUser($username,$password);
	                                  header('location:index.php');
	                           } 
	                           $errMsg="<div id = 'myphp'> <img id = 'war' src = 'images/warning-icon.png' ><p id = 'wrong'>Wrong username or password</p> </div>" ;   
		                  }
	     
	
	}else{
	                    
		                   header('location:logout.php');
               }
               
    
               
?>

<html>
<head>
<title>Flower Shop Login</title>
<script src = "JS/jquery-1.8.2.min.js"></script>
<script src = "JS/jquery-ui-1.9.0.custom.min.js"></script>
<script src = "JS/jquery-ui-1.10.2.custom.js"></script>
<script src = "JS/jquery-ui-1.10.2.custom.min.js"></script>
<script src = "JS/javascript.js"></script>
<link rel = "stylesheet" href = "CSS/flowers.css"/>
<link rel = "stylesheet" href = "CSS/jquery-ui-1.10.2.custom.css"/>
<link rel = "stylesheet" href = "CSS/jquery-ui-1.9.0.custom.min.css"/>
<link rel = "shortcut icon" href = "images/2logo.jpg"/>
</head>
<body>
<div class = "formClass">
<fieldset class = "myTitle">
<img id = "myImage" src = "images/google.jpg"/>
   <a id = "title" href = "home.php"><img id = "titleImage" src = "images/flowerImage.jpg"/></a>
</fieldset>
<div class = "myMenus">
<fieldset class = "menuFS">
<a id = "menus" href = "home.php">HOME</a> <strong>|</strong>
<a id = "menus" href = "about.php">ABOUT</a> <strong>|</strong>
<a id = "menus" href = "collections.php">COLLECTIONS</a> <strong>|</strong>
<a id = "menus" href = "wedding.php">FLOWER BOUQUETS</a> <strong>|</strong>
<a id = "menus" href = "register.php">REGISTER</a> <strong>|</strong>
<a id = "menus" href = "login.php">LOGIN</a>
</fieldset>
</div>
<div class = "myLogin">
<fieldset class = "myFSclass">
<p>Login ..</p>
   <fieldset class = "FS2ndlog">
   <?php if (isset($errMsg)) echo $errMsg; ?>
   <form action="login.php" method = "POST" ></br>
   <div class = "LOGdiv">
      username: <fieldset class = "inputFS"><input type = "text" id = "username" name = "username"/></fieldset></br>
      password: <fieldset class = "inputFS"><input type = "password" id = "password" name = "password"/></fieldset>
    </div>
                <input type = "hidden" name = "id"/></br>
            
            <fieldset id = "FSbutton">
            <button type = "submit" id = "logButton">login</button> || <strong>if you're not a member, go to registration page ..</strong>
            </fieldset>
            <img id = "sizeFlower" src = "images/1.jpg"/>
   </form>
</fieldset>
</fieldset>
</div>
</body>
</html>
