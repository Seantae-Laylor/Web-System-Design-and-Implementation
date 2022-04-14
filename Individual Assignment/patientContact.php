<!DOCTYPE html>
<?php
   include 'patientContact_val.php';
    
?>

<head>
        <title>Avocado Medical Centre</title>
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/customize.css" />
	</head>
	
<body>
        <div class = "navbar navbar-default navtop">
		<img src = "images/logo.png" style = "float:left;" height = "55px" /><label class = "navbar-brand">Avocado Medical Centre</label>
		</div>
		
        <div>
            <form method="POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
			<div class = "form-inline">
			<label class = "lbllogin">Welcome To Avacado Medical Centre...</label>
				<br />
				<hr /style = "border:1px dotted #000;">
				<br />
				<?php
						echo "<b><u>Contact Info:</u></b>";
				?>
				</br>
				</br>
				<label for = "street_address">Street Address:</label>
						<input class = "form-control" name = "street_address" type = "text" value="<?php echo $_SESSION['street_address'];?>">
						<span class = "error"> <?php echo $_SESSION['street_addressErr'];?></span>
						<br />
						<br />
						<label for = "district">District:</label>
						<input class = "form-control" name = "district" type = "text" value="<?php echo $_SESSION['district'];?>">
						<span class = "error"> <?php echo $_SESSION['districtErr'];?></span>
						<br />
						<br />
						<label for = "parish">Parish/City:</label>
						<input class = "form-control" name = "parish" type = "text" value="<?php echo $_SESSION['parish'];?>">
						<span class = "error"> <?php echo $_SESSION['parishErr'];?></span>
						<br />
						<br />
						<label for = "country">Country:</label>
						<input class = "form-control" name = "country" type = "text" value="<?php echo $_SESSION['country'];?>">
						<span class = "error"> <?php echo $_SESSION['countryErr'];?></span>
						<br />
						<br />
				<label for = "email">Email:</label>
				<input class = "form-control" name = "email" type = "email" placeholder="abc@gmail.com" value="<?php echo $_SESSION['email'];?>">
				<span class = "error"> <?php echo $_SESSION['emailErr'];?></span>
				<br />
				<br />
				
				<label for = "tnumber">Telephone Number:</label>
				<input class = "form-control" name = "tnumber" type = "text" value="<?php echo $_SESSION['tnumber'];?>" placeholder="876-123-4567" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
				<span class = "error"> <?php echo $_SESSION['tnumberErr'];?></span>
				<br />
				<br />
				<br />
				<br />
				<?php
						echo "<b><u>Emergency Contact:</u></b>";
				?>
				<br />
				<br />
				        
						<label for = "fname">Firstname:</label>
						<input class = "form-control" name = "fname" type = "text" value="<?php echo $_SESSION['fname'];?>">
						<span class = "error"> <?php echo $_SESSION['fnameErr'];?></span>
						<br />
				        <br />
						<label for = "mname">Middle Name:</label>
						<input class = "form-control" name = "mname" placeholder = "(Optional)" type = "text" value="<?php echo $_SESSION['mname'];?>">
						<span class = "error"> <?php echo $_SESSION['mnameErr'];?></span>
						<br />
				        <br />
						<label for = "lname">Lastname:</label>
						<input class = "form-control" name = "lname" type = "text" value="<?php echo $_SESSION['lname'];?>">
						<span class = "error"> <?php echo $_SESSION['lnameErr'];?></span>
						<br />
						<br />
						<label for = "relationship">Relationship:</label>
						<input class = "form-control" name = "relationship" type = "text" value="<?php echo $_SESSION['relationship'];?>">
						<span class = "error"> <?php echo $_SESSION['relationshipErr'];?></span>
						<br />
						<br />
						<label for = "cnumber">Contact Number:</label>
						<input class = "form-control" name = "cnumber" type = "text" value="<?php echo $_SESSION['cnumber'];?>" placeholder="876-123-4567" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
						<span class = "error"> <?php echo $_SESSION['cnumberErr'];?></span>
					</div>
						<br />
                <table align="center">
                   
                        <input type ='submit' name='next2' value="NEXT">
                        <input type ='reset' name='reset' value="RESET"></td> </tr>
						
                </table>
            </form>
			<form method="POST" action="logout.php" >
			<input type ='submit' name='logout' value="LOG OUT">
			</form>
        </div>
		<img src = "images/formbackground.png" class = "background">
		<div id = "footer">
		<label class = "footer-title">&copy; Copyright Avocado Medical Centre 2022</label>
	    </div>
    </body>
</html>