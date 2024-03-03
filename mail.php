<?php

$EmailFrom = "sean@in100.org"; // 'From' Email
$EmailTo = "sean@in100.org"; // Your Email (Where the Messages Are Sent)
$Subject = "Message From in100"; // Email Subject Title
$Name = Trim(stripslashes($_POST['name'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Message = Trim(stripslashes($_POST['message'])); 

// Validation
$validationOK=true;
if (!$validationOK) {
  exit;
}

// Setup the Body of the Email
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

// Send Email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
?>
