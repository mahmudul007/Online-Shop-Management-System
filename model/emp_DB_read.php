<?php
  
   function getALLemp(){
      $conn=connect();
      $stmt = $conn->prepare ("SELECT id, name,gender,dob,relegion,address,email,username,salary FROM employee");
      $stmt->execute();
      $records = $stmt->get_result();
      return $records->fetch_all(MYSQLI_ASSOC);
      
      
   }
   function getEmp($username){
      $conn=connect();
      $stmt = $conn->prepare ("SELECT id, username FROM user WHERE username=?");
      $stmt-> bind_param("s", $username);
      $stmt->execute();
      $records = $stmt->get_result();
      return $records->fetch_all(MYSQLI_ASSOC);
	  
   }
   
?>