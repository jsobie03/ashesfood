<?php
$errors = ”;
$myemail = 'jonsobier@outlook.com';//<—–Put Your email address here. if(empty($_POST[‘name’]) ||
empty($_POST['custName']) ||
empty($_POST['email']) ||
empty($_POST['zip']))
{

	$errors .= “\n Error: all fields are required”;
}

$name = $_POST['custName'];
$email_address = $_POST['email'];
$zip = $_POST['zip'’];
if (!preg_match(
“/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i”, $email_address))
{
$errors .= “\n Error: Invalid email address”;
}
if( empty($errors))
{
$to = $myemail;
$email_subject = “Recipe Signup Request: $name”;
$email_body = “You have received a new recipe request. “.
” Here are the details:\n Name: $name \n “.
“Email: $email_address\n Zipcode \n $zip”;
$headers = “From: $myemail\n”;
$headers .= “Reply-To: $email_address”;
mail($to,$email_subject,$email_body,$headers);
//redirect to the ‘thank you’ page
header('Location: thank-you.html');
}
?>

<?php
$errors = ”;
$myemail = 'jonsobier@outlook.com';//<—–Put Your email address here. if(empty($_POST[‘name’]) ||
empty($_POST['custName']) ||
empty($_POST['recipeName']) ||
empty($_POST['recipeGenre']) ||
empty($_POST['ingredients']) ||
empty($_POST['directions'’]))
{

	$errors .= “\n Error: all fields are required”;
}

$name = $_POST['custName'];
$recipe_name = $_POST['recipeName'];
$recipe_genre = $_POST['recipeGenre'];
$ingredients = $_POST['ingredients'];
$directions = $_POST['directions'];

if( empty($errors))
{
$to = $myemail;
$email_subject = “New Recipe Submission from: $name”;
$email_body = “You have received a new recipe submission. “.
” Here are the details:\n Name: $name \n “.
“Recipe Name: $recipe_name\n Recipe Genre \n $recipe_genre”;
$headers = “From: $myemail\n”;
mail($to,$email_subject,$email_body,$headers);
//redirect to the ‘thank you’ page
header('Location: thank-you.html');
}