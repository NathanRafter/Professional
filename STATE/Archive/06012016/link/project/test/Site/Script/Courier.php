<?php
	if($_POST['MeatPopsicle']!=''){
		// Robot confirmed. Do nothing.
	} else {
		// Human confirmed. Send message.
		$Name=$_POST['Name'];
		$Email=$_POST['Email'];
		$Message=$_POST['Message'];
		$message=$_POST['message'];

		$to="nathanrafter@gmail.com";
		$subject="$Name wants to talk";
		$message="
		Name: $Name
		Email: $Email

		----

		Message: $Message
		";
		$headers="From: $Email";
		mail($to,$subject,$message,$headers);
		header("Location: http://nathanrafter.com/link/courier/");
	}
?>