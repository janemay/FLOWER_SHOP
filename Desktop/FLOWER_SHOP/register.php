<html>
<head>
<title>Flower Shop Registration</title>
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
<fieldset class = "myFSclass">
<p>Register for free ! ..</p>
   <fieldset class = "FS2ndmine">
   <form class = "myClass" method = "POST">
     <div class = "my1st"> 
      firstname: <fieldset class = "inputFS"><input type = "text" id = "firstname" name = "firstname"/></fieldset></br>
      lastname: <fieldset class = "inputFS"><input type = "text" id = "lastname" name = "lastname"/></fieldset></br>
      address: <fieldset class = "inputFS"><input type = "text" id = "address" name = "address"/></fieldset></br>
      age: <fieldset class = "inputFS"><input type = "text" id = "age" name = "age"/></fieldset></br>
     </div>
     <div class = "my2nd">
      contact number: <fieldset class = "inputFS"><input type = "text" id = "contact_number" name = "contact_number"/></fieldset></br>
      username: <fieldset class = "inputFS"><input type = "text" id = "username" name = "username"/></fieldset></br>
      password: <fieldset class = "inputFS"><input type = "password" id = "password" name = "password"/></fieldset></br>
      re-enter password : <fieldset class = "inputFS"><input type = "password" id = "password2" name = "password2"/></fieldset></br>
     </div>
                          <input type = "hidden" name = "id"></br>
      <fieldset id = "FSbutton">
         <button type = "submit" id = "myReg">submit</button> || <strong>if you're already a member, just go to login page..</strong>
      </fieldset>
   </form>
   </fieldset>
</fieldset>
</div>
</body>
</html>
