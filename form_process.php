<?php 
 $a = "";
 if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) ) {

	$name = $_POST["name"];
    $email = $_POST["email"];
    $message =$_POST["message"];
    $to = 'agnieszka.machalowska@gmail.com';
    $subject = 'Forumlarz kontaktowy';
	$headers = "Od: " .$name. "\r\n" ;
	$message_body = "Imie: " .$name. "\n" . "E-mail: "  .$email. "\n" . "Wiadomość:" .$message;
 
    $send = mail($to, $subject, $message_body,  $headers);
			 
    if($send){			 
 		$a = "Wiadomość została wysłana";
         
			 }
 			 																		}

?>