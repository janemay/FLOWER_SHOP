
<?php
		
 session_start();
      if(!isset($_SESSION['username'])){
            header('Location: login.php');
      }
      else{
            $username= $_SESSION['username'];
      }
		
?>

	

<html>
<head>
<title>Buy a Flower</title>
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
   <a id = "title" href = "index.php"><img id = "titleImage" src = "images/flowerImage.jpg"/></a>
</fieldset>
<div class = "myMenus">
<fieldset class = "menuFS">
<a id = "menus" href = "index.php">HOME</a> <strong>|</strong>
<a id = "menus" href = "collections2.php">COLLECTIONS</a> <strong>|</strong>
<a id = "menus" href = "login.php">LOGOUT</a>
</fieldset>
</div>
<fieldset class = "myFSclass">
<p>Choose a flowers to Buy!!!..</p>
<div class = "flowerClass">
   <fieldset class = "FS2ndmine">
   <!--
	      <?php 
          if (isset($verMsg)) {
              echo $verMsg;
               }
          ?>
          -->
             
 <form class = "fClass" method = "POST">
   <div class = "firstClass">
      type of flower: <fieldset class = "inputFS"><input type = "text" id = "type" name = "type_of_flower" placeholder = "what type ?"/></fieldset></br>
      pieces: <fieldset class = "inputFS"><input type = "text" id = "pieces" name = "pieces" placeholder = "how many ?"/></fieldset></br>
      price: <fieldset class = "inputFS"><input type = "text" id = "price" name = "price" placeholder = "how much ?"/></fieldset></br>
   </div>   
   <div class = "secondClass"> 
      deliver : <fieldset class = "inputFS"><input type = "text" id = "deliver" name = "deliver" placeholder = "yes/no ?"/></fieldset></br>
      date buy: <fieldset class = "inputFS"><input type = "text" id = "date" name = "date" placeholder = "date today"/></fieldset>
      
   </div>
                      <input type = "hidden" name = "id"/></br>
   
      <fieldset class = "buttonsFS">     
         <button type = "reset" class = "myLog">buy</button>
         <button type = "reset" id = "mySave">save</button>
      </fieldset>
   </form>
      <fieldset class = "buttonsFS">
         <button id = "myShow">show orders</button>
         <button id = "myHide">hide orders</button>
      </fieldset>
</div></br>


<p>List of Flowers!!!</p>
<fieldset>
	<table id ="flowers">
	
	<td> Flower List</td>
	<td> Flower Name</td>
	<td> Flower Price and Pieces</td>

	<tr>
	<td><img src ="images/abutilon.jpg" id ="p1"/></td>
	<td>Abutilon</td>
	<td>250.00 /12pcs.</td>
	<tr>
	<td><img src ="images/antherium.jpg" id ="p2"/>
	<td>Antherium</td>
	<td>250.00 /12pcs.</td>
	<tr>
	<img src ="images/daffodil.jpg" id="p3"/>
	<td>Dafoddil</td>
	<td>250.00 /12pcs.</td>
	</tr>
	<tr>
	<img src ="images/tulips.jpg" id ="p4"/>
	<td>Tulips</td>
	<td>250.00 /12pcs.</td>
	</tr>
	<tr>
	<img src ="images/rose.jpg" id ="p5"/>
	<td>Rose</td>
	<td>250.00 /12pcs.</td>
	</tr>

	<table>
</fieldset>

<div class = "tableClass">
   <table class = "myTable" border = 1>
      <tr>
         <td class = "myTD">id</td>
         <td class = "myTD">type of flower</td>
         <td class = "myTD">pieces</td>
         <td class = "myTD">price</td>
         <td class = "myTD">deliver</td>
         <td class = "myTD">date</td>
         <td class = "myTD">action[d|e]</td>
      </tr>
      <tbody id="hah"></tbody>
   </table>
</div>

<div class = "myReceipt">
   <div id = "aboutDiv">
   <strong id = "OR">Official Receipt</strong>
   <p class = "aboutme"><strong>type of flower:</strong> <span id = "TF"></span></p>
   <p class = "aboutme"><strong>pieces:</strong> <span id = "P"></span></p>
   <p class = "aboutme"><strong>price:</strong> <span id = "PR"></span></p>
   <p class = "aboutme"><strong>deliver:</strong> <span id = "DR"></span></p>
   <p class = "aboutme"><strong>date:</strong> <span id = "D"></span></p>
   <button id = "okButton">ok</button><p id = "myNameFancy">Angel</p>
   </div>
</div>
<div id="del">ARE you SURE ??</div>
</body>
</html>
