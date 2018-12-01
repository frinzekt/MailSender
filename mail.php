

<?php
	$to =$_POST["to"];
	$from ="From: ";
	
	
	$title =$_POST["title"];
	
	$message="<html><body>";
	$message.=$_POST["message"];
	$message.="</body></html>";
	
			$headers = "From: ". $_POST["from"]. "\r\n";
			$headers .= "Reply-To: ". $_POST["from"]. /* stxrip_tags($_POST['req-email']) . */"\r\n";
			$headers .= "Return-Path:".  $_POST["ret_add"] . " \r\n";
			$headers .= "CC:\r\n";
			$headers .= "BCC:\r\n";
			
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			


	mail($to, $title,$message,$headers);

?>
<html>
	<body>
		Mail Sent
	<body>
</html>