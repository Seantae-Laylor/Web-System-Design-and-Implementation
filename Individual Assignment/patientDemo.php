<!DOCTYPE html>

<?php include 'patientDemo_val.php';?>
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
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" >
			<div class = "form-inline">
			<label class = "lbllogin">Welcome To Avacado Medical Centre...</label>
				<br />
				<hr /style = "border:1px dotted #000;">
				<br />
				<?php
				echo"<b><u> Patient Demographic Information:</u></b>";
				?>
				</br>
				</br>
						<label for = "firstname">Firstname:</label>
						<input class = "form-control" name = "firstname" type = "text" value= "<?php echo $_SESSION['firstname'];?>" >
						<span class = "error"> <?php echo $_SESSION['firstnameErr'];?></span>
						</br>
						</br>
						<label for = "middlename">Middle Name:</label>
						<input class = "form-control" name = "middlename" placeholder = "(Optional)" type = "text" value="<?php echo $_SESSION['middlename'];?>" >
						<span class = "error"> <?php echo $_SESSION['middlenameErr'];?></span>
						</br>
						</br>
						<label for = "lastname">Lastname:</label>
						<input class = "form-control" name = "lastname" type = "text"  value="<?php echo $_SESSION['lastname'];?>">
						<span class = "error"> <?php echo $_SESSION['lastnameErr'];?></span>
						</br>
						</br>
						<label for = "dob">Date of Birth:</label>
						<input class = "form-control" name = "dob" type = "date"  value="<?php echo $_SESSION['dob'];?>" >
						<span class = "error"> <?php echo $_SESSION['dobErr'];?></span>
					    </div>
						<br style = "clear:both;"/>
						<br />
						<label for = "marital_status">Marital Status:</label>
						<select style = "width:22%;" class = "form-control" name = "marital_status" >
						
							<option value = "">--Select an option--</option>
							<option value = "Single" <?php if($_SESSION['marital_status']== "Single") {echo "selected";} ?>>Single </option>
							<option value = "Married" <?php if($_SESSION['marital_status']== "Married") {echo "selected";} ?>>Married</option>
							<option value = "Divorced" <?php if($_SESSION['marital_status']== "Divorced") {echo "selected";} ?>>Divorced</option>
							<option value = "Widowed" <?php if($_SESSION['marital_status']== "Widowed") {echo "selected";} ?>>Widowed</option>
						</select>
						<span class = "error"> <?php echo "<br>",$_SESSION['marital_statusErr'];?></span>
						<br />
						<label for = "gender">Gender:</label>
						<select style = "width:22%;" class = "form-control" name="gender" >
							<option value = "">--Please select an option--</option> 
							<option value = "Male" <?php if($_SESSION['gender'] == "Male") {echo "selected";} ?> >Male</option>
							<option value = "Female" <?php if($_SESSION['gender'] == "Female") {echo "selected";} ?> >Female</option>	
						</select>
					<span class = "error"> <?php echo "<br>",$_SESSION['genderErr'];?></span>
					</div>
                <table align="center">
                   
                        <input type ='submit' name='next' value="NEXT">
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