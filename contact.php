<?php 
$errors = '';
$myemail = 'yourname@website.com';//<-----Put Your email address here.
if($_SERVER['REQUEST_METHOD'] === 'POST'){

if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Все поля должны быть заполнены";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Некорректный адрес электронной почты";
}



if( empty($errors)) {

	$to = $myemail;

	$email_subject = "Contact form submission: $name";

	$email_body = "You have received a new message. ".

	" Here are the details:\n Name: $name \n ".

	"Email: $email_address\n Message \n $message";

	$headers = "From: $myemail\n";

	$headers .= "Reply-To: $email_address";

	mail($to,$email_subject,$email_body,$headers);

	//redirect to the 'thank you' page

	header('Location: thank-you.php');

}
}

require 'views/contact_view.php';
?>