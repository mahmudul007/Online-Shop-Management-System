  
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>registration</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
    require '../model/dbConnect.php';
    include '../model/dbinsert.php';

 
      $username = $password = "";
      $usernameErr = $passwordErr = "";
      $isValid = true;
       $successfulMessage = $errorMessage = "";

      
        if($_SERVER['REQUEST_METHOD'] === "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($username)) {
         $usernameErr = "Field can not be empty";
      $isValid = false;
       }
       if(empty($password)) {
        $passwordErr = "Field can not be empty";
        $isValid = false;
       }

       if ($isValid) {
        if(strlen ($username)>5)
        {
            $usernameErr= "Username max size 5";
            $isValid=false;
        }
        
        if(strlen ($password)>8)
        {
            $passwordErr= "Password max size 8";
            $isValid=false;
        }
         $res=register($username,$password);

         if($res) {
         
         $successfulMessage = "Sucessfully saved";
       
         }
         else {
        $errorMessage = "saving error";
        }
       }
}


        function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
        return $data;
}

?>

  <h1>Register</h1>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="registerform" onsubmit="return registervalidate()">
    <fieldset>
      <legend>Register</legend>

      <label for="username">User Name:</label>
      <input type="text" name="username" id="username" >
       <span style="color: red;">  <?php echo  $usernameErr;?></span>
      <br><br>

      <label for="password">Password:</label>
      <input type="password" name="password" id="password">
       <span style="color: red;">  <?php echo  $passwordErr;?></span>
      <br><br>

      

      <input type="submit" name="submit" value="Register">
    </fieldset>
  </form>

  <br>
   <p style="color:green" > <?php echo  $successfulMessage;?></p>
  <p style="color: red" > <?php echo  $errorMessage;?>   </p>
  <br>
  <a href="login.php">Click to login</a>
  <a href="welcome.php">welcome page</a>
  <script src="./js/validate.js"></script>
</body>
</html>



  