<?php

// CHANGE THE THREE VARIABLES BELOW
	if($_POST){
			$EmailFrom = "stephy.raad@gmail.com";
			$EmailTo = "stephy.raad@gmail.com";


			$Name = Trim(stripslashes($_POST['Name'])); 
			$Email = Trim(stripslashes($_POST['Email'])); 
			$Message = Trim(stripslashes($_POST['Message'])); 
			$Subject = Trim(stripslashes($_POST['Subject'])); 

			// prepare email body text
			$Body = "";
			$Body .= "Name: ";
			$Body .= $Name;
			$Body .= "\n";
			$Body .= "Email: ";
			$Body .= $Email;
			$Body .= "\n";
			$Body .= "Message: ";
			$Body .= $Message;
			$Body .= "\n";
			$Body .= "Subject: ";
			$Body .= $Subject;
			$Body .= "\n";

			// send email 
			$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");


			if ($success){
			  header( 'Location: http://stephanieraad.com' ) ;
			  exit;
			}
			else{
			  header( 'Location: http://r-egg.com' ) ;
			  exit;
			}
	}
?>