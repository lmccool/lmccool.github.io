<?php
 if(isset($_POST['submit']))
 {
    $name = $_POST['name'];
	$email = $_POST['email'];
	$canon = $_POST['canon'];
	$query = $_POST['message'];
	$email_from = $name.'<'.$email.'>';

 $to="yourEmail@yourDomain.com";
 $subject="Request from Iconned";
 $headers  = 'MIME-Version: 1.0' . "\r\n";
 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 $headers .= "From: ".$email_from."\r\n";
 $message="	  
 	   
 		 Name:
		 $name 	   
         <br>
 		 Email:
		 $email 
		 <br>
 		 Canon:
		 $canon 	   
         <br>
 		 Message:
		 $query 	   
      
   ";
	if(mail($to,$subject,$message,$headers))
		header("Location:../contact.php?msg=Successful Submission! Your request will be processed as soon as possible. Thank you.");
	else
		header("Location:../contact.php?msg=Error!");
 }
?>
