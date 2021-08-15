<?php  
 session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>registrstion page</title>
	<link rel="stylesheet" href="./view/css/style.css">
</head>
<body>
	<style>


body {
	background-image: url("./image/image1.jpg");
  background-color: #cccccc;
}
		.button {
  background-color: aquamarine; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  
}

.button {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
a:link, a:visited {
  text-decoration: none;
  
}


	</style>


<h1> welcome ,<?php   

if (isset( $_SESSION['username'])){

echo $_SESSION['username'];
}
else{
	
	header("Location:logout.php");
}?>
	

</h1>
<button class="button"> <a href="logout.php">log out</a></button>

<button class="button"> <a href="registration.php">Admin reg</a></button>
<button class="button"> <a href="adminList.php">AdminList</a></button>
<button class="button"> <a href="changePasswordAdmin.php">Change password</a></button>

<button class="button"> <a href="employe_reg.php">Seller register</a></button>
<button class="button"> <a href="employeelist.html">Seller List</a></button>


<button class="button"> <a href="user_reg.php">user registration</a></button>
<button class="button"> <a href="userList.php">user list</a></button>
<button class="button"> <a href="admin list search.html">Search</a></button>
</body>
</html>