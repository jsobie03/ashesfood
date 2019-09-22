<?php 
$errors = '';
$myemail = 'jonsobier@outlook.com';//<-----Put Your email address here.
if(empty($_POST['custName'])  || 
   empty($_POST['email']) || 
   empty($_POST['zip']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['custName']; 
$email_address = $_POST['email']; 
$zip = $_POST['zip']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Subcription to Email Recipes for: $name";
	$email_body = "New subscription for weekly recipe emails has been submitted!!\n"." Your new weekly email recipe member is:\n $name. \n Their email address is:\n $email_address \n Their zipcode where they live is:\n $zip"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: thank-you.html');
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>