
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
	<img src = "images/logo.png" style = "float:left;" height = "55px" />
	<label class = "navbar-brand">Avocado Medical Centre</label>
	</div>	
			
	<form method="POST" action="save.php" >
			<div class = "form-inline">
			<label class = "lbllogin">Welcome To Avacado Medical Centre...</label>
			<br />
			<hr /style = "border:1px dotted #000;">
			<br />
<?php


    // Start the session
    session_start();
                echo " <tr><td><h4>Here is what you have entered.</h4><br/></td></tr>";
				echo" <tr><td><h> Date of Registration is : </h4></td></tr>"; echo date("D M j, Y ");
				echo "</br>";
				echo "<table border='2'>";
				echo "<tr>"; 
                echo "<td>Patient First Name:</td>";
				echo "<td>" .$_SESSION['firstname']. "</td>"; 
				echo "</tr>";
				echo "<tr>";
                echo "<td>Patient Middle Name:</td>";
				echo "<td>" .$_SESSION['middlename']. "</td>"; 
				echo "</tr>";
				echo "<tr>";
                echo "<td>Patient Last Name: </td>";
			    echo "<td>" .$_SESSION['lastname']. "</td>";
				echo "</tr>";
				echo "<tr>";
                echo "<td>Date of Birth:</td>"; 
				echo "<td>" .$_SESSION['dob']. "</td>";
				echo "</tr>";
				echo "<tr>";
                echo "<td>Patient Marital Status: </td>";
				echo "<td>" .$_SESSION['marital_status']. "</td>";
				echo "</tr>";
				echo "<tr>";
                echo "<td>Patient Gender:</td>";
				echo "<td>" .$_SESSION['gender']. "</td>";
				echo "</tr>";
				echo "<tr>";
                echo"<td>Patient Street Address:</td>";
				echo "<td>" .$_SESSION['street_address']. "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<tr>";
                echo"<td>Patient District:</td>";
				echo "<td>" .$_SESSION['district']. "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<tr>";
                echo"<td>Patient parish:</td>";
				echo "<td>" .$_SESSION['parish']. "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<tr>";
                echo"<td>Patient country:</td>";
				echo "<td>" .$_SESSION['country']. "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<tr>";
                echo"<td>Patient Email:</td>";
				echo "<td>" .$_SESSION['email']. "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Patient Telephone Number:</td>";
				echo "<td>" .$_SESSION['tnumber']. "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Emergecy Contact First Name:</td>"; 
				echo "<td>" .$_SESSION['fname']. "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Emergecy Contact Middle Name:</td>";
				echo "<td>" .$_SESSION['mname']. "</td>";
				echo "</tr>";
				echo "<tr>";
				echo" <td>Emergecy Contact Last Name:</td>"; 
				echo "<td>" .$_SESSION['lname']. "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Emergecy Contact Relationship to Patient:</td>";
				echo "<td>" .$_SESSION['relationship']. "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Emergecy Contact Telephone Number:</td>";
				echo "<td>" .$_SESSION['cnumber']. "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "</table>";
				?>
                <tr><td><input type ='submit' name='submit' value="Save"></td></tr>
			
		
</form>
<div id = "footer">
<label class = "footer-title">&copy; Copyright Avocado Medical Centre 2022</label>
</div>
</body>
</html>