<?php
session_start();
$username=$password="";
$usernameErr=$passwordErr="";

if (isset($_POST['login'])) {
    if (empty($_POST["username"])) {
     $usernameErr = "Username is required";
  }
  else {
        $username = $_POST["username"];
  }
  if (empty($_POST["password"])) {
      $passwordErr = "Password is required";
   }
    else {
        $password = $_POST["password"];
	}
  if (!empty($_POST["username"])&&!empty($_POST["password"])){
  if($_POST["username"]!="amcadmin" || $_POST["password"]!="fatpear#123"){
    $passwordErr="Invalid Username and or Password";
  }
else{
   
    header("Location:patientDemo.php");
}
}
}
?>

<!DOCTYPE html>
<html lang = "eng">
	<head>
		<title>Avocado Medical Centre</title>
		<meta charset = "utf-8" />
		<link rel = "shortcut icon" href = "images/logo.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/customize.css" />
	</head>
<body>

	<div class = "navbar navbar-default navtop">
		<img src = "images/logo.png" style = "float:left;" height = "55px" /><label class = "navbar-brand">Avocado Medical Centre</label>
	</div>
		<div id = "sidelogin">
			<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST" >
				<label class = "lbllogin">Please Login Here...</label>
				<br />
				<hr /style = "border:1px dotted #000;">
				<br />
				<div class = "form-group">
					<label for = "username">Username</label>
					<input class = "form-control" type = "text" name = "username" value="<?php echo $username;?>" />
					<span class="error"> <?php echo $usernameErr;?></span>
				</div>
				<br />
				<div class = "form-group">
					<label for = "password">Password</label>
					<input class = "form-control" type = "password" name = "password" value="<?php echo $password;?>"/>
					<span class = "error"> <?php echo $passwordErr;?></span>
				</div>
				<br />
				<br />
				<div class = "form-group">
					<button class  = "btn btn-success form-control" type = "submit" name = "login" ><span class = "glyphicon glyphicon-log-in"></span> Login</button>
				</div>
				<br />
				<br />
			</form>
		</div>	
		<img src = "images/background.jpg" class = "background">			
	<div id = "footer">
		<label class = "footer-title">&copy; Copyright Avocado Medical Centre 2022</label>
	</div>
</body>
 

</html>
