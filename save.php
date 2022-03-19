<?php
    session_start ();
   
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
	<img src = "images/logo.png" style = "float:left;" height = "55px" />
	<label class = "navbar-brand">Avocado Medical Centre</label>
	</div>	
	<form method="POST" action="login.php" >
			<div class = "form-inline">
			<label class = "lbllogin">Welcome To Avacado Medical Centre...</label>
			<br />
			<hr /style = "border:1px dotted #000;">
			<br />
<?php
$firstname=isset($_SESSION["firstname"])?$_SESSION["firstname"]:"";
$middlename=isset($_SESSION["middlename"])?$_SESSION["middlename"]:"";
$lastname=isset($_SESSION["lastname"])?$_SESSION["lastname"]:"";
$dob=isset($_SESSION["dob"])?$_SESSION["dob"]:"";
$marital_status=isset($_SESSION["marital_status"])?$_SESSION["marital_status"]:"";
$gender=isset($_SESSION["gender"])?$_SESSION["gender"]:"";
$street_address=isset($_SESSION["street_address"])?$_SESSION["street_address"]:"";
$district=isset($_SESSION["district"])?$_SESSION["district"]:"";
$parish=isset($_SESSION["parish"])?$_SESSION["parish"]:"";
$country=isset($_SESSION["country"])?$_SESSION["country"]:"";
$email=isset($_SESSION["email"])?$_SESSION["email"]:"";
$tnumber=isset($_SESSION["tnumber"])?$_SESSION["tnumber"]:"";
$fname=isset($_SESSION["fname"])?$_SESSION["fname"]:"";
$mname=isset($_SESSION["mname"])?$_SESSION["mname"]:"";
$lname=isset($_SESSION["lname"])?$_SESSION["lname"]:"";
$relationship=isset($_SESSION["relationship"])?$_SESSION["relationship"]:"";
$cnumber=isset($_SESSION["cnumber"])?$_SESSION["cnumber"]:"";
	
	$dor=date("D M j, Y ");
    $myfile = fopen("patientdata.txt", "a+") or die("Unable to open file!");
	fwrite($myfile, "Date of Registration is:".$dor.="\n");
	fwrite($myfile, "Patient First Name:".$firstname.="\n");
    fwrite($myfile, "Patient Middle Name: ".$middlename.="\n");
    fwrite($myfile, "Patient Last Name: ".$lastname.="\n");
    fwrite($myfile, "Patient Date of Birth: ".$dob.="\n");
    fwrite($myfile, "Patient Marital Status: ".$marital_status.="\n");
	fwrite($myfile, "Patient Gender: ".$gender.="\n");
	fwrite($myfile, "Patient Street Address: ".$street_address.="\n");
	fwrite($myfile, "Patient District: ".$district.="\n");
	fwrite($myfile, "Patient Parish/City: ".$parish.="\n");
	fwrite($myfile, "Patient Country: ".$country.="\n");
	fwrite($myfile, "Patient Email: ".$email.="\n");
	fwrite($myfile, "Patient Telephone Number: ".$tnumber.="\n");
	fwrite($myfile, "Emergecy Contact First Name: ".$fname.="\n");
	fwrite($myfile, "Emergecy Contact Middle Name: ".$mname.="\n");
	fwrite($myfile, "Emergecy Contact Last Name: ".$lname.="\n");
	fwrite($myfile, "Emergecy Contact Relationship to Patient: ".$relationship.="\n");
	fwrite($myfile, "Emergecy Contact Telephone Number: ".$cnumber.="\n");
	fwrite($myfile, "\n");
	fwrite($myfile, "\n");
    fclose($myfile);
		
    ?>
	<?php
    session_destroy();
    echo"Information Was sucessfully Saved ";
    echo "</br>";
    echo"Click the button to login again";
    echo "</br>";
	echo "</br>";
    ?>
<button class  = "btn btn-success form-control" type = "submit" ><span class = "glyphicon glyphicon-log-in"></span> Click here to login</button>
            </div>
	</form>
	
<div id = "footer">
<label class = "footer-title">&copy; Copyright Avocado Medical Centre 2022</label>
</div>
</body>
</html>


