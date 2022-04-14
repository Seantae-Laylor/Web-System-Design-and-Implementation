<?php
 session_start();
$_SESSION['firstnameErr'] = $_SESSION['middlenameErr'] = $_SESSION['lastnameErr'] = $_SESSION['dobErr'] = $_SESSION['marital_statusErr'] = $_SESSION['genderErr'] = "";

$_SESSION['firstname'] = "";
$_SESSION['middlename'] = "";
$_SESSION['lastname'] ="";
$_SESSION['dob'] = "";
$_SESSION['marital_status'] = "";
$_SESSION['gender'] = "";

         if ($_SERVER["REQUEST_METHOD"] == "POST") {
			 
			
            if (empty($_POST["firstname"])) {
            $_SESSION['firstnameErr'] = "Please enter a valid first name";
			}
	
	        else{
				$_SESSION['firstname'] = test_input($_POST["firstname"]);
			}
		  
		  
            if (!preg_match("/^[a-zA-Z-' ]*$/",$_SESSION['firstname'])) {
            $_SESSION['firstnameErr'] = "Only letters allowed";
            }
			
			
		    $_SESSION['middlename'] = test_input($_POST["middlename"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$_SESSION['middlename'])) {
            $_SESSION['middlenameErr'] = "Only letters allowed";
            } 
				
            
		    if (empty($_POST["lastname"])) {
            $_SESSION['lastnameErr']= "Please enter a valid last name";
            }
			
			else{
				 $_SESSION['lastname'] = test_input($_POST["lastname"]);
			 }
			
		    if (!preg_match("/^[a-zA-Z-' ]*$/",$_SESSION['lastname'])) {
            $_SESSION['lastnameErr'] = "Only letters allowed";
            }
			 
        
		   
            if (empty($_POST["dob"])) {
            $_SESSION['dobErr'] = "Please select your date of birth";
            } 
			else{
				 $_SESSION['dob'] = test_input($_POST["dob"]);
			}
			
			
			
		    if (empty($_POST["marital_status"])) {
            $_SESSION['marital_statusErr'] = "Please select a status";
            }
			 else{
				 $_SESSION['marital_status'] = test_input($_POST["marital_status"]);
			 }
			 
		    $_SESSION['gender'] = test_input($_POST["gender"]);
            if (empty($_POST["gender"])) {
            $_SESSION['genderErr'] = "Please select a gender";
			
            }
			
			else
			{  
				 header("Location: patientContact.php");
             }
			
		 }	
		 
	   function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
?>
    