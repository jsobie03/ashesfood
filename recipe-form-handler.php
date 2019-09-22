<?php 
$errors = '';
$myemail = 'jonsobier@outlook.com';//<-----Put Your email address here.
if(empty($_POST['custName'])  || 
   empty($_POST['recipeName']) || 
   empty($_POST['ingredients']) ||
   empty($_POST['directions']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['custName']; 
$recipeName = $_POST['recipeName']; 
$recipeGenre = $_POST['recipeGenre'];
$ingredients = $_POST['ingredients'];
$directions = $_POST['directions'];

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Recipe Name: $recipeName \n Recipe Genre: \n $recipeGenre \n Ingredients: \n $ingredients \n Directions: \n $directions"; 
	
	$headers = "From: $myemail\n"; 
	
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