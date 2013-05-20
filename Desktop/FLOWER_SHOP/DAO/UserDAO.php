<?php
    include 'DAO/BaseDAO.php';
    
    class UserDAO extends BaseDAO{
        
        
		         
		   function logIn($username,$password){
      	
                  $this->openConn();
                  		
                    $stmt = $this->dbh->prepare(" select * from registere_buyer where username=? and password =?");
		            $stmt->bindParam(1,$username);
		            $stmt->bindParam(2,$password);
                    $stmt->execute();
                  
		               		
              	if($row = $stmt->fetch()){
                    return true;

               }else{
			        return false;
			      }
                  										
                  $this->closeConn();
                  
               }
/*=============================================================================================================================================*/
             function getUser($username,$password){
      	
                  $this->openConn();
                  		
                     $stmt = $this->dbh->prepare(" select username from registere_buyer where username=? and password =?");
		             $stmt->bindParam(1,$username);
		             $stmt->bindParam(2,$password);
                     $stmt->execute();
                  
		               		
              	   $row = $stmt->fetch();
                     return $row[0];

                  										
                  $this->closeConn();
                  
               }
               
              function registere_buyer ($firstname, $lastname, $address, $age, $contact_number, $username, $password, $password2){
                  $this->openConn();
                  
                  $stmt= $this->dbh->prepare("INSERT INTO registere_buyer (firstname, lastname, address, age, contact_number, username, password, password2)values (?,?,?,?,?,?,?,?)");
                  $stmt->bindParam(1, $firstname);
                  $stmt->bindParam(2, $lastname);
                  $stmt->bindParam(3, $address);
		          $stmt->bindParam(4, $age);
		          $stmt->bindParam(5, $contact_number);
                  $stmt->bindParam(6, $username);
                  $stmt->bindParam(7, $password);
                  $stmt->bindParam(8, $password2);
                  $stmt->execute();
                  $id = $this->dbh->lastInsertId();
                 
                
                  
                  $stmt = $this->dbh->prepare("CREATE TABLE ".$username."2 (id INT auto_increment not null, type_of_flower varchar(20), pieces varchar(20), price varchar(20), deliver varchar(20), date date, primary key(id))");
                  $stmt->execute();
                  
                  $this->closeConn(); 
              }
              
              function getInfo($username,$id) {
              
              	$this-> openConn();
              	
              	$stmt = $this->dbh->prepare("SELECT * FROM ".$username." where id = ?");
              	$stmt->bindParam(1, $id);
              	$stmt->execute();
              	
              	$row = $stmt->fetch();
              	
              	$data_array = array("type"=>$row[1], "pieces"=>$row[2], "pieces"=>$row[3],"deliver"=>$row[4], "date"=>$row[5]);	
              	
              	$encoded_data = json_encode($data_array);
              	echo $encoded_data;
              	
              	 	
              $this->closeConn();
              
	          }
       }
?>       
