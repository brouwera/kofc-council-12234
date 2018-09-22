/*contact form source code comes from mmtuts on https://www.youtube.com/watch?v=4q0gYjAVonI*/
<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];
	
	$mailTo = "adam.brouwer81@gmail.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n".$message;
	
	mail($mailTo,$subject,$txt, $headers);
	header("Location: index.php?mailsend");
}
