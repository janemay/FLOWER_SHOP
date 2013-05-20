<?php
	
	include 'BaseDAO.php';

	class FlowerDAO extends BaseDAO {

		function add($username, $type_of_flower, $pieces, $price ,$deliver ,$date) {
		
			$this->openConn();

			$stmt = $this->dbh->prepare("INSERT INTO ".$username." (type_of_flower, pieces, price, deliver, date) values (?, ? , ?, ?, ?)");			
						
			$stmt->bindParam(1, $type_of_flower);
			$stmt->bindParam(2, $pieces);
			$stmt->bindParam(3, $price);
			$stmt->bindParam(4, $deliver);
			$stmt->bindParam(5, $date);
			$stmt->execute();
			$id = $this->dbh->lastInsertId();
			
			$this->closeConn();
			
			 echo "<tr>";
         	 echo "<td>".$id."</td>";
			 echo "<td>".$type_of_flower."</td>";
			 echo "<td>".$pieces."</td>";
			 echo "<td>".$price."</td>";
			 echo "<td>".$deliver."</td>";
			 echo "<td>".$date."</td>";
			 echo "<td>[<img id = 'DI' src = 'images/delete.png' onclick = 'deleteBuyer(".$id.")'/>]";
			 echo "||[<img id = 'DI' src ='images/edit.png' onclick ='editBuyer(".$id.")'/>]</td>";
			 echo "</tr>";
			
			}
        

		   function delete($username, $id) {			
			
			$this->openConn();

			$stmt = $this->dbh->prepare("DELETE FROM ".$username." WHERE id = ?");
			
			$stmt->bindParam(1, $id);
			$stmt->execute();

			$this->closeConn();
			}
			 
			function edit($username, $id, $type, $pieces, $deliver, $date){
			$this->open();
			
			$stmt = $this->dbh->prepare("UPDATE ".$username." SET type = ?, pieces = ?, deliver = ?, date = ?");
			$stmt->bindParam(1, $type);
			$stmt->bindParam(2, $pieces);
			$stmt->bindParam(3, $deliver);
			$stmt->bindParam(4, $date);			
			$stmt->execute();
			
			$this->close();
			

			echo "<td>".$id."</td>";
			echo "<td>".$type."</td>";
			echo "<td>".$pieces."</td>";
			echo "<td>".$deliver."</td>";
			echo "<td>".$date."</td>";
			echo "<td>[<img id = 'DI' src = 'images/delete.png' onclick = 'deleteBuyer(".$id.")'/>]";
			echo "[<img id = 'DI' src = 'images/edit.png' onclick = 'editBuyer(".$id.")'/>]</td>";
			
			}

		   function retrieve($username, $id){

			$this->open();
			
			$stmt = $this->dbh->prepare("SELECT * FROM ".$username." WHERE id = ?");
			$stmt->bindParam(1, $id);
			$stmt->execute();

			$record = $stmt->fetch();
			
			$entries = array("id"=>$record[0], "type"=>$record[1], "pieces"=>$record[2], "deliver"=>$record[3], "date"=>$record[4]);

			$json_string = json_encode($entries);
			
			echo $json_string;	

		
			$this->close();
			}

		   function view($username) {
			
			$this->openConn();
			$stmt = $this->dbh->prepare("SELECT * from ".$username."");
			$stmt->execute();

			while($row = $stmt->fetch()) {
				
			echo "<tr>";
            echo "<td>".$row[0]."</td>";
            echo "<td>".$row[1]."</td>";
            echo "<td>".$row[2]."</td>";
            echo "<td>".$row[3]."</td>";
            echo "<td>".$row[4]."</td>";
            echo "<td>".$row[5]."</td>";
			echo "<td>[<img id = 'DI' src = 'images/delete.png' onclick = 'deleteBuyer(".$row[0].")'/>]";
			echo "[<img id = 'DI' src = 'images/edit.png' onclick='editBuyer(".$row[0].")'/>]</td>";
			echo "</tr>";
			
			}
			
			$this->closeConn();
		}
		

		function save($username, $id, $type, $pieces, $deliver, $date){
			$this->openConn();
	
			$stmt = $this->dbh->prepare("UPDATE ".$username." SET type = ?, pieces = ?, deliver = ?, WHERE id = ?");
			$stmt->bindParam(1, $type);
			$stmt->bindParam(2, $pieces);
			$stmt->bindParam(3, $deliver);
			$stmt->bindParam(4, $date);
			$this->closeConn();
			$stmt->execute();
			$id = $this->dbh->lastInsertId();
					
					echo "<tr id=".$id.">";
					echo "<td>".$type."</td>";
					echo "<td>".$pieces."</td>";
					echo "<td>".$deliver."</td>";
					echo "<td>[<img id = 'DI' src = 'images/delete.png' onclick = 'deleteBuyer(".$id.")'/>]";
			      	echo "[<img id = 'DI' src = 'images/edit.png' onclick = 'editBuyer(".$id.")'/>]</td>";
					echo"</tr>";
		}
		   
}
		

?>
