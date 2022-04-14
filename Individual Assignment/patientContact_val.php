<?php
 session_start();
$_SESSION['street_addressErr']=$_SESSION['districtErr']=$_SESSION['parishErr']=$_SESSION['countryErr']=$_SESSION['emailErr']=$_SESSION['tnumberErr']=$_SESSION['fnameErr']=$_SESSION['mnameErr']=$_SESSION['lnameErr']=$_SESSION['relationshipErr']=$_SESSION['cnumberErr']="";

$_SESSION["street_address"]=""; 
$_SESSION["district"]= "";
$_SESSION["parish"]="";
$_SESSION["country"]="";
$_SESSION["email"]="";
$_SESSION["tnumber"]="";
$_SESSION["fname"]="";
$_SESSION["mname"]="";
$_SESSION["lname"]="";
$_SESSION["relationship"]="";
$_SESSION["cnumber"]="";

         if ($_SERVER["REQUEST_METHOD"] == "POST") {
			 if (empty($_POST["street_address"])) {
            $_SESSION['street_addressErr'] = "Please enter a valid street address";
            } 
			else
			{
			 $_SESSION['street_address'] = test_input($_POST["street_address"]);
			}
			
		     if (empty($_POST["district"])) {
            $_SESSION['districtErr'] = "Please enter a valid district";
            } 
			
			else{
				$_SESSION['district'] = test_input($_POST["district"]);
			}
			
			 $_SESSION['parish'] = test_input($_POST["parish"]);
		     if (empty($_POST["parish"])) {
            $_SESSION['parishErr'] = "Please enter a valid parish";
            } 
			
            if (!preg_match("/^[a-zA-Z-' ]*$/",$_SESSION['parish'])) {
            $_SESSION['parishErr'] = "Only letters allowed";
            }
			 
			$_SESSION['country'] = test_input($_POST["country"]);
		     if (empty($_POST["country"])) {
            $_SESSION['countryErr'] = "Please enter a valid country";
            } 
			
            if (!preg_match("/^[a-zA-Z-' ]*$/",$_SESSION['country'])) {
            $_SESSION['countryErr'] = "Only letters allowed";
            }
			 
			 $_SESSION['email'] = test_input($_POST["email"]);
			if (empty($_POST["email"])) {
                 $_SESSION['emailErr'] = "Email is required";
              } 
			  
           if (!filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL)) {
            $_SESSION['emailErr'] = "Invalid email format";
              }
			  
          
		  if(!preg_match("/[0-9]{3}-[0-9]{3}-[0-9]{4}/", $_POST['tnumber']))
                {
                    $_SESSION['tnumberErr'] = "Please enter a valid phone number.";
				}else{
   					$_SESSION['tnumber'] = test_input($_POST['tnumber']);		
		 }
		    
			$_SESSION['fname'] = test_input($_POST["fname"]);
		     if (empty($_POST["fname"])) {
            $_SESSION['fnameErr'] = "Please enter a valid first name";
            } 
			
            if (!preg_match("/^[a-zA-Z-' ]*$/",$_SESSION['fname'])) {
            $_SESSION['fnameErr'] = "Only letters allowed";
            }
		  
		    
            if (!preg_match("/^[a-zA-Z-' ]*$/",$_SESSION['mname'])) {
            $_SESSION['mnameErr'] = "Only letters allowed";
            } 
			
			else{
				$_SESSION['mname'] = test_input($_POST["mname"]);
			}
				
		if (empty($_POST["lname"])) {
            $_SESSION['lnameErr'] = "Please enter a valid last name";
        } else {
            $_SESSION['lname'] = test_input($_POST["lname"]);
		} 
		if (!preg_match("/^[a-zA-Z-' ]*$/",$_SESSION['lname'])) {
            $_SESSION['lnameErr'] = "Only letters allowed";
            }
        
			if (empty($_POST["relationship"])) {
            $_SESSION['relationshipErr'] = "Please enter a valid relationship";
			}else 
			{
            $_SESSION['relationship'] = test_input($_POST["relationship"]);
		}
		
		     $_SESSION['cnumber'] = test_input($_POST['cnumber']);
			if(!preg_match("/[0-9]{3}-[0-9]{3}-[0-9]{4}/", $_POST['cnumber']))
                {
                    $_SESSION['cnumberErr'] = "Please enter a valid phone number..";
				}
   
			 else
			{
		    header("Location:display.php");
            }    
		 }	


    function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }		 
?>