<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'info@redditum.store'; // ****PUT YOUR EMAIL ADDRESS HERE****
$email_subject = "Formulario de contacto web:  $name";
$email_body = "Nuevo correo desde la pagina web.\n\n"."Estos son los detalles:\n\nNombre: $name\n\nEmail: $email_address\n\nMensaje:\n$message";
$headers = "De: info@redditum.store\n"; // ****ENTER WHO YOU WANT THE MESSAGE TO BE FROM HERE****
$headers .= "Responder a: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>